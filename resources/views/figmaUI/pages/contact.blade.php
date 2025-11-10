@extends('figmaUI.layouts.welcome')

@section('title', 'Contact Page')

@section('content')
    <section class="max-w-[1250px] mx-auto mt-6 p-4 flex flex-col gap-4">
        <h1 class="text-3xl font-medium">THÔNG TIN DỰ ÁN</h1>
        <hr class="mt-4 text-gray-300">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-4">
            {{-- thông tin cá nhân --}}
            <div class="flex flex-col gap-3 mt-2">
                <h1 class="font-medium text-lg">1. Thông tin cá nhân</h1>
                <label for="">Họ và tên</label>
                <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="" id="">
                <label for="">Email</label>
                <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="email" name="" id="">
                <label for="">Nghề nghiệp</label>
                <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="" id="">
                <div class="grid grid-cols-2 gap-4 mt-3">
                    <div> <label for="">Tuổi</label>
                        <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="" id="">
                    </div>
                    <div><label for="">Số điện thoại</label>
                        <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="phone" name="" id="">
                    </div>
                </div>
            </div>
            {{-- Thông tin dự án --}}
            <div class="flex flex-col gap-3 mt-2">
                <h1 class="font-medium text-lg">2. Thông tin dự án</h1>
                <label for="">Loại hình</label>
                <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="" id="">
                <label for="">Diện tích</label>
                <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="" id="">
                <label for="">Quy mô</label>
                <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="" id="">
                <label for="">Địa điểm</label>
                <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="" id="">
            </div>
            {{-- Thông tin chi tiết --}}
            <div class="flex flex-col gap-3 mt-2">
                <h1 class="font-medium text-lg">3. Thông tin chi tiết</h1>
                <label for="">a. Nhà ở - Chi phí dự trữ đầu tư</label>
                <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="" id="">
                <label for="">a1. Số người sinh hoạt thường xuyên</label>
                <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="" id="">
                <label for="">a2. Số phòng chức năng mong muốn</label>
                <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="" id="">
                <label for="">b. Công trình khác - chi phí dự trù đầu tiên</label>
                <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="" id="">
                <label for="">b1. Mô tả chức năng</label>
                <textarea class="bg-gray-300 w-full rounded-sm" name="" id="" cols="30" rows="10"></textarea>
            </div>
            {{-- Thông tin khác --}}
             <div class="flex flex-col gap-3 mt-2">
                <h1 class="font-medium text-lg">4. Thông tin khác</h1>
                <label for="">Tiến độ mong muốn thiết kế</label>
                <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="" id="">
                <label for="">Tiến độ mong muốn hoàn thiện</label>
                <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="" id="">
                <label for="">Sở thích, thói quen</label>
                <textarea class="bg-gray-300 w-full h-36 rounded-sm" name="" id="" cols="30" rows="10"></textarea>
                <label for="">Vì sao anh chị biết tới VIC</label>
                <textarea class="bg-gray-300 w-full rounded-sm" name="" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="text-center">
            <button class="px-6 py-2 bg-gray-300 rounded-sm">Gửi</button>
        </div>
    </section>
@endsection
