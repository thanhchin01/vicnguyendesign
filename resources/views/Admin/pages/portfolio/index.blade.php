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
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Portfolio</h1>
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
                <a href="{{ route('portfolio.create') }}" class="btn action-item btn-primary" tabindex="0"
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
                    <th class="text-center" scope="col">Slug</th>
                    <th class="text-center" scope="col">Hình ảnh</th>
                    <th class="text-center" scope="col">Nội dung</th>
                    <th class="text-center" scope="col">Danh mục</th>
                    <th class="text-center" scope="col">Trạng thái</th>
                    <th class="text-center" scope="col">Người tạo</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               @forelse ($albums as $album)
                  <tr class="align-middle">
                    <td class="text-center">{{ $album->id }}</td>
                    <td class="text-center">{{ $album->title }}</td>
                    <td class="text-center">{{ $album->slug }}</td>
                    <td class="text-center">
                         @if ($album->image)
                                <img style="width: 120px; height: 120px; object-fit: cover;"
                                    src="{{ asset('upload/portfolio/' . $album->image) }}" alt="{{ $album->title }}"
                                    onerror="this.onerror=null;this.src='https://placehold.co/120x120/E0E0E0/333333?text=No+Img'">
                            @else
                                <img style="width: 120px; height: 120px; object-fit: cover;"
                                    src="https://placehold.co/120x120/E0E0E0/333333?text=No+Img" alt="No Image">
                            @endif
                    </td>
                    <td class="text-center"><span class="badge text-bg-primary">Nội dung</span></td>
                    <td class="text-center">{{ $album->album_id ?? 'No album' }}</td>
                    <td class="text-center">
                        @if ( $album->status == 1 )
                            <span class="badge text-bg-success">Hiển thị</span>
                        @else
                            <span class="badge text-bg-warning">Ẩn</span>
                        @endif
                    </td>
                    <td class="text-center">
                        {{ $album->author ? $album->author->fullname : 'Chưa xác định' }}
                    </td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic action group">
                            <a href="{{ route('portfolio.edit', $album->id) }}" class="btn btn-primary btn-sm me-2" title="Sửa">
                                <i class="fas fa-edit"></i>
                                Sửa
                            </a>
                            <form action="{{ route('portfolio.destroy', $album->id) }}" method="POST"
                                onsubmit="return confirm('Bạn có chắc muốn xóa dự án này không?')">
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
                <tr>
                    <td colspan="9" class="text-center">No portfolio found.</td>
                </tr>
               @endforelse
            </tbody>
        </table>
    </div>
@endsection
