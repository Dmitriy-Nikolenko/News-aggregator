<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Source
 * @package App\Models
 * @property string @name
 */
class Source extends Model
{
    use HasFactory;

    protected $table = 'source';

    protected $fillable = [
        'title',
        'link'
    ];

    public $timestamps = true;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
//    public function news(): HasMany // 1 источник много новостей метод hasMany
//    {
//        return $this->hasMany(News::class, 'source_id', 'id');
//    }
//    public function category(): HasMany // 1 источник много категорий метод hasMany
//    {
//        return $this->hasMany(Category::class, 'source_id', 'id');
//    }
}
