@extends('layouts.welcome')

@section('title', 'Home Page')

<section class="relative w-full h-screen overflow-hidden">
    <!-- Video nền -->
    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover scale-[1.3]">
        <source src="https://vicnguyendesign.org/frontend/images/clip.mp4" type="video/mp4">
    </video>

    <!-- Lớp phủ mờ nhẹ để làm nổi slogan -->
    <div class="absolute top-0 left-0 w-full h-full bg-black/40"></div>

    <!-- Phần slogan nằm giữa -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4 animate-fadeIn">
        <a href=" {{url('home')}} " id="logo">
            <img src="https://vicnguyendesign.org/frontend/images/logo.png" alt="Logo"
                class="w-32 md:w-48 mb-4 rounded-xl shadow-lg">
        </a>
        <p class="max-w-2xl text-sm md:text-lg leading-relaxed">
            "We aim to, at all times, provide our customers with the most Beautiful 3D Images, Attractive, Powerful &amp;
            as close to Reality as possible, through Digital Art."
        </p>
    </div>
</section>

<!-- Hiệu ứng mờ dần -->
<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn {
    animation: fadeIn 1.5s ease-in-out forwards;
}
</style>

