@extends('layouts/main')

@section('title','Samsung Galaxy A20e | Samsung Smartphone | DATABAR COMPANY LIMITED')

@section('link')

<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-a20e/main.css')}}">

@endsection




@section('content')

<div class="container-fluid">

    <section class="first_show"  style="display: flex;
    position: relative;
    height: 700px;
    top: 0;
    left: 0;
    right: 0;
    margin: auto;
    align-items: center;
    justify-content: center;">
        <div class="row justify-content-center">
            <h1 class="font-80" data-aos="fade">Samsung Galaxy A20e</h1>
        </div>
    </section>

    <!-- section 1 -->
    <section style="margin-top:5px;">
        <div class="row margin-from-nav">
            <img src="{{URL::asset('images/samsung/galaxy-a20e/banner_1.webp')}}" style="width:100%;" alt="">
        </div>
        <div class="row pl-3 pr-3 pb-0 mb-xs-5">
            <div class="col-xs-12 col-sm-6 col-md-6 border-right border-gray-100">
                <div class="row flex-column align-items-center justify-content-center">
                    <figure class="svg_block_image">
                        <img src="{{URL::asset('images/samsung/galaxy-a20e/svg_1.svg')}}" alt="">
                    </figure>
                    <figcaption>Ultra wide angle</figcaption>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="row flex-column align-items-center justify-content-center">
                    <figure class="svg_block_image">
                        <img src="{{URL::asset('images/samsung/galaxy-a20e/svg_2.svg')}}" alt="">
                    </figure>
                    <figcaption>Battery</figcaption>
                </div>
            </div>
        </div>
    </section>
    <!-- end section1 -->
    <!-- section2 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-5-auto text-center">The whole scene on your screen</h1>
                <div class="block-p">
                    <p class="font text-center">With a 5.8" HD+ edge-to-edge infinity-V Display, you can see every inch
                        of your content. It's the biggest 19.5:9 ratio display ever, letting you get lost in games and
                        see even more of your favourite shows.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a20e/banner_2.webp')}}" style="width:100%;" alt="">
            </div>

            <p class="remark text-black pr-20p pl-20p text-center mt-5-auto">​*Images simulated for illustrative
                purposes.**Infinity Display: a near bezel-less, full-frontal glass, edge-to-edge screen.***Screen
                measured diagonally as a full rectangle without accounting for rounded corners.</p>

        </div>
    </section>
    <!-- section3 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-3-auto text-center">Sleek and in a range of colours</h1>
                <div class="block-p">
                    <p class="text-center">At a slender 8.4mm, the Galaxy A20e fits comfortably in one hand. The sleek
                        and slim design features a handy rear fingerprint scanner and beautiful curves. Choose a shade
                        to suit your style from black, white, blue or coral.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a20e/banner_3.webp')}}" style="width:100%;" alt="">
            </div>
        </div>
    </section>
    <!-- end section3 -->
    <!-- section4 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-3-auto text-center">Dual camera to fit more in</h1>
                <div class="block-p">
                    <p class="text-center">The Galaxy A20e's Dual camera has a 13MP(F1.9) and a 5MP Ultra Wide Camera.
                        With a 123-degree field of view like the human eye, it fits more in to every shot you take.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a20e/banner_4.jpg')}}" style="width:100%;" alt="">
            </div>
            <p class="remark text-black pr-20p pl-20p text-center mt-5-auto">*Images simulated for illustrative
                purposes.</p>
        </div>
    </section>
    <!-- end section4 -->
    <!-- section5 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-5-auto text-center">Capture and keep every moment</h1>
                <div class="block-p">
                    <p class="font text-center">With a wide field of view, the Ultra Wide Camera lets you capture the
                        whole scene, automatically switching to Wide Shot mode if it needs to. Day or night, everything
                        you take will come out crisp and clear.</p>
                </div>
            </div>
            <div class="main-carousel js-flickity" style="width:100%;">
                <figure class="slide-img-size">
                    <img src="{{URL::asset('images/samsung/galaxy-a20e/slide1-1.webp')}}" alt="">
                </figure>
                <figure class="slide-img-size">
                    <img src="{{URL::asset('images/samsung/galaxy-a20e/slide1-2.webp')}}" alt="">
                </figure>
                <figure class="slide-img-size">
                    <img src="{{URL::asset('images/samsung/galaxy-a20e/slide1-3.webp')}}" alt="">
                </figure>
            </div>
        </div>
    </section>
    <!-- end section5 -->
    <!-- section6 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-5-auto text-center">Smarter selfies</h1>
                <div class="block-p">
                    <p class="font text-center">Make more of each selfie with a clever 8MP front camera. With Selfie
                        focus, it†s able to blend the background and focus on your features. And Smart Beauty mode makes
                        sure you†re always looking your best.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a20e/banner_4.webp')}}" style="width:100%;" alt="">
            </div>
            <p class="remark text-black pr-20p pl-20p text-center mt-5-auto">*Images simulated for illustrative
                purposes.</p>
        </div>
    </section>
    <!-- end section6 -->
    <!-- section7 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-5-auto text-center">Express yourself</h1>
                <div class="block-p">
                    <p class="font text-center">Add stickers to your shots and use fun filters. The Galaxy A20e lets you
                        show off your creative side.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a20e/banner_5.webp')}}" style="width:100%;" alt="">
            </div>
            <p class="remark text-black pr-20p pl-20p text-center mt-5-auto">​*Images simulated for illustrative
                purposes.**Some movements and expressions may not be recognized.</p>
        </div>
    </section>
    <!-- end section7 -->
    <!-- section8 -->
    <section class="mt-xs-5">
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-3-auto text-center">Be in charge</h1>
                <div class="block-p">
                    <p class="text-center">Make sure that you’re in charge with a 3,000mAh (typical) battery. It’s able
                        to last all day and has 15W Fast Charging, letting you quickly get a boost and be on your way.
                    </p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a20e/banner_6.webp')}}" style="width:100%;" alt="">
            </div>
            <p class="remark text-black text-center mt-5 pl-20p pr-20p">*Typical value tested under third-party
                laboratory condition. Typical value is the estimated average value considering the deviation in battery
                capacity among the battery samples tested under IEC 61960 standard. Rated (minimum) capacity is
                2,920mAh. Actual battery life may vary depending on network environment, usage patterns and other
                factors.</p>
        </div>
    </section>
    <!-- end section8 -->
    <!-- section9 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-3-auto text-center">Made to focus</h1>
                <div class="block-p">
                    <p class="text-center">One UI helps you focus on what really matters to you. Hardware and software
                        work together, with content and features at your fingertips so you can get to them faster. Use
                        Night Mode for a comfortable experience in the dark, and with clear and intuitive visuals using
                        your phone is like second nature</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a20e/banner_7.webp')}}" style="width:100%;" alt="">
            </div>
            <p class="remark pl-20p pr-20p text-black mt-5 mb-5 text-center">​*Access and availability of One UI
                features and apps may vary by depending on device and OS.</p>
        </div>
    </section>
    <!-- end section9 -->
</div>

@endsection




@section('script')
<script src="{{URL::asset('js/page-js/samsung/galaxy-a20e/main.js')}}"></script>
@endsection
