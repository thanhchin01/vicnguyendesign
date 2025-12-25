@extends('Admin.layouts.welcome')

@section('title', 'Create Project Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ route('admin.project.index') }}">Projects</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Create a project</h1>
                </li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Create a Project</div>
            </div>
            <!--end::Header-->
            <div class="card-body">
                <!--begin::Form-->
                <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Tên dự án</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" value="{{ old('title') }}">
                        </div>
                        <label for="image_url" class="form-label">Hình đại diện</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('image_url') is-invalid @enderror"
                                id="image_url" name="image_url" accept="image/*">
                            <button type="button" class="btn btn-secondary" onclick="selectImageUrl()"
                                for="image_url">Upload</button>
                        </div>
                        <img id="preview-image_url" style="max-width: 200px; display:none; margin-top: 10px">
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                                name="address" value="{{ old('address') }}">
                        </div>
                        <div class="mb-3">
                            <label for="acreage" class="form-label">Diện tích</label>
                            <input type="text" class="form-control @error('acreage') is-invalid @enderror" id="acreage"
                                name="acreage" value="{{ old('acreage') }}">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Ngày tạo</label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date"
                                name="date" value="{{ old('date') }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                                cols="30" rows="10">{{ old('description') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="team_design" class="form-label">Thành viên thiết kế</label>
                            <input type="text" class="form-control @error('team_design') is-invalid @enderror"
                                id="team_design" name="team_design" value="{{ old('team_design') }}">
                        </div>
                        <label class="form-label">Hình ảnh dự án</label>
                        <button type="button" class="btn btn-outline-primary mb-3 mt-3" onclick="selectGallery()">
                            Chọn nhiều ảnh
                        </button>
                        <input type="hidden" name="gallery" id="gallery">
                        <div class="row" id="gallery-preview"></div>

                        <div class="mb-3">
                            <label for="category_id" class="form-label">Danh mục</label>
                            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id"
                                id="category_id">
                                <option value="">Chọn danh mục</option>
                                {{-- BẮT ĐẦU LẶP QUA DỮ LIỆU TỪ DATABASE --}}
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{-- Giữ lại giá trị cũ nếu validation thất bại --}}
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                                {{-- KẾT THÚC VÒNG LẶP --}}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Trạng thái <span
                                    class="text-danger">*</span></label>
                            <select class="form-control" name="status" id="status">
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Hoàn thành</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Chưa hoàn thành
                                </option>
                            </select>
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
@endsection
