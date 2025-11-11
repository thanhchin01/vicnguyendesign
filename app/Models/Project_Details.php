<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project_Details extends Model
{
    protected $table = 'project__details';

    protected $fillable = [
        'category',
        'address',
        'time',
        'acreage',
        'status',
        'team_design',
    ];
}
