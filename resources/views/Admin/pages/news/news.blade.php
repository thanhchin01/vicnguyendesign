@extends('Admin.layouts.welcome')

@section('title', 'News Page')

@section('content')
    <section class="mt-2 p-4 h-auto">
        <div class="max-w-[1500px] mx-auto">
            <div class="container mx-auto">
                <div class="w-full border border-t-4 border-blue-500 bg-white rounded-lg">
                    <div class="flex justify-between p-4">
                        <h1 class="text-2xl font-semibold">Danh sách tin tức</h1>
                        <!-- MODAL THÊM DỰ ÁN -->
                        <a class="px-3 py-2 bg-blue-500 hover:bg-blue-600 rounded-xl text-white"
                            href="{{ url('admin/createnews') }}">Thêm mới tin tức</a>
                    </div>
                    <hr class="">
                    <div class="flex justify-center mt-2 p-4">
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
                                class="grid grid-cols-[60px_2fr_1fr_1fr_1fr_1fr_1fr_1.5fr] text-sm text-gray-700 font-bold bg-gray-100 border-b">
                                <div class="py-3 px-2 text-center">#</div>
                                <div class="py-3 px-4">Tên tin tức</div>
                                <div class="py-3 px-4">Hình ảnh</div>
                                <div class="py-3 px-4 text-center">Mô tả ngắn</div>
                                <div class="py-3 px-4 text-center">Ngày tạo</div>
                                <div class="py-3 px-4 text-center">Mô tả</div>
                                <div class="py-3 px-4 text-center">Danh mục</div>
                                <div class="py-3 px-4 text-center">Action</div>
                            </div>

                            <div
                                class="grid grid-cols-[60px_2fr_1fr_1fr_1fr_1fr_1fr_1.5fr] text-sm text-gray-600 border-b hover:bg-gray-50">
                                <div class="py-3 px-2 flex items-center justify-center">1</div>
                                <div class="py-3 px-4 font-semibold text-gray-800 flex items-center">ANPHA OFFICE / AD9 ARCHITECTS</div>
                                <div class="py-3 px-4 flex items-center justify-start">
                                    <img src="{{ Vite::asset('public/assect/image/Alpha/image1.jpg') }}"
                                        class="h-24 w-24 object-cover rounded-md shadow">
                                </div>
                                <div class="py-3 px-4 flex items-center justify-center">
                                    <button
                                        class="px-3 py-1 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-full text-xs font-medium">Xem
                                        nội dung</button>
                                </div>
                                <div class="py-3 px-4 flex items-center justify-center">2024-11-15</div>
                                <div class="py-3 px-4 flex items-center justify-center">
                                    <button
                                        class="px-3 py-1 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-full text-xs font-medium">Xem
                                        nội dung</button>
                                </div>
                                <div class="py-3 px-4 flex items-center justify-center">Nhà ở</div>
                                <div class="py-3 px-4 flex items-center justify-center gap-2">
                                    <a href="{{ url('admin/editnews') }}"
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
    </section>
@endsection
