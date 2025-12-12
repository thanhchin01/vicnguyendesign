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
                    <p class="h5">{{ $details->fullname }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Email</label>
                    <p class="h5">{{ $details->email }}</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="text-muted mb-1">Object</label>
                    <p class="h5">{{ $details->object }}</p>
                </div>
            </div>
            <div>
                <label for="" class="text-muted mb-1">Nội dung</label>
                <p class="h5">{{ $details->message }}</p>
            </div>
        </div>
    </div>
@endsection
