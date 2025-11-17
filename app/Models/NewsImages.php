<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsImages extends Model
{
    //
    protected $table = 'news_images';

    protected $fillable = [
        'image_url',
        'description',
        'id_news',
    ];
}
