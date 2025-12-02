@extends('Admin.layouts.welcome')

@section('title', 'Create News Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ route('news.index') }}">News</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Create a News</h1>
                </li>
            </ol>
        </nav>
    </div>
    {{-- Hiển thị thông báo thành công từ Controller --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show container" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container">
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Create a News</div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!--begin::Form-->
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                            value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                            value="{{ old('slug') }}">
                    </div>
                    <label for="" class="form-label">Hình ảnh</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                        <label class="input-group-text" for="image">Upload</label>
                    </div>
                    <div class="mb-3">
                        <label for="sumary" class="form-label">Mô tả ngắn</label>
                        <input type="text" class="form-control @error('sumary') is-invalid @enderror" id="sumary" name="sumary"
                            value="{{ old('sumary') }}">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Ngày tạo</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                            value="{{ old('date') }}">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Mô tả</label>
                        <textarea name="content" id="editor" rows="10" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Danh mục</label>
                        <select class="form-control" name="new_category_id" id="new_category_id">
                            <option value="">Chọn danh mục</option>
                            {{-- BẮT ĐẦU LẶP QUA DỮ LIỆU TỪ DATABASE --}}
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{-- Giữ lại giá trị cũ nếu validation thất bại --}}
                                    {{ old('new_category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                            {{-- KẾT THÚC VÒNG LẶP --}}
                        </select>
                    </div>
            </div>
            <!--begin::Footer-->
                <div class="card-footer">
                    <div class="d-flex justify-content-end ">
                    <button type="submit" class="btn btn-primary me-2">Create</button>
                    <a href="{{ route('news.index') }}" class="btn btn-secondary">Hủy </a>
                </div>
                </div>
            <!--end::Footer-->
            </form>
            <!--end::Form-->
            <!--end::Body-->
        </div>
    </div>
@endsection
