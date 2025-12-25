@extends('figmaUI.layouts.welcome')

@section('title', 'Project-home Page')

@section('content')
    <section class="max-w-[1250px] mx-auto mt-6 p-4 flex flex-col gap-6">
        <h1 class="tracking-wide text-3xl">{{ $project->title }}</h1>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Cột trái -->
            <div class="col-span-6 mt-4 flex flex-col gap-3 max-h-[300px] overflow-y-auto p-4 border-r border-gray-200">
                <div class="flex justify-between">
                    <p>Thể loại:</p>
                    <p>{{ $project->projects_categories->name }}</p>
                </div>
                <div class="flex justify-between">
                    <p>Địa chỉ:</p>
                    <p>{{ $project->address }}</p>
                </div>
                <div class="flex justify-between">
                    <p>Thời gian:</p>
                    <p>2024</p>
                </div>
                <div class="flex justify-between">
                    <p>Diện tích:</p>
                    <p>{{ $project->acreage }}</p>
                </div>
                <div class="flex justify-between">
                    <p>Trạng thái:</p>
                    <p>{{ $project->status == 1 ? 'Hoàn thành' : 'Chưa hoàn thành'}}</p>
                </div>
                <div class="flex justify-between">
                    <p>Nhóm thiết kế:</p>
                    <div>
                        {{ $project->team_design }}
                    </div>
                </div>
            </div>

            <!-- Cột phải -->
            <div class="col-span-6 mt-4 flex flex-col gap-3 max-h-[300px] overflow-y-auto p-4">
                <p class="tracking-wide">
                    {{ $project->description }}
                </p>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
            @if ($project->project_image && $project->project_image->count())
                @foreach ($project->project_image as $img)
                    <img class="w-full h-[300px] object-cover" src="{{ $img->image }}" alt="">
                @endforeach
            @else
                <p class="col-span-full text-center text-gray-400">
                    Dự án chưa có hình ảnh
                </p>
            @endif
        </div>
    </section>
@endsection
