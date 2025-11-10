@extends('figmaUI.layouts.welcome')

@section('title', 'Studio Page')

@section('content')
    <section class="max-w-[1250px] mx-auto mt-5 p-4">
        <div class="p-4">
            <div x-data="{
                active: 0,
                slides: [
                    '{{ Vite::asset('resources/assect/Studio/1.jpg') }}',
                    '{{ Vite::asset('resources/assect/Studio/2.jpg') }}',
                    '{{ Vite::asset('resources/assect/Studio/3.jpg') }}',
                    '{{ Vite::asset('resources/assect/Studio/4.jpg') }}'
                ],
                next() { this.active = (this.active + 1) % this.slides.length },
                prev() { this.active = (this.active - 1 + this.slides.length) % this.slides.length },
                autoSlide() {
                    setInterval(() => this.next(), 8000)
                }
            }" x-init="autoSlide" class="relative w-full h-[600px] overflow-hidden rounded-xl">
                <!-- Slides -->
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="active === index" x-transition.opacity class="absolute inset-0">
                        <img :src="slide" class="w-full h-full object-cover" alt="">
                    </div>
                </template>

                <!-- Nút điều hướng -->
                <button @click="prev()"
                    class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/40 text-white p-2 px-4 py-3 rounded-xl hover:bg-black/60">
                    ‹
                </button>
                <button @click="next()"
                    class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/40 text-white p-2 px-4 py-3 rounded-xl hover:bg-black/60">
                    ›
                </button>
            </div>
        </div>
        <div class="p-4">
            <p>VIC NGUYEN Architects là một văn phòng thực hành kiến trúc được thành lập từ 2011. Mặc dù phạm vi cụa hoạt
                động thiết kế kiến trúc rất rộng nhưng VIC NGUYEN architects qua nhiều năm, đã kiên trì tạo lập cho bản thân
                mình một lối đi riêng và hẹp: tập trung chuyên sâu vào nhưng dự án mưu cầu tính sáng tạo, nhiều thử nghiệm,
                mang lại niềm vui và sự hưng khởi cho khách hàng cũng như đội kiến trúc sư, nhà thầu đồng hành với văn
                phòng, từ những nét vẽ phác thảo đầu tiên tới khi dự án được hoàn thiện trên thực tế.</p>
            <p>Giải thưởng không phải là đích đến của VIC NGUYEN architects, nhưng đó là sự ghi nhận quan trọng của giới
                chuyên môn sau quá trình dài thực hành kiến trúc bền bỉ và kiên định của chúng tôi.</p>
            <ul class="mt-4 list-disc list-inside">
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
            </ul>
        </div>
    </section>
@endsection
