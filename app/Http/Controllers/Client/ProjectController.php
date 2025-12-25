<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projects;

class ProjectController extends Controller
{
    //
    public function clientProject()
    {
        $projects = Projects::all();
        return view('figmaUI.pages.project_home', compact('projects'));
    }

    public function detailsProject($slug)
    {
        $project = Projects::with('projects_categories','project_image')
            ->where('slug', $slug)
            ->firstOrFail();
        return view('figmaUI.pages.project_details', compact('project'));
    }
}
