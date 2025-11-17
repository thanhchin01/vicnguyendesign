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
                        <div x-data="{ openAdd: false }">
                            <!-- Nút mở modal -->
                            <button @click="openAdd = true"
                                class="px-3 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">
                                Thêm tin tức
                            </button>
                            <!-- Overlay -->
                            <div x-show="openAdd" class="fixed inset-0 bg-black/60 bg-opacity-50 z-40"
                                @click="openAdd = false">
                            </div>
                            <!-- Modal -->
                            <div x-show="openAdd"
                                class="fixed top-1/2 left-1/2 bg-white rounded-lg shadow-lg w-[800px] p-6 z-50
                -translate-x-1/2 -translate-y-1/2">
                                <h2 class="text-xl font-semibold mb-4">Thêm tin tức mới</h2>
                                <hr>
                                <form class="grid grid-cols-1 md:grid-cols-2 gap-3" action="" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <label class="block font-medium text-start mt-2">Tên tin tức</label>
                                        <input type="text" class="w-full border rounded p-2 mb-3">
                                        <label class="block font-medium text-start">Hình ảnh</label>
                                        <input type="file" class="w-full border rounded p-2 mb-3">
                                        <label class="block font-medium text-start">Mô tả ngắn</label>
                                        <textarea class="w-full h-[204px] border rounded p-2" name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div>
                                        <label class="block font-medium text-start mt-2">Nội dung</label>
                                        <textarea class="w-full h-[204px] border rounded p-2" name="" id="" cols="30" rows="10"></textarea>
                                        <label class="block font-medium text-start">Danh mục</label>
                                        <select class="w-full border rounded p-2 mb-3">
                                            <option>-- Danh mục --</option>
                                            <option>Hoàn thành</option>
                                            <option>Chưa hoàn thành</option>
                                        </select>
                                    </div>
                                    <div class="gap-2 mt-4">
                                        <button @click="openAdd = false" type="button"
                                            class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">
                                            Hủy
                                        </button>
                                        <button type="submit"
                                            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                            Lưu
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

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
                        <!-- Header -->
                        <div
                            class="grid grid-cols-[60px_repeat(7,1fr)] bg-blue-500 text-white font-semibold text-center rounded-lg">
                            <div class="py-3 border-r">#</div>
                            <div class="py-3 border-r">Tên tin tức</div>
                            <div class="py-3 border-r">Hình ảnh</div>
                            <div class="py-3 border-r">Mô tả ngắn</div>
                            <div class="py-3 border-r">Ngày tạo</div>
                            <div class="py-3 border-r">Nội dung</div>
                            <div class="py-3 border-r">Danh mục</div>
                            <div class="py-3">Action</div>
                        </div>

                        <!-- 1 Hàng dữ liệu -->
                        <div class="grid grid-cols-[60px_repeat(7,1fr)] text-center border-b">
                            <div class="py-3 border-r flex items-center justify-center">1</div>
                            <div class="py-3 border-r flex items-center justify-center">ANPHA OFFICE / AD9 ARCHITECTS</div>
                            <div class="py-3 border-r flex items-center justify-center p-4">
                                <img src="{{ Vite::asset('public/assect/image/Alpha/image1.jpg') }}"
                                    class="mx-auto rounded-md shadow ">
                            </div>
                            <div class="py-3 border-r flex items-center justify-center">
                                <button class="px-2 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-md text-sm">Xem
                                    nội dung</button>
                            </div>
                            <div class="py-3 border-r flex items-center justify-center">2024-11-15</div>
                            <div class="py-3 border-r flex items-center justify-center">
                                <button class="px-2 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-md text-sm">Xem
                                    nội dung</button>
                            </div>
                            <div class="py-3 border-r flex items-center justify-center">Sự kiện</div>
                            <div class="py-3 flex items-center justify-center gap-2">
                                <!-- MODAL Sửa DỰ ÁN -->
                                <div x-data="{ openAdd: false }">
                                    <!-- Nút mở modal -->
                                    <button @click="openAdd = true"
                                        class="px-2 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg">
                                        Sửa
                                    </button>
                                    <!-- Overlay -->
                                    <div x-show="openAdd" class="fixed inset-0 bg-black/60 bg-opacity-50 z-40"
                                        @click="openAdd = false">
                                    </div>
                                    <!-- Modal -->
                                    <div x-show="openAdd"
                                        class="fixed top-1/2 left-1/2 bg-white rounded-lg shadow-lg w-[800px] p-6 z-50
                -translate-x-1/2 -translate-y-1/2">
                                        <h2 class="text-xl font-semibold mb-4">Cập nhật tin tức</h2>
                                        <hr>
                                        <form class="grid grid-cols-1 md:grid-cols-2 gap-3" action="" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div>
                                                <label class="block font-medium text-start mt-2">Tên tin tức</label>
                                                <input type="text" class="w-full border rounded p-2 mb-3">
                                                <label class="block font-medium text-start">Hình ảnh</label>
                                                <input type="file" class="w-full border rounded p-2 mb-3">
                                                <label class="block font-medium text-start">Mô tả ngắn</label>
                                                <textarea class="w-full h-[204px] border rounded p-2" name="" id="" cols="30" rows="10"></textarea>
                                            </div>
                                            <div>
                                                <label class="block font-medium text-start mt-2">Nội dung</label>
                                                <textarea class="w-full h-[204px] border rounded p-2" name="" id="" cols="30" rows="10"></textarea>
                                                <label class="block font-medium text-start">Danh mục</label>
                                                <select class="w-full border rounded p-2 mb-3">
                                                    <option>-- Danh mục --</option>
                                                    <option>Hoàn thành</option>
                                                    <option>Chưa hoàn thành</option>
                                                </select>
                                            </div>
                                            <div class="gap-2 mt-4 text-start">
                                                <button @click="openAdd = false" type="button"
                                                    class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">
                                                    Hủy
                                                </button>
                                                <button type="submit"
                                                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                                    Cập nhật
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <button class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white rounded-lg">
                                    Xóa
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
