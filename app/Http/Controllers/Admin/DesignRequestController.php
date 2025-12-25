<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DesignRequests;

class DesignRequestController extends Controller
{
    //
    public function index(Request $request)
    {
        $query = DesignRequests::query();
        if ($request->has('keyword') &&  $request->keyword != ''){
            $keyword = $request->keyword;
            $query->where('fullname', 'like', "%$keyword%")
                  ->orWhere('email', 'like', "%$keyword%");
        }

        $contacts = $query->orderBy('id', 'asc')->paginate(4);
        return view('admin.pages.contact.index', compact('contacts'));
    }

    public function details($id)
    {
        $details = DesignRequests::findOrFail($id);

        return view('admin.pages.contact.details', compact('details'));
    }

    public function destroy($id){
        $contact = DesignRequests::findOrFail($id);
        $contact->delete();

        return back()->with('success', 'Xóa thông báo thành công!');
    }

}
