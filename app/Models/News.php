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
        'created_by',
        'updated_by',
        'views',
        'new_category_id',
    ];
}
