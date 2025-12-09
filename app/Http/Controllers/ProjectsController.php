<?php

namespace App\Http\Controllers;

use App\Models\ProjectImages;
use App\Models\Projects;
use App\Models\ProjectsCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class ProjectsController extends Controller
{
    //
    public function index()
    {
        //
        $projects = Projects::orderBy('id', 'DESC')->get();
        return view('Admin.pages.project.project', compact('projects'));
    }

    public function create()
    {
        $categories = ProjectsCategories::all();
        return view('Admin.pages.project.createproject', compact('categories'));
    }

    public function edit(Projects $project)
    {
        $categories = ProjectsCategories::all();
        return view('Admin.pages.project.editproject', compact('project', 'categories'));
    }

    //Thêm dự án
    public function store(Request $request)
    {
        //Validate
        $request->validate(
            [
                'title'                    => 'required|string|max:255',
                'slug'                     => 'required|string|unique:projects,slug',
                'image_url'                => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5048',
                'description'              => 'required|string',
                'address'                  => 'required|string',
                'date'                     => 'required|date',
                'acreage'                  => 'required|string',
                'team_design'              => 'required|string',
                'category_id'              => 'required|integer',
                'status'                   => 'required|in:0,1',
            ],
            [
                'title.required' => 'Tiêu đề không được để trống.',
                'slug.required' => 'Slug không được để trống.',
                'slug.unique'   => 'Slug này đã tồn tại.',
                'description.required' => 'Mô tả không được để trống.',
                'address.required' => 'Địa chỉ không được để trống.',
                'date.required' => 'Ngày không được để trống.',
                'acreage.required' => 'Diện tích không được để trống.',
                'team_design.required' => 'Thành viên thiết kế không được để trống.',
                'category_id.required' => 'Danh mục dự án không được để trống.',
                'status.required' => 'Trạng thái không được để trống.',
            ]
        );

        //Lấy id người tạo
        $created_by = Auth::guard('admin')->id();
        if (is_null($created_by)) {
            Log::error('Admin ID not found during project creation. Check authencation status.');
            return back()->with('error', 'Lỗi xác thực: không thể tìm thấy người dùng quản trị. Vui lòng thử lại!');
        }

        //Xử lý ảnh
        $imageName = null;
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/project'), $imageName);
        }


        $project = Projects::create([
            'title'                     => $request->title,
            'slug'                      => $request->slug,
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

        if ($request->hasFile('images')) {
            foreach ($request->images as $img) {
                // Lưu file
                $filename = time() . '_' . $img->getClientOriginalName();
                $img->move(public_path('upload/project'), $filename);

                //Lưu vào database
                ProjectImages::create([
                    'project_id' => $project->id,
                    'image' => $filename,
                ]);
            }
        }

        // ->with('success', 'Thêm thành viên thành công')
        toastr()->success('Thêm Dự án thành công');
        return redirect()->route('project.index');
    }

    //Cập nhật dự án
    public function update(Request $request, Projects $project)
    {
        //Validate
        $request->validate([
            'title'                    => 'required|string|max:255',
            'slug'                     => 'required|string|unique:projects,slug,' . $project->id,
            'image_url'                => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5048',
            'description'              => 'required|string',
            'address'                  => 'required|string',
            'date'                     => 'required|date',
            'acreage'                  => 'required|string',
            'team_design'              => 'required|string',
            'category_id'              => 'required|integer',
            'status'                   => 'required|in:0,1',
        ]);

        $imageName = $project->image_url;
        if ($request->hasFile('image_url')) {
            //Xóa ảnh cũ (nếu có)
            if ($project->image_url) {
                File::delete(public_path('upload/project/' . $project->image_url));
            }
            // Upload ảnh mới
            $file = $request->file('image_url');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/project'), $imageName);
        }

        $project->update([
            'title'                     => $request->title,
            'slug'                      => $request->slug,
            'image_url'                 => $imageName,
            'description'               => $request->description,
            'address'                   => $request->address,
            'date'                      => $request->date,
            'acreage'                   => $request->acreage,
            'team_design'               => $request->team_design,
            'category_id'               => $request->category_id,
            'status'                    => $request->status,
        ]);

        
        toastr()->success('Cập nhật dự án thành công!');
        return redirect()->route('project.index');
    }

    // Xóa dự án
    public function destroy(Projects $project){
        if ($project->image_url) {
            File::delete(public_path('upload/project/' . $project->image_url));
        }
        //Xóa ảnh phụ
        $projectImages = ProjectImages::where('project_id', $project->id)->get();
        foreach ($projectImages as $img) {
            if ($img->image) {
                File::delete(public_path('upload/project/' . $img->image));
            }
            $img->delete();
        }
        $project->delete();

        // Sử dụng route chuẩn: members.index
        // ->with('success', 'Xóa thành viên thành công')
        toastr()->success('Xóa dự án thành công');
        return Redirect::route('project.index');
    }
}
