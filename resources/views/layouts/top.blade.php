<nav class="fixed top-0 left-0 w-full bg-black/70 backdrop-blur-sm text-white p-4 py-3 px-4 z-50">
    <div class="flex justify-between items-center">
        <!-- Logo / Tên thương hiệu -->
        <a href="/"
            class="font-semibold text-sm sm:text-base text-gray-300 hover:text-white transition duration-300">
            ARCH - DESIGN & 3DVISUALIZATION
        </a>

        <!-- Nút menu trên mobile -->
        <button id="menu-toggle" class="md:hidden text-2xl focus:outline-none">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Menu chính -->
        <ul id="menu" class="hidden md:flex gap-6 text-sm">
            <li><a href=" {{ url('portfolio') }} " class="font-semibold text-gray-300 transition {{ Request::is('portfolio') ? 'text-white' : 'hover:text-white' }}">Portfolio</a></li>
            <li><a href=" {{ url('model') }} " class="font-semibold text-gray-300 transition {{ Request::is('model') ? 'text-white' : 'hover:text-white' }}">Model</a></li>
            <li><a href=" {{ url('team') }} " class="font-semibold text-gray-300 transition {{ Request::is('team') ? 'text-white' : 'hover:text-white' }}">Team</a></li>
            <li><a href=" {{ url('about') }} " class="font-semibold text-gray-300 transition {{ Request::is('about') ? 'text-white' : 'hover:text-white' }}">About</a></li>
            <li><a href=" {{ url('contact') }} " class="font-semibold text-gray-300 transition {{ Request::is('contact') ? 'text-white' : 'hover:text-white' }}">Contact</a></li>
        </ul>
    </div>

    <!-- Menu mobile thả xuống -->
    <ul id="mobile-menu"
        class="hidden flex-col gap-3 mt-3 text-sm md:hidden bg-black/80 p-3 rounded-xl backdrop-blur-sm">
        <li><a href=" {{ url('portfolio') }} " class="text-gray-300 hover:text-white transition">Portfolio</a></li>
        <li><a href=" {{ url('model') }} " class="text-gray-300 hover:text-white transition">Model</a></li>
        <li><a href=" {{ url('team') }} " class="text-gray-300 hover:text-white transition">Team</a></li>
        <li><a href=" {{ url('about') }} " class="text-gray-300 hover:text-white transition">About</a></li>
        <li><a href=" {{ url('contact') }} " class="text-gray-300 hover:text-white transition">Contact</a></li>
    </ul>
</nav>

<script>
    // Toggle menu khi bấm nút trên mobile
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>
