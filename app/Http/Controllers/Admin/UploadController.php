<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    //
    public function upload(Request $request)
{
    // if ($request->hasFile('upload')) {
    //     $file = $request->file('upload');
    //     $path = $file->store('uploads', 'public');

    //     return response()->json([
    //         'url' => asset('storage/' . $path)
    //     ]);
    // }
}

}
