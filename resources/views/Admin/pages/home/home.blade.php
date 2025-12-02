@extends('Admin.layouts.welcome')

@section('title', 'Home Page')

@section('content')
    <div class="row p-3">
        <!--begin::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 1-->
            <div class="small-box text-bg-primary">
                <div class="inner d-flex justify-content-between align-items-center">
                    <div>
                        {{-- Phần chữ --}}
                        <h3>150</h3>
                        <p>Dự án đã hoàn thành</p>
                    </div>

                    {{-- Phần Icon (giữ nguyên kích thước FA-2x) --}}
                    <i class="fa-solid fa-list-check fa-2x"></i>
                </div>

                <a href="{{ url('admin/project') }}"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    More info <i class="bi bi-link-45deg"></i>
                </a>
            </div>


            <!--end::Small Box Widget 1-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 2-->
            <div class="small-box text-bg-success">
                <div class="inner d-flex justify-content-between align-items-center">
                    <div>
                        {{-- Phần chữ --}}
                        <h3>10</h3>
                        <p>Tin tức</p>
                    </div>
                    <i class="fa-solid fa-newspaper fa-2x"></i>
                </div>
                <a href="{{ url('admin/news') }}"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    More info <i class="bi bi-link-45deg"></i>
                </a>
            </div>
            <!--end::Small Box Widget 2-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 2-->
            <div class="small-box text-bg-warning">
                <div class="inner d-flex justify-content-between align-items-center">
                    <div>
                        {{-- Phần chữ --}}
                        <h3>10</h3>
                        <p>Liên hệ mới</p>
                    </div>
                    <i class="fa-solid fa-newspaper fa-2x"></i>
                </div>
                <a href="{{ url('admin/notice') }}"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    More info <i class="bi bi-link-45deg"></i>
                </a>
            </div>
            <!--end::Small Box Widget 2-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 2-->
            <div class="small-box text-bg-danger">
                <div class="inner d-flex justify-content-between align-items-center">
                    <div>
                        {{-- Phần chữ --}}
                        <h3>20</h3>
                        <p>Thành viên</p>
                    </div>
                    <i class="fa-solid fa-users fa-2x"></i>
                </div>
                <a href="{{ route('members.index') }}"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    More info <i class="bi bi-link-45deg"></i>
                </a>
            </div>
            <!--end::Small Box Widget 2-->
        </div>
        <!--end::Col-->
    </div>
    <div class="row p-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Members</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="row text-center m-1">
                        <div class="col-3 p-2">
                            <img class="img-fluid rounded-circle" src="{{ asset('assect/avatar/1.png') }}" alt="User Image">
                            <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                Alexander Pierce
                            </a>
                        </div>
                    </div>
                    <!-- /.users-list -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="{{ route('members.index') }}"
                        class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View
                        All
                        Users</a>
                </div>
                <!-- /.card-footer -->
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Contact</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0" role="table">
                            <thead>
                                <tr>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" class="text-center">Trạng thái</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="">Nguyễn Văn A</p>
                                    </td>
                                    <td>nguyenvana@gmail.com</td>
                                    <td class="text-center">
                                        <span class="badge text-bg-success">Đọc</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic action group">
                                            <a href="{{ url('admin/details-notice') }}"
                                                class="btn btn-primary btn-sm me-2" title="">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm" title="Xóa">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="">Nguyễn Văn A</p>
                                    </td>
                                    <td>nguyenvana@gmail.com</td>
                                    <td class="text-center">
                                        <span class="badge text-bg-warning">Đã đọc</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic action group">
                                            <a href="{{ url('admin/details-notice') }}"
                                                class="btn btn-primary btn-sm me-2" title="">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm" title="Xóa">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="">Nguyễn Văn A</p>
                                    </td>
                                    <td>nguyenvana@gmail.com</td>
                                    <td class="text-center">
                                        <span class="badge text-bg-success">Đọc</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic action group">
                                            <a href="{{ url('admin/details-notice') }}"
                                                class="btn btn-primary btn-sm me-2" title="">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm" title="Xóa">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="{{ url('admin/notice') }}"
                        class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View
                        All
                        Notice</a>
                </div>
                <!-- /.card-footer -->
            </div>
        </div>
    </div>
@endsection
