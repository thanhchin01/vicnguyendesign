<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectMembers extends Model
{
    //
    protected $table = 'project_members';

    protected $fillable = [
        'id_projects',
        'id_members',
    ];
}
