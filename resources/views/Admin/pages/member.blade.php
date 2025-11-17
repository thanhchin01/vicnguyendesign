@extends('Admin.layouts.welcome')

@section('title', 'News Page')

@section('content')
    <section class="mt-2 p-4 h-auto">
        <div class="max-w-[1500px] mx-auto">
            <div class="max-w-[1400px] mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-3">
                    <div class="col-span-3">
                        <div class="w-full border border-t-4 border-blue-500 rounded-lg p-4 flex flex-col gap-2">
                            <h1 class="text-2xl font-semibold">Thêm nhân viên</h1>
                            <hr>
                            <label for="">Tên nhân viên</label>
                            <input class="px-3 py-1 bg-white rounded-lg" type="text" name="" id=""
                                placeholder="Nhập tên nhân viên">
                            <label for="">Tốt nghiệp</label>
                            <input class="px-3 py-1 bg-white rounded-lg" type="text" name="" id=""
                                placeholder="Nhập trường tốt nghiệp">
                            <label for="">Gia nhập</label>
                            <input class="px-3 py-1 bg-white rounded-lg" type="date" name="" id="">
                            <label for="">Chức vụ</label>
                            <input class="px-3 py-1 bg-white rounded-lg" type="text" name="" id="">
                            <label for="">Dự án đã tham gia</label>
                            <input class="px-3 py-1 bg-white rounded-lg" type="text" name="" id="">
                            <label for="">Giải thưởng</label>
                            <input class="px-3 py-1 bg-white rounded-lg" type="text" name="" id="">
                            <label for="">Hình ảnh</label>
                            <input class="px-3 py-1 bg-white rounded-lg" type="file" name="" id="">
                            <div>
                                <button class="px-3 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">Thêm</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-9">
                        <div class="w-full border border-t-4 border-blue-500 rounded-lg p-4 flex flex-col gap-2">
                            <h1 class="text-2xl font-medium text-start">Danh sách nhân viên</h1>
                            <hr>
                            <div class="p-4">
                                <!-- Header -->
                                <div
                                    class="grid grid-cols-[60px_repeat(9,1fr)] bg-blue-500 text-white font-semibold text-center rounded-lg">
                                    <div class="py-3 border-r">#</div>
                                    <div class="py-3 border-r">Tên nhân viên</div>
                                    <div class="py-3 border-r">Tốt nghiệp</div>
                                    <div class="py-3 border-r">Gia nhập</div>
                                    <div class="py-3 border-r">Chức vụ</div>
                                    <div class="py-3 border-r">Dự án</div>
                                    <div class="py-3 border-r">Giải thưởng</div>
                                    <div class="py-3 border-r">Hình ảnh</div>
                                    <div class="py-3 border-r">Trạng thái</div>
                                    <div class="py-3">Action</div>
                                </div>

                                <!-- 1 Hàng dữ liệu -->
                                <div class="grid grid-cols-[60px_repeat(9,1fr)] text-center border-b">
                                    <div class="py-3 border-r flex items-center justify-center">1</div>
                                    <div class="py-3 border-r flex items-center justify-center">Vic Nguyen</div>
                                    <div class="py-3 border-r flex items-center justify-center">Hà Nội</div>
                                    <div class="py-3 border-r flex items-center justify-center">2024-11-15</div>
                                    <div class="py-3 border-r flex items-center justify-center">CEO & Lead 3D Artish</div>
                                    <div class="py-3 border-r flex items-center justify-center">NGUYET HOUSE</div>
                                    <div class="py-3 border-r flex items-center justify-center">Giải 3 kiến trúc sư 2024
                                    </div>
                                    <div class="py-3 border-r flex items-center justify-center p-4">
                                        <img src="{{ Vite::asset('public/assect/avatar/1.png') }}"
                                            class="mx-auto rounded-md shadow ">
                                    </div>
                                    <div class="border-r flex items-center justify-center">
                                        <span class="px-2 py-1 rounded-xl bg-green-500 text-white">Đang làm</span>
                                    </div>
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
                                                <h2 class="text-xl font-semibold mb-4 text-start">Cập nhật nhân viên</h2>
                                                <hr>
                                                <form class="grid grid-cols-1 md:grid-cols-2 gap-3" action=""
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div>
                                                        <label class="block font-medium text-start mt-2">Tên nhân
                                                            viên</label>
                                                        <input type="text" class="w-full border rounded p-2 mb-3">
                                                        <label class="block font-medium text-start">Tốt nghiệp</label>
                                                        <input type="file" class="w-full border rounded p-2 mb-3">
                                                        <label class="block font-medium text-start">Gia nhập</label>
                                                        <input type="date" class="w-full border rounded p-2 mb-3">
                                                        <label class="block font-medium text-start">Chức vụ</label>
                                                        <input type="text" class="w-full border rounded p-2 mb-3">
                                                    </div>
                                                    <div>
                                                        <label class="block font-medium text-start mt-2">Dự án</label>
                                                        <input type="text" class="w-full border rounded p-2 mb-3">
                                                        <label class="block font-medium text-start">Giải thưởng</label>
                                                        <input type="text" class="w-full border rounded p-2 mb-3">
                                                        <label class="block font-medium text-start">Hình ảnh</label>
                                                        <input type="file" class="w-full border rounded p-2 mb-3">
                                                        <label class="block font-medium text-start">Trạng thái</label>
                                                        <select class="w-full border rounded p-2 mb-3" name=""
                                                            id="">
                                                            <option>-- Trạng thái --</option>
                                                            <option>Đang làm</option>
                                                            <option>Đã nghỉ</option>
                                                        </select>
                                                    </div>
                                                    <div class="gap-2 mt-4 flex flex-start">
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
            </div>
        </div>
    </section>
@endsection
