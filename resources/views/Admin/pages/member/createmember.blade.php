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
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/member') }}">Member</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Create a Member</h1>
                </li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="card card-primary card-outline mb-4">
        <!--begin::Header-->
        <div class="card-header">
            <div class="card-title">Create a Member</div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <form>
            <!--begin::Body-->
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">Tên nhân viên</label>
                    <input type="text" class="form-control" id="" aria-describedby="">
                </div>
                <label for="" class="form-label">Hình ảnh</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tốt nghiệp</label>
                    <input type="text" class="form-control" id="" aria-describedby="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Chức vụ</label>
                    <input type="text" class="form-control" id="" aria-describedby="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Ngày gia nhập</label>
                    <input type="date" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Dự án</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Giải thưởng</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Trạng thái</label>
                    <select class="form-control" name="" id="">
                        <option value="">Trạng thái</option>
                        <option value="2">Đang làm</option>
                        <option value="3">Đã nghỉ</option>
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
@endsection
