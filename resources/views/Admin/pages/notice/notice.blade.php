@extends('Admin.layouts.welcome')

@section('title', 'Project Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
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
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
        <table class="table" role="table">
            <thead>
                <tr>
                    <th class="text-center" style="width: 10px" scope="col">ID</th>
                    <th class="text-center" scope="col">Họ tên</th>
                    <th class="text-center" scope="col">Email</th>
                    <th class="text-center" scope="col">Nghề nghiệp</th>
                    <th class="text-center" scope="col">Tuổi</th>
                    <th class="text-center" scope="col">Số điện thoại</th>
                    <th class="text-center" scope="col">Trạng thái</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle">
                    <td class="text-center">1</td>
                    <td class="text-center">
                        Nguyễn Văn A
                    </td>
                    <td class="text-center">nguyenvana@gmail.com</td>
                    <td class="text-center"><span class="badge text-bg-primary">Kiến trúc sư</span></td>
                    <td class="text-center">25</td>
                    <td class="text-center">0123456789</td>
                    <td class="text-center"><span class="badge text-bg-success">Đọc</span></td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic action group">
                            <a href="{{ url('admin/details-notice') }}" class="btn btn-primary btn-sm me-2" title="">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm" title="Xóa">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="align-middle">
                    <td class="text-center">1</td>
                    <td class="text-center">
                        Nguyễn Văn b
                    </td>
                    <td class="text-center">nguyenvanb@gmail.com</td>
                    <td class="text-center"><span class="badge text-bg-primary">Kiến trúc sư</span></td>
                    <td class="text-center">25</td>
                    <td class="text-center">0123456789</td>
                    <td class="text-center"><span class="badge text-bg-warning">Đã đọc</span></td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic action group">
                            <a href="{{ url('admin/details-notice') }}" class="btn btn-primary btn-sm me-2" title="">
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
@endsection
