<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        $news = News::orderBy('id', 'DESC')->get();
        return view('Admin.pages.news.news', compact('news'));
    }

    public function create()
    {
        // 1. Lấy tất cả danh mục tin tức từ database
        $categories = NewsCategories::all();

        return view('Admin.pages.news.createnews', compact('categories'));
    }

    public function edit(News $news)
    {

        return view('Admin.pages.news.editnews', compact('news'));
    }


    //Thêm tin tứcc
    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'title'     => 'required|string|max:255',
            'slug'      => 'required|string',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5048',
            'sumary '   => 'required|string',
            'date'      => 'required|date',
            'content'   =>  'required|string',
            'news_category_id' => 'required|string',
        ]);


         $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/news'), $imageName);
            $imagePath = 'upload/news/' . $imageName; // Lưu đường dẫn tương đối để truy cập
        }

        News::create([
            'title'     => $request->title,
            'slug'      => $request->slug,
            'image'     => $imagePath,
            'sumary'    => $request->sumary,
            'date'      => $request->date,
            'content'   => $request->content,
            'new_category_id'   => $request->new_category,
            'created_by'        => Auth::guard('admin')->id(),
        ]);
        return redirect()->route('news.index')->with('success', 'Thêm tin tức thành công');
    }
}
