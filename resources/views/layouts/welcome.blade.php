<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vic Nguyen Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="min-h-screen flex flex-col">
    {{-- Gọi phần menu --}}
    @include('includes.top')

    {{-- Nội dung chính --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Gọi phần footer --}}
    @include('includes.footer')
</body>
</html>
