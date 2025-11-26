@extends('Admin.layouts.welcome')

@section('title', 'Home Page')

@section('content')
    {{-- <section class="h-auto">
        <div x-data="{ activeTab: 'profile' }" class="p-6 bg-gray-100 min-h-screen">
            {{-- Breadcrumbs (Nếu cần, có thể đặt vào đây hoặc layout cha) --}
            <nav class="text-sm text-gray-500 mb-6">
                <a href="#" class="hover:underline">DASHBOARD</a> /
                <a href="#" class="hover:underline">PROFILE</a>
            </nav>

            <div class="max-w-[1500px] mx-auto">
                {{-- Tab Buttons Group (Btn Group) --}
                <div class="flex border-b border-gray-200 mb-6">
                    <button @click="activeTab = 'profile'"
                        :class="{ 'bg-white text-blue-600 border-b-2 border-blue-600': activeTab === 'profile', 'text-gray-600 hover:text-gray-800': activeTab !== 'profile' }"
                        class="py-3 px-6 -mb-px text-sm font-medium focus:outline-none transition-colors duration-200">
                        <i class="fa-solid fa-user-circle me-2 text-lg"></i> User profile
                    </button>
                    <button @click="activeTab = 'avatar'"
                        :class="{ 'bg-white text-blue-600 border-b-2 border-blue-600': activeTab === 'avatar', 'text-gray-600 hover:text-gray-800': activeTab !== 'avatar' }"
                        class="py-3 px-6 -mb-px text-sm font-medium focus:outline-none transition-colors duration-200">
                        <i class="fa-solid fa-image me-2 text-lg"></i> Avatar
                    </button>
                    <button @click="activeTab = 'password'"
                        :class="{ 'bg-white text-blue-600 border-b-2 border-blue-600': activeTab === 'password', 'text-gray-600 hover:text-gray-800': activeTab !== 'password' }"
                        class="py-3 px-6 -mb-px text-sm font-medium focus:outline-none transition-colors duration-200">
                        <i class="fa-solid fa-lock me-2 text-lg"></i> Change password
                    </button>
                </div>
                {{-- Tab Content --}
                <div class="bg-white p-8 rounded-lg shadow">
                    {{-- User Profile --}
                    <div x-show="activeTab === 'profile'" x-transition:enter.duration.300ms
                        x-transition:leave.duration.150ms>
                        <h2 class="text-2xl font-bold mb-6 text-gray-800">User Profile</h2>
                        <form>
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">Full Name
                                    <span class="text-red-500">*</span></label>
                                <input type="text" id="first_name" name="first_name" value="Nguyen Van A"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6 mt-3">
                                <div>
                                    <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" id="username" name="username" value="admin"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span
                                            class="text-red-500">*</span></label>
                                    <input type="email" id="email" name="email" value="admin@gmail.com"
                                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                </div>
                            </div>
                            <div class="mt-8 flex justify-end">
                                <button type="submit"
                                    class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"><i
                                        class="fa-regular fa-circle-check me-2"></i>Update</button>
                            </div>
                        </form>
                    </div>

                    {{-- Avatar Tab Content --}
                    <div x-show="activeTab === 'avatar'" x-transition:enter.duration.300ms x-transition:leave.duration.150ms
                        x-data="{ preview: null }">

                        <h2 class="text-2xl font-bold mb-6 text-gray-800">Change Avatar</h2>
                        <p class="text-gray-600">Upload a new profile picture here.</p>

                        <!-- Upload Box -->
                        <div
                            class="mt-4 border-2 border-dashed border-gray-300 rounded-lg p-6 text-center relative overflow-hidden">

                            <!-- Input file -->
                            <input type="file" id="avatar-upload" class="hidden"
                                @change="preview = URL.createObjectURL($event.target.files[0])">

                            <!-- Click zone -->
                            <label for="avatar-upload" class="cursor-pointer text-blue-600 hover:underline"
                                x-show="!preview">
                                Click to upload or drag and drop
                            </label>

                            <p class="text-sm text-gray-500 mt-2" x-show="!preview">PNG, JPG, up to 5MB</p>

                            <!-- Preview Image -->
                            <template x-if="preview">
                                <img :src="preview" alt="Avatar Preview"
                                    class="mx-auto mt-3 w-40 h-40 object-cover rounded-full shadow">
                            </template>
                        </div>

                        <!-- Button -->
                        <div class="mt-8 flex justify-end">
                            <button type="submit"
                                class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700
                   focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500
                   transition-colors duration-200">
                                <i class="fa-regular fa-circle-check me-2"></i>Update
                            </button>
                        </div>
                    </div>

                    {{-- Change Password Tab Content --}
                    <div x-show="activeTab === 'password'" x-transition:enter.duration.300ms
                        x-transition:leave.duration.150ms>
                        <h2 class="text-2xl font-bold mb-6 text-gray-800">Change Password</h2>
                        <form>
                            <div class="mb-6">
                                <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Current
                                    Password</label>
                                <input type="password" id="current_password" name="current_password"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div class="mb-6">
                                <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1">New
                                    Password</label>
                                <input type="password" id="new_password" name="new_password"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div class="mb-6">
                                <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm
                                    New Password</label>
                                <input type="password" id="confirm_password" name="confirm_password"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div class="mt-8 flex justify-end">
                                <button type="submit"
                                    class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"><i
                                        class="fa-regular fa-circle-check me-2"></i>Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
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
    <section>
        <div class="container-xl">
            <div class="user-profile">
                <div class="card">
                    <div class="card-header">
                        <ul data-bs-toggle="tabs" class="nav nav-tabs card-header-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="#profile" class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                                    role="tab">
                                    <svg class="icon me-2 svg-icon-ti-ti-user" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg>
                                    User profile
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="#avatar" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1"
                                    role="tab">
                                    <svg class="icon me-2 svg-icon-ti-ti-camera-selfie" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2">
                                        </path>
                                        <path d="M9.5 15a3.5 3.5 0 0 0 5 0"></path>
                                        <path d="M15 11l.01 0"></path>
                                        <path d="M9 11l.01 0"></path>
                                    </svg>
                                    Avatar
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="#change-password" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                    tabindex="-1" role="tab">
                                    <svg class="icon me-2 svg-icon-ti-ti-lock" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z">
                                        </path>
                                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                                        <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                                    </svg>
                                    Change password
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="profile" role="tabpanel">
                                <form method="POST" action="https://cms.botble.com/admin/system/users/profile/1"
                                    accept-charset="UTF-8" id="profile-form" class="js-base-form dirty-check"
                                    novalidate="novalidate"><input name="_method" type="hidden" value="PUT"><input
                                        name="_token" type="hidden" value="qPJ7cIqOsTqNM54WPRyb6g8Qej6HSXUztMOUy6Yf">
                                    <div class="row row-cols-lg-2">
                                        <div class="mb-3 position-relative">
                                            <label class="form-label form-label required" for="first_name">
                                                First Name
                                            </label>
                                            <input class="form-control" data-counter="30" placeholder="Enter first name"
                                                required="required" name="first_name" type="text" value="Reuben"
                                                id="first_name" aria-required="true">
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <label class="form-label form-label required" for="last_name">
                                                Last Name
                                            </label>
                                            <input class="form-control" data-counter="30" placeholder="Enter last name"
                                                required="required" name="last_name" type="text" value="Hills"
                                                id="last_name" aria-required="true">
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <label class="form-label form-label required" for="username">
                                                Username
                                            </label>
                                            <input class="form-control" data-counter="30" placeholder="Enter username"
                                                required="required" name="username" type="text" value="admin"
                                                id="username" aria-required="true">
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <label class="form-label form-label required" for="email">
                                                Email
                                            </label>
                                            <input class="form-control" data-counter="60"
                                                placeholder="Ex: example@gmail.com" required="required" name="email"
                                                type="text" value="obartell@ernser.com" id="email"
                                                aria-required="true">
                                        </div>
                                        <link rel="stylesheet"
                                            href="https://cms.botble.com/vendor/core/core/base/libraries/intl-tel-input/css/intlTelInput.min.css">
                                        <script src="https://cms.botble.com/vendor/core/core/base/libraries/intl-tel-input/js/intlTelInput.min.js"></script>
                                    </div>
                                    <div class="card-footer bg-transparent mt-3 p-0 pt-3">
                                        <div class="btn-list justify-content-end">
                                            <button class="btn btn-primary" type="submit">
                                                <svg class="icon icon-left svg-icon-ti-ti-circle-check"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    <path d="M9 12l2 2l4 -4"></path>
                                                </svg>
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="avatar" role="tabpanel">
                                <div class="crop-image-container">
                                    <div class="mb-3 position-relative">
                                        <label class="form-label">
                                            Avatar
                                        </label>
                                        <div class="avatar-view rounded-pill overflow-hidden">
                                            <img class="image-preview crop-image-original avatar avatar-2xl rounded-pill"
                                                src="https://cms.botble.com/storage/users/1.jpg" alt="Avatar"
                                                style="--bb-avatar-size: 10rem;">
                                            <div class="backdrop"></div>
                                            <div class="action">
                                                <a href="javascript:void(0);" class="text-decoration-none text-white"
                                                    data-bs-toggle="modal" data-bs-target="#avatar_file-modal">
                                                    <svg class="icon svg-icon-ti-ti-edit"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path
                                                            d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                        </path>
                                                        <path
                                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                        </path>
                                                        <path d="M16 5l3 3"></path>
                                                    </svg> </a>

                                                <a data-bb-toggle="delete-avatar"
                                                    href="https://cms.botble.com/admin/system/users/delete-profile-image/1"
                                                    class="text-decoration-none text-white">
                                                    <svg class="icon svg-icon-ti-ti-trash"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M4 7l16 0"></path>
                                                        <path d="M10 11l0 6"></path>
                                                        <path d="M14 11l0 6"></path>
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                    </svg> </a>
                                            </div>
                                        </div>

                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#avatar_file-modal" class="d-block mt-1">
                                            Choose image
                                        </a>
                                    </div>
                                    <div class="modal fade modal-blur modal fade modal-blur crop-image-modal"
                                        id="avatar_file-modal" tabindex="-1" role="dialog" aria-hidden="true"
                                        data-select2-dropdown-parent="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Avatar</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <form
                                                                action="https://cms.botble.com/admin/system/users/modify-profile-image/1">
                                                                <div class="mb-3 position-relative">
                                                                    <label class="form-label" for="avatar_file">
                                                                        Avatar
                                                                    </label>
                                                                    <input class="form-control" type="file"
                                                                        name="avatar_file" id="avatar_file"
                                                                        accept="image/*">
                                                                </div>
                                                            </form>
                                                            <div class="cropper-image-wrap">
                                                                <img src="" class="cropper-image">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="img-preview preview-lg"></div>
                                                            <div class="img-preview preview-md"></div>
                                                            <div class="img-preview preview-sm"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" type="button" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button class="btn btn-primary  ms-auto" type="submit">
                                                        Save
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="change-password" role="tabpanel">
                                <form method="POST" action="https://cms.botble.com/admin/system/users/password/1"
                                    accept-charset="UTF-8" id="password-form" class="js-base-form dirty-check"
                                    novalidate="novalidate"><input name="_method" type="hidden"
                                        value="PUT"><input name="_token" type="hidden"
                                        value="qPJ7cIqOsTqNM54WPRyb6g8Qej6HSXUztMOUy6Yf">
                                    <div class="row row-cols-lg-2">
                                        <div class="col-lg-12">
                                            <div class="mb-3 position-relative">

                                                <label class="form-label form-label required" for="old_password">
                                                    Current Password
                                                </label>
                                                <div class="input-group">
                                                    <input type="password" name="old_password" id="old_password"
                                                        value="" class="form-control" data-counter="60"
                                                        required="required" data-bb-password="" aria-required="true">
                                                    <span class="input-password-toggle" data-bb-toggle-password=""
                                                        data-initialized="true">
                                                        <svg class="icon svg-icon-ti-ti-eye"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                            <path
                                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                                            </path>
                                                        </svg> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 position-relative">

                                            <label class="form-label form-label required" for="password">
                                                New Password
                                            </label>
                                            <div class="input-group">
                                                <input type="password" name="password" id="password" value=""
                                                    class="form-control" data-counter="60" required="required"
                                                    data-bb-password="" aria-required="true">
                                                <span class="input-password-toggle" data-bb-toggle-password=""
                                                    data-initialized="true">
                                                    <svg class="icon svg-icon-ti-ti-eye"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                        <path
                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                                        </path>
                                                    </svg> </span>
                                            </div>
                                        </div>
                                        <div class="mb-3 position-relative">

                                            <label class="form-label form-label required" for="password_confirmation">
                                                Confirm New Password
                                            </label>
                                            <div class="input-group">
                                                <input type="password" name="password_confirmation"
                                                    id="password_confirmation" value="" class="form-control"
                                                    data-counter="60" required="required" data-bb-password=""
                                                    aria-required="true">
                                                <span class="input-password-toggle" data-bb-toggle-password=""
                                                    data-initialized="true">
                                                    <svg class="icon svg-icon-ti-ti-eye"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                        <path
                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                                        </path>
                                                    </svg> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent mt-3 p-0 pt-3">
                                        <div class="btn-list justify-content-end">
                                            <button class="btn btn-primary" type="submit">
                                                <svg class="icon icon-left svg-icon-ti-ti-circle-check"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    <path d="M9 12l2 2l4 -4"></path>
                                                </svg>
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
