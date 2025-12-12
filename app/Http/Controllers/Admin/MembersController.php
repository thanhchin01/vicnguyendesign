<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreMemberRequest;
use App\Http\Requests\Admin\UpdateMemberRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index(Request $request)
    {
        $query = Members::query();
        if ($request->has('keyword') && $request->keyword !=''){
            $keyword = $request->keyword;
            $query->where('name', 'like', "%$keyword%")
                  ->orWhere('position', 'like', "%$keyword%");
        }

        $members = $query->orderBy('id', 'asc')->paginate(3);
        return view('admin.pages.member.member', compact('members'));
    }
    //
    public function create()
    {
        return view('admin.pages.member.createmember');
    }

    public function edit(Members $member)
    {
        return view('admin.pages.member.editmember', compact('member'));
    }

    //Thêm thành viên
    public function store(StoreMemberRequest $request)
    {
        // $avatarName = null;
        // if ($request->hasFile('avatar')) {
        //     $file = $request->file('avatar');
        //     $avatarName = time() . '_' . $file->getClientOriginalName();
        //     $file->move(public_path('upload/member'), $avatarName);
        // }
        $avatarName = $request->avatar;
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

        return redirect()->route('admin.members.index')->with('success', 'Thêm thành viên thành công');
    }


    // Cập nhật thành viên
    public function update(UpdateMemberRequest $request, Members $member)
    {
        // $avatarName = $member->avatar;
        // if ($request->hasFile('avatar')) {
        //     // 1. Xóa file cũ (nếu có)
        //     if ($member->avatar) {
        //         File::delete(public_path('upload/member/' . $member->avatar));
        //     }
        //     // 2. Upload file mới
        //     $file = $request->file('avatar');
        //     $avatarName = time() . '_' . $file->getClientOriginalName();
        //     $file->move(public_path('upload/member'), $avatarName);
        // }

        $avatarName = $request->avatar ?: $member->avatar;
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

        return Redirect::route('admin.members.index')->with('success', 'Cập nhật thành viên thành công');
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

        return Redirect::route('admin.members.index')->with('success', 'Xóa thành viên thành công');
    }
}
