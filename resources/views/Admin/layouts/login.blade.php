<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vic Nguyen Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="grid grid-cols-1 md:grid-cols-12">
        <div class="col-span-5 bg-gray-800 h-screen flex justify-center items-center">
            <div class="p-3 flex flex-col gap-4 text-white w-full max-w-md sm:max-w-lg md:max-w-xl">
                <h1 class="text-center text-2xl font-semibold">LOGIN ADMIN</h1>
                <p class="text-center">Sign in to start your session</p>

                {{-- Hiển thị thông báo thành công hoặc lỗi --}}
                @if (session('success'))
                    <div class="bg-green-500 text-white p-3 rounded-md text-sm text-center">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('status'))
                    <div class="bg-blue-500 text-white p-3 rounded-md text-sm text-center">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- Form Đăng nhập --}}
                <form method="POST" action="{{ route('postLogin') }}" class="space-y-4">
                    @csrf
                    {{-- Trường Email --}}
                    <div class="flex justify-center">
                        <span
                            class="flex w-full border border-gray-600 rounded-lg shadow-md overflow-hidden bg-gray-600 focus-within:border-blue-500">
                            <input
                                class="flex-grow px-4 py-2 text-white bg-gray-600 focus:outline-none placeholder-gray-400"
                                type="email" name="email" id="email" placeholder="Email"
                                value="{{ old('email') }}" required>

                            <div class="flex items-center justify-center border-l border-gray-600 bg-gray-500 px-3">
                                <i class="fa-solid fa-envelope text-gray-200 text-lg"></i>
                            </div>
                        </span>
                    </div>
                    @error('email')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror

                    {{-- Trường Password --}}
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

</html>
