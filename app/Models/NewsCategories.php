<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategories extends Model
{
    //
    protected $table = 'news_categories';

    protected $fillable = [
        'name',
        'slug',
        'descriptions',
    ];

    public function news(){
        return $this->hasMany(News::class, 'news_categories_id');
    }
}
