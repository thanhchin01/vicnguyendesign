@extends('Admin.layouts.welcome')

@section('title', 'Member Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Member</h1>
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

    <div class="card mb-4 container">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                {{-- Form tìm kiếm --}}
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>

                {{-- Nút Thêm mới --}}
                <a href="{{ route('admin.members.create') }}" class="btn action-item btn-primary" tabindex="0"
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
                    <th class="text-center" scope="col">Tên nhân viên</th>
                    <th class="text-center" scope="col">Tốt nghiệp</th>
                    <th class="text-center" scope="col">Chức vụ</th>
                    <th class="text-center" scope="col">Ngày gia nhập</th>
                    <th class="text-center" style="width: 155px">Dự án</th>
                    <th class="text-center" scope="col">Giải thưởng</th>
                    <th class="text-center" scope="col">Trạng thái</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- LẶP QUA DANH SÁCH THÀNH VIÊN THỰC TẾ --}}
                @forelse ($members as $member)
                    <tr class="align-middle">
                        <td class="text-center">{{ $member->id }}</td>
                        <td class="text-center">
                            @if ($member->avatar)
                                <img style="width: 120px; height: 120px; object-fit: cover;"
                                    src="{{ asset('upload/member/' . $member->avatar) }}"
                                    alt="{{ $member->name }}"
                                    onerror="this.onerror=null;this.src='https://placehold.co/120x120/E0E0E0/333333?text=No+Img'">
                            @else
                                <img style="width: 120px; height: 120px; object-fit: cover;"
                                    src="https://placehold.co/120x120/E0E0E0/333333?text=No+Img"
                                    alt="No Image">
                            @endif
                        </td>
                        <td class="text-center">{{ $member->name }}</td>
                        <td class="text-center">{{ $member->graduate }}</td>
                        <td class="text-center">{{ $member->position }}</td>
                        <td class="text-center">{{ optional(\Carbon\Carbon::parse($member->join))->format('d/m/Y') }}</td>
                        <td class="text-center">{{ $member->project }}</td>
                        <td class="text-center">{{ $member->award }}</td>
                        <td class="text-center">
                            @if ($member->status == 1)
                                <span class="badge text-bg-success">Đang làm</span>
                            @else
                                <span class="badge text-bg-warning">Đã nghỉ</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic action group">
                                {{-- Nút Sửa --}}
                                <a href="{{ route('admin.members.edit', $member->id) }}" class="btn btn-primary btn-sm me-2" title="Sửa">
                                    <i class="fas fa-edit"></i> Sửa
                                </a>

                                {{-- Nút Xóa (Sử dụng form cho action DELETE) --}}
                                <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa thành viên này không?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Xóa">
                                        <i class="fas fa-trash-alt"></i> Xóa
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr class="align-middle">
                        <td colspan="10" class="text-center text-muted">Không có thành viên nào được tìm thấy.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
