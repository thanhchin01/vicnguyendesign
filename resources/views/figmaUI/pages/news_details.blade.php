@extends('figmaUI.layouts.welcome')

@section('title', 'Studio Page')

@section('content')
    <section class="max-w-[1250px] mx-auto mt-5 p-4">
        @if ($news)
            <h1 class="text-3xl font-base tracking-wide">{{ $news->title }}</h1>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 mt-9">
                <div class="col-span-8 flex flex-col gap-6">
                    <p>{!! $news->content !!}</p>
                </div>
                <div class="col-span-4 bg-gray-300 h-fit p-4">
                    <div class="flex flex-col gap-4">
                        <h1 class="text-xl font-medium">BÀI VIẾT KHÁC</h1>
                        <a class="flex gap-1" href="">
                            <img class="w-[150px] h-[150px] object-cover"
                                src="{{ Vite::asset('public/assect/News/3.png') }}" alt="">
                            <p class="font-semibold">Refuge in the Valley | Zanesco Arquaitetura</p>
                        </a>
                        <a class="flex gap-1" href="">
                            <img class="w-[150px] h-[150px] object-cover"
                                src="{{ Vite::asset('public/assect/News/4.jpg') }}" alt="">
                            <p class="font-semibold">Refuge in the Valley | Zanesco Arquaitetura</p>
                        </a>
                        <a class="flex gap-1" href="">
                            <img class="w-[150px] h-[150px] object-cover"
                                src="{{ Vite::asset('public/assect/News/5.png') }}" alt="">
                            <p class="font-semibold">Refuge in the Valley | Zanesco Arquaitetura</p>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection
