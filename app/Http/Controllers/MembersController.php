<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $members = Members::orderBy('id', 'DESC')->get();

        return view('Admin.pages.member.member', compact('members'));
    }
    //
    public function create()
    {
        return view('Admin.pages.member.createmember');
    }

    public function edit(Members $member)
    {
        return view('Admin.pages.member.editmember', compact('member'));
    }

    //Thêm thành viên
    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'name'      => 'required|string|max:255',
            'avatar'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5048',
            'graduate'  => 'nullable|string',
            'join'      => 'nullable|string',
            'project'   => 'nullable|string',
            'award'     => 'nullable|string',
            'position'  => 'nullable|string|max:255',
            'status'    => 'required|in:0,1',
        ]);

        $avatarName = null;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $avatarName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/member'), $avatarName);
        }

        Members::create([
            'name'      => $request->name,
            'avatar'    => $avatarName,
            'graduate'  => $request->graduate,
            'join'      => $request->join,
            'project'   => $request->project,
            'award'     => $request->award,
            'position'  => $request->position,
            'status'    => $request->status,
        ]);

        return redirect()->route('members.create')->with('success', 'Thêm thành viên thành công');
    }


    // Cập nhật thành viên
    public function update(Request $request, Members $member)
    {
        // Validate dữ liệu
        $request->validate([
            'name'      => 'required|string|max:255',
            'avatar'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5048',
            'graduate'  => 'nullable|string',
            'join'      => 'nullable|date',
            'project'   => 'nullable|string',
            'award'     => 'nullable|string',
            'position'  => 'nullable|string|max:255',
            'status'    => 'required|in:0,1',
        ]);

        $avatarName = $member->avatar;

        if ($request->hasFile('avatar')) {
            // 1. Xóa file cũ (nếu có)
            if ($member->avatar) {
                File::delete(public_path('upload/member/' . $member->avatar));
            }

            // 2. Upload file mới
            $file = $request->file('avatar');
            $avatarName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/member'), $avatarName);
        }

        $member->update([
            'name'      => $request->name,
            'avatar'    => $avatarName,
            'graduate'  => $request->graduate,
            'join'      => $request->join,
            'project'   => $request->project,
            'award'     => $request->award,
            'position'  => $request->position,
            'status'    => $request->status,
        ]);

        // Sử dụng route chuẩn: members.index
        return Redirect::route('members.index')->with('success', 'Cập nhật thành viên thành công');
    }

    //Xóa thành viên
    public function destroy(Members $member)
    {
        // Xóa file avatar liên quan
        if ($member->avatar) {
            File::delete(public_path('upload/member/' . $member->avatar));
        }

        $member->delete();

        // LOGIC KHẮC PHỤC: Đảm bảo AUTO_INCREMENT được đặt lại sau khi xóa
        $maxId = Members::max('id');
        $nextId = $maxId ? $maxId + 1 : 1;
        // Thao tác này CHỈ hoạt động với MySQL/MariaDB
        try {
            DB::statement("ALTER TABLE members AUTO_INCREMENT = $nextId");
        } catch (\Exception $e) {
        }
        // Sử dụng route chuẩn: members.index
        return Redirect::route('members.index')->with('success', 'Xóa thành viên thành công');
    }
}
