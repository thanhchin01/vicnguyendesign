@extends('layouts.welcome')

@section('title', 'Team Page')

<section class="relative w-full min-h-screen">
    <!-- Video nền -->
    <!-- Lớp phủ mờ nhẹ để làm nổi slogan -->
    <div class="absolute top-0 left-0 w-full h-full bg-black/20"></div>

    <!-- Phần slogan nằm giữa -->
    <div class="relative z-10 justify-center px-4 py-10">
        <!-- 1 Phần slogan -->
        <div class="flex flex-col  justify-center items-center text-center md:text-left gap-6 mt-10">
            <a href="https://vicnguyendesign.org" id="logo">
                <img src="https://vicnguyendesign.org/frontend/images/logo.png" alt="Logo"
                    class="w-24 md:w-32 mb-4 rounded-xl shadow-lg mx-auto md:mx-0" />
            </a>

            <p class="max-w-2xl text-sm md:text-base leading-relaxed">
                "We aim to, at all times, provide our customers with the most Beautiful 3D Images,
                Attractive, Powerful &amp; as close to Reality as possible, through Digital Art."
            </p>
        </div>

        <!-- 2 Phần nội dung bên dưới slogan -->
        <div class="mt-10 md:mt-10 flex flex-col space-y-4 p-4 text-center md:text-left container mx-auto ">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 place-items-center ">
                <a href="" class="h-full">
                    <img class="rounded-xl border border-white shadow-lg w-40 md:w-64 h-[300px] object-cover"
                        src="https://vicnguyendesign.org/frontend/images/img_team/vicnguyen.jpg" alt="">
                    <p class="text-lg font-semibold">VIC NGUYEN</p>
                    <p>CEO & Lead 3D Artist</p>
                </a>
                <a href=""  class="h-full">
                    <img class="rounded-xl border border-white shadow-lg w-40 md:w-64 h-[300px] object-cover"
                        src="https://vicnguyendesign.org/frontend/images/img_team/NguyenHoang.jpg" alt="">
                    <p class="text-lg font-semibold">NGUYEN HOANG</p>
                    <p>Animation Expert</p>
                </a>
                <a href=""  class="h-full">
                    <img class="rounded-xl border border-white shadow-lg w-40 md:w-64 h-[300px] object-cover"
                        src="https://vicnguyendesign.org/frontend/images/img_team/Phamxuanha.jpg" alt="">
                    <p class="text-lg font-semibold">PHAM XUAN HA</p>
                    <p>3D Artist Generalist</p>
                    <p>Architectical</p>
                </a>
                <a href=""  class="h-full">
                    <img class="rounded-xl border border-white shadow-lg w-40 md:w-64 h-[300px] object-cover"
                        src="https://vicnguyendesign.org/frontend/images/img_team/NguyenNga.jpg" alt="">
                    <p class="text-lg font-semibold">NGUYEN NGA</p>
                    <p>3D Artist Generalist</p>
                    <p>Designer poses</p>
                </a>
                <a href=""  class="h-full">
                    <img class="rounded-xl border border-white shadow-lg w-40 md:w-64 h-[300px] object-cover"
                        src="https://vicnguyendesign.org/frontend/images/img_team/Phamthanhdat.jpg" alt="">
                    <p class="text-lg font-semibold">PHAM THANH DAT</p>
                    <p>3D Artist Generalist</p>
                    <p>Architectical</p>
                </a>
                <a href=""  class="h-full">
                    <img class="rounded-xl border border-white shadow-lg w-40 md:w-64 h-[300px] object-cover"
                        src="https://vicnguyendesign.org/frontend/images/img_team/Vanguyen.jpg" alt="">
                    <p class="text-lg font-semibold">VA NGUYEN</p>
                    <p>3D Artist Generalist</p>
                    <p>Designer</p>
                </a>
                <a href=""  class="h-full">
                    <img class="rounded-xl border border-white shadow-lg w-40 md:w-64 h-[300px] object-cover"
                        src="https://vicnguyendesign.org/frontend/images/img_team/PhamPhung.jpg" alt="">
                    <p class="text-lg font-semibold">PHAM PHUNG</p>
                    <p>3D Artist Generalist</p>
                    <p>Designer</p>
                </a>
                <a href=""  class="h-full">
                    <img class="rounded-xl border border-white shadow-lg w-40 md:w-64 h-[300px] object-cover"
                        src="https://vicnguyendesign.org/frontend/images/img_team/Lee_Thanh.jpg" alt="">
                    <p class="text-lg font-semibold">LEE THANH</p>
                    <p>3D Artist Generalist</p>
                    <p>Designer</p>
                </a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 place-items-center">
                <a href=""  class="h-full">
                    <img class="rounded-xl border border-white shadow-lg w-40 md:w-64 h-[300px] object-cover"
                        src="https://vicnguyendesign.org/frontend/images/img_team/LyNguyen.jpg" alt="">
                    <p class="text-lg font-semibold">LY NGUYEN</p>
                    <p>3D Artist Generalist</p>
                    <p>Designer</p>
                </a>
                <a href="">
                    <img class="rounded-xl border border-white shadow-lg w-40 md:w-64 h-[300px] object-cover"
                        src="https://vicnguyendesign.org/frontend/images/img_team/NguyenDac.jpg" alt="">
                    <p class="text-lg font-semibold">NGUYEN DAC</p>
                    <p>3D Artist Generalist</p>
                    <p>Designer</p>
                </a>
                <a href="">
                    <img class="rounded-xl border border-white shadow-lg w-40 md:w-64 h-[300px] object-cover"
                        src="https://vicnguyendesign.org/frontend/images/img_team/ViNguyen.jpg" alt="">
                    <p class="text-lg font-semibold">VI NGUYEN</p>
                    <p>3D Artist Generalist</p>
                    <p>Designer</p>
                </a>
            </div>
        </div>
    </div>
</section>
