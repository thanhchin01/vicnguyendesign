@extends('Admin.layouts.welcome')

@section('title', 'Edit Portfolio Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ route('portfolio.index') }}">Portfolio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Edit a Portfolio</h1>
                </li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Edit a Project</div>
            </div>
            <!--end::Header-->
            <div class="card-body">
                {{-- Hiển thị lỗi Validation --}}
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
                <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề</label>
                            <input type="text" class="form-control" id="title"
                                name="title" value="{{ old('title', $portfolio->title) }}">
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug"
                                name="slug" value="{{ old('slug', $portfolio->slug) }}">
                        </div>
                        <label for="image" class="form-label">Hình ảnh</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="image"
                                name="image" accept="image/*">
                            <label class="input-group-text" for="image">Upload</label>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Nội dung</label>
                            <input type="text" class="form-control" id="content"
                                name="content" value="{{ old('content', $portfolio->content) }}">
                        </div>
                        <div class="mb-3">
                            <label for="album_id" class="form-label">Danh mục</label>
                            <select class="form-control" name="album_id"
                                id="album_id">
                                <option value="">Chọn danh mục</option>
                                {{-- BẮT ĐẦU LẶP QUA DỮ LIỆU TỪ DATABASE --}}
                                @foreach ($albums as $album)
                                    <option value="{{ $album->id }}" {{-- Giữ lại giá trị cũ nếu validation thất bại --}}
                                        {{ old('album_id', $portfolio->album_id) == $album->id ? 'selected' : '' }}>
                                        {{ $album->title }}
                                    </option>
                                @endforeach
                                 {{-- KẾT THÚC VÒNG LẶP --}}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Trạng thái <span class="text-danger">*</span></label>
                            <select class="form-control" name="status" id="status">
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Hiển thị</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Ẩn
                                </option>
                            </select>
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
@endsection
