@extends('Admin.layouts.welcome')

@section('title', 'Home Page')

@section('content')
    <section class="mt-2 p-4 h-auto">
        <div class="max-w-[1500px] mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl">
                    <div class="flex justify-between items-center p-4 border-t-4 border-blue-500 rounded-xl">
                        <div>
                            <h1>Dự án đã hoàn thành</h1>
                            <p class="text-blue-500 font-bold text-xl">10</p>
                        </div>
                        <div class="bg-blue-500 rounded-full px-3 py-3">
                            <i class="fa-solid fa-list-check text-[30px] text-white"></i>
                        </div>
                    </div>
                    <a href="#"
                        class="block text-center text-sm font-semibold text-blue-500 hover:bg-gray-50 py-2 border-t rounded-b-xl">
                        Xem chi tiết
                    </a>
                </div>
                <div class="bg-white rounded-xl">
                    <div class="flex justify-between items-center p-4 border-t-4 border-yellow-500 rounded-xl">
                        <div>
                            <h1>Tin tức</h1>
                            <p class="text-yellow-500 font-bold text-xl">10</p>
                        </div>
                        <div class="bg-yellow-500 rounded-full px-3 py-3">
                            <i class="fa-solid fa-newspaper text-[30px] text-white"></i>
                        </div>
                    </div>
                    <a href="#"
                        class="block text-center text-sm font-semibold text-yellow-500 hover:bg-gray-50 py-2 border-t rounded-b-xl">
                        Xem chi tiết
                    </a>
                </div>
                <div class="bg-white rounded-xl">
                    <div class="flex justify-between items-center p-4 border-t-4 border-green-500 rounded-xl">
                        <div>
                            <h1>Liên hệ mới</h1>
                            <p class="text-green-500 font-bold text-xl">10</p>
                        </div>
                        <div class="bg-green-500 rounded-full px-3 py-3">
                            <i class="fa-solid fa-list-check text-[30px] text-white"></i>
                        </div>
                    </div>
                    <a href="#"
                        class="block text-center text-sm font-semibold text-green-500 hover:bg-gray-50 py-2 border-t rounded-b-xl">
                        Xem chi tiết
                    </a>
                </div>
                <div class="bg-white rounded-xl">
                    <div class="flex justify-between items-center p-4 border-t-4 border-red-500 rounded-xl">
                        <div>
                            <h1>Thành viên</h1>
                            <p class="text-red-500 font-bold text-xl">10</p>
                        </div>
                        <div class="bg-red-500 rounded-full px-3 py-3">
                            <i class="fa-solid fa-users text-[30px] text-white"></i>
                        </div>
                    </div>
                    <a href="#"
                        class="block text-center text-sm font-semibold text-red-500 hover:bg-gray-50 py-2 border-t rounded-b-xl">
                        Xem chi tiết
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
