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
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Projects</h1>
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
                <a href="{{ url('admin/createproject') }}" class="btn action-item btn-primary" tabindex="0"
                    aria-controls="botble-member-tables-member-table" type="button">
                    <svg class="icon svg-icon-ti-ti-plus" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>
                    </svg>
                    Create
                </a>
            </div>
        </div>
        <table class="table" role="table">
            <thead>
                <tr>
                    <th class="text-center" style="width: 10px" scope="col">ID</th>
                    <th class="text-center" scope="col">Hình ảnh</th>
                    <th class="text-center" scope="col">Tên dự án</th>
                    <th class="text-center" scope="col">Địa chỉ</th>
                    <th class="text-center" scope="col">Diện tích</th>
                    <th class="text-center" scope="col">Ngày tạo</th>
                    <th class="text-center" scope="col">Mô tả</th>
                    <th class="text-center" scope="col">Danh mục</th>
                    <th class="text-center" scope="col">Trạng thái</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle">
                    <td class="text-center">1</td>
                    <td class="text-center"><img style="width: 120px" src="{{ asset('assect/image/Alpha/image1.jpg') }}"
                            alt=""></td>
                    <td class="text-center">
                        NGUYET HOUSE
                    </td>
                    <td class="text-center">Hà Nội</td>
                    <td class="text-center">400m2</td>
                    <td class="text-center">20/11/2025</td>
                    <td class="text-center"><span class="badge text-bg-primary">Nội dung</span></td>
                    <td class="text-center">Nhà ở</td>
                    <td class="text-center"><span class="badge text-bg-success">Hoàn thành</span></td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic action group">
                            <a href="{{ url('admin/editproject') }}" class="btn btn-primary btn-sm me-2"
                                title="Sửa">
                                <i class="fas fa-edit"></i>
                                Sửa
                            </a>
                            <button type="button" class="btn btn-danger btn-sm" title="Xóa">
                                <i class="fas fa-trash-alt"></i>
                                Xóa
                            </button>
                        </div>
                    </td>
                </tr>
                 <tr class="align-middle">
                    <td class="text-center">1</td>
                    <td class="text-center"><img style="width: 120px" src="{{ asset('assect/image/Alpha/image1.jpg') }}"
                            alt=""></td>
                    <td class="text-center">
                        NGUYET HOUSE
                    </td>
                    <td class="text-center">Hà Nội</td>
                    <td class="text-center">400m2</td>
                    <td class="text-center">20/11/2025</td>
                    <td class="text-center"><span class="badge text-bg-primary">Nội dung</span></td>
                    <td class="text-center">Nhà ở</td>
                    <td class="text-center"><span class="badge text-bg-success">Hoàn thành</span></td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic action group">
                            <a href="{{ url('admin/editproject') }}" class="btn btn-primary btn-sm me-2"
                                title="Sửa">
                                <i class="fas fa-edit"></i>
                                Sửa
                            </a>
                            <button type="button" class="btn btn-danger btn-sm" title="Xóa">
                                <i class="fas fa-trash-alt"></i>
                                Xóa
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
