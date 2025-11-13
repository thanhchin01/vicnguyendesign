@extends('figmaUI.layouts.welcome')

@section('title', 'Studio Page')

@section('content')
    <section class="max-w-[1250px] mx-auto mt-5 p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4">
            <a class="flex flex-col gap-3" href="{{ url('new/news/details') }}">
                <img class="w-full h-[400px] object-cover" src="{{ Vite::asset('public/assect/News/1.jpg') }}" alt="">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-semibold">THE BACKYARD HOUSE | VIC DAILY</h1>
                    <p>16/11/2025</p>
                </div>
                <hr class="w-16 border-3 border-red-500">
                <p>LPHV là dự án nhà ở được thiết kế và xây dựng tại thành phố Vinh, Nghệ An.LPHV là một thiết kế tiện nghi
                    trong sinh hoạt, gần gũi về cảm giác, quen thuộc, về hình ảnh nhưng khơi gợi được những khám phá mới
                    trong cấu trúc không gian sống truyền thống.
                </p>
                <p class="text-blue-500">Backyardhouse.vic.vn</p>
            </a>
             <a class="flex flex-col gap-3" href="{{ url('new/news/details') }}">
                <img class="w-full h-[400px] object-cover" src="{{ Vite::asset('public/assect/News/2.jpg') }}" alt="">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-semibold">THE BACKYARD HOUSE | VIC DAILY</h1>
                    <p>16/11/2025</p>
                </div>
                <hr class="w-16 border-3 border-red-500">
                <p>LPHV là dự án nhà ở được thiết kế và xây dựng tại thành phố Vinh, Nghệ An.LPHV là một thiết kế tiện nghi
                    trong sinh hoạt, gần gũi về cảm giác, quen thuộc, về hình ảnh nhưng khơi gợi được những khám phá mới
                    trong cấu trúc không gian sống truyền thống.
                </p>
                <p class="text-blue-500">Backyardhouse.vic.vn</p>
            </a>
            <a class="flex flex-col gap-3" href="{{ url('new/news/details') }}">
                <img class="w-full h-[400px] object-cover" src="{{ Vite::asset('public/assect/News/1.jpg') }}" alt="">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-semibold">THE BACKYARD HOUSE | VIC DAILY</h1>
                    <p>16/11/2025</p>
                </div>
                <hr class="w-16 border-3 border-red-500">
                <p>LPHV là dự án nhà ở được thiết kế và xây dựng tại thành phố Vinh, Nghệ An.LPHV là một thiết kế tiện nghi
                    trong sinh hoạt, gần gũi về cảm giác, quen thuộc, về hình ảnh nhưng khơi gợi được những khám phá mới
                    trong cấu trúc không gian sống truyền thống.
                </p>
                <p class="text-blue-500">Backyardhouse.vic.vn</p>
            </a>
            <a class="flex flex-col gap-3" href="{{ url('new/news/details') }}">
                <img class="w-full h-[400px] object-cover" src="{{ Vite::asset('public/assect/News/2.jpg') }}" alt="">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-semibold">THE BACKYARD HOUSE | VIC DAILY</h1>
                    <p>16/11/2025</p>
                </div>
                <hr class="w-16 border-3 border-red-500">
                <p>LPHV là dự án nhà ở được thiết kế và xây dựng tại thành phố Vinh, Nghệ An.LPHV là một thiết kế tiện nghi
                    trong sinh hoạt, gần gũi về cảm giác, quen thuộc, về hình ảnh nhưng khơi gợi được những khám phá mới
                    trong cấu trúc không gian sống truyền thống.
                </p>
                <p class="text-blue-500">Backyardhouse.vic.vn</p>
            </a>
            <a class="flex flex-col gap-3" href="{{ url('new/news/details') }}">
                <img class="w-full h-[400px] object-cover" src="{{ Vite::asset('public/assect/News/1.jpg') }}" alt="">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-semibold">THE BACKYARD HOUSE | VIC DAILY</h1>
                    <p>16/11/2025</p>
                </div>
                <hr class="w-16 border-3 border-red-500">
                <p>LPHV là dự án nhà ở được thiết kế và xây dựng tại thành phố Vinh, Nghệ An.LPHV là một thiết kế tiện nghi
                    trong sinh hoạt, gần gũi về cảm giác, quen thuộc, về hình ảnh nhưng khơi gợi được những khám phá mới
                    trong cấu trúc không gian sống truyền thống.
                </p>
                <p class="text-blue-500">Backyardhouse.vic.vn</p>
            </a>
        </div>
    </section>
@endsection
