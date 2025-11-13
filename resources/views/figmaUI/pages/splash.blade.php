<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Screen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="overflow-hidden">
    <!-- Splash -->
    <div id="splash"
        class="fixed top-0 left-0 w-full h-screen z-[9999] opacity-100 transition-opacity duration-1000 ease-out">
        <img src="{{ Vite::asset('public/assect/splash/splash.jpg') }}" alt="Splash Screen"
            class="absolute w-full h-full object-cover">
        <div class="fixed top-0 left-0 w-full text-white p-4 py-3 px-4 z-50">
            <p class="flex justify-center tracking-wide">"WE AIM TO, AT ALL TIMES, PROVIDE OUR
                CUSTOMERS WITH THE MOST BEAUTIFUL 3D IMAGES, ATTRACTIVE,</p>
            <p class="flex justify-center tracking-wide">POWERFUL & AS CLOSE TO REALITY AS POSSIBLE, THROUGH
                DIGITAL ART."</p>
        </div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
            <img class="w-[500px]" src="{{ Vite::asset('public/assect/Logo/2.png') }}" alt="">
        </div>
        <div class="fixed bottom-0 left-0 w-full text-white p-4 py-3 px-4 z-50 flex justify-center gap-5">
            <a href="https://www.facebook.com/Vicnguyendesign" target="_blank">
                <i class="fa-brands fa-facebook text-[30px]"></i>
            </a>
            <a href="https://www.behance.net/vicnguyendesign" target="_blank">
                <i class="fa-brands fa-instagram text-[30px]"></i>
            </a>
            <a href="" target="_blank">
                <i class="fa-solid fa-envelope text-[30px]"></i>
            </a>
        </div>
    </div>

    <script>
        // Sau 3 giây chuyển sang trang chủ
        setTimeout(() => {
            const splash = document.getElementById('splash');
            splash.classList.add('opacity-0'); // 🪄 Hiệu ứng mờ dần bằng Tailwind
            setTimeout(() => {
                window.location.href = "/new/project";
            }, 1000); // chờ 1s cho fade-out
        }, 3000);
    </script>
</body>

</html>
