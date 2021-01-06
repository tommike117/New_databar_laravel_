@extends('layouts/main-all-products')

@section('title', 'Galaxy Note10+ | Samsung Smartphone | DATABAR COMPANY LIMITED')

@section('link')


<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-note10/style.css')}}">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

@endsection


<!-- Grid -->

@section('content')

<div class="p-md-4 p-lg-4">
    <div class="block-banner margin-from-nav">
        <div class="samsung-banner">
            <figure class="note-10-phone-small" data-aos="small-phone-animation">
                <img src="{{URL::asset('images/samsung/galaxy-note10/galaxy-note10_small.png')}}" alt="">
            </figure>
            <figure class="note-10-phone-big" data-aos="fade" data-aos-duration="800">
                <img src="{{URL::asset('images/samsung/galaxy-note10/galaxy-note10_big.png')}}" alt="">
            </figure>
            <figure class="note-10-shadow" data-aos="fade-shadow">
                <img src="{{URL::asset('images/samsung/galaxy-note10/note10-shadow.jpg')}}" alt="">
            </figure>
            <figure class="text-galaxy" data-aos="fade" data-aos-duration="700" data-aos-delay="1500">
                <img src="{{URL::asset('images/samsung/galaxy-note10/galaxy-note10_highlights_text_galaxy.webp')}}"
                    alt="">
            </figure>
            <figure class="text-note10" data-aos="fade" data-aos-duration="700" data-aos-delay="1750">
                <img src="{{URL::asset('images/samsung/galaxy-note10/galaxy-note10_highlights_text_note10.webp')}}"
                    alt="">
            </figure>
        </div>
        <div class="banner-mobile">
            <figure>
                <img style="width:100%" src="{{URL::asset('images/samsung/galaxy-note10/galaxy-note10_mobile.jpg')}}"
                    alt="Note10 Note10+">
            </figure>
        </div>
    </div>
</div>


<div class="content-container container-fluid">
    <section class="section section-1">
        <div class="row justify-content-center">
            <article class="section-1-article">
                <div class="p-section1" data-aos="fade-down">
                    <span class="h1-block">
                            <h1 class="text-center">Galaxy Note10 | Note10+</h1>
                            <p class="display-none-mobile">isn't just a new smartphone. It's a gaming console. A film studio. It's a computer with an intelligent pen—and it's all in one device.</p>
                    </span>
                </div>
            </article>
        </div>
    </section>

{{--
    <section class="display-none-mobile awSlider section section-2" style="margin: auto auto;">
        <div class="block-video">
            <div class="main-gallery js-flickity"
                data-flickity-options='{ "cellAlign": "left", "lazyLoad": 1 , "autoPlay": false,  "wrapAround": true }'>
                <div class="gallery-cell">
                    <div class="item-img-hover">
                        <img title="Samsung Knox" alt="Samsung Knox"
                            src="{{URL::asset('images/samsung/galaxy-note10/video1.jpg')}}" width="100%" alt="">
                        <div class="detail-video">
                            <p class="video-text-size text-white">Official Introduction</p>
                            <a href="#note10-video1" id="videolink1">
                                <span class="item-middle">
                                    <i class="far fa-play-circle"></i>
                                </span>
                            </a>
                        </div>
                        <video title="Samsung Knox" id="note10-video1" class="mfp-hide" width="853" height="480"
                            controls>
                            <source
                                src="{{URL::asset('videos/samsung/galaxy-note10/Galaxy Note10_ Official Introduction.mp4')}}"
                                type="video/ogg">
                            <source
                                src="{{URL::asset('videos/samsung/galaxy-note10/Galaxy Note10_ Official Introduction.ogg')}}"
                                type="video/ogg">
                        </video>
                    </div>
                </div>

                <div class="gallery-cell">
                    <div class="item-img-hover">
                        <img title="Samsung Knox" alt="Samsung Knox"
                            src="{{URL::asset('images/samsung/galaxy-note10/video2.jpg')}}" width="100%" alt="">
                        <div class="detail-video">
                            <p class="video-text-size text-white">Next-Level Power Is Here</p>
                            <a href="#note10-video2" id="videolink2">
                                <span class="item-middle">
                                    <i class="far fa-play-circle"></i>
                                </span>
                            </a>
                        </div>
                        <video title="Samsung Knox" id="note10-video2" class="mfp-hide" width="853" height="480"
                            controls>
                            <source
                                src="{{URL::asset('videos/samsung/galaxy-note10/Galaxy Note10 Official TVC_ Next-level power.mp4')}}"
                                type="video/mp4">
                            <source
                                src="{{URL::asset('videos/samsung/galaxy-note10/Galaxy Note10 Official TVC_ Next-level power.ogg')}}"
                                type="video/ogg">
                        </video>
                    </div>
                </div>

                <div class="gallery-cell">
                    <div class="item-img-hover">
                        <img title="Samsung Knox" alt="Samsung Knox"
                            src="{{URL::asset('images/samsung/galaxy-note10/video3.jpg')}}" width="100%" alt="">
                        <div class="detail-video">
                            <p class="video-text-size text-white">UNPACKED Highlights</p>
                            <a href="#note10-video3" id="videolink3">
                                <span class="item-middle">
                                    <i class="far fa-play-circle"></i>
                                </span>
                            </a>
                        </div>
                        <video title="Samsung Knox" id="note10-video3" class="mfp-hide" width="853" height="480"
                            controls>
                            <source
                                src="{{URL::asset('videos/samsung/galaxy-note10/Galaxy Unpacked August 2019_ Highlights.mp4')}}"
                                type="video/mp4">
                            <source
                                src="{{URL::asset('videos/samsung/galaxy-note10/Galaxy Unpacked August 2019_ Highlights.ogg')}}"
                                type="video/ogg">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="section section-3">
        <article class="section-3-article">
            <div class="row justify-content-center align-items-center text-center flex-column">
                <h2 class="h2-section-3">PERFORMANCE</h2>
                <h3 class="h3-section-3">
                    More power. More speed. <br>
                    More storage.
                </h3>
            </div>
        </article>
    </section>

    <section class="section section-4">
        <div class="block-radius block-video-section-4 position-relative">
            <video class="video-lozad-1 display-none-mobile" width="100%" muted autoplay>
                    <source
                    data-src="{{URL::asset('videos/samsung/galaxy-note10/galaxy-note10_highlight_design-power.mp4')}}"
                    media="(min-width: 992px)" type="video/mp4">
            </video>
            <video class="video-lozad-1 display-none-desktop" width="100%" muted>
                <source
                    data-src="{{URL::asset('videos/samsung/galaxy-note10/galaxy-note10_highlight_m.mp4')}}"
                    type="video/mp4">
            </video>
            <article class="section-4-article display-none-mobile">
                <span data-aos="change-color" style="color: white">
                    <h4>Hours of power from minutes of charge</h4>
                    <p>No time is the right time to be caught without a charge, so the Galaxy Note10's
                        cutting-edgebattery intelligence ensures you won't be left powerless. And Super Fast Charging
                        gets you backto 100% super fast.</p>
                </span>
            </article>
        </div>
    </section>


    <section class="section section-5">
        <article class="section-5-article">
            <div class="row pl-md-10p pr-md-10p">
                <div class="col-md-4 flex-left-article-section-5">
                    <h4 class="section-5-h4">Right-now fast.</h4>
                </div>
                <div class="col-md-8 flex-right-article-section-5">
                    <p class="section-5-p">You'll download photos and videos, stream content, even game online in the
                        busiest of places at
                        incredible speeds with a powerful processor and the 2.0Gbps LTE connection of Galaxy Note10. Or
                        take
                        it up a notch with Note10+ 5G's built-in HyperFast 5G chip.</p>
                </div>
            </div>
        </article>
    </section>


    <section class="section section-6">
        <div class="block-radius position-relative">
            <img src="{{URL::asset('images/samsung/galaxy-note10/galaxy-note10_highlights_perfomance_fast.jpg')}}"
                style="width:100%;" alt="">
            <div class="block-figure-section-6">
                <figure data-aos="fade-up" data-aos-duration="800" class="section-6-figure">
                    <img src="{{URL::asset('images/samsung/galaxy-note10/galaxy-note10_highlights_perfomance_download1_a.png')}}"
                        alt="">
                </figure>
                <figure data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" class="section-6-figure">
                    <img src="{{URL::asset('images/samsung/galaxy-note10/galaxy-note10_highlights_perfomance_download2_a.png')}}"
                        alt="">
                </figure>
                <figure data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000" class="section-6-figure">
                    <img src="{{URL::asset('images/samsung/galaxy-note10/galaxy-note10_highlights_perfomance_download3_a.png')}}"
                        alt="">
                </figure>
            </div>
        </div>
    </section>


    <section class="section section-7">
        <div class="block-radius position-relative">
            <div class="block-section-7-left">
                <h4>Laptop storage without the laptop</h4>
                <p>With massive internal memory and external storage up to an additional 1TB, the Note10 series takes
                    mobile memory to massive levels.</p>
                <ul class="ul-section-7 list-unstyled mb-lg-3">
                    <li>
                        <p>GALAXY NOTE10</p>
                        <p>INTERNAL STORAGE:</p>
                        <p class="p-big">256GB</p>
                    </li>
                </ul>
                <ul class="ul-section-7 list-unstyled mt-lg-3">
                    <li>
                        <p>GALAXY NOTE10+</p>
                        <p>GALAXY NOTE10+ 5G</p>
                        <p>INTERNAL STORAGE:</p>
                        <p class="p-big">256GB | 512GB</p>
                        <p>PLUS UP TO AN ADDITIONAL</p>
                        <p class="p-big">1TB</p>
                    </li>
                </ul>
            </div>
            <div class="block-section-7-right">
                <figure class="section-7-figure">
                    <img style="width:100%" src="{{URL::asset('images/samsung/galaxy-note10/galaxy-note10_highlights_perfomance_laptop.png')}}"
                        alt="">
                </figure>
            </div>
        </div>
    </section>


    <section class="section section-8">
        <article class="section-3-article">
            <div class="row">
                <div class="col-12 justify-content-center align-items-center text-center flex-column">

                    <h2 class="h2-section-3">DESIGN</h2>
                    <h3 class="h3-section-3">
                        More screen, less in the way
                    </h3>
                </div>
            </div>
        </article>
        <div class="row">
            <img src="{{URL::asset('images/samsung/galaxy-note10/galaxy-note10_highlight_design_end.jpg')}}"
                style="width:100%;" alt="">
        </div>
    </section>


    <section class="section section-5" style="padding: 80px 0;">
        <article class="section-5-article">
            <div class="row pl-md-10p pr-md-10p">
                <div class="col-md-4 flex-left-article-section-5">
                    <h4 class="section-5-h4">The Galaxy Note now comes in two sizes.</h4>
                </div>
                <div class="col-md-8 flex-right-article-section-5">
                    <p class="section-5-p">For the first time ever, you can choose the Note size that fits you best.</p>
                </div>
            </div>
        </article>
    </section>




    <section class="section section-9">
        <div class="block-figure-section-9">
            <div class="fix-img-note10">
                <figure class="figure-section-9-image1">
                    <img src="{{URL::asset('images/samsung/galaxy-note10/galaxy-note10_highlights_design_size_small_glow.webp')}}" style="width:100%" alt="">
                </figure>
                <figure class="figure-section-9-image2">
                    <img src="{{URL::asset('images/samsung/galaxy-note10/galaxy-note10_highlights_design_size_big.webp')}}" style="width:100%" alt="">
                </figure>
            </div>
            <figcaption class="figcaption-note10">Galaxy Note10 <br>6.3”
                DISPLAY</figcaption>
            <figcaption class="figcaption-note10plus">Galaxy Note10+<br>6.8”
                DISPLAY</figcaption>
        </div>
    </section>
</div>


@endsection

@section('script')

<script src="{{URL::asset('/js/jquery.magnific-popup.min.js')}}"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="{{URL::asset('js/page-js/samsung/galaxy-note10/main.js')}}"></script>

@endsection
