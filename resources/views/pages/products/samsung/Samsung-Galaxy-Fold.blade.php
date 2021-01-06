@extends('layouts/main')

@section('title','Samsung Galaxy Fold | Samsung Smartphone | DATABAR COMPANY LIMITED')

@section('link')

<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-fold/style.css')}}">

@endsection




@section('content')
<div class="container-fluid p-0" style="overflow:hidden;">
    <!-- section1 -->
    <section class="sec-1 bg-black">
        <div class="row bg-black row-section-1 m-auto">
            <h1 data-aos="fade" class="title text-white m-auto-60">Galaxy Fold</h1>
            <figure class="fold-section1-size mt-5 mb-5">
                <img data-aos="slide"
                    src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_kv_silver_end.png')}}"
                    style="width:100%;" alt="">
            </figure>
        </div>
    </section>
    <!-- end section1 -->

    <!-- section2 -->
    <section class="sec-2 bg-black">
        <div class="row bg-black row-section-1 m-auto ">
            <article class="justify-content-center text-center p-side-10p">
                <strong>
                    <span data-aos="fade" data-aos-duration="1000" class="m-auto-50 text-white section-2-text">A
                        device unlike any before. Galaxy Fold doesn't
                        just change the face of the smartphone, it changes the face of tomorrow.</span>
                    <span data-aos="fade" data-aos-duration="1000" class="m-auto-50 text-white section-2-text">Today, we
                        introduce the biggest breakthrough
                        since the mobile phone. Today, the future unfolds with Galaxy Fold.</span>
                </strong>
            </article>
        </div>
    </section>
    <!-- end section2 -->

    <!-- section3 -->
    <section class="sec-3 bg-black">
        <div class="row bg-black row-section-1 m-auto ">
            <div class="main-carousel js-flickity" style="width:100%;" data-aos="fade">
                <div class="slide-video-1" style="width:100%;">
                    <div class="item-img-hover " style="width:100%;">

                        <img title="Samsung Galaxy Tab Active2" alt="Samsung Galaxy Tab Active2"
                            src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_overview_slide01.jpg')}}"
                            width="100%" alt="">
                        <span class="item-middle">
                            <a href="#foldvideo" id="videolink">
                                <i class="far fa-play-circle text-white"></i><br>
                            </a>
                            <p class="text-white" style="font-size:30px;">Galaxy Fold : The Announcement</p>
                        </span>

                    </div>
                    <video id="foldvideo" class="mfp-hide" width="853" height="500" controls>
                        <source src="{{URL::asset('images/samsung/galaxy-fold/Announcement.mp4')}}" type="video/mp4">
                        <source src="{{URL::asset('images/samsung/galaxy-fold/Announcement.mp4')}}" type="video/ogg">
                    </video>
                </div>
                <div class="slide-video-2" style="width:100%;">
                    <div class="item-img-hover" style="width:100%;">

                        <img title="Samsung Galaxy Tab Active2" alt="Samsung Galaxy Tab Active2"
                            src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_overview_slide03.jpg')}}"
                            width="100%" alt="">
                        <span class="item-middle">
                            <a href="#slide2-video" id="videolink2">
                                <i class="far fa-play-circle text-white"></i><br>
                            </a>

                            <p class="text-white" style="font-size:30px;">Galaxy Fold : The First Experience</p>
                        </span>
                    </div>
                    <video id="slide2-video" class="mfp-hide" width="853" height="500" controls>
                        <source src="{{URL::asset('images/samsung/galaxy-fold/Galaxy Fold_ The Announcement.mp4')}}"
                            type="video/mp4">
                        <source src="{{URL::asset('images/samsung/galaxy-fold/Galaxy Fold_ The Announcement.mp4')}}"
                            type="video/ogg">
                    </video>
                </div>
                <div class="slide-video-3" style="width:100%;">
                    <div class="item-img-hover" style="width:100%;">

                        <img title="Samsung Galaxy Tab Active2" alt="Samsung Galaxy Tab Active2"
                            src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_overview_slide02.jpg')}}"
                            width="100%" alt="">
                        <span class="item-middle">
                            <a href="#slide3-video" id="videolink3">
                                <i class="far fa-play-circle text-white"></i><br>
                            </a>

                            <p class="text-white" style="font-size:30px;">Galaxy Fold : Unveiling</p>
                        </span>
                    </div>
                    <video id="slide3-video" class="mfp-hide" width="853" height="500" controls>
                        <source
                            src="{{URL::asset('images/samsung/galaxy-fold/Galaxy Fold_ The Announcement.mp4" type="video/mp4')}}">
                        <source
                            src="{{URL::asset('images/samsung/galaxy-fold/Galaxy Fold_ The Announcement.mp4" type="video/ogg')}}">
                    </video>
                </div>
            </div>
        </div>
    </section>
    <!-- end section3 -->

    <!-- section4 -->
    <section class="sec-4 bg-black">
        <div class="flex-blox">
            <div class="block-section-4">
                <article class="m-auto-50 text-white d-block">
                    <strong>
                        <span class="lg-small" data-aos="fade-down" data-aos-duration="1000">Design</span>
                        <h1 class="font-80 design-h1 mt-5" data-aos="fade-down" data-aos-duration="1000">We changed
                            the shape of the phone, and the shape of
                            tomorrow</h1>
                    </strong>
                </article>
            </div>
        </div>
    </section>
    <!-- end section4 -->

    <!-- section5 -->
    <section class="sec-5 bg-black pb-0">
        <div class="block-section-5">
            <div class="row">
                <div class="flex-half p-5">
                    <strong>
                        <h3 class="text-white font-30 half-left-content" data-aos="fade-down" data-aos-duration="1000">A
                            new dawn in display technology: the
                            foldable Infinity Flex
                            Display.</h3>
                    </strong>
                </div>
                <div class="flex-half">
                    <p class="text-white p-5 half-right-content" data-aos="fade-up" data-aos-duration="1000">
                        A stunning 7.3-inch Dynamic AMOLED display that defies expectations. Made of a revolutionary
                        polymer material layered for slim flexibility, it's the largest Galaxy smartphone screen
                        yet.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section5 -->

    <!-- section6 -->
    <section class="sec-6 bg-black">
        <div class="row">
            <video class="lozad" id="display-play" style="width:100%;">
                <source class="video-lozad" style="width:100%;"
                    data-src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_display.mp4')}}">
            </video>
        </div>
    </section>
    <!-- end section6 -->

    <!-- section7 -->
    <section class="sec-7 bg-black pb-0">
        <div class="block-section-5">
            <div class="row">
                <div class="flex-half p-5">
                    <strong>
                        <h3 class="text-white font-30 half-left-content" data-aos="fade-down" data-aos-duration="1000">A
                            new dawn in display technology: the
                            foldable Infinity Flex
                            Display.</h3>
                    </strong>
                </div>
                <div class="flex-half">
                    <p class="text-white p-5 half-right-content" data-aos="fade-up" data-aos-duration="1000">
                        A stunning 7.3-inch Dynamic AMOLED display that defies expectations. Made of a revolutionary
                        polymer material layered for slim flexibility, it's the largest Galaxy smartphone screen
                        yet.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section7 -->

    <!-- section8 -->
    <section class="sec-8 bg-black">
        <div class="row position-relative">
            <video id="animation-fold" class="lozad2" style="width:100%;">
                <source class="video-lozad" style="width:100%;"
                    data-src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_stand.mp4')}}">
            </video>
            <a href="#testfoldvideo" id="videolink-section8" style="width:100%;">
                <div class="line" data-aos="line-animation">
                    <div class="text-up-line text-white" data-aos="fade" data-aos-delay="2900">
                        <p>Tested up to 200,000 folds.</p>
                    </div>
                    <div class="video-under-line">
                        <img class="img-under-line" data-aos="fade" data-aos-delay="2900"
                            src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_stand_thumbnail01.jpg')}}"
                            alt="">
                        <figcaption class="text-white pl-5 pr-5 hover" data-aos="fade" data-aos-delay="2900">The
                            Galaxy
                            Fold’s
                            Folding Test</figcaption>
                    </div>
                </div>
                <video id="testfoldvideo" class="mfp-hide" width="853" height="500" controls>
                    <source src="{{URL::asset('images/samsung/galaxy-fold/The Galaxy Fold’s Folding Test.mp4')}}"
                        type="video/mp4">
                    <source src="{{URL::asset('images/samsung/galaxy-fold/The Galaxy Fold’s Folding Test.mp4')}}"
                        type="video/ogg">
                </video>
            </a>
        </div>
    </section>
    <!-- end section8 -->

    <!-- section9 -->
    <section class="sec-9 bg-black">
        <div class="block-section-5">
            <div class="row">
                <div class="flex-half p-5">
                    <strong>
                        <h3 class="text-white font-30 half-left-content" data-aos="fade-down" data-aos-duration="1000">A
                            new dawn in display technology: the
                            foldable Infinity Flex
                            Display.</h3>
                    </strong>
                </div>
                <div class="flex-half">
                    <p class="text-white p-5 half-right-content" data-aos="fade-up" data-aos-duration="1000">
                        A stunning 7.3-inch Dynamic AMOLED display that defies expectations. Made of a revolutionary
                        polymer material layered for slim flexibility, it's the largest Galaxy smartphone screen
                        yet.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section9 -->

    <!-- section10 -->
    <section class="sec-10 bg-black">
        <div class="row position-relative height-fix">
            <ul class="flex-box-fold-preview-show" data-toggle-class="active" data-aos="fade" data-aos-duration="1000">
                <li>
                    <figure class="fold-preview-show">
                        <img src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_color_silver.webp')}}"
                            alt="">
                    </figure>
                </li>
                <li>
                    <figure class="fold-preview-show">
                        <img src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_color_black.jpg')}}"
                            alt="">
                    </figure>
                </li>
                <li>
                    <figure class="fold-preview-show">
                        <img src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_color_yellow.jpg')}}"
                            alt="">
                    </figure>
                </li>
                <li>
                    <figure class="fold-preview-show">
                        <img src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_color_blue.jpg')}}"
                            alt="">
                    </figure>
                </li>
            </ul>
        </div>
    </section>
    <!-- end section10 -->

    <!-- section11 -->
    <section class="sec-11 bg-black">
        <div class="flex-blox">
            <div class="block-section-4">
                <article class="m-auto-50 text-white d-block">
                    <strong>
                        <span class="lg-small" data-aos="fade-down" data-aos-duration="1000">Experience</span>
                        <h1 class="font-80 design-h1 mt-5" data-aos="fade-down" data-aos-duration="1000">A phone and
                            tablet in one cutting-edge device</h1>
                    </strong>
                </article>
            </div>
        </div>
    </section>
    <!-- end section11 -->

    <!-- section 12 -->
    <section class="sec-12 bg-black">
        <div class="row justify-content-center">
            <div class="flex-half text-center">
                <div class="googlemap-video position-relative">
                    <video id="experiencevideo" class="lozad3" style="z-index:3;">
                        <source src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_hold.mp4')}}"
                            type="video/mp4">
                    </video>
                    <figure data-aos="fade" data-aos-delay="2000" class="google-map-size">
                        <img src="{{URL::asset('images/samsung/galaxy-fold/google-map.webp')}}" style="width:100%;"
                            alt="">
                    </figure>
                </div>
            </div>
            <div class="flex-half content d-flex">
                <div class="block-content-half" data-aos="fade-down" data-aos-delay="2500">
                    <h3 class="text-white text-white font-30">
                        A seamless experience from the outside in.
                    </h3>
                    <p class="text-white">
                        As you unfold, Galaxy Fold’s displays work together seamlessly with impressive app
                        continuity.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section12 -->

    <!-- section 13 -->
    <section class="sec-13 bg-black">
        <div class="block-section-5">
            <div class="row">
                <div class="flex-half p-5">
                    <strong>
                        <h3 class="text-white font-30 half-left-content" data-aos="fade-down" data-aos-duration="1000">A
                            breakthrough in multitasking.</h3>
                    </strong>
                </div>
                <div class="flex-half">
                    <p class="text-white p-5 half-right-content" data-aos="fade-up" data-aos-duration="1000">
                        The Galaxy Fold is pioneering the seamless integration of hardware and software for a
                        foldable device. Use up to three apps simultaneously — you can stream, game, and even text
                        all at once.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section13 -->

    <!-- section 14 -->
    <section class="sec-14 bg-black">
        <div class="row justify-content-center">
            <video id="multitaskingvideo" class="lozad4">
                <source src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_multitasking-a.mp4')}}"
                    type="video/mp4">
            </video>
        </div>
    </section>
    <!-- end section 14 -->

    <!-- section 15 -->
    <section class="sec-15 bg-black">
        <div class="block-section-5">
            <div class="row">
                <div class="flex-half p-5">
                    <strong>
                        <h3 class="text-white font-30 half-left-content" data-aos="fade-down" data-aos-duration="1000">
                            Capture it all, no matter how you hold it.</h3>
                    </strong>
                </div>
                <div class="flex-half">
                    <p class="text-white p-5 half-right-content" data-aos="fade-up" data-aos-duration="1000">
                        With six state-of-the-art cameras, you'll be able to capture stunning photos and videos. And
                        you can use the Infinity Flex Display as a massive viewfinder.<br><br>
                        *Using Infinity Flex Display as viewfinder is not available when using the 10MP Selfie
                        Camera on the cover.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section 15 -->

    <!-- section 16 -->
    <section class="sec-16 bg-black">
        <div class="row justify-content-center position-relative">
            <figure class="capture-back">
                <img src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_capture_back.jpg')}}"
                    data-aos="fade-right" style="width:100%;" alt="">
            </figure>
            <figure class="capture-front">
                <img src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_capture_front.webp')}}"
                    data-aos="fade-left" style="width:100%;" alt="">
            </figure>
        </div>
    </section>
    <!-- end section 16 -->

    <!-- section 17 -->
    <section class="sec-17 bg-black">
        <div class="flex-blox">
            <div class="block-section-4">
                <article class="m-auto-50 text-white d-block">
                    <strong>
                        <span class="lg-small" data-aos="fade-down" data-aos-duration="1000">Performance</span>
                        <h1 class="font-80 design-h1 mt-5" data-aos="fade-down" data-aos-duration="1000">Performs
                            like no other smartphone, because it’s like no other smartphone</h1>
                    </strong>
                </article>
            </div>
        </div>
    </section>
    <!-- end section 17 -->

    <!-- section18 -->
    <section class="sec-18 bg-black">
        <div class="block-section-5">
            <div class="row justify-content-center">

                <div class="flex-half content d-flex">
                    <div class="block-content-half" data-aos="fade-down">
                        <h3 class="text-white text-white font-30">
                            The future of speed and storage.
                        </h3>
                        <p class="text-white">
                            Featuring 12GB of RAM for intensive multitasking — from gaming to streaming, and even
                            live broadcasting, all at once. Plus, 512GB built in storage is ample space for your
                            apps and media.
                        </p>
                    </div>
                </div>
                <div class="flex-half text-center">
                    <img src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_storage.jpg')}}"
                        data-aos="fade" style="width:100%;" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end section 18 -->

    <!-- section 19 -->
    <section class="sec-19 bg-black">
        <div class="block-section-5">
            <div class="row">
                <div class="flex-half p-5">
                    <strong>
                        <h3 class="text-white font-30 half-left-content" data-aos="fade-down" data-aos-duration="1000">
                            The dual cell battery delivering smarter power.</h3>
                    </strong>
                </div>
                <div class="flex-half">
                    <p class="text-white p-5 half-right-content" data-aos="fade-up" data-aos-duration="1000">
                        The dual cell battery with 4380mAh (typical) capacity is a game-changer that uses and
                        recharges both cells to prevent overcharging. To save power, intelligent battery management
                        puts apps you’re not using on reserve.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section 19 -->

    <!-- section 20 -->
    <section class="sec-20 bg-black">
        <div class="row justify-content-center">
            <video id="batteryvideo" class="lozad5" style="z-index:3;" muted>
                <source src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_battery_netflix.mp4')}}"
                    type="video/mp4">
            </video>
            <div class="block-section-5 mt-5">
                <p class="text-white mt-1 mb-1">*Available on LTE model. The 5G model has 4235mAh (typical) battery
                    capacity.</p><br>
                <p class="text-white mt-1 mb-1">*Image simulated for illustration purposes.</p><br>
                <p class="text-white mt-1 mb-1">*Netflix membership required. The Netflix app must be downloaded
                    separately.</p>
            </div>
        </div>
    </section>
    <!-- end section 20 -->

    <!-- section 21 -->
    <section class="sec-21 bg-black">
        <div class="flex-blox">
            <div class="block-section-4">
                <article class="m-auto-50 text-white d-block">
                    <strong>
                        <span class="lg-small" data-aos="fade-down" data-aos-duration="1000">Accessories</span>
                        <h1 class="font-80 design-h1 mt-5" data-aos="fade-down" data-aos-duration="1000">Galaxy Fold is
                            just the beginning</h1>
                    </strong>
                </article>
            </div>
        </div>
    </section>
    <!-- end section 21 -->

    <!-- section 22 -->
    <section class="sec-22 bg-black">
        <div class="row justify-content-center position-relative">
            <figure class="case-back" data-aos="fade-down">
                <img src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_accessories_back.jpg')}}"
                    style="width:100%;" alt="">
            </figure>
            <figure class="case-front" data-aos="fade-up">
                <img src="{{URL::asset('images/samsung/galaxy-fold/galaxy-fold_highlight_accessories_front.webp')}}"
                    style="width:100%;" alt="">
            </figure>
        </div>
    </section>
    <!-- end section 22 -->
</div>
@endsection


@section('script')
<script src="{{URL::asset('js/page-js/samsung/galaxy-fold/main.js')}}"></script>
@endsection
