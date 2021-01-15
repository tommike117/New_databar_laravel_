@extends('layouts/main-samsung-products')

@section('title', 'Samsung Smartphone | Samsung Tablets | Samsung Knox | DATABAR COMPANY LIMITED')


@section('link')

    <link rel="stylesheet" media="screen and (min-width: 992px)" href="{{ URL::to('/css/new-website/products/samsung/landing-page/style_d.css')}}">
    <link rel="stylesheet" media="(min-width: 768px) and (max-width: 991.98px)"  href="{{ URL::to('/css/new-website/products/samsung/landing-page/style_t.css')}}">
    <link rel="stylesheet" media="screen and (max-width: 767.98px)" href="{{ URL::to('/css/new-website/products/samsung/landing-page/style_m.css')}}">
    <link rel="stylesheet" href="{{ URL::to('/css/new-website/partners/flickity-docs.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="/css/index.css">


@endsection




@section('content')

<section>
    <div class="bg-section1">
        <div class="video-banner" style="position: relative" >
            <video class="video-section desktop-none" style="width: 68%; height: auto;" title="home-page video" autoplay muted loop >
                <source src="{{URL::to('videos/samsung/landing/Introducing_the_Galaxy_XCover_Pro.mp4')}}" type="video/mp4">
                <source src="{{URL::to('videos/samsung/landing/Introducing_the_Galaxy_XCover_Pro.webm')}}" type="video/webm">
            </video>
            <figure class="mobile" style="text-align: center;">
                <img src="/images/samsung/galaxy-xcover-pro/uk-feature-durability-for-outdoor-206665282.webp"  width="100%" class="pic-banner " alt="">
            </figure>
            <div style="width: 100%; position: absolute;right:0;top: 83%;">
                <p>Manage your entire business with Samsung <br>
                Connect all your processes and transform your growing business. </p>
            </div>
        </div>
        <div class="text-all-samsung">
            <a href="/products/samsung/smartphones">Smartphones</a>
            <a class="bord" href="/products/samsung/tablets">Tablets</a>
            <a href="/products/samsung/knox">Samsung Knox</a>
        </div>
    </div>

</section>


<section>
    <div class="bg-section2">
        <div class="flex-12">
            <div class="flex-4">
                <div class="block1-sec2">
                    <div class="img-ontop">
                        <img style="width: 100%" src="/images/new-website/products/samsung/landing-page/Session2-1.png" alt="">
                    </div>
                </div>
                <p>Equipped for your <br> environment</p>
                <div class="btn-tablet">
                    <a href="/products/samsung/smartphones">
                        <button class="btn-databar">Read more</button>
                    </a>
                </div>
            </div>
            <div class="flex-4">
                <div class="block2-sec2">
                    <div class="img-ontop">
                        <img style="width: 120%" src="/images/new-website/products/samsung/landing-page/Session2-2.png" alt="">
                    </div>
                </div>
                <p>The tablet that can do <br> what others can't</p>
                <div class="btn-tablet">
                    <a href="/products/samsung/tablets">
                        <button class="btn-databar">Read more</button>
                    </a>
                </div>
            </div>
            <div class="flex-4">
                <div class="block3-sec2">
                    <div class="img-ontop">
                        <img style="width: 100%" src="/images/new-website/products/samsung/landing-page/Session2-3.png" alt="">
                    </div>
                </div>
                <p>Defence-grade <br> security</p>
                <div class="btn-tablet">
                    <a href="/products/samsung/tablets">
                        <button class="btn-databar">Read more</button>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>



<section style="padding-bottom: 7%;">
    <div class="bg-section3">
        <h2>Explore Samsung <br> Enterprise  Mobility Solution</h2>

    <div class="container-fluid mt-5 mb-5">
        <div class="news-video wow fadeInUp" data-wow-delay=".5s">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="row row_brand_product">
                        <div class="col-xs-12 col-sm-12 col-md-4 news">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 p-lg-0">
                                    <div class="item-img-hover ">
                                        <a href="#newsvideo1" id="videolink">
                                            <img title="Samsung Galaxy Watch Active2" alt="Galaxy Watch Active2"
                                                src="/images/home_page/watch-active2.webp" width="100%">
                                            <span class="item-middle">
                                                <i class="icon icon-play"></i>
                                            </span>
                                        </a>
                                        <video title="Samsung Galaxy Watch Active2" id="newsvideo1" class="mfp-hide"
                                            width="853" height="480" controls>
                                            <source src="/videos/home_page/Galaxy Watch Active2.mp4" type="video/ogg">
                                            <source src="/videos/home_page/Galaxy Watch Active2.ogg" type="video/ogg">
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="block-video_content">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 FadeInUp">
                                        <label class="news_head">Galaxy Watch Active2</label>
                                        <label class="news_content">Designed to give you smart advice to better manage all
                                            areas
                                            of life, including your wellness.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 news">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 p-lg-0">
                                    <div class="item-img-hover">
                                        <a href="#newsvideo2" id="videolink2">
                                            <img alt="Galaxy Fold Multitasking" title="Samsung Galaxy Fold Multitasking"
                                                src="{{URL::asset('images/home_page/galaxy-fold_highlight_overview_slide02.jpg')}}"
                                                width="100%">
                                            <span class="item-middle">
                                                <i class="icon icon-play"></i>
                                            </span>
                                        </a>
                                        <video title="Galaxy Note10 Unpacked Replay" id="newsvideo2" class="mfp-hide"
                                            width="853" height="480" controls>
                                            <source src="/videos/home_page/The Galaxy Fold_ Multitasking.mp4"
                                                type="video/mp4">
                                            <source src="/videos/home_page/The Galaxy Fold_ Multitasking.ogg"
                                                type="video/ogg">
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="block-video_content">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 FadeInUp">
                                        <label class="news_head ">The Galaxy Fold: Multitasking</label>
                                        <label class="news_content">The Galaxy Fold revolutionizes smartphone and tablet
                                            breakthroughs to deliver a truly pioneering experience.
                                            With the immersive display coupled with software optimization.</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 news">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 p-lg-0">
                                    <div class="item-img-hover">
                                        <a href="#newsvideo3" id="videolink3">
                                            <img alt="Introducing Galaxy Tab Active3" title="Galaxy Tab Active3"
                                                src="/images/home_page/levant-feature-designed-to-be-sturdy-and-reliable-314915740.jfif" width="100%" alt="">
                                            <span class="item-middle">
                                                <i class="icon icon-play"></i>
                                            </span>
                                        </a>
                                        <video title="Introducing Galaxy Tab S6" id="newsvideo3" class="mfp-hide"
                                            width="853" height="480" controls>
                                            <source src="/videos/home_page/Galaxy Tab Active3.mp4"
                                                type="video/mp4">
                                            <source src="/videos/home_page/Galaxy Tab Active3.mp4"
                                                type="video/ogg">
                                        </video>
                                    </div>
                                </div>
                            </div>

                            <div class="block-video_content">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 FadeInUp">
                                        <label class="news_head">Galaxy Tab Active3: Feature Intro Film</label>
                                        <label class="news_content">Built strong from the inside out and S Pen handles well even with gloves
                                        </label>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="bg-section3-mobile">
        <h2>Explore Samsung <br> Enterprise  Mobility Solution</h2>
        <div class="carousel mob" data-flickity='{ "wrapAround": true }'>
            <div>
                <video title="Introducing Galaxy Tab S6" class="video-news" width="640" height="480" controls autoplay loop muted>
                    <source src="/videos/home_page/Galaxy Tab Active2.mp4" type="video/mp4">
                </video>
            </div>
            <div>
                <video title="Introducing Galaxy Tab S6" class="video-news" width="640" height="480" controls autoplay loop muted>
                    <source src="/videos/home_page/Galaxy Tab Active2.mp4" type="video/mp4">
                </video>
            </div>

            {{-- <div class="carousel-cell"></div> --}}
            {{-- <div class="carousel-cell"></div> --}}
            {{-- <div class="carousel-cell"></div> --}}
        </div>
    </div>

</section>


<section>
    {{-- footer --}}
    @include('includes/footer')
</section>






@endsection



@section('script')
{{-- <script src="/js/page-js/New-databar/partners/flickity-docs.min.js"></script> --}}
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>

<script>


    $(document).ready(function () {

        // document.getElementById("myVideo").playbackRate = .7;

        $('#videolink').magnificPopup({
            type: 'inline',
            midClick: true
        });
        $('#videolink2').magnificPopup({
            type: 'inline',
            midClick: true
        });
        $('#videolink3').magnificPopup({
            type: 'inline',
            midClick: true
        });
    });

</script>
@endsection
