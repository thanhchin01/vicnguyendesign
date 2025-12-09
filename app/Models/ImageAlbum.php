<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageAlbum extends Model
{
    //
    protected $table = 'image_albums';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'content',
        'type',
        'status',
    ];

    public function images()
    {
        return $this->hasMany(Image::class, 'album_id', 'id');
    }
}
