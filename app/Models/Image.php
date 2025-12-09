<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = 'images';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'content',
        'album_id',
        'status',
        'created_by',
        'updated_by',
    ];

    public function images_album()
    {
        return $this->belongsTo(ImageAlbum::class, 'album_id', 'id');
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
