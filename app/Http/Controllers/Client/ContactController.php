<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('pages.contact');
    }

    public function store(ContactRequest $request)
    {
        Contact::create([
            'fullname'  => $request->fullname,
            'email'     => $request->email,
            'object'    => $request->object,
            'message'   => $request->message,
            'status'    => 0
        ]);

        return back()->with('success', 'Gửi liên hệ thành công');
    }
}
