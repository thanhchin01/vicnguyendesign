{{-- <!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vic Nguyen Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="grid grid-cols-1 md:grid-cols-12">
        <div class="col-span-5 bg-gray-800 h-screen flex justify-center items-center">
            <div class="p-3 flex flex-col gap-4 text-white w-full max-w-md sm:max-w-lg md:max-w-xl">
                <h1 class="text-center text-2xl font-semibold">LOGIN ADMIN</h1>
                <p class="text-center">Sign in to start your session</p>

                {{-- Form Đăng nhập --}
                <form method="POST" action="{{ route('postLogin') }}" class="space-y-4">
                    @csrf
                    {{-- Trường Username --}
                    <div class="flex justify-center">
                        <span
                            class="flex w-full border border-gray-600 rounded-lg shadow-md overflow-hidden bg-gray-600 focus-within:border-blue-500">
                            <input
                                class="flex-grow px-4 py-2 text-white bg-gray-600 focus:outline-none placeholder-gray-400"
                                type="text" name="username" id="username" placeholder="Username"
                                value="{{ old('username') }}" required>

                            <div class="flex items-center justify-center border-l border-gray-600 bg-gray-500 px-3">
                                <i class="fa-solid fa-envelope text-gray-200 text-lg"></i>
                            </div>
                        </span>
                    </div>
                    @error('username')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    {{-- Trường Password --}
                    <div class="flex justify-center">
                        <span
                            class="flex w-full border border-gray-600 rounded-lg shadow-md overflow-hidden bg-gray-600 focus-within:border-blue-500">
                            <input
                                class="flex-grow px-4 py-2 text-white bg-gray-600 focus:outline-none placeholder-gray-400"
                                type="password" name="password" id="password" placeholder="Password" required>

                            <div class="flex items-center justify-center border-l border-gray-600 bg-gray-500 px-3">
                                <i class="fa-solid fa-lock text-gray-200 text-lg"></i>
                            </div>
                        </span>
                    </div>
                    @error('password')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    <hr class="mt-3 border-gray-600">

                    <label class="flex items-center space-x-2 text-gray-300">
                        <input type="checkbox" name="remember"
                            class="rounded text-blue-500 focus:ring-blue-500 bg-gray-600 border-gray-600">
                        <span>Remember me?</span>
                    </label>

                    <button type="submit"
                        class="w-full bg-blue-600 px-4 py-3 hover:bg-blue-700 rounded-md text-white font-semibold transition duration-150 shadow-lg shadow-blue-500/50">
                        Sign In
                    </button>
                </form>

                <a href="{{ url('admin/forgotpassword') }}"
                    class="text-blue-400 hover:text-blue-300 hover:underline text-center text-sm">
                    I forgot my password
                </a>
            </div>
        </div>
        <div class="col-span-7 bg-cover bg-center hidden lg:block"
            style="background-image: url(https://picsum.photos/seed/randomseed/1200/900)">
        </div>
    </div>

</body>
</html> --}}

<html lang="en"><!--begin::Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Vic Nguyen Design</title>
    <!--end::Accessibility Meta Tags-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
    <!--end::Accessibility Features-->
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" media="print"
        onload="this.media='all'" />
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="./css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->

    <!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous" />

</head>
<!--end::Head-->
<!--begin::Body-->

<body class="login-page bg-body-secondary app-loaded">
    <div class="skip-links"><a href="#main" class="skip-link">Skip to main content</a><a href="#navigation"
            class="skip-link">Skip to navigation</a></div>
    <div class="login-box">
        <div class="login-logo">
            <a href=>VicNguyenDesign</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('postLogin') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username"
                                value="{{ old('username') }}" required>
                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>
                    </div>
                    @error('username')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                                value="{{ old('password') }}" required>
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                    </div>
                    @error('password')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remember" name="remember">
                                <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-2">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </div>
                    <!--end::Row-->
                </form>
                <p class="mb-1">
                    <a href="{{ url('admin/forgotpassword') }}">I forgot my password</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
        crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <div id="live-region" class="live-region" aria-live="polite" aria-atomic="true" role="status"></div>
</body><!--end::Body-->

</html>
