@extends('figmaUI.layouts.welcome')

@section('title', 'Studio Page')

@section('content')
    <section class="max-w-[1250px] mx-auto mt-5 p-4">
        <h1 class="text-3xl font-base tracking-wide">ANPHA OFFICE / AD9 ARCHITECTS</h1>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 mt-9">
            <div class="col-span-8 flex flex-col gap-6">
                <img class="w-full object-cover" src="{{ Vite::asset('public/assect/News/6.jpg') }}" alt="">
                <p>Text description provided by the architect. Anpha office was former after some big changes regarding its
                    function from the investor. At first, we were tasked with creating a house for 5 family members,
                    including a grandmother, a married couple and their two children. We are getting more accustomed to
                    Saigon housing project, however this contruction has a big length, and we want to urilize that feature
                    to create spaces that are interactive and connective for family members. We reserved a large portion of
                    the length for the skylight, which is the main space to connect the rest of the spaces in the house, the
                    actives, the balance between stactic and non-static, air movement, light and nature</p>
                <img class="w-full object-cover" src="{{ Vite::asset('public/assect/News/7.jpg') }}" alt="">
                <p>
                    When the base of the construction was done, the investor shared with us his wish to convert the
                    construction`s functon to serve the purpose of running a mid-size family business, specializing in
                    Medicine and Medical Equitment. This was the most difficult part for us during the whole project, since
                    the construction base was done for a family housing. Fortunately, each office of ALpha company has only
                    5-8 employees, that makes utilizing the existing rooms feasible. We used glass walls to maximizie the
                    use of nature spaces from the sktlight, so almost all of the working spaces are surrsounded with two
                    layer of nature, the comany`s daily life also more interesting since the employees can always see each
                    other, they can indulge in the natural atmostphere, the freshness of the trees. This is a feature that
                    we are sure office in skycraper cannot benifit from.
                </p>
                <img class="w-full object-cover" src="{{ Vite::asset('public/assect/News/8.jpg') }}" alt="">
                <p>
                    We`ve recordeded photos of AnPha company affter 2 operating years, in oder to fully understand that what
                    we cerated were going in the right direction, and to serve as inspiration for our future projects.
                </p>
            </div>
            <div class="col-span-4 bg-gray-300 h-fit p-4">
                <div class="flex flex-col gap-4">
                    <h1 class="text-xl font-medium">BÀI VIẾT KHÁC</h1>
                    <a class="flex gap-1" href="">
                        <img class="w-[150px] h-[150px] object-cover" src="{{ Vite::asset('public/assect/News/3.png') }}" alt="">
                        <p class="font-semibold">Refuge in the Valley | Zanesco Arquaitetura</p>
                    </a>
                    <a class="flex gap-1" href="">
                        <img class="w-[150px] h-[150px] object-cover" src="{{ Vite::asset('public/assect/News/4.jpg') }}" alt="">
                        <p class="font-semibold">Refuge in the Valley | Zanesco Arquaitetura</p>
                    </a>
                    <a class="flex gap-1" href="">
                        <img class="w-[150px] h-[150px] object-cover" src="{{ Vite::asset('public/assect/News/5.png') }}" alt="">
                        <p class="font-semibold">Refuge in the Valley | Zanesco Arquaitetura</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
