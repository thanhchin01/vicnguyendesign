<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreNewsRequest;
use App\Http\Requests\Admin\UpdateNewsRequest;
use App\Models\NewsCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log; // Thêm Log để Debug
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use function Flasher\Toastr\Prime\toastr;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = News::query();
        if ($request->has('keyword') && $request->keyword != ''){
            $keyword = $request->keyword;
            $query->where('title', 'like', "%$keyword%");
        }
        $news = $query->orderBy('id', 'asc')->paginate(3);
        return view('Admin.pages.news.news', compact('news'));
        // $news = News::orderBy('id', 'DESC')->get();
        // return view('Admin.pages.news.news', compact('news'));
    }

    public function create()
    {
        $categories = NewsCategories::all();
        return view('Admin.pages.news.createnews', compact('categories'));
    }

    public function edit(News $news)
    {
        $categories = NewsCategories::all();
        return view('Admin.pages.news.editnews', compact('news', 'categories'));
    }

    // Xử lý Thêm mới
    public function store(StoreNewsRequest $request)
    {
        // // 1. Validate
        // $validator = Validator::make($request->all(), [
        //     'title'            => 'required|string|max:255',
        //     'slug'             => 'required|string|unique:news,slug',
        //     'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5048',
        //     'sumary'           => 'required|string',
        //     'date'             => 'required|date',
        //     'content'          => 'required|string',
        //     'new_category_id'  => 'required|integer',
        // ], [
        //     'title.required' => 'Tiêu đề không được để trống.',
        //     'sumary.required' => 'Mô tả ngắn không được để trống.',
        //     'date.required' => 'Ngày tạo không được để trống.',
        //     'date.date' => 'Ngày tạo không hợp lệ.',
        //     'content.required' => 'Nội dung không được để trống.',
        //     'new_category_id.required' => 'Vui lòng chọn danh mục tin tức.',
        // ]);
        // if ($validator->fails()) {
        //     foreach ($validator->errors()->all() as $error) {
        //         toastr()->error($error); // hiển thị toast lỗi
        //     }
        //     return redirect()->back()->withInput();
        // }

        // Lấy ID người tạo
        $createdBy = Auth::guard('admin')->id();

        if (is_null($createdBy)) {
            // Thường điều này không xảy ra nếu có middleware auth, nhưng nếu có, cần log lỗi hoặc redirect
            Log::error('Admin ID not found during news creation. Check authentication status.');
            return back()->with('error', 'Lỗi xác thực: Không tìm thấy người dùng quản trị. Vui lòng đăng nhập lại.');
        }

        // 2. Xử lý Ảnh
        $imagePath = $request->image;
        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $imagePath = time() . '_' . $file->getClientOriginalName();
        //     $file->move(public_path('upload/news'), $imagePath);
        // }

        News::create([
            'title'             => $request->title,
            'slug'              => Str::slug($request->title),
            'image'             => $imagePath,
            'sumary'            => $request->sumary,
            'date'              => $request->date,
            'content'           => $request->content,
            'new_category_id'   => $request->new_category_id,
            'created_by'        => $createdBy,
        ]);
        return redirect()->route('admin.news.index')->with('success', 'Thêm tin tức thành công');
    }

    //Update tin tức
    public function update(UpdateNewsRequest $request, News $news)
    {
        // $imagePath = $news->image;
        // if ($request->hasFile('image')) {
        //     //Xóa ảnh cũ (nếu có)
        //     if ($news->image) {
        //         File::delete(public_path('upload/news/' . $news->image));
        //     }
        //     // Upload ảnh mới
        //     $file = $request->file('image');
        //     $imagePath = time() . '_' . $file->getClientOriginalName();
        //     $file->move(public_path('upload/news'), $imagePath);
        // }
        $imagePath = $request->image ?: $news->image;
        $news->update([
            'title'             => $request->title,
            'slug'              => Str::slug($request->title),
            'image'             => $imagePath,
            'sumary'            => $request->sumary,
            'date'              => $request->date,
            'content'           => $request->content,
            'new_category_id'   => $request->new_category_id,
        ]);
        return Redirect::route('admin.news.index')->with('success', 'Cập nhật tin tức thành công');
    }

    //Xóa tin tức
    public function destroy(News $news)
    {
         $news->delete();
        return Redirect::route('admin.news.index')->with('success', 'Xóa tin tức thành công');
    }
}
