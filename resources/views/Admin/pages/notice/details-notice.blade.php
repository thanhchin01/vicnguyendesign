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
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/notice') }}">Notice</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Notice</h1>
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
                    <p class="h5">Nguyễn Văn A</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Email</label>
                    <p class="h5">nguyenvana@gmail.com</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Nghề nghiệp</label>
                    <p class="h5">Kiến trúc sư</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Tuổi</label>
                    <p class="h5">25</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Số điện thoại</label>
                    <p class="h5">0123456789</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Loại hình</label>
                    <p class="h5">0123456789</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Diện tích</label>
                    <p class="h5">400m2</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Quy mô</label>
                    <p class="h5">0123456789</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Địa điểm</label>
                    <p class="h5">Hà Nội</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Nhà ở - Chi phí dự trữ đầu tư</label>
                    <p class="h5">0123456789</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Số người sinh hoạt thường xuyên</label>
                    <p class="h5">4</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Số phòng chức năng mong muốn</label>
                    <p class="h5">6</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Công trình khác - chí phí dự trù đầu tiên</label>
                    <p class="h5">12tr</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Mô tả chức năng</label>
                    <p class="h5">12345</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Tiến độ mong muốn thiết kế</label>
                    <p class="h5">12345</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Tiến độ mong muốn hoàn thành</label>
                    <p class="h5">12345</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Sở thích thói quen</label>
                    <p class="h5">12345</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Vì sao anh chị biết tới VIC</label>
                    <p class="h5">12345</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
