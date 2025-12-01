@extends('Admin.layouts.welcome')

@section('title', 'Create Member Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ route('members.index') }}">Member</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Create a Member</h1>
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
                <div class="card-title">Create a Member</div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
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
                <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Tên nhân viên <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                            required>
                    </div>
                    <label for="avatar" class="form-label">Hình ảnh (Avatar)</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                        <label class="input-group-text" for="avatar" name="avatar">Upload</label>
                    </div>
                    <div class="mb-3">
                        <label for="graduate" class="form-label">Tốt nghiệp</label>
                        <input type="text" class="form-control" id="graduate" name="graduate"
                            value="{{ old('graduate') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Chức vụ</label>
                        <input type="text" class="form-control" id="position" name="position"
                            value="{{ old('position') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="join" class="form-label">Ngày gia nhập</label>
                        <input type="date" class="form-control" id="join" name="join"
                            value="{{ old('join') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="project" class="form-label">Dự án</label>
                        <input type="text" class="form-control" id="project" name="project"
                            value="{{ old('project') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="award" class="form-label">Giải thưởng</label>
                        <input type="text" class="form-control" id="award" name="award"
                            value="{{ old('award') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái <span class="text-danger">*</span></label>
                        <select class="form-control" name="status" id="status" required>
                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Đang làm</option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Đã nghỉ</option>
                        </select>
                    </div>
                    <!--begin::Footer-->
                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary me-2">Create</button>
                        {{-- Link Hủy (Sử dụng route chuẩn members.index) --}}
                        <a href="{{ route('members.index') }}" class="btn btn-secondary">Hủy
                        </a>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Body-->
        </div>
    </div>
@endsection
