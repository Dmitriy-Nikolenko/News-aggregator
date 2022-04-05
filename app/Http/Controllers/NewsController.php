<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Order;
use App\Models\Source;
use DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function all() {
        $news = News::all();
        return \Response::view('news', compact('news'));
    }
    public function getCategoryNews($categoryId)
    {
        $category = Category::query()->findOrFail($categoryId);
        $news = News::query()->select('*')->where('category_id', '=', $categoryId)->get();

            return view('news', compact('news', 'category'));

    }

}
