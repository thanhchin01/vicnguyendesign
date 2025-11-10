@extends('figmaUI.layouts.welcome')

@section('title', 'Project-home Page')

@section('content')
    <section class="max-w-[1250px] mx-auto mt-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 p-4">
            <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/DNvilla/image1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">DA NANG VILLA</span>
                </div>
            </a>
            <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/NguyetHouse/1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">NGUYET HOUSE</span>
                </div>
            </a>
            <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/Bentre/image1.png') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">BEN TRE HOTEL</span>
                </div>
            </a>
             <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/LuuHouse/image1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">LUU HOUSE</span>
                </div>
            </a>
             <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/TDRHouse/image1.png') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">TDR HOUSE</span>
                </div>
            </a>
             <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/MeyVinh/image1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">MEY.VINH</span>
                </div>
            </a>
             <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/LVSHouse/image1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">LVS.HOUSE</span>
                </div>
            </a>
             <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/Komorebi/image1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">KOMOREBI 2</span>
                </div>
            </a>
             <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/KaHouse/image1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">KA HOUSE</span>
                </div>
            </a>
             <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/Sushi/image1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">SUSHI HARU</span>
                </div>
            </a>
             <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/D8/image1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">D8 HOUSE</span>
                </div>
            </a>
             <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/LongAn/image1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">LONG AN HOUSE</span>
                </div>
            </a>
             <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/Alpha/image1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">ALPHA HOUSE</span>
                </div>
            </a>
             <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/KSS/image1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">KSS HOUSE</span>
                </div>
            </a>
             <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/YenTho/image1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">YEN THO</span>
                </div>
            </a>
             <a href="{{ url('new/project/details-project') }}" class="relative group block overflow-hidden">
                <img src="{{ Vite::asset('resources/assect/Image/Ocean/image1.jpg') }}" alt=""
                    class="w-full h-81 object-cover transition-transform duration-300 group-hover:scale-110">

                <!-- Lớp phủ hiện chữ -->
                <div
                    class="absolute inset-0 bg-black/40 bg-opacity-50 flex items-center justify-center opacity-0
                        group-hover:opacity-100 transition-opacity duration-300">
                    <span class="text-white text-2xl tracking-wide">OCEAN RESORT</span>
                </div>
            </a>
        </div>
    </section>
@endsection
