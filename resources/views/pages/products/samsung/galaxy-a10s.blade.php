@extends('layouts/main')

@section('title', 'Galaxy A10s | Samsung Smartphone | DATABAR COMPANY LIMITED')


@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-a10s/main.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-a10s/style.css')}}">

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
                            <h1 itemprop="name" class="m-auto" style="font-size:15px;">Galaxy A10s</h1>
                        </li>
                    </ol>
                </nav>
            </div>
            <img id="a10s" src="{{URL::asset('/images/samsung/galaxy-a10s/b_a10s_1.webp')}}"
                style="width:100%;" alt="Galaxy a10s" title="Samsung Galaxy a10s">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: -webkit-center;z-index:1;">
                        <div class="color">
                            <div class="color1"></div>
                            <div class="color2"></div>
                            <div class="color3"></div>
                        </div>
                    </div>
                </div>
                <div class="thumbnails">
                    <ul class="ul-product">
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a10s/b_a10s_1.webp" alt="samsung galaxy a10s black preview1">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a10s/b_a10s_2.webp" alt="samsung galaxy a10s black preview2">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a10s/b_a10s_3.webp" alt="samsung galaxy a10s black preview3">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a10s/b_a10s_4.webp" alt="samsung galaxy a10s black preview4">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a10s/b_a10s_5.webp" alt="samsung galaxy a10s black preview5">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a10s/b_a10s_6.webp" alt="samsung galaxy a10s black preview6">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a10s/g_a10s_1.webp" alt="samsung galaxy a10s Green preview1">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a10s/g_a10s_2.webp" alt="samsung galaxy a10s Green preview2">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a10s/g_a10s_3.webp" alt="samsung galaxy a10s Green preview3">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a10s/g_a10s_4.webp" alt="samsung galaxy a10s Green preview4">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a10s/g_a10s_5.webp" alt="samsung galaxy a10s Green preview5">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a10s/g_a10s_6.webp" alt="samsung galaxy a10s Green preview6">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a10s/r_a10s_1.webp" alt="samsung galaxy a10s red preview1">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a10s/r_a10s_2.webp" alt="samsung galaxy a10s red preview2">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a10s/r_a10s_3.webp" alt="samsung galaxy a10s red preview3">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a10s/r_a10s_4.webp" alt="samsung galaxy a10s red preview4">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a10s/r_a10s_5.webp" alt="samsung galaxy a10s red preview5">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a10s/r_a10s_6.webp" alt="samsung galaxy a10s red preview6">
                        </li>
                    </ul>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;background: rgba(0,0,0,0.1);margin-top:10px;padding:20px !important;">
                    <h2 style="font-size:13px;color:grey;">Smartphone</h2>
                    <h1 class="product_name">Galaxy A10s</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:30px !important;border-bottom:1px solid">
                    <h3 for="" style="font-size:20px;color:black;font-weight:bold">Specification</h3><br>
                    <ul>
                        <li>
                            <label for="">Display : 157.9mm (6.2" full rectangle)</label>
                        </li>
                        <li>
                            <label for="">Resolution (Main Display) : 720 x 1520 (HD+)</label>
                        </li>
                        <li>
                            <label for="">CPU Speed : 2GHz, 1.5GHz</label>
                        </li>
                        <li>
                            <label for="">CPU Type : Octa-Core</label>
                        </li>
                        <li>
                            <label for="">RAM : 2 GB</label>
                        </li>
                        <li>
                            <label for="">ROM : 32 GB </label>
                        </li>
                        <li>
                            <label for="">Front Camera : 8.0 MP F2.0</label>
                        </li>
                        <li>
                            <label for="">Rear Camera : 13.0 MP + 2.0 MP  F1.8 , F2.4</label>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container" style="margin: 8% 0">
            <div class="row text-center feature-tab" style="align-items: center;">
                    <div class="border-right-solid col-3 feature-tab-icon">
                        <span class="icon icon-duo-camera"></span>
                        <p style="margin-top:10px">Live Focus</p>
                    </div>
                    <div class="border-right-solid col-3 feature-tab-icon">
                        <span class="icon icon-display-6-2"></span>
                        <p style="margin-top:10px">Infinity Diaplay</p>
                    </div>
                    <div class="border-right-solid col-3 feature-tab-icon">
                        <span class="icon icon-battery"></span>
                        <p style="margin-top:10px">Battery</p>
                    </div>
                    <div class="border-right-solid col-3 feature-tab-icon" style="border:none">
                        <p class="ghz">2GHz, 1.5GHz</p>
                        <p>CPU speed</p>
                    </div>
            </div>
        </div>
    </div>
</div>
    <section style="padding-top:100px;">
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                    <div data-aos="fade-down">
                        <label class="section1_text_line1" for="" style="font-size:72px; font-weight:bold; width: 80%;">Big screen for big experiences</label><br>
                        <p class="section1_text_line2" style="font-size:17px;">6.2 inches of HD+ TFT screen for a phone you'll love to watch. Whether you're into sitcoms or MMORPGs, Galaxy A10s's Infinity-V Display changes the way you experience them by putting you right in the action. See how far the experience takes you on the v-cut screen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a10s/th-feature-big-screen-for-big-experiences-177208946.jfif" style="width:100%;" alt="samsung galaxy a10s Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0 px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">
                        *Images simulated for illustrative purposes.<br>
                        **Infinity Display: a near bezel-less, full-frontal glass, edge-to-edge screen.<br>
                        ***Screen measured diagonally as a full rectangle without accounting for the rounded corners.Actual viewable area is less due to the rounded corners and camera hole.
                    </p>
                </div>
            </div>
        </div>
    </section>
        {{-- !!important "Layout 6:6 pic left & content right"!! --}}
        <div class="container-fluid">
            <section style="padding-top:100px;">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6" style="padding:0;">
                        <div data-aos="fade">
                            <figure>
                                <img src="/images/samsung/galaxy-a10s/th-feature-a-comfortable-design-that-shines-177208962.webp" style="width:100%; padding-bottom: 50px;" alt="samsung galaxy m21 camera">
                            </figure>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 set-middle" style="text-align:center;">
                        <div data-aos="fade-down">
                        <label class="section3_text_line1" for="" style="font-size:70px;font-weight:bold;"> A comfortable<br> design that shines</label><br>
                        <p class="section3_text_line2" style="font-size:17px;padding:0 10%;">The slender 7.8 mm body of Galaxy A10s feels like it's made for your hand. The glossy plastic finish stands out all on its own, and you can choose from black, green, or red. To unlock, simply place your finger on the rear scanner.
                        </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div class="container-fluid">
            <section style="padding-top:100px;">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 set-middle" style="text-align:center;">
                        <div data-aos="fade-down">
                        <label class="section3_text_line1" for="" style="font-size:70px;font-weight:bold;">Dual cameras <br>to capture the moment</label><br>
                        <p class="section3_text_line2" style="font-size:17px;padding:0 10%;">The simple and easy-to-use Dual camera gives you bright and clear photos with just a point and tap. The 13MP and 2MP Depth Camera duo is made for how you shoot so let your creativity free and snap as you go.
                        </p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6" style="padding:0;">
                        <div data-aos="fade">
                            <figure>
                                <img src="/images/samsung/galaxy-a10s/th-feature-dual-cameras-to-capture-the-moment-177208964.webp" style="width:100%; padding-bottom: 50px;" alt="samsung galaxy m21 camera">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<section >
    <div class="row justify-content-center" style="padding-top:200px;">

        <div class="block-h1 flex-column"style="text-align:center;">
            <label class="section1_text_line1" for="" style="font-size:70px;font-weight:bold;">A camera that makes your subjects stand apart</label><br>
            <p class="section1_text_line_svg" style="font-size:17px;padding:0 10%;">The 5MP Depth Camera lets you adjust the depth of field before and after you nail the shot. The advanced Depth Camera knocks out unwanted background noise from your images to make them look more professional.</p>
        </div>
    </div>
        <div class="row" style="flex:0 0 100%;max-width:100%;">
            <div class="flex-full">
                <figure class="svg_camera_size text-center front">
                    <img src="{{URL::asset('/images/samsung/galaxy-a10s/front-on.png')}}" alt="">
                    <figcaption class="mt-3 mb-5">Live focus off</figcaption>
                </figure>
                <figure class="svg_camera_size text-center rear">
                    <img src="{{URL::asset('/images/samsung/galaxy-a10s/rear-off.png')}}" alt="">
                    <figcaption class="mt-3 mb-5">Live focus on</figcaption>
                </figure>
            </div>
        </div>
        <div class="flex-banner">
            <img id="changecamera" src="{{URL::asset('/images/samsung/galaxy-a10s/th-feature----177208957.webp')}}" style="width:100%;" alt="">
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

<section style="padding-top:100px;">
    <div class="row">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:72px; font-weight:bold; width: 80%;">A camera that brings out your true self</label><br>
                    <p class="section1_text_line2" style="font-size:17px;">The camera's on you, so it's your time to shine. Galaxy A10s's 8MP front camera makes your selfies look more stunning, and with Selfie focus, you get a gentle background blur that makes your personality the star of the picture.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:50px;">
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
            <div data-aos="fade">
                <figure>
                    <img src="/images/samsung/galaxy-a10s/th-feature-a-camera-that-brings-out-your-true-self-177208972.jfif" style="width:100%;" alt="samsung galaxy a10s Display">
                </figure>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:0 px;">
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
            <div data-aos="fade">
                <p class="extra-line">
                    *Images simulated for illustrative purposes.
                </p>
            </div>
        </div>
    </div>
</section>

<section style="padding-top:100px;">
    <div class="row">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:72px; font-weight:bold; width: 80%;">Power your day longer</label><br>
                    <p class="section1_text_line2" style="font-size:17px;">You do a lot in your day-to-day, so do it on a phone that lasts. Galaxy A10s's 4,000 mAh (typical)* battery means you're powered to share with friends, watch streams, do what you love on a phone that lasts.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:50px;">
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
            <div data-aos="fade">
                <figure>
                    <img src="/images/samsung/galaxy-a10s/th-feature-power-your-day-longer-177208966.webp" style="width:100%;" alt="samsung galaxy a10s Display">
                </figure>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:0 px;">
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
            <div data-aos="fade">
                <p class="extra-line">
                    *Images simulated for illustrative purposes.
                </p>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <section style="padding-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                    <div data-aos="fade-down">
                        <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Intuitively designed for easy use</label><br>
                        <p class="section1_text_line2" style="font-size:17px;padding:0 10%;">One UI Core helps you focus on what matters. The hardware and software work in harmony to intuitively deliver content and features at your fingertips. Night Mode helps you wind down your day as it turns to a dark mode to go easy on eyes for a better nights rest.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a10s/th-feature-distraction-free-intuitiveness-177208960.webp" style="width:100%;" alt="samsung galaxy a10s Display">
                    </figure>
                </div>
            </div>
        </div>
            <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*Availability of One UI Core features, apps and services may vary depending on device, OS version and country.<br>
                        **Device and screen images simulated for illustrative purposes.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="container-fluid">
    <section style="padding-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                    <div data-aos="fade-down">
                        <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Keep your device in tip top condition with us</label><br>
                        <p class="section1_text_line2" style="font-size:17px;padding:0 10%;">Enjoy peace of mind when you choose to buy a Galaxy smartphone. The Interactive diagnostics and optimization on Samsung Members app makes it easy to tune up the performance of your devices, while our helpline lets you troubleshoot problems when you need the extra assistance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a10s/th-feature-keep-your-device-in-tip-top-condition-with-us-177208950.webp" style="width:100%;" alt="samsung galaxy a10s Display">
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

@endsection



@section('script')
<script src="{{ URL::asset('/js/page-js/samsung/galaxy-a10s/main.js')}}"></script>
@endsection
