<nav class="shadow-lg px-6 py-2">
    <div class="max-w-[1600px] mx-auto flex justify-between items-center gap-5">
        <div class="flex gap-4">
            <a href="{{ url('admin/') }}" class="hover:underline hover:text-black text-gray-500"><i
                    class="fa-solid fa-house me-1"></i>Home</a>
            <a href="{{ url('admin/project') }}" class="hover:underline hover:text-black text-gray-500"><i
                    class="fa-solid fa-list-check me-1"></i>Project</a>
            <a href="{{ url('admin/news') }}" class="hover:underline hover:text-black text-gray-500"><i
                    class="fa-solid fa-newspaper me-1"></i>News</a>
            <a href="{{ url('admin/member') }}" class="hover:underline hover:text-black text-gray-500"><i
                    class="fa-solid fa-users me-1"></i>Member</a>
            <a href="{{ url('admin/contact') }}" class="hover:underline hover:text-black text-gray-500"><i
                    class="fa-solid fa-phone-flip me-1"></i>Contact</a>
        </div>
        <div class="flex gap-3">
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex items-center justify-center p-3 hover:bg-gray-100 rounded-full focus:outline-none transition duration-150 ease-in-out">
                    <i class="fa-regular fa-comment text-xl text-gray-500 hover:text-blue-500"></i>
                    <span
                        class="absolute top-2 right-2 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">
                        3
                    </span>
                </button>

                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="transform opacity-0 scale-90"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    class="absolute right-0 mt-3 w-80 bg-white rounded-xl shadow-2xl z-50 overflow-hidden">

                    <div class="px-4 py-3 border-b border-gray-100 bg-gray-50 flex justify-between items-center">
                        <h1 class="text-base font-semibold text-gray-800">Thông báo (15)</h1>
                        <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-700">Đánh dấu đã
                            đọc</a>
                    </div>

                    <div class="max-h-80 overflow-y-auto divide-y divide-gray-100">
                        <a href="#"
                            class="flex items-start p-4 bg-blue-50 hover:bg-gray-100 transition duration-100 ease-in-out">
                            <i class="fa-solid fa-bell text-blue-600 mt-1 mr-3"></i>
                            <div class="flex-grow">
                                <p class="text-sm font-semibold text-gray-900">Thông báo mới!</p>
                                <p class="text-xs text-gray-600 mt-1">Dự án 'Thiết kế...' vừa được cập nhật.</p>
                                <span class="text-xs text-blue-500 block mt-1">10 phút trước</span>
                            </div>
                        </a>

                        <a href="#"
                            class="flex items-start p-4 hover:bg-gray-100 transition duration-100 ease-in-out">
                            <i class="fa-solid fa-user-check text-green-600 mt-1 mr-3"></i>
                            <div class="flex-grow">
                                <p class="text-sm text-gray-700">Alexander đã tham gia dự án của bạn.</p>
                                <span class="text-xs text-gray-500 block mt-1">2 giờ trước</span>
                            </div>
                        </a>

                        <a href="#"
                            class="flex items-start p-4 hover:bg-gray-100 transition duration-100 ease-in-out">
                            <i class="fa-solid fa-circle-exclamation text-yellow-600 mt-1 mr-3"></i>
                            <div class="flex-grow">
                                <p class="text-sm text-gray-700">Đơn liên hệ mới từ user@example.com.</p>
                                <span class="text-xs text-gray-500 block mt-1">1 ngày trước</span>
                            </div>
                        </a>
                    </div>

                    <div class="p-2 border-t border-gray-100">
                        <a href="#"
                            class="block w-full text-center text-sm font-medium text-blue-600 hover:bg-blue-50 py-2 rounded-lg transition duration-150">
                            Xem tất cả thông báo
                        </a>
                    </div>
                </div>
            </div>

            {{-- thông tin cá nhân --}}
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex items-center space-x-2 p-2 hover:bg-gray-100 rounded-full focus:outline-none">
                    <img class="w-8 h-8 rounded-full object-cover" src="{{ Vite::asset('public/assect/Avatar/1.png') }}"
                        alt="Avatar">
                    <span class="text-gray-800 font-medium">Alexander Pierce</span>
                </button>

                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    class="absolute right-0 mt-2 w-72 bg-white rounded-lg shadow-xl z-50 overflow-hidden border border-gray-300">

                    <div class="bg-blue-600 text-white p-4 flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full border-4 border-white overflow-hidden mb-3">
                            <img class="w-full h-full object-cover"
                                src="{{ Vite::asset('public/assect/Avatar/1.png') }}" alt="Avatar Lớn">
                        </div>
                        <h3 class="text-lg font-semibold text-center">Vic Nguyen <p>CEO & Lead 3D Artist</p>
                        </h3>
                        <p class="text-xs opacity-80 mt-1">Member since Nov. 2023</p>
                    </div>
                    <div class="grid grid-cols-2">
                        <a href="{{ url('admin/profile') }}"
                            class="p-2 flex items-center justify-center border-r border-gray-200 hover:bg-gray-100">Profile</a>
                        <a href="{{ url('admin/changepassword') }}"
                            class="p-2 text-center border-r border-gray-200 hover:bg-gray-100">Change password</a>
                    </div>
                    <div class="p-1 flex items-center justify-center">
                        <a href="{{ url('admin/login') }}" class="p-2 text-center hover:bg-gray-100">Sign out<i
                                class="fa-solid fa-right-from-bracket ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
