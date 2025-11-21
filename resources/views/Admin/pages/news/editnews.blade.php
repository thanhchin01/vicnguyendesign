@extends('Admin.layouts.welcome')

@section('title', 'Edit News Page')

@section('content')
    <section class="mt-2 p-4 h-auto">
        <div class="max-w-[1200px] mx-auto">
            <div class="container mx-auto">
                <h1 class="text-3xl font-semi-bold">SỬA TIN TỨC</h1>
                <div class="w-full border border-t-4 border-blue-500 bg-white rounded-lg p-4 flex flex-col gap-3 mt-3">
                    <label for="">Tên tin tức</label>
                    <input class="px-3 py-2 focus:outline-none border border-gray-400 rounded-lg shadow-md overflow-hidden"
                        type="text" name="" id="" placeholder="Tên tin tức">

                    <label for="slug">Permalink</label>
                    <div class="flex items-center border border-gray-400 rounded-lg shadow-md overflow-hidden">
                        <span class="px-3 py-2 bg-gray-100 text-gray-600 border-r">
                            http://127.0.0.1:8000/admin/
                        </span>
                        <input class="px-3 py-2 flex-1 focus:outline-none" type="text" id="slug" name="slug"
                            placeholder="nhap-duoi-duong-dan">
                    </div>

                    <label for="">Image</label>
                    <input class="px-3 py-2 focus:outline-none border border-gray-400 rounded-lg shadow-md overflow-hidden"
                        type="file" name="" id="" placeholder="Name project">
                    <label for="">Mô tả ngắn</label>
                    <textarea class="px-3 focus:outline-none border border-gray-400 rounded-lg shadow-md overflow-hidden h-30"
                        name="" id="" cols="30" rows="10" placeholder="Mô tả ngắn"></textarea>
                    <label for="">Ngày tạo</label>
                    <input class="px-3 py-2 focus:outline-none border border-gray-400 rounded-lg shadow-md overflow-hidden"
                        type="date" name="" id="" placeholder="Ngày tạo">
                    <label for="">Nội dung</label>
                    <textarea name="content" id="editor"></textarea>
                    <label for="">Danh mục</label>
                    <select
                        class="px-3 py-2 focus:outline-none border border-gray-400 rounded-lg shadow-md overflow-hidden">
                        <option>-- Danh mục --</option>
                        <option>Nhà ở</option>
                        <option>Biệt thự</option>
                        <option>Resort</option>
                    </select>
                    <div class="text-end">
                        <button class="px-3 py-3 rounded-xl bg-blue-500 hover:bg-blue-600 text-white">
                            Cập nhật
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
