<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Image;

class PortfolioController extends Controller
{

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
