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
                <h1 class="text-center text-2xl font-semibold">FORGOT PASSWORD</h1>
                <p>Have you forgotten your password?</p>
                <p class="mt-4">Please enter your email account. System will send a email with active link to reset
                    your password.?</p>
                <label for="" class="mt-4">Email</label>
                <div class="flex justify-center">
                    <span class="flex w-full border border-gray-400 rounded-lg shadow-md overflow-hidden">
                        <input class="flex-grow px-4 py-2 text-white focus:outline-none" type="text" name="email"
                            id="email" placeholder="Enter your email address">

                        <div class="flex items-center justify-center border-l border-gray-400 bg-gray-50 px-3">
                            <i class="fa-solid fa-envelope text-gray-500 text-lg"></i>
                        </div>
                    </span>
                </div>
                <button class="bg-blue-500 px-4 py-2 hover:bg-blue-600 rounded-md text-white mt-3">
                    Submit
                </button>
                <a href="{{ url('admin/login') }}" class="text-blue-500 hover:text-blue-600 hover:underline">Back to login page</a>
            </div>
        </div>
        <div class="col-span-7 bg-cover bg-center hidden lg:block"
            style="background-image: url(https://picsum.photos/seed/randomseed/1200/900)">
        </div>
    </div>
</body>

</html>
