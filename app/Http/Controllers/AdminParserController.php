<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParserRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade;


class AdminParserController extends Controller
{

    public function index()
    {
       $sources = Source::all();
       return \Response::view('source', compact('sources'));
          }

    /**
     * @param ParserRequest $request
     */
    public function parse(ParserRequest $request) {
        $sources = Source::query()->whereIn('id', $request->input('sources'))->get();

        // для целостности БД
        $categories = array_column(Category::query()->select('id')->get()->toArray(), 'id');


        foreach ($sources as $source) {
            $xmlParser = Facade::load($source->link);

            $parserData = $xmlParser->parse([
                    'title' => ['uses' => 'channel.title'],
                    'link' => ['uses' => 'channel.link'],
                    'description' => ['uses' => 'channel.description'],
                    'image' => ['uses' => 'channel.image.url'],
                    'news' => ['uses' => 'channel.item[title,link,guid,description,pudDate]']
            ]);

            $newsInSystem = News::query()->where('source_guid', array_column($parserData['news'], 'guid'))
                ->where('source_id', $source->id)->get()->keyBy('source_guid')->toArray();

            $forInsert = [];

            foreach ($parserData['news'] as $news) {
                if(!array_key_exists($news['guid'], $newsInSystem)) {
                    $forInsert[] = [
                        'title' => $news['title'],
                        'photo' => $parserData['image'],
                        'preview' => $news['description'],
                        'text' => $news['description'],
                        //'category_id' => $parserData['title'],
                        'source_guid' => $news['guid'],
                        'source_id' => $source->id,
                        'link_news' => $news['link'],

                    ];
                }
            }
           News::query()->insert($forInsert);
        }
        $sourceId = $forInsert[0]['source_id'];
         $source = Source::query()->findOrFail($sourceId);
        $news = News::query()->select('*')->where('source_id', '=', $sourceId)->get();
        return view('news', compact('news', 'source'));
    }
}
