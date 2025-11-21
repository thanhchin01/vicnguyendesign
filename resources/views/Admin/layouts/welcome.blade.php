<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vic Nguyen Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/admin.js'])
   <script src="https://cdn.ckeditor.com/4.22.1/full-all/ckeditor.js"></script>

</head>
<body class="min-h-screen flex flex-col">
   <div x-data="{ isSidebarOpen: true }" class="flex h-screen">

        {{-- 1. SIDEBAR --}}
        @include('Admin.layouts.slidebar')

        <div class="flex-1 flex flex-col overflow-hidden">
            {{-- 2. TOPBAR (Header/Navbar) --}}
            @include('Admin.layouts.top')

            {{-- 3. MAIN CONTENT --}}
            <main class="flex-1 overflow-x-hidden overflow-y-auto ">
                @yield('content')
            </main>

            {{-- 4. FOOTER (Admin Footer) --}}
            @include('Admin.layouts.footer')
        </div>
    </div>
</body>
</html>
