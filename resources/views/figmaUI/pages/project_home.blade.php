@extends('figmaUI.layouts.welcome')

@section('title', 'Project-home Page')

@section('content')
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
