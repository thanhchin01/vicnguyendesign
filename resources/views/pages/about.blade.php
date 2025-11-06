@extends('layouts.welcome')

@section('title', 'About Page')

<section class="relative w-full min-h-screen overflow-hidden">
    <!-- Ảnh nền -->
    <img src="https://vicnguyendesign.org/frontend/images/bg1.jpg" alt="Background"
        class="absolute top-0 left-0 w-full h-full object-cover" />

    <!-- Lớp phủ mờ nhẹ để làm nổi slogan -->
    <div class="absolute top-0 left-0 w-full h-full bg-black/50"></div>

    <!-- Phần nội dung -->
    <div class="relative z-10 flex flex-col justify-center text-white px-4 py-10 animate-fadeIn">
        <!-- 1 Phần slogan -->
        <div class="flex flex-col md:flex-row justify-center items-center text-center md:text-left gap-6 mt-10 md:mt-20">
            <a href="https://vicnguyendesign.org" id="logo">
                <img src="https://vicnguyendesign.org/frontend/images/logo.png" alt="Logo"
                    class="w-24 md:w-32 mb-4 rounded-xl shadow-lg mx-auto md:mx-0" />
            </a>

            <p class="max-w-2xl text-sm md:text-base leading-relaxed md:mt-40">
                "We aim to, at all times, provide our customers with the most Beautiful 3D Images,
                Attractive, Powerful &amp; as close to Reality as possible, through Digital Art."
            </p>
        </div>

        <!-- 2 Phần nội dung bên dưới slogan -->
        <div class="mt-10 md:mt-12 flex flex-col space-y-4 p-4 text-left md:text-left">
            <h1 class="text-lg md:text-xl font-semibold tracking-wide">
                Welcome to Vic Nguyen Design!
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Cột 1 -->
                <div>
                    <h1 class="text-lg md:text-xl font-semibold tracking-wide mt-4">Award</h1>
                    <ul class="list-disc list-inside text-white text-sm md:text-base space-y-1 md:space-y-2 mt-2">
                        <li>Featured on Autodesk 2020.</li>
                        <li>3DTotal excellence award, September 2020.</li>
                        <li>3D Total Excellence Award, August 2020.</li>
                        <li>3D Total Excellence Award, July 2020.</li>
                        <li>Featured on Autodesk 2020.</li>
                        <li>First prize, cabin render contest. 2020.</li>
                        <li>Best of May 2020. On Poliigon.</li>
                        <li>Best of February 2020. On Poliigon.</li>
                        <li>ASAI Award of Excellence – 2020.</li>
                        <li>ASAI Award of Excellence – 2019.</li>
                        <li>Artist of the Month, 2019. On Renderize.</li>
                        <li>100 best architectural renderings in 2019. Architizer.com</li>
                        <li>3D Total Excellence Award, July 2019.(02)</li>
                        <li>3D Total Excellence Award, July 2019.(01)</li>
                        <li>3D Total Excellence Award, June, 2019.</li>
                        <li>Asean interior design challenge - 4th Prize winner, June,2019.</li>
                        <li>Artist of the Month(April ) on Autodesk.2019</li>
                        <li>3Dtotal interview, 2019.</li>
                        <li>Visual Wander 2019, TOP10. VWartclub</li>
                        <li>6th Place | Rating (VW Team+Jury Team).</li>
                        <li>ASAI Award of Excellence – 2018</li>
                        <li>Featured on 3D Artist Issue 117. 2018</li>
                    </ul>
                </div>

                <!-- Cột 2 -->
                <ul class="list-disc list-inside text-white text-sm md:text-base space-y-1 md:space-y-2 md:mt-12">
                    <li>3DTotal excellence Award. March, 2018</li>
                    <li>Best of the week. Ronen Bekerman.2018</li>
                    <li>Top 50 Scenes & Environments 2017 on 3Dtotal</li>
                    <li>3D Total Excellence Award, April 2018</li>
                    <li>Expose 12: Nominations for Architecture Interior 2017</li>
                    <li>First prize, cabin render contest. 2020.</li>
                    <li>Visualization pro of the week. CG architect 2016</li>
                    <li>3D Total Excellence Award December 2016</li>
                    <li>3D Total Excellence Award March 2016</li>
                    <li>3D Total Excellence Award September 2015</li>
                    <li>Best of CG Vertex</li>
                    <li>CGChoice Award of the CGSociety 2016</li>
                    <li>Image of the week on 3D Artist online 2016</li>
                    <li>Image of the week on 3D Artist online 2015</li>
                    <li>Runner_up CG Award 2015</li>
                    <li>Artist of the Month, July 2015, of ResbusFarm</li>
                    <li>Artist of the Month(April ) on Autodesk.2019</li>
                    <li>3Dtotal interview, 2019.</li>
                    <li>Best of the week and a month on Ronen Bekerman 2013</li>
                    <li>Best member Vraywork 2013</li>
                    <li>CGRAMP Picture of the Week 2013</li>
                    <li>Best of year. Treddi2013 and 2014</li>
                </ul>

                <!-- Cột 3 -->
                <div>
                    <h1 class="text-lg md:text-xl font-semibold tracking-wide mt-4">Publication</h1>
                    <ul class="list-disc list-inside text-white text-sm md:text-base space-y-1 md:space-y-2 mt-2">
                        <li>Book publication: Exposed 12_2017</li>
                        <li>3D Artist magazine - Issue 104_2017</li>
                        <li>3D Artist magazine - Issue 91_2016</li>
                        <li>3D Artist magazine - Issue 87_2015</li>
                        <li>3D Artist magazine - Issue 83_2015</li>
                        <li>3D Word magazine - Issue 202_2015</li>
                        <li>Interview from Chaosgroup Corporation</li>
                        <li>Interview from Vizpark</li>
                        <li>Interview from 3D Total</li>
                        <li>Interview from CG Vertex</li>
                        <li>Inspiration - Trees & Foliage Vol.4.Cgarchitect.2015</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
