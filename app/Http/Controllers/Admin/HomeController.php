<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Members;
use App\Models\News;
use App\Models\Projects;

class HomeController extends Controller
{
    //
    public function index()
    {
        $members = Members::latest()->take(4)->get();
        $contact = Contact::latest()->take(2)->get();
        return view('admin.pages.home.home', compact('members', 'contact'), [
            'totalMembers'  => Members::where('status', 1)->count(),
            'totalProject'  => Projects::where('status', 1)->count(),
            'totalNews'     => News::count(),
            'totalContact'  => Contact::count(),
        ]);
    }


}
