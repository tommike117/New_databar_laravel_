@extends('layouts/main')

@section('title', 'Galaxy A30s | Samsung Smartphone | DATABAR COMPANY LIMITED')


@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/page-style/samsung/galaxy-a30s/main.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/page-style/samsung/galaxy-a30s/style.css')}}">

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
                            <h1 itemprop="name" class="m-auto" style="font-size:15px;">Galaxy A30s</h1>
                        </li>
                    </ol>
                </nav>
            </div>
            <img id="a30s" src="{{URL::asset('/images/samsung/galaxy-a30s/g_a30s_1.webp')}}"
                style="width:100%;" alt="Galaxy A30s" title="Samsung Galaxy A30s">
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
                            <img src="/images/samsung/galaxy-a30s/g_a30s_1.webp" alt="samsung galaxy a30s green preview1">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a30s/g_a30s_2.webp" alt="samsung galaxy a30s green preview2">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a30s/g_a30s_3.webp" alt="samsung galaxy a30s green preview3">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a30s/g_a30s_4.webp" alt="samsung galaxy a30s green preview4">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a30s/g_a30s_5.webp" alt="samsung galaxy a30s green preview5">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a30s/g_a30s_6.webp" alt="samsung galaxy a30s green preview6">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a30s/b_a30s_1.webp" alt="samsung galaxy a30s black preview1">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a30s/b_a30s_2.webp" alt="samsung galaxy a30s black preview2">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a30s/b_a30s_3.webp" alt="samsung galaxy a30s black preview3">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a30s/b_a30s_4.webp" alt="samsung galaxy a30s black preview4">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a30s/b_a30s_5.webp" alt="samsung galaxy a30s black preview5">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a30s/b_a30s_6.webp" alt="samsung galaxy a30s black preview6">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a30s/w_a30s_1.webp" alt="samsung galaxy a30 white preview1">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a30s/w_a30s_2.webp" alt="samsung galaxy a30 white preview2">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a30s/w_a30s_3.webp" alt="samsung galaxy a30 white preview3">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a30s/w_a30s_4.webp" alt="samsung galaxy a30 white preview4">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a30s/w_a30s_5.webp" alt="samsung galaxy a30 white preview5">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a30s/w_a30s_6.webp" alt="samsung galaxy a30 white preview6">
                        </li>

                    </ul>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;background: rgba(0,0,0,0.1);margin-top:10px;padding:20px !important;">
                    <h2 style="font-size:13px;color:grey;">Smartphone</h2>
                    <h1 class="product_name">Galaxy A30s</h1>
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
        <div class="container" style="margin: 8% 0">
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
                    <span class="icon icon-device-design"></span>
                    <p style="margin-top:10px">Device design</p>
                </div>
                <div class="border-right-solid col-3 feature-tab-icon" style="border:none">
                    <span class="icon icon-on-screen-touch"></span>
                    <p>On-Screen fingerprint</p>
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
                        <img src="/images/samsung/galaxy-a30s/pk-feature----183355481.jpg" style="width:100%;" alt="samsung galaxy a30s Display">
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
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Go live on a brighter, wider screen</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Immerse yourself in the large 6.4 inch Infinity-V Display of Galaxy A30s. A wide aspect ratio fills your screen with content from edge to edge. Watch your favorite videos, games and live streams in vivid HD+ Super AMOLED.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a30s/pk-feature-go-live-on-a-brighter--wider-screen-183355491.jpg" style="width:100%;" alt="samsung galaxy a30s Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*Images simulated for illustrative purposes.<br>
                        **Infinity Display: a near bezel-less, full-frontal glass, edge-to-edge screen.<br>
                        ***Measured diagonally, the screen size is 6.4" in the full rectangle and 6.2" with accounting for the rounded corners. Actual viewable area is less due to the rounded corners and the camera cutout.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- !!End text UP image down samsung --}}

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Dynamic pattern and a comfortable design</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Galaxy A30s has an eye-catching prismatic look and sleek design. With a comfortable grip and smooth curves, it fits right in your hand for easy screen navigation. The holographic pattern stands out with a glossy dynamically changing finish that comes in Prism Crush Black, White, Violet or Green.


                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a30s/pk-feature-dynamic-pattern-and-a-comfortable-design-183355483.webp" style="width:100%;" alt="samsung galaxy a30s Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*Images simulated for illustrative purposes.<br>
                        **Infinity Display: a near bezel-less, full-frontal glass, edge-to-edge screen.<br>
                        ***Measured diagonally, the screen size is 6.4" in the full rectangle and 6.2" with accounting for the rounded corners. Actual viewable area is less due to the rounded corners and the camera cutout.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- !!End text UP image down samsung --}}

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Ready for life with Triple Camera</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Galaxy A30s has an eye-catching prismatic look and sleek design. With a comfortable grip and smooth curves, it fits right in your hand for easy screen navigation. The holographic pattern stands out with a glossy dynamically changing finish that comes in Prism Crush Black, White, Violet or Green.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a30s/pk-feature-ready-for-life-with-triple-camera-183355495.webp" style="width:100%;" alt="samsung galaxy a30s Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*Images simulated for illustrative purposes.<br>
                        **Infinity Display: a near bezel-less, full-frontal glass, edge-to-edge screen.<br>
                        ***Measured diagonally, the screen size is 6.4" in the full rectangle and 6.2" with accounting for the rounded corners. Actual viewable area is less due to the rounded corners and the camera cutout.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- !!End text UP image down samsung --}}

<!--choose angle wide ultra wide-->
<section >
    <div class="container-fluid">
        <div class="row justify-content-center" style="padding-top:200px;">
            <div class="block-h1 flex-column"style="text-align:center;">
                <label class="section1_text_line1" for="" style="font-size:70px;font-weight:bold;">Extend the frame of a single shot</label><br>
                <p class="section1_text_line_svg" style="font-size:17px;padding:0 10%;">Capture the wider world with the Ultra Wide Camera's wider field of vision. The Galaxy A30s 25MP Main Camera makes your story bright and clear, day and night.</p>
            </div>
        </div>
            <div class="row" style="flex:0 0 100%;max-width:100%;">
                <div class="flex-full">
                    <figure class="svg_camera_size text-center wide">
                        <img src="{{URL::asset('/images/samsung/galaxy-a30s/78-on.svg')}}" alt="">
                        <figcaption class="mt-3 mb-5"">Wide angle</figcaption>
                    </figure>
                    <figure class="svg_camera_size text-center ultrawide">
                        <img src="{{URL::asset('/images/samsung/galaxy-a30s/123-off.svg')}}" alt="">
                        <figcaption class="mt-3 mb-5"style="width: 118px;">Ultra Wide angle</figcaption>
                    </figure>
                </div>
            </div>
        <div class="flex-banner">
            <img id="changecamerawide" src="{{URL::asset('/images/samsung/galaxy-a30s/pk-feature----183355464.webp')}}" style="width:100%;" alt="">
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
                <label class="section1_text_line1" for="" style="font-size:70px;font-weight:bold;">Bring what matters into focus</label><br>
                <p class="section1_text_line_svg" style="font-size:17px;padding:0 10%;">The 5MP Depth Camera lets you control the background before and after you nail the shot. Focus on the things you want to stand out and blur what you don't to make your photos look more professional.</p>
            </div>
        </div>
        <div class="row" style="flex:0 0 100%;max-width:100%;">
            <div class="flex-full">
                <figure class="svg_camera_size text-center front">
                    <img src="{{URL::asset('/images/samsung/galaxy-a30s/front-on.png')}}" alt="">
                    <figcaption class="mt-3 mb-5">Live focus off</figcaption>
                </figure>
                <figure class="svg_camera_size text-center rear">
                    <img src="{{URL::asset('/images/samsung/galaxy-a30s/rear-off.png')}}" alt="">
                    <figcaption class="mt-3 mb-5">Live focus on</figcaption>
                </figure>
            </div>
        </div>
        <div class="flex-banner">
            <img id="changecamera" src="{{URL::asset('/images/samsung/galaxy-a30s/pk-feature----183355478.webp')}}" style="width:100%;" alt="">
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

<!--choose angle Front Rear-->
<section>
    <div class="container-fluid">
        <div class="row justify-content-center" style="padding-top:200px;">

            <div class="block-h1 flex-column"style="text-align:center;">
                <label class="section1_text_line1" for="" style="font-size:70px;font-weight:bold;">Stunning selfies in one go </label><br>
                <p class="section1_text_line_svg" style="font-size:17px;padding:0 10%;">You want your selfie to look good. So for stunning daytime looks, Galaxy A30s's 16MP front camera gives you clear, high-resolution photos. And with Selfie focus to gently blur the background, your face becomes the star.</p>
            </div>
        </div>
        <div class="row" style="flex:0 0 100%;max-width:100%;">
            <div class="flex-full">
                <figure class="svg_camera_size text-center selfie">
                    <img src="{{URL::asset('/images/samsung/galaxy-a30s/selfie-on.svg')}}" alt="">
                    <figcaption class="mt-3 mb-5">Selfie Focus</figcaption>
                </figure>
                <figure class="svg_camera_size text-center beautiful">
                    <img src="{{URL::asset('/images/samsung/galaxy-a30s/beautiful-off.svg')}}" alt="">
                    <figcaption class="mt-3 mb-5">Smart Beauty</figcaption>
                </figure>
            </div>
        </div>
        <div class="flex-banner">
            <img id="changefilter" src="{{URL::asset('/images/samsung/galaxy-a30s/pk-feature----183355505.webp')}}" style="width:100%;" alt="">
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

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Power up for the day fast</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">With a 4,000mAh (typical)* battery that lasts, you can make the most of every moment. And no need to worry about charging — Galaxy A30s has quick 15W Fast Charging so you can get back to doing what you do and not miss out on life.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a30s/pk-feature-power-up-for-the-day-fast-183355511.webp" style="width:100%;" alt="samsung galaxy a30s Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*Typical value tested under third-party laboratory condition. Typical value is the estimated average value considering the deviation in battery capacity among the battery samples tested under IEC 61960 standard. Rated (minimum) capacity is 3,900mAh. Actual battery life may vary depending on network environment, usage patterns and other factors.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- !!End text UP image down samsung --}}

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Solid performance, so you can do more</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Galaxy A30s has fast processing and spacious storage so you can focus on now. An advanced Octa-core processor and up to 4GB of RAM deliver smooth and efficient performance. Download more and delete less with up to 128GB internal storage. Add even more with a 512GB microSD card.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a30s/pk-feature-solid-performance--so-you-can-do-more-183355487.webp" style="width:100%;" alt="samsung galaxy a30s Display">
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

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Game Booster gives you the edge</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Maximize performance with Game Booster. Cut distractions and up your game with a dedicated interface and easy-to-reach menu. Frame Booster gives graphics smooth, life-like motion. And play at your best as Game Booster learns your usage patterns to optimize battery, temperature and memory.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a30s/pk-feature-game-booster-gives-you-the-edge-183355469.webp" style="width:100%;" alt="samsung galaxy a30s Display">
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

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Defense-grade security available to everyone</label><br>
                    <p class="section3_text_line2">Built into the phone's hardware and software from the start, Samsung Knox protects your phone from the minute it's turned on. Offering multi-layered security, it defends your most sensitive information from malware and malicious threats.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a30s/pk-feature-defense-grade-security-available-to-everyone-183355499.webp" style="width:100%;" alt="samsung galaxy a30s Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- !!End text UP image down samsung --}}

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Your fingerprint is the key</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Galaxy A30s comes with high-tech biometric authentication. The On-Screen Fingerprint scanner recognizes your unique fingerprint, so you are the only one who can press and unlock in one easy move.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a30s/pk-feature-your-fingerprint-is-the-key-183355471.webp" style="width:100%;" alt="samsung galaxy a30s Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*If you use a screen protector, make sure it allows for use of the On-screen fingerprint sensor.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- !!End text UP image down samsung --}}

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Made to focus</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">One UI helps you focus on what really matters to you. Hardware and software work together, with content and features at your fingertips so you can get to them faster. Use Night Mode for a comfortable experience in the dark, and with clear and intuitive visuals using your phone is like second nature.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a30s/pk-feature-made-to-focus-183355467.webp" style="width:100%;" alt="samsung galaxy a30s Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*Availability of One UI features, apps and services may vary depending on device, OS version and country.<br>
                        **Device and screen images simulated for illustrative purposes.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- !!End text UP image down samsung --}}

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Keep your device in tip top condition with us</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Enjoy peace of mind when you choose to buy a Galaxy smartphone. The Interactive diagnostics and optimization on Samsung Members app makes it easy to tune up the performance of your devices, while our helpline lets you troubleshoot problems when you need the extra assistance.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a30s/pk-feature-keep-your-device-in-tip-top-condition-with-us-183355489.webp" style="width:100%;" alt="samsung galaxy a30s Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*Availability of One UI features, apps and services may vary depending on device, OS version and country.<br>
                        **Device and screen images simulated for illustrative purposes.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- !!End text UP image down samsung --}}
@endsection



@section('script')
<script src="{{ URL::asset('/js/page-js/samsung/galaxy-a30s/main.js')}}"></script>
@endsection
