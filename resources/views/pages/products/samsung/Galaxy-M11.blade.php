@extends('layouts/main')

@section('title', 'Galaxy M11 | Samsung Smartphone | DATABAR COMPANY LIMITED')


@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/page-style/samsung/galaxy-m11/main.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/page-style/samsung/galaxy-m11/style.css')}}">

<link rel="stylesheet" href="/css/animate.css">
@endsection



@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 firstrow" style="overflow:hidden;">
            <div>
                <nav aria-label="breadcrumb" id="breadcrumb">
                    <ol itemscope itemtype="http://schema.org/Product" class="breadcrumb mt-lg-5" style="background:transparent;">
                        <li class="breadcrumb-item"><a href="{{URL::to("/")}}">Home</a></li>
                        <li class="breadcrumb-item"><a itemprop="brand" itemscope itemtype="http://schema.org/Brand" href="{{URL::route('samsung.smartphone.all')}}"><span itemprop="name">Samsung Smartphone</span></a></li>
                        <li class="breadcrumb-item d-flex active" aria-current="page">
                            <h1 itemprop="name" class="m-auto" style="font-size:15px;">Galaxy M11</h1>
                        </li>
                    </ol>
                </nav>
            </div>
            <img id="m11" src="{{URL::asset('/images/samsung/galaxy-m11/B-M11_1.webp')}}"
                style="width:100%;" alt="Galaxy M11" title="Samsung Galaxy M11">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: -webkit-center;z-index:1;">
                        <div class="color">
                            <div class="color1" alt="Black" ></div>
                            <div class="color2"></div>
                            <div class="color3"></div>
                        </div>
                    </div>
                </div>
                <div class="thumbnails">
                    <ul class="ul-product">
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-m11/B-M11_1.webp" alt="samsung galaxy m11 black preview1">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-m11/B-M11_2.webp" alt="samsung galaxy m11 black preview2">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-m11/B-M11_3.webp" alt="samsung galaxy m11 black preview3">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-m11/B-M11_4.webp" alt="samsung galaxy m11 black preview4">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-m11/B-M11_5.webp" alt="samsung galaxy m11 black preview5">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-m11/B-M11_6.webp" alt="samsung galaxy m11 black preview6">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-m11/mb_m11_1.webp" alt="samsung galaxy m11 metallic blue preview1">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-m11/mb_m11_2.webp" alt="samsung galaxy m11 metallic blue preview2">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-m11/mb_m11_3.webp" alt="samsung galaxy m11 metallic blue preview3">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-m11/mb_m11_4.webp" alt="samsung galaxy m11 metallic blue preview4">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-m11/mb_m11_5.webp" alt="samsung galaxy m11 metallic blue preview5">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-m11/mb_m11_6.webp" alt="samsung galaxy m11 metallic blue preview6">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-m11/v_m11_1.webp" alt="samsung galaxy m11 violet preview1">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-m11/v_m11_2.webp" alt="samsung galaxy m11 violet preview2">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-m11/v_m11_3.webp" alt="samsung galaxy m11 violet preview3">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-m11/v_m11_4.webp" alt="samsung galaxy m11 violet preview4">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-m11/v_m11_5.webp" alt="samsung galaxy m11 violet preview5">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-m11/v_m11_6.webp" alt="samsung galaxy m11 violet preview6">
                        </li>
                    </ul>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;background: rgba(0,0,0,0.1);margin-top:10px;padding:20px !important;">
                    <h2 style="font-size:13px;color:grey;">Smartphone</h2>
                    <h1 class="product_name">Galaxy M11</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:30px !important;border-bottom:1px solid">
                    <h3 for="" style="font-size:20px;color:black;font-weight:bold">Specification</h3><br>
                    <ul>
                        <li>
                            <label for="">Display : 162.4mm (6.4")</label>
                        </li>
                        <li>
                            <label for="">CPU Speed : 1.8GHz</label>
                        </li>
                        <li>
                            <label for="">CPU Type : Octa-Core</label>
                        </li>
                        <li>
                            <label for="">Front Camera : 8.0 MP F2</label>
                        </li>
                        <li>
                            <label for="">Rear Camera : 13.0 MP + 2.0 MP + 5.0 MP  F1.8 , F2.4 , F2.2</label>
                        </li>
                        <li>
                            <label for="">Resolution 720 x 1560 (HD+)</label>
                        </li>
                        <li>
                            <label for="">ROM Size : 32 GB</label>
                        </li>
                        <li>
                            <label for="">RAM Size : 3 GB</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container" style="margin: 8% 0">
            <div class="row text-center feature-tab">
                    <div class="border-right-solid col-3 feature-tab-icon">
                        <span class="icon icon-triple-camera"></span>
                        <p style="margin-top:10px">Triple Camera</p>
                    </div>
                    <div class="border-right-solid col-3 feature-tab-icon">
                        <span class="icon icon-hardware-performance"></span>
                        <p style="margin-top:10px">Hardware Performance</p>
                    </div>
                    <div class="border-right-solid col-3 feature-tab-icon">
                        <span class="icon icon-battery"></span>
                        <p style="margin-top:10px">Battery</p>
                    </div>
                    <div class="border-right-solid col-3 feature-tab-icon" style="border:none">
                        <p class="ghz">1.8GHz</p>
                        <p>CPU speed</p>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <section style="padding-top:100px;">
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                    <div data-aos="fade-down">
                        <label class="section1_text_line1" for="" style="font-size:60px;font-weight:bold;">Infinity-O Display pulls you into the action</label><br>
                        <p class="section1_text_line2" style="font-size:17px;padding:0 10%;">Expand your world of entertainment. Galaxy M11 features a 6.4" HD+ Infinity-O Display that provides edge-to-edge coverage to enjoy all your favorite gaming and video content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:100px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-m11/th-feature-galaxy-m11-m115-223795592.webp" style="width:100%;" alt="samsung galaxy m11 Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:20px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">
                        * Images simulated for illustrative purposes.<br>
                        ** Infinity Display: a near bezel-less, full-frontal, edge-to-edge screen.<br>
                        *** Actual viewable area is less due to the rounded corners and camera hole.<br>
                        **** Measured diagonally, the screen size is 6.4" in the full rectangle and 6.3" with accounting for the rounded corners.
                        </p>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <section style="padding-top:200px;">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6" style="padding:0;">
                    <div data-aos="fade">
                        <figure>
                            <img src="/images/samsung/galaxy-m11/th-feature-galaxy-m11-m115-223796504.webp" style="width:100%;" alt="samsung galaxy m11 camera">
                        </figure>
                    </div>
                </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 set-middle" style="text-align:left;">
                        <div data-aos="fade-down">
                        <label class="section1_text_line1" for="" style="font-size:60px;font-weight:bold;">Triple camera to share your stories</label><br>
                        <p class="section1_text_line2" style="font-size:17px;padding:0 10%;">M11’s Triple Camera adds more perspectives to elevate your shots. The 13MP Main Camera takes clear images day and night. An 5MP Ultra Wide Camera captures more of the world in front of you, while the 2MP Depth Camera highlights the subject of your photo by blurring the background.
                        </p>
                        </div>
                    </div>
            </div>
        </section>
        <div class="container-fluid">
            <section style="padding-top:200px;">
                <div class="row">
                    <div class="container">
                        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                            <div data-aos="fade-down">
                                <label class="section1_text_line1" for="" style="font-size:60px;font-weight:bold;">An easy-grip design in an array of stylish colors</label><br>
                                <p class="section1_text_line2" style="font-size:17px;padding:0 10%;">Expand your world of entertainment. Galaxy M11 features a 6.4" HD+ Infinity-O Display that provides edge-to-edge coverage to enjoy all your favorite gaming and video content.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:100px;">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                        <div data-aos="fade">
                            <figure>
                                <img src="/images/samsung/galaxy-m11/th-feature-galaxy-m11-m115-223796468.webp" style="width:100%;" alt="samsung galaxy j4 plus display">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                        <div data-aos="fade">
                            <p class="extra-line">
                                * Color availability may vary by country or carrier.
                                </p>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!--choose angle wide ultra wide-->
<section >
    <div class="row justify-content-center" style="padding-top:200px;">

        <div class="block-h1 flex-column"style="text-align:center;">
            <label class="section1_text_line1" for="" style="font-size:70px;font-weight:bold;">Capture your world in ultra wide</label><br>
            <p class="section1_text_line_svg" style="font-size:17px;padding:0 10%;">See more in your photos with the Ultra Wide Camera. The 77° wide angle and 115° ultra wide angle capture the scene as you see it, so you won't miss the moment from where you stand. Now it's even easier to get a great panorama.</p>
        </div>
    </div>
        <div class="row" style="flex:0 0 100%;max-width:100%;">
            <div class="flex-full">
                <figure class="svg_camera_size text-center wide">
                    <img src="{{URL::asset('/images/samsung/galaxy-m11/77-on.svg')}}" alt="">
                    <figcaption class="mt-3 mb-5">Wide angle</figcaption>
                </figure>
                <figure class="svg_camera_size text-center ultrawide">
                    <img src="{{URL::asset('/images/samsung/galaxy-m11/115-off.svg')}}" alt="">
                    <figcaption class="mt-3 mb-5"style="width: 118px;">Ultra Wide angle</figcaption>
                </figure>
            </div>
        </div>
        <div class="flex-banner">
            <img id="changecamerawide" src="{{URL::asset('/images/samsung/galaxy-m11/th-feature-galaxy-m11-m115-223814394.webp')}}" style="width:100%;" alt="">
        </div>

</section>
<!--choose angle Front Rear-->
<section >
<div class="row justify-content-center" style="padding-top:200px;">

    <div class="block-h1 flex-column"style="text-align:center;">
        <label class="section1_text_line1" for="" style="font-size:70px;font-weight:bold;">A camera to let you explore depth</label><br>
        <p class="section1_text_line_svg" style="font-size:17px;padding:0 10%;">The 2MP Depth Camera lets you adjust the depth of field before and after you nail the shot. It reduces unwanted background noise from your images to make them look more professional.</p>
    </div>
</div>
    <div class="row" style="flex:0 0 100%;max-width:100%;">
        <div class="flex-full">
            <figure class="svg_camera_size text-center front">
                <img src="{{URL::asset('/images/samsung/galaxy-m21/front-on.png')}}" alt="">
                <figcaption class="mt-3 mb-5">Live focus off</figcaption>
            </figure>
            <figure class="svg_camera_size text-center rear">
                <img src="{{URL::asset('/images/samsung/galaxy-m21/rear-off.png')}}" alt="">
                <figcaption class="mt-3 mb-5">Live focus on</figcaption>
            </figure>
        </div>
    </div>
    <div class="flex-banner">
        <img id="changecamera" src="{{URL::asset('/images/samsung/galaxy-m11/th-feature-galaxy-m11-m115-223814399.webp')}}" style="width:100%;" alt="">
    </div>
    <div class="row" style="margin-top:0px;">
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
            <div data-aos="fade">
                <p class="extra-line">*Images simulated for illustrative purposes.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- !!important "Layout 6:6 pic right & content left"!! --}}
<div class="container-fluid">
    <section style="padding-top:100px;">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 set-closer">
                <div data-aos="fade-down">
                <label class="section3_text_line1" for="" style="font-size:70px;font-weight:bold;">A selfie<br>camera to <br>see yourself <br>in a new light</label><br>
                <p class="section3_text_line2" style="font-size:17px;padding:0 10%;width:80%;">Capture your best angles with Galaxy M11's 8MP front camera. Use Live focus to gently blur the background so all eyes are on you, and get your good side whether you're at a café or at the park.
                </p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-m11/th-feature-galaxy-m11-m115-223814377.webp" style="width:100%; padding-bottom: 50px;" alt="samsung galaxy m21 camera">
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="container-fluid">
    <section style="padding-top:200px;">
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                    <div data-aos="fade-down">
                        <label class="section1_text_line1" for="" style="font-size:60px;font-weight:bold;">Performance-boosting hardware for fast speeds and streams</label><br>
                        <p class="section1_text_line2" style="font-size:17px;padding:0 10%;">A powerful Octa-core processor and 3GB of RAM to handle your graphic-heavy games and livestreams at fast speeds. With 32GB of internal memory and up to 512GB of external storage, you have plenty of room to stream, download, and post.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:100px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-m11/th-feature-galaxy-m11-m115-223814987.webp" style="width:100%;" alt="samsung galaxy m11 plus display">
                    </figure>
                </div>
            </div>
        </div>
{{-- !!important "Layout 6:6 pic left & content right"!! --}}
<div class="container-fluid">
    <section style="padding-top:100px;">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 ">
                    <div data-aos="fade">
                        <figure>
                            <img src="/images/samsung/galaxy-m11/th-feature-galaxy-m11-m115-223814991.webp" style="width:100%; padding-bottom: 50px;" alt="samsung galaxy m21 camera">
                        </figure>
                    </div>
                </div>
            <div class="col-xs-6 col-sm-6 col-md-6" style="padding:0;">
                <div data-aos="fade-down">
                    <label class="section3_text_line1" for="" style="font-size:70px;font-weight:bold;">Power to get<br> through your <br>day</label><br>
                    <p class="section3_text_line2" style="font-size:17px;padding:0 10%; width:60%;">Whether you are watching movies or video chatting, you need a phone that can keep up. Galaxy M11's 5,000mAh (typical*) battery lets you spend more time doing what you love, while up to 15W Fast Charging capability delivers more charge in less time.
                    </p>
                    <p class="margin-top " style="font-size:10px;padding:0;width:60%;">*Typical value tested under third-party lab conditions. Typical value is the estimated average value considering the deviation in battery capacity among the battery samples tested under IEC 61960 standard. Rated (minimum) capacity is 4900 mAh. Actual battery life may vary depending on network environment, user settings, usage patterns, remaining capacity, and other factors.
                    </p>
                </div>
            </div>

        </div>
    </section>
</div>
{{-- !!End important "Layout 6:6 pic left & content right"!! --}}

@endsection



@section('script')
<script src="{{ URL::asset('/js/page-js/samsung/galaxy-m11/main.js')}}"></script>
@endsection
