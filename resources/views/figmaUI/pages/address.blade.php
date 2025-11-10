@extends('figmaUI.layouts.welcome')

@section('title', 'Address Page')

@section('content')
    <section class="max-w-[1250px] mx-auto mt-6 p-4">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-5">
            <div class="md:col-span-5 space-y-4 gap-5 mt-2">
                <h1><i class="fa-solid fa-location-dot me-4 text-[25px] text-red-500"></i>Bui Duong Lich 36, Son Tra
                    District, Da Nang city, Vietnam country</h1>
                <h1><i class="fa-solid fa-envelope me-4 text-[20px] text-red-500 mt-5"></i>vicnguyendesign@gmail.com</h1>
                <h1><i class="fa-solid fa-phone me-4 text-[20px] text-red-500 mt-5"></i>+84 369 753 758</h1>
            </div>
            <div class="md:col-span-7 overflow-hidden shadow-lg border border-gray-200 mt-4">
                <iframe class="w-full"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15597.757886255979!2d109.19270700000001!3d12.218495000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31705df624818927%3A0x9faa63e7e9d4a81!2zOSDEkC4gU-G7kSA0LCBQaMaw4bubYyBMb25nLCBOaGEgVHJhbmcsIEtow6FuaCBIw7JhLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2sus!4v1761970228691!5m2!1svi!2sus"
                    width="1000" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
