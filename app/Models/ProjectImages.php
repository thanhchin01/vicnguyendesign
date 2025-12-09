<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImages extends Model
{
    //
    protected $table = 'project_images';
    protected $fillable = [
        'project_id',
        'image'
    ];

    public function project()
    {
        return $this->belongsTo(Projects::class, 'project_id');
    }
}
