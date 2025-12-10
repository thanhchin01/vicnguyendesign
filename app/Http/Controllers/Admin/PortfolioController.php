<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StrorePortfolioRequest;
use App\Http\Requests\Admin\UpdatePortfolioRequest;
use App\Models\Image;
use App\Models\ImageAlbum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

use function Flasher\Toastr\Prime\toastr;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        $albums = Image::orderBy('id', 'ASC')->paginate(5);
        return view('Admin.pages.portfolio.index', compact('albums'));
    }

    //Thêm
    public function create()
    {
        $albums = ImageAlbum::all();
        return view('Admin.pages.portfolio.create', compact('albums'));
    }
    public function store(StrorePortfolioRequest $request)
    {
        $created_by = Auth::guard('admin')->id();
        if (is_null($created_by)) {
            Log::error("Admin ID not found during portfolio creation");
            return back()->with('error', 'Lỗi xác thực: Không thể tìm thấy người dùng quản trị. Vui lòng thử lại');
        }
        // //Xử lý ảnh
        // $imageName = null;
        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
        //     $file->move(public_path('upload/portfolio'), $imageName);
        // }
        $imageName = $request->image;
        Image::create([
            'title'      => $request->title,
            'slug'       => Str::slug($request->title),
            'image'      => $imageName,
            'content'    => $request->content,
            'album_id'   => $request->album_id,
            'status'     => $request->status,
            'created_by' => $created_by
        ]);

        return redirect()->route('admin.portfolio.index')->with('success', 'Thên portfolio thành công');
    }

    //Sửa
    public function edit(Image $portfolio)
    {
        $albums = ImageAlbum::all();
        return view('Admin.pages.portfolio.edit', compact('portfolio', 'albums'));
    }
    public function update(UpdatePortfolioRequest $request, Image $portfolio)
    {
        // $imageName = $portfolio->image;
        // if ($request->hasFile('image')) {
        //     //Xóa ảnh cũ (nếu có)
        //     if ($portfolio->image) {
        //         File::delete(public_path('upload/portfolio/' . $portfolio->image));
        //     }
        //     // Upload ảnh mới
        //     $file = $request->file('image');
        //     $imageName = time() . '_' . $file->getClientOriginalName();
        //     $file->move(public_path('upload/portfolio'), $imageName);
        // }
        $imageName = $request->image ?: $portfolio->image;
        $portfolio->update([
            'title'     => $request->title,
            'slug'      => Str::slug($request->title),
            'image'     => $imageName,
            'content'   => $request->content,
            'album_id'  => $request->album_id,
            'status'    => $request->status,
        ]);
        return redirect()->route('admin.portfolio.index')->with('success', 'Câp nhật portfolio thành công');
    }

    //Xóa
    public function destroy(Image $portfolio)
    {
        if (!empty($portfolio->image)) {
            $path = public_path($portfolio->image);
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $portfolio->delete();
        return redirect()->route('admin.portfolio.index')->with('success', 'Xóa ' . $portfolio->title . ' thành công!');
    }
}
