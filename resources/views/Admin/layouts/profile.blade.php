@extends('Admin.layouts.welcome')

@section('title', 'Home Page')

@section('content')
    <section class="h-auto">
        <div x-data="{ activeTab: 'profile' }" class="p-6 bg-gray-100 min-h-screen">
            {{-- Breadcrumbs (Nếu cần, có thể đặt vào đây hoặc layout cha) --}}
            <nav class="text-sm text-gray-500 mb-6">
                <a href="#" class="hover:underline">DASHBOARD</a> /
                <a href="#" class="hover:underline">PROFILE</a>
            </nav>

            <div class="max-w-[1200px] mx-auto">
                {{-- Tab Buttons Group (Btn Group) --}}
                <div class="flex border-b border-gray-200 mb-6">
                    <button @click="activeTab = 'profile'"
                        :class="{ 'bg-white text-blue-600 border-b-2 border-blue-600': activeTab === 'profile', 'text-gray-600 hover:text-gray-800': activeTab !== 'profile' }"
                        class="py-3 px-6 -mb-px text-sm font-medium focus:outline-none transition-colors duration-200">
                        <i class="fa-solid fa-user-circle me-2 text-lg"></i> User profile
                    </button>
                    <button @click="activeTab = 'avatar'"
                        :class="{ 'bg-white text-blue-600 border-b-2 border-blue-600': activeTab === 'avatar', 'text-gray-600 hover:text-gray-800': activeTab !== 'avatar' }"
                        class="py-3 px-6 -mb-px text-sm font-medium focus:outline-none transition-colors duration-200">
                        <i class="fa-solid fa-image me-2 text-lg"></i> Avatar
                    </button>
                    <button @click="activeTab = 'password'"
                        :class="{ 'bg-white text-blue-600 border-b-2 border-blue-600': activeTab === 'password', 'text-gray-600 hover:text-gray-800': activeTab !== 'password' }"
                        class="py-3 px-6 -mb-px text-sm font-medium focus:outline-none transition-colors duration-200">
                        <i class="fa-solid fa-lock me-2 text-lg"></i> Change password
                    </button>
                </div>
                {{-- Tab Content --}}
                <div class="bg-white p-8 rounded-lg shadow">
                    {{-- User Profile --}}
                    <div x-show="activeTab === 'profile'" x-transition:enter.duration.300ms
                        x-transition:leave.duration.150ms>
                        <h2 class="text-2xl font-bold mb-6 text-gray-800">User Profile</h2>
                        <form>
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">Full Name
                                    <span class="text-red-500">*</span></label>
                                <input type="text" id="first_name" name="first_name" value="Nguyen Van A"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6 mt-3">
                                <div>
                                    <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" id="username" name="username" value="admin"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span
                                            class="text-red-500">*</span></label>
                                    <input type="email" id="email" name="email" value="admin@gmail.com"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                </div>
                            </div>
                            <div class="mt-8 flex justify-end">
                                <button type="submit"
                                    class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"><i
                                        class="fa-regular fa-circle-check me-2"></i>Update</button>
                            </div>
                        </form>
                    </div>

                    {{-- Avatar Tab Content --}}
                    <div x-show="activeTab === 'avatar'" x-transition:enter.duration.300ms
                        x-transition:leave.duration.150ms>
                        <h2 class="text-2xl font-bold mb-6 text-gray-800">Change Avatar</h2>
                        <p class="text-gray-600">Upload a new profile picture here.</p>
                        <div class="mt-4 border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                            <input type="file" class="hidden" id="avatar-upload">
                            <label for="avatar-upload" class="cursor-pointer text-blue-600 hover:underline">Click to upload
                                or drag and drop</label>
                            <p class="text-sm text-gray-500 mt-2">PNG, JPG, up to 5MB</p>
                        </div>
                        <div class="mt-8 flex justify-end">
                            <button type="submit"
                                class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                                <i class="fa-regular fa-circle-check me-2"></i>Update</button>
                        </div>
                    </div>
                    {{-- Change Password Tab Content --}}
                    <div x-show="activeTab === 'password'" x-transition:enter.duration.300ms
                        x-transition:leave.duration.150ms>
                        <h2 class="text-2xl font-bold mb-6 text-gray-800">Change Password</h2>
                        <form>
                            <div class="mb-6">
                                <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Current
                                    Password</label>
                                <input type="password" id="current_password" name="current_password"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div class="mb-6">
                                <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1">New
                                    Password</label>
                                <input type="password" id="new_password" name="new_password"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div class="mb-6">
                                <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm
                                    New Password</label>
                                <input type="password" id="confirm_password" name="confirm_password"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div class="mt-8 flex justify-end">
                                <button type="submit"
                                    class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"><i
                                        class="fa-regular fa-circle-check me-2"></i>Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Đảm bảo bạn đã include Alpine.js và Font Awesome trong layout chính của mình --}}
    </section>
@endsection
