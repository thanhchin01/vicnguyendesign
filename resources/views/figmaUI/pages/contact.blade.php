@extends('figmaUI.layouts.welcome')

@section('title', 'Contact Page')

@section('content')
    <section class="max-w-[1250px] mx-auto mt-6 p-4 flex flex-col gap-4">
        <h1 class="text-3xl font-medium">THÔNG TIN DỰ ÁN</h1>
        <hr class="mt-4 text-gray-300">
        <form action="{{ route('designrequest.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-4">
                {{-- thông tin cá nhân --}}
                <div class="flex flex-col gap-3 mt-2">
                    <h1 class="font-medium text-lg">1. Thông tin cá nhân</h1>
                    <label for="fullname">Họ và tên</label>
                    <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="fullname" id="fullname"
                        required>
                    <label for="email">Email</label>
                    <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="email" name="email" id="email"
                        required>
                    <label for="job">Nghề nghiệp</label>
                    <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="job" id="job">
                    <div class="grid grid-cols-2 gap-4 mt-3">
                        <div> <label for="age">Tuổi</label>
                            <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="age"
                                id="age">
                        </div>
                        <div><label for="phone">Số điện thoại</label>
                            <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="phone" name="phone"
                                id="phone" required>
                        </div>
                    </div>
                </div>
                {{-- Thông tin dự án --}}
                <div class="flex flex-col gap-3 mt-2">
                    <h1 class="font-medium text-lg">2. Thông tin dự án</h1>
                    <label for="project_type">Loại hình</label>
                    <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="project_type"
                        id="project_type" required>
                    <label for="area">Diện tích</label>
                    <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="area" id="area"
                        required>
                    <label for="scale">Quy mô</label>
                    <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="scale" id="scale"
                        required>
                    <label for="location">Địa điểm</label>
                    <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="location" id="location"
                        required>
                </div>
                {{-- Thông tin chi tiết --}}
                <div class="flex flex-col gap-3 mt-2">
                    <h1 class="font-medium text-lg">3. Thông tin chi tiết</h1>
                    <label for="investment_cost">a. Nhà ở - Chi phí dự trữ đầu tư</label>
                    <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="investment_cost"
                        id="investment_cost" required>
                    <label for="people">a1. Số người sinh hoạt thường xuyên</label>
                    <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="people" id="people"
                        required>
                    <label for="expected_rooms">a2. Số phòng chức năng mong muốn</label>
                    <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="expected_rooms"
                        id="expected_rooms" required>
                    <label for="other_construction">b. Công trình khác - chi phí dự trù đầu tiên</label>
                    <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="other_construction"
                        id="other_construction">
                    <label for="function_description">b1. Mô tả chức năng</label>
                    <textarea class="bg-gray-300 w-full rounded-sm" name="function_description" id="function_description" cols="30"
                        rows="10"></textarea>
                </div>
                {{-- Thông tin khác --}}
                <div class="flex flex-col gap-3 mt-2">
                    <h1 class="font-medium text-lg">4. Thông tin khác</h1>
                    <label for="design_speed">Tiến độ mong muốn thiết kế</label>
                    <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="design_speed"
                        id="design_speed" required>
                    <label for="complete_speed">Tiến độ mong muốn hoàn thiện</label>
                    <input class="px-6 py-3 bg-gray-300 w-full rounded-sm" type="text" name="complete_speed"
                        id="complete_speed" required>
                    <label for="habits">Sở thích, thói quen</label>
                    <textarea class="bg-gray-300 w-full h-36 rounded-sm" name="habits" id="habits" cols="30" rows="10"></textarea>
                    <label for="content">Vì sao anh chị biết tới VIC</label>
                    <textarea class="bg-gray-300 w-full rounded-sm" name="content" id="content" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="px-6 py-2 bg-gray-300 rounded-sm hover:bg-white/20">Gửi</button>
            </div>
        </form>

    </section>
@endsection
