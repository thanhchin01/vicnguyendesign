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
        'created_by',
        'updated_by',
        'category_id',
    ];

    const HOAN_THANH = 0;
    const CHUA_HOAN_THANH = 1;
}
