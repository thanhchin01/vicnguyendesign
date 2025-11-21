@extends('Admin.layouts.welcome')

@section('title', 'Member Page')

@section('content')
    <section class="mt-2 p-4 h-auto">
        <div class="max-w-[1500px] mx-auto">
            <div class="max-w-[1400px] mx-auto">
                <div class="col-span-9">
                    <div class="w-full border border-t-4 border-blue-500 rounded-lg p-4 flex flex-col gap-2">
                        <div class="flex justify-between">
                            <h1 class="text-2xl font-medium text-start">Danh sách nhân viên</h1>
                            <a class="px-3 py-2 bg-blue-500 hover:bg-blue-600 rounded-xl text-white"
                                href="{{ url('admin/createmember') }}">Thêm thành viên</a>
                        </div>
                        <hr class=" mt-2">
                        <div class="flex justify-center p-4">
                            <span class="flex w-full border border-gray-400 rounded-lg shadow-md overflow-hidden">
                                <input class="flex-grow px-4 py-2 text-gray-700 focus:outline-none" type="text"
                                    name="search" id="search" placeholder="Tìm kiếm...">
                                <button
                                    class="flex items-center justify-center border-l border-gray-400 bg-blue-500 hover:bg-blue-600 text-white px-3">
                                    Tìm kiếm<i class="fa-solid fa-magnifying-glass ms-2"></i>
                                </button>
                            </span>
                        </div>
                        <div class="p-4">

                            <div class="bg-white shadow-lg rounded-xl overflow-x-auto">

                                <div
                                    class="grid grid-cols-[60px_2fr_1fr_1fr_1fr_1fr_1fr_1fr_1fr_1.5fr] text-sm text-gray-700 font-bold bg-gray-100 border-b">
                                    <div class="py-3 px-2 text-center">#</div>
                                    <div class="py-3 px-4">Tên nhân viên</div>
                                    <div class="py-3 px-4">Hình ảnh</div>
                                    <div class="py-3 px-4">Tốt nghiệp</div>
                                    <div class="py-3 px-4 text-center">Ngày gia nhập</div>
                                    <div class="py-3 px-4 text-center">Chức vụ</div>
                                    <div class="py-3 px-4 text-center">Dự án</div>
                                    <div class="py-3 px-4 text-center">Giải thưởng</div>
                                    <div class="py-3 px-4 text-center">Trạng thái</div>
                                    <div class="py-3 px-4 text-center">Action</div>
                                </div>

                                <div
                                    class="grid grid-cols-[60px_2fr_1fr_1fr_1fr_1fr_1fr_1fr_1fr_1.5fr] text-sm text-gray-600 border-b hover:bg-gray-50">
                                    <div class="py-3 px-2 flex items-center justify-center">1</div>
                                    <div class="py-3 px-4 font-semibold text-gray-800 flex items-center">Vic Nguyen</div>
                                    <div class="py-3 px-4 flex items-center justify-center">
                                        <img src="{{ Vite::asset('public/assect/avatar/1.png') }}"
                                            class="h-24 w-24 object-cover rounded-md shadow">
                                    </div>
                                    <div class="py-3 px-4 flex items-center">Hà Nội</div>
                                    <div class="py-3 px-4 flex items-center justify-center">2024-11-15</div>
                                    <div class="py-3 px-4 flex items-center justify-center">CEO & Lead 3D tish</div>
                                    <div class="py-3 px-4 flex items-center justify-center">NGUYET HOUSE</div>
                                    <div class="py-3 px-4 flex items-center justify-center">Giải nhất - Kiến trúc sư </div>
                                    <div class="py-3 px-4 flex items-center justify-center text-center">
                                        <span
                                            class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">Đang
                                            làm</span>
                                    </div>
                                    <div class="py-3 px-4 flex items-center justify-center gap-2">
                                        <a href="{{ url('admin/editmember') }}"
                                            class="p-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-md text-sm transition-colors duration-150"><i
                                                class="fa-solid fa-pencil"></i></a>
                                        <button
                                            class="p-2 bg-red-500 hover:bg-red-600 text-white rounded-md text-sm transition-colors duration-150">
                                            <i class="fa-solid fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
