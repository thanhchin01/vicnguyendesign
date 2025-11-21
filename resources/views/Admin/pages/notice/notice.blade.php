@extends('Admin.layouts.welcome')

@section('title', 'Project Page')

@section('content')
    <section class="mt-2 p-4 h-auto">
        <div class="max-w-[1500px] mx-auto">
            <div class="container mx-auto">
                <div class="w-full border border-t-4 border-blue-500 bg-white rounded-lg">
                    <div class="flex flex-col sm:flex-row justify-between p-4 items-start sm:items-center">
                        <h1 class="text-2xl font-semibold">Danh sách thông báo</h1>
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
                                class="grid grid-cols-[60px_2fr_1fr_1fr_1fr_1fr_1fr_1.5fr] text-xs md:text-sm text-gray-700 font-bold bg-gray-100 border-b min-w-[1200px]">
                                <div class="py-3 px-2 text-center">#</div>
                                <div class="py-3 px-4">Họ và tên</div>
                                <div class="py-3 px-4">Email</div>
                                <div class="py-3 px-4">Nghề nghiệp</div>
                                <div class="py-3 px-4 text-center">Tuổi</div>
                                <div class="py-3 px-4 text-center">Số điện thoại</div>
                                <div class="py-3 px-4 text-center">Trạng thái</div>
                                <div class="py-3 px-4 text-center">Action</div>
                            </div>
                            <div
                                class="grid grid-cols-[60px_2fr_1fr_1fr_1fr_1fr_1fr_1.5fr] text-sm text-gray-600 border-b hover:bg-gray-50 min-w-[1200px]">
                                <div class="py-3 px-2 flex items-center justify-center">1</div>
                                <div class="py-3 px-4 font-semibold text-gray-800 flex items-center">Nguyễn Văn A</div>
                                <div class="py-3 px-4 flex items-center">nguyenvana@gmail.com</div>
                                <div class="py-3 px-4 flex items-center justify-center">Kiến trúc sư</div>
                                <div class="py-3 px-4 flex items-center justify-center">25</div>
                                <div class="py-3 px-4 flex items-center justify-center">0123456789</div>
                                <div class="py-3 px-4 flex items-center justify-center text-center">
                                    <span
                                        class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">Đọc</span>
                                </div>
                                <div class="py-3 px-4 flex items-center justify-center gap-1 md:gap-2">
                                    <a href="{{ url('admin/editproject') }}"
                                        class="p-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-md text-sm transition-colors duration-150"
                                        title="Chỉnh sửa"><i class="fa-solid fa-pencil"></i></a>
                                    <button
                                        class="p-2 bg-red-500 hover:bg-red-600 text-white rounded-md text-sm transition-colors duration-150"
                                        title="Xóa">
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
