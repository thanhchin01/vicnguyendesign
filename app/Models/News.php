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

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function NewsCategories()
    {
        return $this->belongsTo(NewsCategories::class, 'new_category_id');
    }
    public function author()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
    public function editor()
    {
        return $this->belongsTo(Admin::class, 'updated_by');
    }
}
