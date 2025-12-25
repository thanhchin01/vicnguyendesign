<nav class="">
    <!-- Logo + tên thương hiệu -->
    <div class="flex justify-between items-center py-4 px-6 md:justify-center">
        <a href="/new" class="flex items-center justify-center space-x-4">
            <!-- Logo -->
            <div class="px-3 flex items-center h-14 md:h-20">
                <img src="{{ Vite::asset('public/assect/Logo/1.png') }}" alt="Logo"
                    class="h-full object-contain rounded-xl">
            </div>
        </a>
        <!-- Nút hamburger (hiện khi nhỏ hơn md) -->
        <button id="menu-toggle" class="md:hidden text-3xl focus:outline-none">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <!-- Menu chính -->
    <div id="menu" class="hidden md:flex justify-center items-center py-4">
        <ul class="flex flex-col md:flex-row gap-4 md:gap-9 text-base text-center">
            {{-- Dự án --}}
            <li><a href="{{ url('new/project') }}"
                    class="font-semibold transition {{ Request::is('new/project*') ? 'text-red-500' : 'hover:text-red-500' }}">Dự
                    án</a></li>
            {{-- Vicer --}}
            <li class="relative group">
                <button
                    class="font-semibold hover:text-red-500 transition flex items-center justify-center gap-1 {{ Request::is('new/studio') || Request::is('new/member') ? 'text-red-500' : 'hover:text-red-500' }}">
                    VICer
                </button>
                <!-- Menu con -->
                <ul
                    class="absolute left-0 md:left-auto md:right-0 top-full bg-white shadow-lg rounded-lg hidden
                   group-hover:block md:min-w-[160px] text-gray-700 z-50 md:text-left">
                    <li><a href="{{ url('new/studio') }}"
                            class="block px-4 py-2 hover:text-red-600 transition {{ Request::is('new/studio') ? 'text-red-500' : 'hover:text-red-500' }}">Studio</a>
                    </li>
                    <li><a href="{{ url('new/member') }}"
                            class="block px-4 py-2 hover:text-red-600 transition {{ Request::is('new/member') ? 'text-red-500' : 'hover:text-red-500' }}">Thành
                            vên</a>
                    </li>
                </ul>
            </li>
            {{-- Tin tức --}}
            <li><a href="{{ url('new/news') }}" class="font-semibold hover:text-red-500 transition {{ Request::is('new/news*') ? 'text-red-500' : 'hover:text-red-500' }}">Tin tức</a></li>
            <!-- Liên hệ có menu con -->
            <li class="relative group">
                <button
                    class="font-semibold hover:text-red-500 transition flex items-center justify-center gap-1 {{ Request::is('new/address') || Request::is('new/contact') ? 'text-red-500' : 'hover:text-red-500' }}">
                    Liên hệ
                </button>
                <!-- Menu con -->
                <ul
                    class="absolute left-0 md:left-auto md:right-0 top-full bg-white shadow-lg rounded-lg hidden
                   group-hover:block md:min-w-[160px] text-gray-700 z-50 md:text-left">
                    <li><a href="{{ url('new/address') }}"
                            class="block px-4 py-2 hover:text-red-600 transition {{ Request::is('new/address') ? 'text-red-500' : 'hover:text-red-500' }}">Địa
                            điểm</a></li>
                    <li><a href="{{ route('designrequest.index') }}"
                            class="block px-4 py-2 hover:text-red-600 transition {{ Request::is('new/contact') ? 'text-red-500' : 'hover:text-red-500' }}">Phiếu
                            thông tin</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<!-- Script toggle menu -->
<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
        menu.classList.toggle('flex-col');
        menu.classList.toggle('py-4');
        menu.classList.toggle('animate-fadeIn');
    });
</script>

<!-- Hiệu ứng mở mượt (thêm vào cuối file CSS hoặc style tag) -->
<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.3s ease-in-out;
    }
</style>
