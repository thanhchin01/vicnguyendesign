@extends('figmaUI.layouts.welcome')

@section('title', 'Studio Page')

@section('content')
    <section class="max-w-[1250px] mx-auto mt-5 p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4">
            @foreach ($news as $item)
                <a class="flex flex-col gap-3" href="{{ route('details.news', $item->slug) }}">
                    <img class="w-full h-[400px] object-cover" src="{{ $item->image }}" alt="">
                    <div class="flex justify-between items-center">
                        <h1 class="text-2xl font-semibold">{{ $item->title }}</h1>
                        <p>{{ $item->date }}</p>
                    </div>
                    <hr class="w-16 border-3 border-red-500">
                    <p>{{ $item->sumary }}</p>
                    <p class="text-blue-500">Backyardhouse.vic.vn</p>
                </a>
            @endforeach
        </div>
    </section>
@endsection
