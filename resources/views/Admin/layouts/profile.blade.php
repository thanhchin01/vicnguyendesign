@extends('Admin.layouts.welcome')

@section('title', 'Home Page')

@section('content')
    <div class="page-pretitle mt-3 p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="mb-0 d-inline-block fs-6 lh-1" href="{{ url('admin/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">Profile</h1>
                </li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="true">
                            <i class="bi bi-person me-1"></i> User profile
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-password-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-password" type="button" role="tab" aria-controls="pills-password"
                            aria-selected="false">
                            <i class="bi bi-lock me-1"></i> Change password
                        </button>
                    </li>
                </ul>
                <hr class="mb-4">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab" tabindex="0">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <h5 class="mb-3">User Details</h5>
                                    <div class="mt-3">
                                        <label for="fullname" class="form-label">Full name</label>
                                        <input type="text" class="form-control" id="fullname"
                                            value="{{ $admin->fullname }}">
                                    </div>
                                    <div class="mt-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            value="{{ $admin->email }}">
                                    </div>
                                     <div class="mt-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username"
                                            value="{{ $admin->username }}">
                                    </div>
                                    <div class="mt-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="phone" class="form-control" id="phone"
                                            value="{{ $admin->phone }}">
                                    </div>
                                     <div class="mt-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <input type="text" class="form-control" id="gender"
                                            value="{{ $admin->gender }}">
                                    </div>
                                    <div class="mt-3">
                                        <label for="date_of_birth" class="form-label">Birthday</label>
                                        <input type="date" class="form-control" id="date_of_birth"
                                            value="{{ $admin->date_of_birth }}">
                                    </div>
                                    <div style="height: 1.5rem;"></div>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="mb-3">Avatar</h5>

                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <div class="text-center">
                                            <img src="{{ $admin->avatar ? asset('storage/' . $admin->avatar) : asset('path/to/default/avatar.png') }}"
                                                class="rounded-circle mb-2" alt="Avatar"
                                                style="width: 100px; height: 100px; object-fit: cover;">
                                            <div class="d-flex flex-column align-items-center">
                                                <label for="avatarUpload" class="text-primary small fw-bold"
                                                    style="cursor: pointer;">Choose image</label>
                                                <input type="file" id="avatarUpload" class="d-none">
                                                <small class="text-muted">JPG, PNG, kích thước tối đa 2MB.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-4 mb-3">
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-circle me-1"></i> Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab"
                        tabindex="0">
                        <form>
                            <div class="mb-3">
                                <label for="currentPassword" class="form-label">Current Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="currentPassword">
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="togglePassword('currentPassword')">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="newPassword" class="form-label">New Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="newPassword">
                                        <button class="btn btn-outline-secondary" type="button"
                                            onclick="togglePassword('newPassword')">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="confirmNewPassword" class="form-label">Confirm New Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="confirmNewPassword">
                                        <button class="btn btn-outline-secondary" type="button"
                                            onclick="togglePassword('confirmNewPassword')">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-4 mb-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-circle me-1"></i> Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
