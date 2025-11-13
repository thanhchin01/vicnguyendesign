@extends('Admin.layouts.welcome')

@section('title', 'Home Page')

@section('content')
    <section class="mt-2 p-4 h-auto">
        <div class="max-w-[1500px] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 mt-3">
                <div class="col-span-4">
                    <div class="bg-white w-full border border-t-4 border-blue-500 rounded-sm">
                        <div class="flex flex-col items-center justify-center gap-3 p-4">
                            <img class="w-38 rounded-full object-cover" src="{{ Vite::asset('public/assect/Avatar/1.png') }}"
                                alt="">
                            <p class="text-2xl font-semibold">Alexander Pires</p>
                            <p>VicNguyenDesign</p>
                        </div>
                        <div class="flex justify-between p-4">
                            <p class="font-bold">Chức vụ:</p>
                            <p>CEO & Lead 3D Artist</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-8">
                    <div class="bg-white w-full border border-t-4 border-blue-500 rounded-sm p-4 flex flex-col">
                        <h1 class="text-2xl font-medium">THÔNG TIN TÀI KHOẢN</h1>
                        <div class="flex gap-3 bg-gray-200 px-3 p-3 mt-5">
                            <p class="text-base">Họ và tên:</p>
                            <p class="text-base">Vic Nguyễn</p>
                        </div>
                        <div class="flex gap-3 px-3 p-3">
                            <p class="text-base">Ngày sinh:</p>
                            <p class="text-base">1/1/1990</p>
                        </div>
                        <div class="flex gap-3 bg-gray-200 px-3 p-3">
                            <p class="text-base">Giới tính:</p>
                            <p class="text-base">Nam</p>
                        </div>
                        <div class="flex gap-3 px-3 p-3">
                            <p class="text-base">Email:</p>
                            <p class="text-base">admin@gmail.com</p>
                        </div>
                        <div class="flex gap-3 bg-gray-200 px-3 p-3">
                            <p class="text-base">Địa chỉ:</p>
                            <p class="text-base">500 Duy Tân</p>
                        </div>
                        <div class="flex gap-3 px-3 p-3">
                            <p class="text-base">Họ và tên:</p>
                            <p class="text-base">Vic Nguyễn</p>
                        </div>
                        <div class="text-right mt-3">
                            <button class="px-3 py-3 rounded-xl bg-blue-500 text-white">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
