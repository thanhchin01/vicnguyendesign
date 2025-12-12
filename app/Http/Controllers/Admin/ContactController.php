<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index(Request $request)
    {
        $query = Contact::query();
        if ($request->has('keyword') && $request->keyword != ''){
            $keyword = $request->keyword;
            $query->where('fullname', 'like', "%$keyword%")
                  ->orWhere('email', 'like', "%$keyword%");
        }

        $contacts = $query->orderBy('id', 'asc')->paginate(5);
        return view('admin.pages.notice.notice', compact('contacts'));
    }

    public function details($id)
    {
        $details = Contact::findOrFail($id);
        if ($details->staus == 0){
            $details->status = 1;
            $details->save();
        }

        return view('admin.pages.notice.details-notice', compact('details'));
    }

    public function destroy($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return back()->with('success', 'Xóa thông báo thành công!');
    }

}
