@extends('Admin.layouts.welcome')

@section('title', 'Edit Member Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ route('admin.members.index') }}">Member</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Edit Member</h1>
                </li>
            </ol>
        </nav>
    </div>
    {{-- Hiển thị lỗi validation (nếu có) --}}
    @if ($errors->any())
        <div class="alert alert-danger container">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div @endif

        <div class="container">
            <div class="card card-primary card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Edit Member: {{ $member->name }}</div>
                </div>
                <!--end::Header-->
                <!--begin::Form-->
                <form action="{{ route('admin.members.update', $member->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT') {{-- Bắt buộc phải có để gửi yêu cầu PUT đến Controller --}}
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên nhân viên</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $member->name) }}" required>
                        </div>
                        <label for="avatar" class="form-label">Hình ảnh (Avatar)</label>
                        <div class="input-group mb-3">
                            <input type="text" id="avatar" name="avatar"
                                class="form-control @error('avatar') is-invalid @enderror" placeholder="Chọn hình ảnh">
                            <button type="button" class="btn btn-secondary" onclick="selectAvatar()">Chọn ảnh</button>
                        </div>
                        <img id="preview-avatar" style="max-width: 200px; display:none; margin-top:10px;">
                        <div class="mb-3">
                            <label for="graduate" class="form-label">Tốt nghiệp</label>
                            <input type="text" class="form-control" id="graduate" name="graduate"
                                value="{{ old('graduate', $member->graduate) }}">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Chức vụ</label>
                            <input type="text" class="form-control" id="position" name="position"
                                value="{{ old('position', $member->position) }}">
                        </div>
                        <div class="mb-3">
                            <label for="join" class="form-label">Ngày gia nhập</label>
                            <input type="date" class="form-control" id="join" name="join"
                                value="{{ old('join', $member->join) }}">
                        </div>
                        <div class="mb-3">
                            <label for="project" class="form-label">Dự án</label>
                            <input type="text" class="form-control" id="project" name="project"
                                value="{{ old('project', $member->project) }}">
                        </div>
                        <div class="mb-3">
                            <label for="award" class="form-label">Giải thưởng</label>
                            <input type="text" class="form-control" id="award" name="award"
                                value="{{ old('award', $member->award) }}">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Trạng thái</label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="1" {{ old('status', $member->status) == 1 ? 'selected' : '' }}>Đang làm
                                </option>
                                <option value="0" {{ old('status', $member->status) == 0 ? 'selected' : '' }}>Đã nghỉ
                                </option>
                            </select>
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    @endsection
