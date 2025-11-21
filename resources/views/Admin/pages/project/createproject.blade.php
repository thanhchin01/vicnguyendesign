@extends('Admin.layouts.welcome')

@section('title', 'Create Project Page')

@section('content')
    <section class="mt-2 p-4 h-auto">
        <div class="max-w-[1200px] mx-auto">
            <div class="container mx-auto">
                <h1 class="text-3xl font-semi-bold">THÊM DỰ ÁN</h1>
                <div class="w-full border border-t-4 border-blue-500 bg-white rounded-lg p-4 flex flex-col gap-3 mt-3">
                    <label for="">Name project</label>
                    <input class="px-3 py-2 focus:outline-none border border-gray-400 rounded-lg shadow-md overflow-hidden"
                        type="text" name="" id="" placeholder="Name project">

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
                    <label for="">Address</label>
                    <input class="px-3 py-2 focus:outline-none border border-gray-400 rounded-lg shadow-md overflow-hidden"
                        type="text" name="" id="" placeholder="Address">
                    <label for="">Diện tích</label>
                    <input class="px-3 py-2 focus:outline-none border border-gray-400 rounded-lg shadow-md overflow-hidden"
                        type="text" name="" id="" placeholder="Diện tích">
                    <label for="">Ngày tạo</label>
                    <input class="px-3 py-2 focus:outline-none border border-gray-400 rounded-lg shadow-md overflow-hidden"
                        type="date" name="" id="" placeholder="Ngày tạo">
                    <label for="">Description</label>
                    <textarea class="px-3 focus:outline-none border border-gray-400 rounded-lg shadow-md overflow-hidden h-30"
                        name="" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                    <label for="">Trạng thái</label>
                    <select
                        class="px-3 py-2 focus:outline-none border border-gray-400 rounded-lg shadow-md overflow-hidden">
                        <option>-- Trạng thái --</option>
                        <option>Hoàn thành</option>
                        <option>Chưa hoàn thành</option>
                    </select>
                    <label for="">Danh mục</label>
                    <select
                        class="px-3 py-2 focus:outline-none border border-gray-400 rounded-lg shadow-md overflow-hidden">
                        <option>-- Danh mục --</option>
                        <option>Nhà ở</option>
                        <option>Biệt thự</option>
                        <option>Resort</option>
                    </select>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nhóm thiết kế</label>

                    <div class="p-3 border border-gray-300 rounded-lg bg-gray-50 max-h-40 overflow-y-auto">
                        {{-- Dữ liệu giả lập từ database --}}
                        @php
                            $designMembers = [
                                ['id' => 'vic_nguyen', 'name' => 'Vic Nguyen'],
                                ['id' => 'nga_nguyen', 'name' => 'Nga Nguyen'],
                                ['id' => 'hoang_nguyen', 'name' => 'Hoang Nguyen'],
                                ['id' => 'hung_nguyen', 'name' => 'Hung Nguyen'],
                                ['id' => 'duy_pham', 'name' => 'Duy Pham'],
                                ['id' => 'lan_huong', 'name' => 'Lan Huong'],
                                ['id' => 'minh_chau', 'name' => 'Minh Châu'],
                                ['id' => 'quang_huy', 'name' => 'Quang Huy'],
                            ];
                        @endphp

                        @foreach ($designMembers as $member)
                            <div
                                class="flex items-center py-1.5 hover:bg-white rounded-md px-2 transition-colors duration-150">

                                {{-- KHÔNG CÓ @if ($member['checked']) checked @endif --}}
                                <input id="member_{{ $member['id'] }}" name="design_team[]" type="checkbox"
                                    value="{{ $member['id'] }}"
                                    class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">

                                <label for="member_{{ $member['id'] }}"
                                    class="ml-3 text-sm text-gray-700 cursor-pointer w-full">
                                    {{ $member['name'] }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <input type="hidden" name="design_team" value=""> {{-- Thẻ hidden để đảm bảo mảng luôn tồn tại --}}

                    <div class="text-end">
                        <button class="px-3 py-3 rounded-xl bg-blue-500 hover:bg-blue-600 text-white">
                            Thêm mới
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
