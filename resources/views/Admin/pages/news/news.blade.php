@extends('Admin.layouts.welcome')

@section('title', 'News Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">News</h1>
                </li>
            </ol>
        </nav>
    </div>
    {{-- Hiển thị thông báo từ controller --}}
    @if (@session('success'))
        <div class="alert alert-success alert-dismissible fade show container" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card mb-4 container">
        <div class="card-header">
            <div class=" d-flex justify-content-between">
                <form class="d-flex" role="search" action="{{ route('admin.news.index') }}" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" name="keyword" value="{{ request('keyword') }}">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <a href="{{ route('admin.news.create') }}" class="btn action-item btn-primary" tabindex="0"
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
                    <th class="text-center" scope="col">Tiêu đề</th>
                    <th class="text-center" scope="col">Hình ảnh</th>
                    <th class="text-center" scope="col">Mô tả ngắn</th>
                    <th class="text-center" scope="col">Ngày tạo</th>
                    <th class="text-center" scope="col">Mô tả</th>
                    <th class="text-center" scope="col">Danh mục</th>
                    <th class="text-center" scope="col">Người tạo</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($news as $new)
                    <tr class="align-middle">
                        <td class="text-center">{{ $new->id }}</td>
                        <td class="text-center">
                            {{ $new->title }}
                        </td>
                        <td class="text-center">
                            @if ($new->image)
                                <img style="width: 120px; height: 120px; object-fit: cover;"
                                    src="{{ asset('upload/news/' . $new->image) }}" alt="{{ $new->title }}"
                                    onerror="this.onerror=null;this.src='https://placehold.co/120x120/E0E0E0/333333?text=No+Img'">
                            @else
                                <img style="width: 120px; height: 120px; object-fit: cover;"
                                    src="https://placehold.co/120x120/E0E0E0/333333?text=No+Img" alt="No Image">
                            @endif
                        </td>
                        <td class="text-center"><span class="badge text-bg-primary">Xem nội dung</span></td>
                        <td class="text-center">{{ optional(\Carbon\Carbon::parse($new->date))->format('d/m/Y') }}</td>
                        <td class="text-center"><span class="badge text-bg-primary">Xem nội dung</span></td>
                        <td class="text-center">{{ $new->NewsCategories ? $new->NewsCategories->name : 'Chưa có danh mục' }}</td>
                        <td class="text-center">{{ $new->author ? $new->author->fullname : 'Chưa xác định' }}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic action group">
                                <a href="{{ route('admin.news.edit', $new->slug) }}" class="btn btn-primary btn-sm me-2"
                                    title="Sửa">
                                    <i class="fas fa-edit"></i>
                                    Sửa
                                </a>
                                <form action="{{ route('admin.news.destroy', $new->slug) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa tin tức này chứ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                        Xóa
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr class="align-middle">
                        <td colspan="8" class="text-center text-muted">Không có tin tức nào được tìm thấy</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
