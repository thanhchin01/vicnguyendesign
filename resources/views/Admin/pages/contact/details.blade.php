@extends('Admin.layouts.welcome')

@section('title', 'Details Notice Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/notice') }}">Contact</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Contact-details</h1>
                </li>
            </ol>
        </nav>
    </div>
    <div class="card mb-4 container">
        <div class="card-header">
            <div class=" d-flex justify-content-between">
                <h4>
                    Contact Information
                </h4>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Họ và tên</label>
                    <p class="h5">{{ $details->fullname }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Email</label>
                    <p class="h5">{{ $details->email }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Nghề nghiệp</label>
                    <p class="h5">{{ $details->job }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Tuổi</label>
                    <p class="h5">{{ $details->age }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Số điện thoại</label>
                    <p class="h5">{{ $details->phone }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Loại hình</label>
                    <p class="h5">{{ $details->project_type }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Diện tích</label>
                    <p class="h5">{{ $details->area }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Quy mô</label>
                    <p class="h5">{{ $details->scale }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Địa điểm</label>
                    <p class="h5">{{ $details->location }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">a. Nhà ở - Chi phí dự trữ đầu tư</label>
                    <p class="h5">{{ $details->investment_cost }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">a1. Số người sinh hoạt thường xuyên</label>
                    <p class="h5">{{ $details->people }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">a2. Số phòng chức năng mong muốn</label>
                    <p class="h5">{{ $details->expected_rooms }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">b. Công trình khác - chi phí dự trù đầu tiên</label>
                    <p class="h5">{{ $details->other_construction }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">b1. Mô tả chức năng</label>
                    <p class="h5">{{ $details->function_description }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Tiến độ mong muốn thiết kế</label>
                    <p class="h5">{{ $details->design_speed }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Tiến độ mong muốn hoàn thiện
                    </label>
                    <p class="h5">{{ $details->complete_speed }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Tiến độ mong muốn hoàn thiện
                    </label>
                    <p class="h5">{{ $details->habits }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Tiến độ mong muốn hoàn thiện
                    </label>
                    <p class="h5">{{ $details->content }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
