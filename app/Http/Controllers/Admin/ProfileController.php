<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PasswordRequest;
use App\Http\Requests\Admin\ProfileRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function updateProfile(ProfileRequest $request)
    {
        /** @var Admin $admin */
        $admin = Auth::guard('admin')->user();

        $admin->update([
            'fullname'      => $request->fullname,
            'email'         => $request->email,
            'username'      => $request->username,
            'phone'         => $request->phone,
            'gender'        => $request->gender,
            'avatar'        => $request->avatar,
            'date_of_birth' => $request->date_of_birth
        ]);

        return back()->with('success', 'Cập nhật thông tin thành công');
    }

    public function changePassword(PasswordRequest $request)
    {

        /** @var Admin $admin */
        $admin = Auth::guard('admin')->user();

        if (!Hash::check($request->current_password, $admin->password)){
            return back()->withErrors([
                'current_password' => 'Mật khẩu hiện tại không đúng',
            ]);
        }

        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return back()->with('success', 'Đổi mật khẩu thành công');
    }
}
