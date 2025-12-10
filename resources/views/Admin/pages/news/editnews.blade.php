@extends('Admin.layouts.welcome')

@section('title', 'Edit News Page')

@section('content')
   <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/news') }}">News</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Edit a News</h1>
                </li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Edit a News</div>
            </div>
            <!--end::Header-->
            <!--begin::Form-->
            <form action="{{ route('admin.news.update', $news->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $news->title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $news->slug) }}">
                    </div>
                    <label for="" class="form-label">Hình ảnh</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="image" name="image">
                        <label class="input-group-text" for="image">Upload</label>
                    </div>
                    <div class="mb-3">
                        <label for="sumary" class="form-label">Mô tả ngắn</label>
                        <input type="text" class="form-control" id="sumary" name="sumary" value="{{ old('sumary', $news->sumary) }}">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Ngày tạo</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $news->date) }}">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Mô tả</label>
                        <textarea name="content" id="editor" rows="10">{{ old('content', $news->content) }}</textarea>

                    </div>
                    <div class="mb-3">
                        <label for="new_category_id" class="form-label">Danh mục</label>
                        <select class="form-control" name="new_category_id" id="new_category_id">
                            <option value="">Chọn danh mục</option>
                            {{-- BẮT ĐẦU LẶP QUA DỮ LIỆU TỪ DATABASE --}}
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{-- Giữ lại giá trị cũ nếu validation thất bại --}}
                                    {{ old('new_category_id', $news->new_category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
                <!--end::Footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
@endsection
