<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
    protected $table = 'projects';

    protected $fillable = [
        'title',
        'slug',
        'image_url',
        'description',
        'address',
        'date',
        'status',
        'acreage',
        'team_design',
        'id_projectcategories',
    ];
}
