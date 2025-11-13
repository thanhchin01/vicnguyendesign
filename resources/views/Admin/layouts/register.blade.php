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

<body class="bg-gray-100 flex justify-center items-center min-h-screen p-4">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-3 flex flex-col gap-3">
        <h1 class="text-center text-2xl font-semibold">REGISTER ADMIN</h1>
        <p class="text-center">Register a new membership</p>
         {{-- Fullname --}}
        <div class="flex justify-center">
            <span class="flex w-full max-w-sm border border-gray-400 rounded-lg shadow-md overflow-hidden">
                <input class="flex-grow px-4 py-2 text-gray-700 focus:outline-none" type="text" name="fullname"
                    id="fullname" placeholder="Fullname">

                <div class="flex items-center justify-center border-l border-gray-400 bg-gray-50 px-3">
                    <i class="fa-regular fa-user text-gray-500 text-lg"></i>
                </div>
            </span>
        </div>
        {{-- Email --}}
        <div class="flex justify-center">
            <span class="flex w-full max-w-sm border border-gray-400 rounded-lg shadow-md overflow-hidden">
                <input class="flex-grow px-4 py-2 text-gray-700 focus:outline-none" type="text" name="email"
                    id="email" placeholder="Email">

                <div class="flex items-center justify-center border-l border-gray-400 bg-gray-50 px-3">
                    <i class="fa-solid fa-envelope text-gray-500 text-lg"></i>
                </div>
            </span>
        </div>
        {{-- password --}}
        <div class="flex justify-center">
            <span class="flex w-full max-w-sm border border-gray-400 rounded-lg shadow-md overflow-hidden">
                <input class="flex-grow px-4 py-2 text-gray-700 focus:outline-none" type="password" name="Password"
                    id="password" placeholder="Password">

                <div class="flex items-center justify-center border-l border-gray-400 bg-gray-50 px-3">
                    <i class="fa-solid fa-lock text-gray-500 text-lg"></i>
                </div>
            </span>
        </div>
        {{-- re-password --}}
        {{-- password --}}
        <div class="flex justify-center">
            <span class="flex w-full max-w-sm border border-gray-400 rounded-lg shadow-md overflow-hidden">
                <input class="flex-grow px-4 py-2 text-gray-700 focus:outline-none" type="password" name="re-enter password"
                    id="re-enter password" placeholder="Re-enter password">

                <div class="flex items-center justify-center border-l border-gray-400 bg-gray-50 px-3">
                    <i class="fa-solid fa-lock text-gray-500 text-lg"></i>
                </div>
            </span>
        </div>
        <hr class="mt-3 text-center">
        {{-- Button --}}
        <div class="flex justify-center mt-2">
            <button class="bg-blue-500 px-4 py-2 hover:bg-blue-600 rounded-md text-white">
                Sign In
            </button>
        </div>
        <h1 class="text-center">-OR-</h1>
        <div class="flex flex-col">
            <a href="{{ url('admin/login') }}" class="text-center text-blue-500 hover:text-blue-600 hover:underline">
                I already have a membership </a>
        </div>
    </div>
</body>

</html>
