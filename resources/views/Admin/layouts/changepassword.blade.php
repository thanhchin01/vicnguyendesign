@extends('Admin.layouts.welcome')

@section('title', 'Home Page')

@section('content')
    <section class="mt-2 p-4 h-auto">
        <div class="max-w-[1500px] mx-auto flex justify-center">
            <div class="max-w-[900px] border border-t-4 border-blue-500 rounded-lg p-3 gap-3">
                <h1 class="text-2xl font-semibold text-center">ĐỔI MẬT KHẨU</h1>
                <label for="" class="mt-6">Mật khẩu hiện tại</label>
                <input class="w-full px-3 py-2 bg-white rounded-lg" type="text" name="" id="" placeholder="Nhập mật khẩu hiện tại">
                <label for="">Mật khẩu mới</label>
                <input class="w-full px-3 py-2 bg-white rounded-lg" type="text" name="" id="" placeholder="Nhập mật khẩu mớii">
                <label for="">Nhập lại mật khẩu</label>
                <input class="w-full px-3 py-2 bg-white rounded-lg" type="text" name="" id="" placeholder="Nhập lại mật khẩu">
                <div class="text-center text-white mt-5">
                    <button class="px-3 py-2 bg-blue-500 rounded-lg hover:bg-blue-600">
                    Đổi mật khẩu
                </button>
                </div>
            </div>
        </div>
    </section>
@endsection
