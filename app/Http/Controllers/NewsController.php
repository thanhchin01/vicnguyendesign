<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log; // Thêm Log để Debug
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use function Flasher\Toastr\Prime\toastr;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = News::query();
        if ($request->has('keyword') && $request->keyword != ''){
            $keyword = $request->keyword;
            $query->where('title', 'like', "%$keyword%")
                  ->orWhere('sumary', 'like', "%$keyword%");

        }
        $news = $query->orderBy('id', 'desc')->paginate(10);
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
    public function store(Request $request)
    {
        // 1. Validate
        $validator = Validator::make($request->all(), [
            'title'            => 'required|string|max:255',
            'slug'             => 'required|string|unique:news,slug',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5048',
            'sumary'           => 'required|string',
            'date'             => 'required|date',
            'content'          => 'required|string',
            'new_category_id'  => 'required|integer',
        ], [
            'title.required' => 'Tiêu đề không được để trống.',
            'slug.required' => 'Slug không được để trống.',
            'slug.unique' => 'Slug này đã tồn tại, vui lòng chọn slug khác.',
            'sumary.required' => 'Mô tả ngắn không được để trống.',
            'date.required' => 'Ngày tạo không được để trống.',
            'date.date' => 'Ngày tạo không hợp lệ.',
            'content.required' => 'Nội dung không được để trống.',
            'new_category_id.required' => 'Vui lòng chọn danh mục tin tức.',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                toastr()->error($error); // hiển thị toast lỗi
            }
            return redirect()->back()->withInput();
        }

        // Lấy ID người tạo
        $createdBy = Auth::guard('admin')->id();

        if (is_null($createdBy)) {
            // Thường điều này không xảy ra nếu có middleware auth, nhưng nếu có, cần log lỗi hoặc redirect
            Log::error('Admin ID not found during news creation. Check authentication status.');
            return back()->with('error', 'Lỗi xác thực: Không tìm thấy người dùng quản trị. Vui lòng đăng nhập lại.');
        }

        // 2. Xử lý Ảnh
        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagePath = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/news'), $imagePath);
        }

        News::create([
            'title'             => $request->title,
            'slug'              => $request->slug,
            'image'             => $imagePath,
            'sumary'            => $request->sumary,
            'date'              => $request->date,
            'content'           => $request->content,
            'new_category_id'   => $request->new_category_id,
            'created_by'        => $createdBy,
        ]);
         toastr()->success('Thêm tin tức thành công!');
        return redirect()->route('news.index');
    }

    //Update tin tức
    public function update(Request $request, News $news)
    {
        //Validate dữ liệu
        $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'required|string|unique:news,slug,' . $news->id,
         // 'slug'             => 'required|string|unique:news,slug' . $news->id,
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5048',
            'sumary'           => 'required|string',
            'date'             => 'required|date',
            'content'          => 'required|string',
            'new_category_id'  => 'required|integer',
        ]);

        $imagePath = $news->image;
        if ($request->hasFile('image')) {
            //Xóa ảnh cũ (nếu có)
            if ($news->image) {
                File::delete(public_path('upload/news/' . $news->image));
            }
            // Upload ảnh mới
            $file = $request->file('image');
            $imagePath = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/news'), $imagePath);
        }

        $news->update([
            'title'             => $request->title,
            'slug'              => $request->slug,
            'image'             => $imagePath,
            'sumary'            => $request->sumary,
            'date'              => $request->date,
            'content'           => $request->content,
            'new_category_id'   => $request->new_category_id,
        ]);

        toastr()->success('Cập nhật tin tức thành công!');
        return Redirect::route('news.index');
    }

    //Xóa tin tức
    public function destroy(News $news)
    {
        if ($news->image) {
            File::delete(public_path('upload/news/' . $news->image));
        }
         $news->delete();

        // Sử dụng route chuẩn: members.index
        // ->with('success', 'Xóa thành viên thành công')
        toastr()->success('Xóa tin tức thành công');
        return Redirect::route('news.index');
    }
}
