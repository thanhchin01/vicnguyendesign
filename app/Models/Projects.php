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

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function project_image()
    {
        return $this->hasMany(ProjectImage::class, 'project_id');
    }

    public function projects_categories()
    {
        return $this->belongsTo(ProjectsCategories::class, 'category_id');
    }

    public function members()
    {
        return $this->belongsToMany(Members::class, 'project_members', 'projects_id', 'members_id');
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
