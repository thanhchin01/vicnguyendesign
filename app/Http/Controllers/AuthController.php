<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.home');
        }
        return view('Admin.layouts.login');
    }

    // Xử lý logic đăng nhập
    public function postLogin(Request $request)
    {
        // 1. Validate dữ liệu đầu vào
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không đúng định dạng.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        ]);

        // 2. Lấy thông tin đăng nhập và trạng thái "Remember Me"
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        // Checkbox 'remember' trong view của bạn có name="remember"
        $remember = $request->has('remember');

        // 3. Thực hiện xác thực với guard 'admin'
        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            // Đăng nhập thành công
            $request->session()->regenerate();

            return redirect()->intended(route('admin.home')) // Chuyển hướng đến dashboard
                             ->with('success', 'Đăng nhập thành công! Xin chào ' . Auth::guard('admin')->user()->fullname);
        }

        // 4. Đăng nhập thất bại
        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không chính xác.',
        ])->withInput($request->only('email')); // Giữ lại email trên form
    }

    //Logout
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('status', 'Bạn đã đăng xuất thành công.');
    }

    //Profile
    public function profile(){
        //Lấy thông tin  admin đang đăng nhập
        $admin = Auth::guard('admin')->user();

        //Kiểm tra bảo vệ: Mặc dù đã có middleware, đây là bước kiểm tra an toàn.
        if (!$admin){
            return redirect()->route('login');
        }

        //TRuyền biến $admin chứa thông tin người dùng sang view profile
        return view('Admin.layouts.profile', compact('admin'));

    }
}
