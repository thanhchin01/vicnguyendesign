<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    //
    public function clientIndex(){
        $news = News::all();
        return view('figmaUI.pages.news', compact('news'));
    }

    public function detailsNews(News $news){
        return view('figmaUI.pages.news_details', compact('news'));
    }
}
