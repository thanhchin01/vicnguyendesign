<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StroreProjectRequest;
use App\Http\Requests\Admin\UpdateProjectRequest;
use App\Models\ProjectImage;
use App\Models\Projects;
use App\Models\ProjectsCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ProjectsController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        $query = Projects::query();
        if ($request->has('keyword') && $request->keyword != '') {
            $keyword = $request->keyword;
            $query->where('title', 'like', "%$keyword%");
        }

        $projects = $query->orderBy('id', 'asc')->paginate(5);
        return view('admin.pages.project.project', compact('projects'));
    }

    //Thêm dự án
    public function create()
    {
        $categories = ProjectsCategories::all();
        return view('admin.pages.project.createproject', compact('categories'));
    }
    public function store(StroreProjectRequest $request)
    {
        //Lấy id người tạo
        $created_by = Auth::guard('admin')->id();
        if (is_null($created_by)) {
            Log::error('admin ID not found during project creation. Check authencation status.');
            return back()->with('error', 'Lỗi xác thực: không thể tìm thấy người dùng quản trị. Vui lòng thử lại!');
        }

        $imageName = $request->image_url;
        $project = Projects::create([
            'title'                     => $request->title,
            'slug'                      => Str::slug($request->title),
            'image_url'                 => $imageName,
            'description'               => $request->description,
            'address'                   => $request->address,
            'date'                      => $request->date,
            'acreage'                   => $request->acreage,
            'team_design'               => $request->team_design,
            'category_id'               => $request->category_id,
            'status'                    => $request->status,
            'created_by'                => $created_by,
        ]);

        if ($request->gallery) {
            foreach (json_decode($request->gallery, true) as $i => $img) {
                ProjectImage::create([
                    'project_id' => $project->id,
                    'image'      => $img,
                    'order'      => $i
                ]);
            }
        }

        return redirect()->route('admin.project.index')->with('success', 'Thêm dự án ' . $request->title . ' thành công');
    }


    //Cập nhật dự án
    public function edit(Projects $project)
    {
        $categories = ProjectsCategories::all();
        return view('admin.pages.project.editproject', compact('project', 'categories'));
    }

    public function update(UpdateProjectRequest $request, Projects $project)
    {
        // //Validate
        // $request->validate([
        //     'title'                    => 'required|string|max:255',
        //     'slug'                     => 'required|string|unique:projects,slug,' . $project->id,
        //     'image_url'                => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5048',
        //     'description'              => 'required|string',
        //     'address'                  => 'required|string',
        //     'date'                     => 'required|date',
        //     'acreage'                  => 'required|string',
        //     'team_design'              => 'required|string',
        //     'category_id'              => 'required|integer',
        //     'status'                   => 'required|in:0,1',
        // ]);

        $imageName = $request->image_url ?: $project->image_url;

        $project->update([
            'title'                     => $request->title,
            'slug'                      => Str::slug($request->title),
            'image_url'                 => $imageName,
            'description'               => $request->description,
            'address'                   => $request->address,
            'date'                      => $request->date,
            'acreage'                   => $request->acreage,
            'team_design'               => $request->team_design,
            'category_id'               => $request->category_id,
            'status'                    => $request->status,
        ]);

        if ($request->gallery) {
            $project->images()->delete();
            foreach (json_decode($request->gallery, true) as $i => $img) {
                $project->images()->create([
                    'image' => $img,
                    'order' => $i
                ]);
            }
        }
        return redirect()->route('admin.project.index')->with('success', 'Cập nhật dự án' . $request->title . 'thành công');
    }

    // Xóa dự án
    public function destroy(Projects $project)
    {
        $project->delete();
        return Redirect::route('admin.project.index')->with('success', 'Xóa dự án' . $project->title . 'thành công');
    }
}
