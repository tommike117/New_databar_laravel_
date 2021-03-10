@extends('layouts/main-all-products')

@section('title', 'Galaxy A11 | Samsung Smartphone | DATABAR COMPANY LIMITED')


@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-a11/main.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-a11/style.css')}}">

<link rel="stylesheet" href="/css/animate.css">
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 firstrow" style="overflow:hidden;">
            <div>
                <nav aria-label="breadcrumb" id="breadcrumb">
                    <ol itemscope itemtype="http://schema.org/Product" class="breadcrumb mt-lg-5" style="background:transparent;">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a itemprop="brand" itemscope itemtype="http://schema.org/Brand" href="/products/samsung/smartphones"><span itemprop="name">Samsung Smartphone</span></a></li>
                        <li class="breadcrumb-item d-flex active" aria-current="page">
                            <h1 itemprop="name" class="m-auto" style="font-size:15px;">Galaxy A11</h1>
                        </li>
                    </ol>
                </nav>
            </div>
            <img id="a11" src="{{URL::asset('/images/samsung/galaxy-a11/b_a11_1.webp')}}"
                style="width:100%;" alt="Galaxy a11" title="Samsung Galaxy a11">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: -webkit-center;z-index:1;">
                        <div class="color">
                            <div class="color1"></div>
                            <div class="color2"></div>
                        </div>
                    </div>
                </div>
                <div class="thumbnails">
                    <ul class="ul-product">
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a11/b_a11_1.webp" alt="samsung galaxy a11 blue preview1">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a11/b_a11_2.webp" alt="samsung galaxy a11 blue preview2">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a11/b_a11_3.webp" alt="samsung galaxy a11 blue preview3">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a11/b_a11_4.webp" alt="samsung galaxy a11 blue preview4">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a11/b_a11_5.webp" alt="samsung galaxy a11 blue preview5">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a11/b_a11_6.webp" alt="samsung galaxy a11 blue preview6">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a11/bl_a11_1.webp" alt="samsung galaxy a11 black preview1">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a11/bl_a11_2.webp" alt="samsung galaxy a11 black preview2">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a11/bl_a11_3.webp" alt="samsung galaxy a11 black preview3">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a11/bl_a11_4.webp" alt="samsung galaxy a11 black preview4">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a11/bl_a11_5.webp" alt="samsung galaxy a11 black preview5">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a11/bl_a11_6.webp" alt="samsung galaxy a11 black preview6">
                        </li>

                    </ul>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="row" style="margin-top: 40px;">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;background: rgba(0,0,0,0.1);margin-top:10px;padding:20px !important;">
                    <h2 style="font-size:13px;color:grey;">Smartphone</h2>
                    <h1 class="product_name">Galaxy A11</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:30px !important;border-bottom:1px solid">
                    <h3 for="" style="font-size:20px;color:black;font-weight:bold">Specification</h3><br>
                    <ul>
                        <li>
                            <label for="">Display :(6.4" full rectangle) /  (6.3" rounded corners)</label>
                        </li>
                        <li>
                            <label for="">Resolution (Main Display) : 720 x 1560 (HD+)</label>
                        </li>
                        <li>
                            <label for="">CPU Speed : 1.8GHz</label>
                        </li>
                        <li>
                            <label for="">CPU Type : Octa-Core</label>
                        </li>
                        <li>
                            <label for="">RAM : 3 GB</label>
                        </li>
                        <li>
                            <label for="">ROM : 32 GB </label>
                        </li>
                        <li>
                            <label for="">Front Camera : 8.0 MP</label>
                        </li>
                        <li>
                            <label for="">Rear Camera : 13.0 MP + 2.0 MP + 5.0 MP</label>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container icon-column" style="margin: 8% 0">
            <div class="row text-center feature-tab" style="align-items: center;">
                <div class="border-right-solid col-3 feature-tab-icon">
                    <span class="icon icon-display-6-4"></span>
                    <p style="margin-top:10px">Display</p>
                </div>
                <div class="border-right-solid col-3 feature-tab-icon">
                    <span class="icon icon-triple-camera"></span>
                    <p style="margin-top:10px">Triple camera</p>
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

    {{--!!Only pic--}}
    <section>
        <div class="container-fluid">
            <div class="row" style="margin-top:0px;">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                    <div data-aos="fade">
                        <figure>
                            <img src="/images/samsung/galaxy-a11/africa_en-feature---242556593.webp" style="width:100%;" alt="samsung galaxy a11 Display">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--!!End Only pic--}}

    {{--!!text UP image down samsung--}}
    <section>
        <div class="container-fluid">
            <div class="row" style="margin-top:200px;">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                    <div data-aos="fade-down">
                        <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">A big screen for a better view</label><br>
                        <p class="section3_text_line2" style="font-size:17px;">Immerse yourself in the large 6.4 inch Infinity-O Display of Galaxy A11. A wide aspect ratio fills your screen with content from edge to edge. Watch your favorite videos, games and live streams in vivid HD+ TFT.
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:50px;">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                    <div data-aos="fade">
                        <figure>
                            <img src="/images/samsung/galaxy-a11/africa_en-feature-a-big-screen-for-a-better-view-242556587.webp" style="width:100%;" alt="samsung galaxy a11 Display">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:0px;">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                    <div data-aos="fade">
                        <p class="extra-line">* Images simulated for illustrative purposes.<br>
                            ** Infinity Display: a near bezel-less, full-frontal glass, edge-to-edge screen.<br>
                            *** Measured diagonally, the screen size is 6.4" in the full rectangle and 6.3" with accounting for the rounded corners. Actual viewable area is less due to the rounded corners and the camera cutout.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- !!End text UP image down samsung --}}

    {{-- !!important "Layout 6:6 pic left & content right"!! --}}
    <section style="padding-top:100px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6" style="padding:0;">
                    <div data-aos="fade">
                        <figure>
                            <img src="/images/samsung/galaxy-a11/africa_en-feature-stylish-color-in-the-palm-of-your-hand-242556591.jpg" style="width:100%; padding-bottom: 50px;" alt="samsung galaxy a11 camera">
                        </figure>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 set-middle">
                    <div data-aos="fade-down">
                    <label class="section3_text_line1" for="" style="font-size:70px;font-weight:bold;">Stylish color in the palm of your hand</label><br>
                    <p class="section3_text_line2" style="font-size:17px;padding:0 10%;width:80%;">Galaxy A11 helps you stand out from the crowd with a sleek look that matches your style. Its smooth curves feel like they're made for your hand, for a grip that's easy to hold throughout the day. Choose the color that fits you, like the classic Black or White, or colorful Red or Blue.
                    </p>
                    <p style="padding-top: 100px; width:70%; font-size:13px;">* Color availability may vary by country or carrier.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- !!End important "Layout 6:6 pic left & content right"!! --}}

    {{-- !!important "Layout 6:6 pic right & content left"!! --}}
    <section style="padding-top:100px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 set-closer">
                    <div data-aos="fade-down">
                    <label class="section3_text_line1" for="" style="font-size:70px;font-weight:bold;">Triple camera to capture your live moments</label><br>
                    <p class="section3_text_line2" style="font-size:17px;padding:0 10%;width:80%;">Galaxy A11's Triple camera consists of a 5MP Ultra Wide Camera with a 115-degree field of vision like the human eye, as well as a 13MP (F1.8) camera for bright, clear photos all day. And to round out, a 2MP Depth Camera for adjusting depth of field.
                    </p>
                    <p style="padding-top: 150px; width:70%; font-size:13px;">
                        </p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 " style="padding:0;">
                    <div data-aos="fade">
                        <figure>
                            <img src="/images/samsung/galaxy-a11/africa_en-feature-triple-camera-to-capture-your-live-moments-242556547.webp" style="width:100%; padding-bottom: 50px;" alt="samsung galaxy a11 camera">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- !!End important "Layout 6:6 pic right & content left"!! --}}

    <!--choose angle wide ultra wide-->
    <section >
        <div class="container-fluid">
            <div class="row justify-content-center" style="padding-top:200px;">
                <div class="block-h1 flex-column"style="text-align:center;">
                    <label class="section1_text_line1" for="" style="font-size:70px;font-weight:bold;">Ultra Wide Camera for a greater perspective</label><br>
                    <p class="section1_text_line_svg" style="font-size:17px;padding:0 10%;">Fit more in your photos with the Ultra Wide Camera. The 77-degree Wide angle and 115-degree Ultra Wide angle let you capture what you see, so you won't miss the moment from where you stand. Now it's even easier to get a great panorama.</p>
                </div>
            </div>
                <div class="row" style="flex:0 0 100%;max-width:100%;">
                    <div class="flex-full">
                        <figure class="svg_camera_size text-center wide">
                            <img src="{{URL::asset('/images/samsung/galaxy-a11/77-on.svg')}}" alt="">
                            <figcaption class="mt-3 mb-5">Wide angle</figcaption>
                        </figure>
                        <figure class="svg_camera_size text-center ultrawide">
                            <img src="{{URL::asset('/images/samsung/galaxy-a11/115-off.svg')}}" alt="">
                            <figcaption class="mt-3 mb-5"style="width: 118px;">Ultra Wide angle</figcaption>
                        </figure>
                    </div>
                </div>
            <div class="flex-banner">
                <img id="changecamerawide" src="{{URL::asset('/images/samsung/galaxy-a11/africa_en-feature---242556560.webp')}}" style="width:100%;" alt="">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <p style="padding-top: 0px; font-size:13px; text-align:center;">*Color availability may vary by country or carrier.
                </p>
            </div>
        </div>
    </section>
    <!--End choose angle wide ultra wide-->

    <!--choose angle Front Rear-->
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center" style="padding-top:200px;">

                <div class="block-h1 flex-column"style="text-align:center;">
                    <label class="section1_text_line1" for="" style="font-size:70px;font-weight:bold;">Depth Camera brings your subject into the spotlight</label><br>
                    <p class="section1_text_line_svg" style="font-size:17px;padding:0 10%;">The 2MP Depth Camera lets you adjust the depth of field before and after you nail the shot. The advanced 2MP Depth Camera knocks out unwanted background noise from your images to make them look more professional.</p>
                </div>
            </div>
            <div class="row" style="flex:0 0 100%;max-width:100%;">
                <div class="flex-full">
                    <figure class="svg_camera_size text-center front">
                        <img src="{{URL::asset('/images/samsung/galaxy-a11/front-on.png')}}" alt="">
                        <figcaption class="mt-3 mb-5">Live focus off</figcaption>
                    </figure>
                    <figure class="svg_camera_size text-center rear">
                        <img src="{{URL::asset('/images/samsung/galaxy-a11/rear-off.png')}}" alt="">
                        <figcaption class="mt-3 mb-5">Live focus on</figcaption>
                    </figure>
                </div>
            </div>
            <div class="flex-banner">
                <img id="changecamera" src="{{URL::asset('/images/samsung/galaxy-a11/africa_en-feature---242556571.jpg')}}" style="width:100%;" alt="">
            </div>
            <div class="row" style="margin-top:0px;">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                    <div data-aos="fade">
                        <p class="extra-line">*Images simulated for illustrative purposes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End choose angle Front Rear-->

    {{-- !!important "Layout 6:6 pic left & content right"!! --}}
    <section style="padding-top:100px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6" style="padding:0;">
                    <div data-aos="fade">
                        <figure>
                            <img src="/images/samsung/galaxy-a11/africa_en-feature-attention-grabbing-selfies-made-easy-242556555.webp" style="width:100%; padding-bottom: 50px;" alt="samsung galaxy a11 camera">
                        </figure>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 set-middle">
                    <div data-aos="fade-down">
                    <label class="section3_text_line1" for="" style="font-size:70px;font-weight:bold;">Attention-grabbing selfies made easy</label><br>
                    <p class="section3_text_line2" style="font-size:17px;padding:0 10%;width:80%;">The camera's on you, so it's your time to shine. Galaxy A11's 8MP front camera makes your selfies look more stunning, and with Live focus, you get a gentle background blur that makes your personality the star of the picture.
                    </p>
                    <p style="padding-top: 100px; width:70%; font-size:13px;">*Images simulated for illustrative purposes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- !!End important "Layout 6:6 pic left & content right"!! --}}

    {{-- !!important "Layout 6:6 pic left & content right"!! --}}
    <section style="padding-top:100px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6" style="padding:0;">
                    <div data-aos="fade">
                        <figure>
                            <img src="/images/samsung/galaxy-a11/africa_en-feature-power-that-keeps-you-going-242556551.webp" style="width:100%; padding-bottom: 50px;" alt="samsung galaxy a11 camera">
                        </figure>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 set-middle">
                    <div data-aos="fade-down">
                    <label class="section3_text_line1" for="" style="font-size:70px;font-weight:bold;">Power that keeps you going</label><br>
                    <p class="section3_text_line2" style="font-size:17px;padding:0 10%;width:80%;">When out living life, you need a phone that can last. A 4,000mAh (typical)* battery gives you the power to stream, share and game on. And if you start running low, plug in and power up with up to 15W Fast Charging.
                    </p>
                    <p style="padding-top: 100px; width:70%; font-size:13px;">* Typical value tested under third-party laboratory condition. Typical value is the estimated average value considering the deviation in battery capacity among the battery samples tested under IEC 61960 standard. Rated (minimum) capacity is 3,900 mAh. Actual battery life may vary depending on network environment, usage patterns and other factors.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- !!End important "Layout 6:6 pic left & content right"!! --}}

    {{--!!text UP image down samsung--}}
    <section>
        <div class="container-fluid">
            <div class="row" style="margin-top:200px;">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                    <div data-aos="fade-down">
                        <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Solid performance, so you can do more</label><br>
                        <p class="section3_text_line2" style="font-size:17px;">Galaxy A11 has fast processing and spacious storage so you can focus on now. An advanced Octa-core processor and 2GB of RAM deliver smooth and efficient performance. Download more and delete less with up to 32GB internal storage. Add even more with a 512GB microSD card.
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:50px;">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                    <div data-aos="fade">
                        <figure>
                            <img src="/images/samsung/galaxy-a11/africa-en-feature-galaxy-a11-a115-242939399.webp" style="width:100%;" alt="samsung galaxy a11 Display">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:0px;">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                    <div data-aos="fade">
                        <p class="extra-line">* RAM and internal memory capacity may vary by country.<br>
                            ** Actual storage available may vary depending on pre-installed software.<br>
                            *** MicroSD card sold separately.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- !!End text UP image down samsung --}}
    {{--!!select text to change image!!--}}
    <section style="padding-top:100px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center; ">
                    <div data-aos="fade-down">
                        <label class="section1_text_line1" for="" style="font-size:60px;font-weight:bold;">Convenient mobile security</label>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-js"style="color:grey;">
                    <div data-aos="fade-down">
                        <div id=finger style="padding-left: 15px;">
                            <label class="section3_text_line2" for="" style="font-size:40px;font-weight:bold;">Fingerprint sensor</label><br>
                            <p class="section3_text_line2" style="font-size:17px;padding:0 10%;width:80%;">Simplify mobile access with security you can trust. Galaxy a11 features a rear fingerprint scanner that enables you to log on to supported apps and unlock your device with ease.
                            </p>
                        </div>
                        <div id=face style="padding-left: 15px;">
                            <label class="section3_text_line2" for="" style="font-size:40px;font-weight:bold;">Face recognition</label><br>
                            <p class="section3_text_line2" style="font-size:17px;padding:0 10%;width:80%;">Unlock your phone with ease and keep your data safe with Galaxy a11’s Face Recognition technology. It enables you to unlock your phone with a glance and protect your personal data.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex-banner col-xs-6 col-sm-6 col-md-6" style="padding-bottom: 200px;">
                    <img id="changepic" src="{{URL::asset('/images/samsung/galaxy-a11/africa_en-feature-face-recognition-242556581.webp')}}" style="width:100%;" alt="">
                </div>
            </div>
        </div>
    </section>
    {{--!!end section select text to change image!!--}}

    {{--!!end Page of samsung!!--}}
<div class="container-fluid">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                    <div data-aos="fade-down">
                        <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Keep your device in tip top condition with us</label><br>
                        <p class="section3_text_line2" style="font-size:17px;padding:0 10%;">Enjoy peace of mind when you choose to buy a Galaxy smartphone. The Interactive diagnostics and optimization on Samsung Members app makes it easy to tune up the performance of your devices, while our helpline lets you troubleshoot problems when you need the extra assistance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a11/africa_en-feature-keep-your-device-in-tip-top-condition-with-us-242556565.webp" style="width:100%;" alt="samsung galaxy a11 Display">
                    </figure>
                </div>
            </div>
        </div>
            <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*The available functions and features for Samsung Members app may vary by country and device.<br>
                        **Device and image simulated for illustrative purposes.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
{{--!!end Page of samsung Done!!--}}

@endsection



@section('script')
<script src="{{ URL::asset('/js/page-js/samsung/galaxy-a11/main.js')}}"></script>
@endsection
