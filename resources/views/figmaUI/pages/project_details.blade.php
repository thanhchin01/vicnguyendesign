@extends('figmaUI.layouts.welcome')

@section('title', 'Project-home Page')

@section('content')
    <section class="max-w-[1250px] mx-auto mt-6 p-4 flex flex-col gap-6">
        <h1 class="tracking-wide text-3xl">NGUYET HOUSE</h1>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Cột trái -->
            <div class="col-span-6 mt-4 flex flex-col gap-3 max-h-[300px] overflow-y-auto p-4 border-r border-gray-200">
                <div class="flex justify-between">
                    <p>Thể loại:</p>
                    <p>Nhà ở</p>
                </div>
                <div class="flex justify-between">
                    <p>Địa chỉ:</p>
                    <p>Đồng Bẩm - Thái Nguyên</p>
                </div>
                <div class="flex justify-between">
                    <p>Thời gian:</p>
                    <p>2024</p>
                </div>
                <div class="flex justify-between">
                    <p>Diện tích:</p>
                    <p>400m2</p>
                </div>
                <div class="flex justify-between">
                    <p>Trạng thái:</p>
                    <p>Hoàn thành</p>
                </div>
                <div class="flex justify-between">
                    <p>Nhóm thiết kế:</p>
                    <div>
                        <p>Hưng Đào</p>
                        <p>VIC Nguyễn</p>
                        <p>Hoàng Anh</p>
                    </div>
                </div>
            </div>

            <!-- Cột phải -->
            <div class="col-span-6 mt-4 flex flex-col gap-3 max-h-[300px] overflow-y-auto p-4">
                <p class="tracking-wide">
                    Luu house là công trình nhà ở cho gia đình 3 thế hệ được xây dựng với diện tích khiêm tốn. Khách hàng
                    của chúng tôi là một cán bộ về hưu với mong muốn ngôi nhà là nơi khang trang, tươm tất để chứa đựng
                    những niềm vui sum vầy cùng con cháu khi về già. <br>
                    Khối chức năng sinh hoạt chung và đảm bảo số lượng phòng ngủ là những yêu cầu cơ bản. Chúng tôi tạo ra
                    một giếng trời lớn ở giữa nhà và sử dụng giải pháp lệch tầng cho các khối chức năng rồi liên kết lại
                    bằng các hệ cầu thang, trục giao thông hình thành và biến đổi tự nhiên theo hướng phát triển không gian
                    chức năng. Một khoảng rỗng lớn được thiết lập để duy trì tính cân bằng cho không gian, giúp lưu thông
                    không khí và điều tiết ánh sáng tự nhiên. Các phòng chức năng vẫn đảm bảo trang thái riêng tư và mở khi
                    cần, gợi mở hơn về một không gian sẽ kết nối thật nhiều tình yêu
                </p>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
            <img class="w-full h-[300px] object-cover" src="{{ Vite::asset('public/assect/Image/NguyetHouse/2.png') }}"
                alt="">
            <img class="w-full h-[300px] object-cover" src="{{ Vite::asset('public/assect/Image/NguyetHouse/3.png') }}"
                alt="">
            <img class="w-full h-[300px] object-cover" src="{{ Vite::asset('public/assect/Image/NguyetHouse/4.png') }}"
                alt="">
            <img class="w-full h-[300px] object-cover" src="{{ Vite::asset('public/assect/Image/NguyetHouse/5.png') }}"
                alt="">
            <img class="w-full h-[300px] object-cover" src="{{ Vite::asset('public/assect/Image/NguyetHouse/6.png') }}"
                alt="">
            <img class="w-full h-[300px] object-cover" src="{{ Vite::asset('public/assect/Image/NguyetHouse/7.png') }}"
                alt="">
            <img class="w-full h-[300px] object-cover" src="{{ Vite::asset('public/assect/Image/NguyetHouse/8.png') }}"
                alt="">
            <img class="w-full h-[300px] object-cover" src="{{ Vite::asset('public/assect/Image/NguyetHouse/9.png') }}"
                alt="">
            <img class="w-full h-[300px] object-cover" src="{{ Vite::asset('public/assect/Image/NguyetHouse/10.png') }}"
                alt="">
            <img class="w-full h-[300px] object-cover" src="{{ Vite::asset('public/assect/Image/NguyetHouse/11.png') }}"
                alt="">
            <img class="w-full h-[300px] object-cover" src="{{ Vite::asset('public/assect/Image/NguyetHouse/12.png') }}"
                alt="">
        </div>
    </section>
@endsection
