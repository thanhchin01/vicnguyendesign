<aside x-data="{ isSidebarOpen: true }" :class="isSidebarOpen ? 'w-64' : 'w-18'"
    class="flex flex-col h-screen bg-gray-800 text-white shadow-xl transition-all duration-300">

    <div class="mt-4 flex-1 overflow-y-auto overflow-x-hidden">

        {{-- MENU ITEMS --}}
        @php
            $menuItems = [
                ['url' => 'admin/', 'icon' => 'fa-solid fa-house', 'name' => 'Home'],
                ['url' => 'admin/project', 'icon' => 'fa-solid fa-list-check', 'name' => 'Project'],
                ['url' => 'admin/news', 'icon' => 'fa-solid fa-newspaper', 'name' => 'News'],
                ['url' => 'admin/member', 'icon' => 'fa-solid fa-users', 'name' => 'Member'],
                ['url' => 'admin/notice', 'icon' => 'fa-solid fa-phone-flip', 'name' => 'Notice'],
            ];
            $currentPath = request()->path();
        @endphp

        <nav class="flex flex-col space-y-1">
            {{-- CHỈNH SỬA TẠI ĐÂY: NÚT TOGGLE ĐƯỢC ĐẶT NGAY TRONG NAV --}}
            <div :class="isSidebarOpen ? 'justify-start' : 'justify-start'"
                class="flex items-center px-4 mb-2 transition-colors duration-150">

                {{-- Nút Toggle Sidebar --}}
                <button @click="isSidebarOpen = !isSidebarOpen"
                    class="p-2 rounded-md hover:bg-gray-700 text-xl focus:outline-none text-start">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            {{-- KẾT THÚC CHỈNH SỬA NÚT TOGGLE --}}


            @foreach ($menuItems as $item)
                @php
                    $isActive =
                        $currentPath === $item['url'] ||
                        (str_starts_with($currentPath, $item['url']) && $item['url'] !== 'admin/');
                @endphp

                <a href="{{ url($item['url']) }}" :class="isSidebarOpen ? 'justify-start' : 'justify-center'"
                    class="flex items-center py-3 px-7 transition-colors duration-150 rounded-md
                    {{ $isActive ? 'text-white font-semibold bg-blue-600 border-l-4 border-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">

                    {{-- Icon --}}
                    <i class="{{ $item['icon'] }} text-sm" :class="isSidebarOpen ? 'w-6 me-3' : 'w-full'"></i>

                    {{-- Tên Menu --}}
                    <span x-show="isSidebarOpen" x-transition:enter.duration.200ms
                        x-transition:leave.duration.50ms>{{ $item['name'] }}</span>

                    {{-- Badge (ví dụ cho Contact) --}}
                    @if ($item['name'] === 'Contact')
                        <span x-show="isSidebarOpen"
                            class="ms-auto bg-red-500 text-xs font-medium px-2 py-0.5 rounded-full"
                            x-transition>4</span>
                    @endif
                </a>
            @endforeach
        </nav>
    </div>
</aside>
