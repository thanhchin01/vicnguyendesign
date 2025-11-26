@extends('Admin.layouts.welcome')

@section('title', 'Edit Project Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/project') }}">Projects</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Edit a project</h1>
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
        <!--begin::Form-->
        <form>
            <!--begin::Body-->
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">Tên dự án</label>
                    <input type="text" class="form-control" id="" value="NGUYET HOUSE">
                </div>
                <label for="" class="form-label">Hình ảnh</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" value="1.png">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="" value="Hà Nội">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Diện tích</label>
                    <input type="text" class="form-control" id="" value="400m2">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Ngày tạo</label>
                    <input type="date" class="form-control" id="" value="2025-10-20">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Mô tả</label>
                    <textarea class="form-control" name="" id="" cols="30" rows="10">123</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Danh mục</label>
                    <select class="form-control" name="" id="">
                        <option value="">Chọn danh mục</option>
                        <option value="1" selected>Nhà ở</option>
                        <option value="2">Resoft</option>
                        <option value="3">Biệt thự</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Trạng thái</label>
                    <select class="form-control" name="" id="">
                        <option value="">Trạng thái</option>
                        <option value="2" selected>Hoàn thành</option>
                        <option value="3">Chưa hoàn thành</option>
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
@endsection
