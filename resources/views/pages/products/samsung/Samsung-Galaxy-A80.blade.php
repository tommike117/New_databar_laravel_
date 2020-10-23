
@extends('layouts/main')

@section('title','Samsung Galaxy A80 | Samsung Smartphone | DATABAR COMPANY LIMITED')

@section('link')

<link rel="stylesheet" href="{{ URL::to('/css/page-style/samsung/galaxy-a80/main.css')}}">

@endsection




@section('content')
<div class="container-fluid">
        <!-- section 1 -->
        <section>
            <div class="row">
            <img src="{{URL::asset('images/samsung/galaxy-a80/banner_1.webp')}}" style="width:100%;" alt="">
            </div>
            <div class="row pl-3 pr-3 pb-0">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="row flex-column align-items-center justify-content-center">
                        <figure class="svg_block_image">
                            <img src="{{URL::asset('images/samsung/galaxy-a80/svg_1.svg')}}" alt="">
                        </figure>
                        <figcaption>Rotating Camera</figcaption>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="row flex-column align-items-center justify-content-center">
                        <figure class="svg_block_image">
                            <img src="{{URL::asset('images/samsung/galaxy-a80/svg_2.svg')}}" alt="">
                        </figure>
                        <figcaption>Infinity Display</figcaption>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="row flex-column align-items-center justify-content-center">
                        <figure class="svg_block_image">
                            <img src="{{URL::asset('images/samsung/galaxy-a80/svg_3.svg')}}" alt="">
                        </figure>
                        <figcaption>Super Fast Charging</figcaption>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="row flex-column align-items-center justify-content-center">
                        <figure class="svg_block_image">
                            <img src="{{URL::asset('images/samsung/galaxy-a80/svg_4.svg')}}" alt="">
                        </figure>
                        <figcaption>On-Screen Fingerprint</figcaption>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section1 -->
        <!-- section2 -->
        <section>
            <div class="row justify-content-center bg-black">
                <div class="block-h1 flex-row">
                    <h1 class="text-white">Meet the new Galaxy A80​</h1>
                </div>
                <div class="flex-banner">
                    <img src="{{URL::asset('images/samsung/galaxy-a80/banner_2.webp')}}" style="width:100%;" alt="">
                </div>
            </div>
        </section>
        <!-- section3 -->
        <section>
            <div class="row justify-content-center bg-black">
                <div class="block-h1 flex-column">
                    <h1 class="text-white">Rotating Camera. Equally epic both sides.</h1>
                    <div class="block-p">
                        <p class="text-white text-center">The Galaxy A80 changes how you document life. The triple
                            camera slides and rotates to catch
                            what's happening in front and behind. Therefore, now you have one camera that shoots on both
                            sides to capture all your moments. The camera built for Live. Not just for selfies.</p>
                    </div>
                    <p class="remark">​*Images simulated for illustrative purposes.</p>
                </div>
                <div class="flex-banner">
                    <img src="{{URL::asset('images/samsung/galaxy-a80/banner_3.jpg')}}" style="width:100%;" alt="">
                </div>
            </div>
        </section>
        <!-- end section3 -->
        <!-- section4 -->
        <section>
            <div class="row justify-content-center bg-black">

                <div class="block-h1 flex-column">
                    <h1 class="text-white">Capture more detail in your stories</h1>
                </div>
                <div class="row" style="flex:0 0 100%;max-width:100%;">
                    <div class="flex-full">
                        <figure class="svg_camera_size text-center front">
                            <img src="{{URL::asset('images/samsung/galaxy-a80/front_active.svg')}}" alt="">
                            <figcaption class="text-white mt-3 mb-5">Front</figcaption>
                        </figure>

                        <figure class="svg_camera_size text-center rear">
                            <img src="{{URL::asset('images/samsung/galaxy-a80/rear.svg')}}" alt="">
                            <figcaption class="text-white mt-3 mb-5">Rear</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="block-p">
                    <p class="text-white text-center">The Galaxy A80's 48MP camera gives you super crisp, clear
                        resolution for shot-worthy moments. You'll notice the difference when vlogging and streaming
                        your day-to-day adventures.</p>
                </div>
                <div class="flex-banner">
                    <img id="changecamera" src="{{URL::asset('images/samsung/galaxy-a80/banner_4_front.webp')}}" style="width:100%;" alt="">
                </div>
            </div>
        </section>
        <!-- end section4 -->
        <!-- section5 -->
        <section>
            <div class="row justify-content-center">
                <div class="block-h1 flex-column">
                    <h1>The camera that lets you see more</h1>
                </div>
            </div>
            <div class="row" style="flex:0 0 100%;max-width:100%;">
                <div class="flex-full">
                    <figure class="svg_camera_wide_size text-center wide">
                        <img src="{{URL::asset('images/samsung/galaxy-a80/wide_active.svg')}}" alt="">
                        <figcaption class="mt-3 mb-5">Wide angle</figcaption>
                    </figure>

                    <figure class="svg_camera_wide_size text-center ultrawide">
                        <img src="{{URL::asset('images/samsung/galaxy-a80/ultra wide.svg')}}" alt="">
                        <figcaption class="mt-3 mb-5">Untra wide angle</figcaption>
                    </figure>
                </div>
            </div>
            <div class="block-p">
                <p class="text-white text-center">The Galaxy A80's 48MP camera gives you super crisp, clear
                    resolution for shot-worthy moments. You'll notice the difference when vlogging and streaming
                    your day-to-day adventures.</p>
            </div>
            <div class="flex-banner">
                <img id="changecamerawide" src="{{URL::asset('images/samsung/galaxy-a80/banner_5_wide.webp')}}" style="width:100%;" alt="">
            </div>
            <p class="remark text-black text-center mt-5 mb-5">*Images captured with Galaxy A80. **Viewing angle
                adjusted down for selfie with Ultra Wide Camera.</p>
        </section>
        <!-- end section5 -->
        <!-- section6 -->
        <section>
            <div class="row justify-content-center">
                <div class="block-h1 flex-column">
                    <h1>Shoot Live videos like a pro</h1>
                    <div class="block-p">
                        <p class="text-center">Galaxy A80 records like a pro-level action camera utilising the
                            Ultra Wide Camera and predictive software. Super steady gives you smooth Live videos, even
                            when
                            your journey is on the adventurous side.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <h4 style="margin:30px auto;">Super Steady On</h4>
            </div>
            <div class="row justify-content-center">
                <video style="width:100%;" controls>
                    <source src="{{URL::asset('images/samsung/galaxy-a80/steady.mp4')}}" type="video/mp4">
                    <source src="{{URL::asset('images/samsung/galaxy-a80/steady.ogg')}}" type="video/ogg">
                </video>
                <div class="block-p">
                    <p class="remark text-black text-center">*Video captured with Galaxy A80. **Viewing angle adjusted
                        down for selfie with Ultra Wide Camera. ***Does not support zoom function. Results may vary
                        depending on shooting conditions including multiple subjects, being out of focus, or moving
                        subjects. ****Only available when shooting with the Ultra Wide Camera in Full HD.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <h4 style="margin:30px auto;">Super Steady Off</h4>
            </div>
            <div class="row justify-content-center">
                <video style="width:100%;" controls>
                    <source src="{{URL::asset('images/samsung/galaxy-a80/steady-off.mp4')}}" type="video/mp4">
                    {{-- <source src="{{URL::asset('images/samsung/galaxy-a80/steady-off.ogg')}}" type="video/ogg"> --}}
                </video>
                <div class="block-p">
                    <p class="remark text-black text-center">*Video captured with Galaxy A80. **Viewing angle adjusted
                        down for selfie with Ultra Wide Camera. ***Does not support zoom function. Results may vary
                        depending on shooting conditions including multiple subjects, being out of focus, or moving
                        subjects. ****Only available when shooting with the Ultra Wide Camera in Full HD.</p>
                </div>
            </div>
        </section>
        <!-- end section6 -->
        <!-- section7 -->
        <section>
            <div class="row">
                <div class="block-h1 flex-column">
                    <h1>Add depth to your world
                    </h1>
                    <div class="block-p">
                        <strong style="margin:20px auto;">Less distractions, better Live videos</strong>
                        <p class="text-center">
                            Thanks to the Galaxy A80’s 3D Depth Camera, Live focus is available not only on photos but
                            now also available on video. Live focus video lets you blur out distracting backgrounds in
                            your videos to make your main subject come to life.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <video style="width:100%;" controls>
                    <source src="{{URL::asset('images/samsung/galaxy-a80/live.mp4')}}" type="video/mp4">
                    <source src="{{URL::asset('images/samsung/galaxy-a80/live.ogg')}}" type="video/ogg">
                </video>
                <div class="block-p">
                    <p class="remark text-black text-center">*Video captured with Galaxy A80.</p>
                </div>
            </div>
        </section>
        <!-- end section7 -->
        <!-- section8 -->
        <section>
            <div class="row">
                <div class="flex-content">
                    <h3>Measure anything instantly</h3>
                    <p>Whether you're looking to add new furniture to your home or check the size of your area, it's
                        easy to get real-time AR measurements. With the pre-loaded Quick Measure app, simply scan and
                        measure distances, lengths, depths, and space of 3D objects.</p>
                    <p class="remark text-black mt-lg-7">*Images simulated for illustrative purposes. **Any measurements
                        provided by Quick Measure may not be accurate and should be used for reference purposes only.
                        Accuracy of Quick Measure may differ depending on various factors including shooting conditions,
                        such as being outdoors, and object characteristics, such as being too large, very small, highly
                        reflective, or extremely dark.</p>
                </div>
                <div class="flex-image">
                    <figure class="block_banner_8">
                        <img src="{{URL::asset('images/samsung/galaxy-a80/banner_8.webp')}}" style="width:100%;" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <!-- end section8 -->
        <!-- section9 -->
        <section>
            <div class="row">
                <div class="main-carousel js-flickity" style="width:100%;">
                    <div>
                        <img src="{{URL::asset('images/samsung/galaxy-a80/slide1.webp')}}" alt="">
                    </div>
                    <div>
                        <img src="{{URL::asset('images/samsung/galaxy-a80/slide2.webp')}}" alt="">
                    </div>
                    <div>
                        <img src="{{URL::asset('images/samsung/galaxy-a80/slide3.webp')}}" alt="">
                    </div>
                    <div>
                        <img src="{{URL::asset('images/samsung/galaxy-a80/slide4.webp')}}" alt="">
                    </div>
                    <div>
                        <img src="{{URL::asset('images/samsung/galaxy-a80/slide5.webp')}}" alt="">
                    </div>
                    <div>
                        <img src="{{URL::asset('images/samsung/galaxy-a80/slide6.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- end section9 -->
        <section>
            <div class="row">
                <div class="block-h1 flex-column">
                    <h1>The display designed for Live
                    </h1>
                    <div class="block-p">
                        <p class="text-center">
                            The maximised new Infinity Display is near bezel-less with no notches and no distractions.
                            Its 6.7” Full HD+ Super AMOLED offers a big and bright canvas to explore content, stories,
                            connections and creativity. The display built for Live. More room to play.
                        </p>
                    </div>
                </div>
                <div class="flex-banner">
                    <img src="{{URL::asset('images/samsung/galaxy-a80/banner_9.webp')}}" style="width:100%;" alt="">
                </div>
            </div>
            <p class="remark text-black mt-lg-7 text-center">*Images simulated for illustrative purposes. **New Infinity
                Display: a near bezel-less, full-frontal, edge-to-edge screen. ***Screen measured diagonally as a full
                rectangle without accounting for the rounded corners.</p>
        </section>
        <!-- end section9 -->
        <!-- end section10 -->
        <section>
            <div class="row">
                <div class="block-h1 flex-column">
                    <h1>Easy to hold for longer
                    </h1>
                    <div class="block-p">
                        <p class="text-center">
                            Going Live 24/7 means you need a phone that fits in your hand comfortably. Galaxy A80's
                            smooth curves are designed for ease of use. Its striking design comes with a glass and metal
                            frame that's easy to hold day and night. Stand out with modern classics like Phantom Black,
                            Angel Gold and Ghost White.
                        </p>
                    </div>
                </div>
                <div class="flex-banner">
                    <img src="{{URL::asset('images/samsung/galaxy-a80/banner_10.webp')}}" style="width:100%;" alt="">
                </div>
            </div>
            <p class="remark text-black mt-lg-7 text-center">*Colour availability may vary by country or carrier.</p>
        </section>
        <!-- end section10 -->
        <!-- end section11 -->
        <section>
            <div class="row">
                <div class="flex-content">
                    <h1 class="title_section11">The battery that keeps you Live</h1>
                    <p>To stay Live in an always-on world, you need power. Connect, stream and share with a 3,700 mAh
                        (typical)* battery and the 25W Super Fast Charging technology that lives to tell the tale. The
                        Galaxy A80 learns your daily routines and usage patterns while optimising power by closing
                        unused apps.</p>
                    <p class="remark text-black mt-lg-7">*Typical value tested under third-party laboratory condition.
                        Typical value is the estimated average value considering the deviation in battery capacity among
                        the battery samples tested under IEC 61960 standard. Rated (minimum) capacity is 3,610mAh.
                        Actual battery life may vary depending on network environment, usage patterns and other factors.
                        **Super Fast Charging is only available with a compatible 25W charger and cable.</p>
                </div>
                <div class="flex-image">
                    <figure class="block_banner_11">
                        <img src="{{URL::asset('images/samsung/galaxy-a80/banner_11.webp')}}" style="width:100%;" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <!-- end section11 -->
        <!-- end section12 -->
        <section>
            <div class="row">
                <div class="block-h1 flex-column">
                    <h1>Share, stream and play faster
                    </h1>
                    <div class="block-p">
                        <p class="text-center">
                            Galaxy A80 is the phone that's up for the challenge. The Intelligent Performance Enhancer
                            recognises your mobile habits and optimises the powerful Octa-Core Processor and 8GB of RAM,
                            so you can stream, game and use your phone with incredibly high performance.
                        </p>
                    </div>
                </div>
                <div class="flex-banner">
                    <img src="{{URL::asset('images/samsung/galaxy-a80/banner_12.webp')}}" style="width:100%;" alt="">
                </div>
            </div>
        </section>
        <!-- end section12 -->
        <!-- end section13 -->
        <section>
            <div class="row">
                <div class="flex-content">
                    <h1 class="title_section11">Tap and go with your fingerprint</h1>
                    <p>Our On-Screen Fingerprint is fused into the glass right where you need it, tap and go. Rest assured, your data is fully secure, and you’ll have access to your phone when you need it. The smartphone built for Live, to give you peace-of-mind.</p>
                    <p class="remark text-black mt-lg-7">*If you use a screen protector, make sure it allows for use of the On-Screen fingerprint sensor.</p>
                </div>
                <div class="flex-image">
                    <figure class="block_banner_11">
                        <img src="{{URL::asset('images/samsung/galaxy-a80/banner_13.webp')}}" style="width:100%;" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <!-- end section13 -->
    </div>
@endsection


@section('script')
<script src="{{URL::asset('js/page-js/samsung/galaxy-a80/main.js')}}"></script>
@endsection