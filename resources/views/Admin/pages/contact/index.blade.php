@extends('Admin.layouts.welcome')

@section('title', 'Contact Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Contact</h1>
                </li>
            </ol>
        </nav>
    </div>
    <div class="card mb-4 container">
        <div class="card-header">
            <div class=" d-flex justify-content-between">
                <form class="d-flex" role="search" action="{{ route('admin.design.request') }}" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" value="{{ request('keyword') }}"
                        name="keyword">
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
                    <th class="text-center" scope="col">Số điện thoại</th>
                    <th class="text-center" scope="col">Nội dung</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $item)
                    <tr class="align-middle">
                        <td class="text-center">{{ $item->id }}</td>
                        <td class="text-center">{{ $item->fullname }}</td>
                        <td class="text-center">{{ $item->email }}</td>
                        <td class="text-center">{{ $item->phone }}</td>
                        <td class="text-center"><span class="badge text-bg-primary">Xem nội dung</span></td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic action group">
                                <a href="{{ route('admin.request.details', $item->id) }}"
                                    class="btn btn-primary btn-sm me-2" title="">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.request.destroy', $item->id) }}" method="POST"
                                    enctype="multipart/form-data"
                                    onsubmit="return confirm('Bạn có chắc muốn xóa thông báo này không?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm" title="Xóa">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        <div class="mt-3">
            {{ $contacts->links() }}
        </div>
    </div>
@endsection
