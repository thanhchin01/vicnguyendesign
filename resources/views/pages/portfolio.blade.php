@extends('layouts.welcome')

@section('title', 'Portfolio Page')

<section class="relative h-screen overflow-hidden">
    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover">
        <source src="https://vicnguyendesign.org/frontend/images/clip2.mp4" type="video/mp4">
    </video>

    <!-- Lớp phủ mờ nhẹ để làm nổi slogan -->
    <div class="absolute top-0 bottom-0 left-0 w-full h-full bg-black/40"></div>

    <!-- Phần slogan nằm giữa -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4">
        <a href="https://vicnguyendesign.org" id="logo">
            <img src="https://vicnguyendesign.org/frontend/images/logo.png" alt="Logo"
                class="w-32 md:w-48 mb-4 rounded-xl shadow-lg">
        </a>
        <p class="font-semibold max-w-2xl text-sm md:text-lg leading-relaxed">
            "We aim to, at all times, provide our customers with the most Beautiful 3D Images, Attractive, Powerful
            &amp;
            as close to Reality as possible, through Digital Art."
        </p>
        <a href=" {{ url('contact') }} "
            class="border border-black bg-transparent hover:bg-white/60 transition duration-300 px-6 py-2 rounded-xl mt-3">Contact
            us</a>
    </div>
</section>
<!-- Nội dung phía dưới (cuộn được) -->
<section class="bg-white text-black">
    {{-- ảnh ở dưới --}}
    {{-- <!-- 3 card đầu tiên giữ nguyên -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-5">
        <a class="text-center gap-3 block" title="Lagoona Binh Chau resort 01"
            href="https://vicnguyendesign.org/uploads/static/KH%20A1v4%20final.jpg">
            <img src="https://vicnguyendesign.org/uploads/static/KH%20A1v4%20final.jpg" alt=""
                class="w-full rounded-xl shadow-md hover:scale-102 transition-transform duration-300">
            <p class="font-medium mt-2">Lagoona Binh Chau resort 01</p>
        </a>

        <a class="text-center gap-3 block" title="USA school 07"
            href="https://vicnguyendesign.org/uploads/static/GA%20v001A2.jpg">
            <img src="https://vicnguyendesign.org/uploads/static/GA%20v001A2.jpg" alt=""
                class="w-full rounded-xl shadow-md hover:scale-102 transition-transform duration-300">
            <p class="font-medium mt-2">USA school 07</p>
        </a>

        <a class="text-center gap-3 block" title="USA school 006"
            href="https://vicnguyendesign.org/uploads/static/Evergreen%20CS%20v003A4%20final.jpg">
            <img src="https://vicnguyendesign.org/uploads/static/Evergreen%20CS%20v003A4%20final.jpg" alt=""
                class="w-full rounded-xl shadow-md hover:scale-102 transition-transform duration-300">
            <p class="font-medium mt-2">USA school 06</p>
        </a>
    </div> --}}

    <!-- Các card phía dưới: Masonry layout -->
    <div class="columns-1 sm:columns-2 lg:columns-3 gap-4 p-5 [column-fill:_balance]">
        {{-- <a class="mb-4 break-inside-avoid block text-center fade-in-up" title="USA school 003"
            href="https://vicnguyendesign.org/uploads/static/Evergreen%20CS%20v001A4%20final.jpg">
            <img src="https://vicnguyendesign.org/uploads/static/Evergreen%20CS%20v001A4%20final.jpg" alt=""
                class="w-full rounded-xl shadow-md hover:scale-102 transition-transform duration-300">
            <p class="font-medium mt-2">USA school 03</p>
        </a>

        <a class="mb-4 break-inside-avoid block text-center fade-in-up" title="USA school 004"
            href="https://vicnguyendesign.org/uploads/static/us%20school1.jpg">
            <img src="https://vicnguyendesign.org/uploads/static/us%20school1.jpg" alt=""
                class="w-full rounded-xl shadow-md hover:scale-102 transition-transform duration-300">
            <p class="font-medium mt-2">USA school 04</p>
        </a>

        <a class="mb-4 break-inside-avoid block text-center fade-in-up" title="USA school 005"
            href="https://vicnguyendesign.org/uploads/static/Evergreen%20CS%20v006A4%20final.jpg">
            <img src="https://vicnguyendesign.org/uploads/static/Evergreen%20CS%20v006A4%20final.jpg" alt=""
                class="w-full rounded-xl shadow-md hover:scale-102 transition-transform duration-300">
            <p class="font-medium mt-2">USA school 05</p>
        </a> --}}
         @foreach ($images as $item)
        <a class="mb-4 break-inside-avoid block text-center fade-in-up"
           title="{{ $item->title }}"
           href="{{ asset('upload/portfolio/' . $item->image) }}">

            <img loading="lazy" src="{{ asset('upload/portfolio/' . $item->image) }}"
                 alt="{{ $item->title }}"
                 class="w-full rounded-xl shadow-md hover:scale-102 transition-transform duration-300">

            <p class="font-medium mt-2">{{ $item->title }}</p>
        </a>
    @endforeach
    </div>

</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const elements = document.querySelectorAll('.fade-in-up');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, {
            threshold: 0.2
        }); // xuất hiện 20% là bắt đầu hiện

        elements.forEach(el => observer.observe(el));
    });
</script>
