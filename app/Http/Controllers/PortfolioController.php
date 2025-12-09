<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\ImageAlbum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

use function Flasher\Toastr\Prime\toastr;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        $albums = Image::orderBy('id', 'DESC')->get();
        return view('Admin.pages.portfolio.index', compact('albums'));
    }

    //Thêm
    public function create()
    {
        $albums = ImageAlbum::all();
        return view('Admin.pages.portfolio.create', compact('albums'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'title'       => 'required|string|max:255',
            'slug'        => 'required|string|unique:images,slug',
            'image'       => 'nullable|string|max:255',
            'content'     => 'nullable|string',
            'album_id'    => 'required|integer',
            'status'      => 'required|in:0,1',
        ], [
            'title.requỉed' => 'Tiêu đề không được để trống',
            'slug.required'  => 'Slug không được để trống',
            'slug.unique'    => 'Slug này đã tồn tại',
            'album_id.required' => 'Vui lòng chọn danh mục',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                toastr()->error($error);
            }
            return redirect()->back()->withInput();
        }

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
            'slug'       => $request->slug,
            'image'      => $imageName,
            'content'    => $request->content,
            'album_id'   => $request->album_id,
            'status'     => $request->status,
            'created_by' => $created_by
        ]);

        toastr()->success('Thêm portfolio thành công');
        return redirect()->route('portfolio.index');
    }

    //Sửa
    public function edit(Image $portfolio)
    {
        $albums = ImageAlbum::all();
        return view('Admin.pages.portfolio.edit', compact('portfolio', 'albums'));
    }
    public function update(Request $request, Image $portfolio)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'slug'        => 'required|string|unique:images,slug,' . $portfolio->id,
            'image'       => 'nullable|string|max:255',
            'content'     => 'nullable|string',
            'album_id'    => 'required|integer',
            'status'      => 'required|in:0,1',
        ]);

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
        $imageName = $request->image;
        $portfolio->update([
            'title'     => $request->title,
            'slug'      => $request->slug,
            'image'     => $imageName,
            'content'   => $request->content,
            'album_id'  => $request->album_id,
            'status'    => $request->status,
        ]);


        toastr()->success('Cập nhật portfolio thành công!');
        return redirect()->route('portfolio.index');
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
        toastr()->success('Xóa portfolio' . $portfolio->title . 'thành công!');
        return redirect()->route('portfolio.index');
    }

    public function clientIndex()
    {
        // Lấy tất cả portfolio có status = 1 (đang hiển thị)
        $images = Image::where('status', 1)
            ->where('album_id', 2) // Lọc theo id album = 2
            ->orderBy('id', 'ASC')
            ->get();

        return view('pages.portfolio', compact('images'));
    }
}
