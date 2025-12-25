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
                        <form action="{{ route('admin.update.profile') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <h5 class="mb-3">User Details</h5>
                                    <div class="mt-3">
                                        <label for="fullname" class="form-label">Full name</label>
                                        <input type="text" class="form-control" id="fullname"
                                            value="{{ old('fullname', $admin->fullname) }}" name="fullname">
                                    </div>
                                    <div class="mt-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            value="{{ old('email', $admin->email) }}" name="email">
                                    </div>
                                    <div class="mt-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username"
                                            value="{{ old('username', $admin->username) }}" name="username">
                                    </div>
                                    <div class="mt-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="phone" class="form-control" id="phone"
                                            value="{{ old('phone', $admin->phone) }}" name="phone">
                                    </div>
                                    <div class="mt-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-control" name="gender" id="gender" required>
                                            <option value="1" {{ old('gender', $admin->gender) == '1' ? 'selected' : '' }}>Nam
                                            </option>
                                            <option value="0" {{ old('gender', $admin->gender) == '0' ? 'selected' : '' }}>Nữ
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <label for="date_of_birth" class="form-label">Birthday</label>
                                        <input type="date" class="form-control" id="date_of_birth"
                                            value="{{ old('date_of_birth', $admin->date_of_birth) }}" name="date_of_birth">
                                    </div>
                                    <div style="height: 1.5rem;"></div>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="mb-3">Avatar</h5>
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <div class="text-center">
                                            <img id="preview-avatar" src="{{ old('avatar', $admin->avatar) }}" name="avatar"
                                                class="rounded-circle mb-2" alt="Avatar"
                                                style="width: 250px; height: 250px; object-fit: cover;">
                                            <input type="hidden" name="avatar" id="avatar"
                                                value="{{ old('avatar', $admin->avatar) }}">

                                            <div class="d-flex flex-column align-items-center">
                                                <button class="btn btn-secondary" type="button" style="cursor: pointer;"
                                                    onclick="selectAvatar()">Choose image
                                                </button>
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
                    {{-- Password --}}
                    <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab"
                        tabindex="0">
                        <form action="{{ route('admin.profile.changepassword') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="current_password" class="form-label">Current Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="current_password" name="current_password">
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="togglePassword('current_password')">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <div class="input-group">
                                        <input type="password" name="new_password" class="form-control" id="new_password">
                                        <button class="btn btn-outline-secondary" type="button"
                                            onclick="togglePassword('new_password')">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                    <div class="input-group">
                                        <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation">
                                        <button class="btn btn-outline-secondary" type="button"
                                            onclick="togglePassword('new_password_confirmation')">
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
{{-- Hiển thị mật khẩu --}}
<script>
    function togglePassword(id) {
        const input = document.getElementById(id);
        const icon = input.nextElementSibling.querySelector('i');
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        }
    }
</script>
