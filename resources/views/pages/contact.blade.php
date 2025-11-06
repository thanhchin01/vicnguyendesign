@extends('layouts.welcome')

@section('title', 'Contact Page')

<section class="relative w-full min-h-screen">
    <!-- Ảnh nền -->
    <img src="https://vicnguyendesign.org/frontend/images/1.jpg"
         alt=""
         class="absolute top-0 left-0 w-full h-full object-cover -z-10">

    <!-- Lớp phủ mờ -->
    <div class="absolute top-0 left-0 w-full h-full bg-black/40 -z-10"></div>

    <!-- Phần nội dung -->
    <div class="relative flex flex-col justify-center text-white px-4 py-20 animate-fadeIn">
        <!-- 🔹 Div 1: slogan -->
        <div class="flex flex-col md:flex-row justify-center items-center text-center md:text-left gap-6">
            <a href="https://vicnguyendesign.org" id="logo">
                <img src="https://vicnguyendesign.org/frontend/images/logo.png" alt="Logo"
                     class="w-18 md:w-32 mb-4 rounded-xl shadow-lg mx-auto md:mx-0" />
            </a>

            <p class="max-w-2xl text-sm md:text-base leading-relaxed md:mt-20">
                "We aim to, at all times, provide our customers with the most Beautiful 3D Images,
                Attractive, Powerful &amp; as close to Reality as possible, through Digital Art."
            </p>
        </div>

        <!-- 🔹 Div 2: form -->
        <div class="p-4 container mx-auto mt-10 md:mt-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="flex flex-col gap-4">
            <label>Your name</label>
            <input class="px-8 py-3 border border-white bg-transparent rounded-lg w-full" type="text">
            <label>Email</label>
            <input class="px-8 py-3 border border-white bg-transparent rounded-lg w-full" type="email">
            <label>Object</label>
            <input class="px-8 py-3 border border-white bg-transparent rounded-lg w-full" type="text">
        </div>
        <div class="flex flex-col gap-4">
            <label>Your message</label>
            <textarea class="border border-white bg-transparent rounded-lg p-4 w-full" rows="10"></textarea>
        </div>
    </div>

    <!-- Nút gửi căn giữa -->
    <div class="flex justify-center mt-8">
        <button
            class="px-8 py-3 border border-white hover:bg-white/60 transition duration-300 text-white font-semibold rounded-lg shadow-md transition duration-300">
            Send
        </button>
    </div>
</div>

    </div>
</section>
