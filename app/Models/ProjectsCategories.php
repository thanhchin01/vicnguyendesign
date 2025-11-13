<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectsCategories extends Model
{
    //
    protected $table = 'projects_categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];
}
