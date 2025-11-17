<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    protected $fillable = [
        'image',
        'title',
        'slug',
        'date',
        'sumary',
        'content',
        'id_news_categories',
    ];
}
