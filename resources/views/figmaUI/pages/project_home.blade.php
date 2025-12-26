@extends('figmaUI.layouts.welcome')

@section('title', 'Project-home Page')

@section('content')
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
    <section class="max-w-[1250px] mx-auto mt-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 p-4">
            @foreach ($projects as $item)
                <a href="{{ route('details.project', $item->slug) }}" class="relative group block overflow-hidden">
                    <img src="{{ $item->image_url }}" alt=""
                        class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">
                    <!-- Lớp phủ hiện chữ -->
                    <div
                        class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-2xl tracking-wide">{{ $item->title }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection

