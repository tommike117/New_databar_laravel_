@extends('layouts/main')

@section('title', 'Galaxy A51 | Samsung Smartphone | DATABAR COMPANY LIMITED')


@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/page-style/samsung/galaxy-a51/main.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/page-style/samsung/galaxy-a51/style.css')}}">

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
                            <h1 itemprop="name" class="m-auto" style="font-size:15px;">Galaxy A51</h1>
                        </li>
                    </ol>
                </nav>
            </div>
            <img id="a51" src="{{URL::asset('/images/samsung/galaxy-a51/b_a51_1.webp')}}"
                style="width:100%;" alt="Galaxy A51" title="Samsung Galaxy A51">
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
                            <img src="/images/samsung/galaxy-a51/b_a51_1.webp" alt="samsung galaxy a51 black preview1">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a51/b_a51_2.webp" alt="samsung galaxy a51 black preview2">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a51/b_a51_3.webp" alt="samsung galaxy a51 black preview3">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a51/b_a51_4.webp" alt="samsung galaxy a51 black preview4">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a51/b_a51_5.webp" alt="samsung galaxy a51 black preview5">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a51/b_a51_6.webp" alt="samsung galaxy a51 black preview6">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a51/bl_a51_1.webp" alt="samsung galaxy a51 blue preview1">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a51/bl_a51_2.webp" alt="samsung galaxy a51 blue preview2">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a51/bl_a51_3.webp" alt="samsung galaxy a51 blue preview3">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a51/bl_a51_4.webp" alt="samsung galaxy a51 blue preview4">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a51/bl_a51_5.webp" alt="samsung galaxy a51 blue preview5">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a51/bl_a51_6.webp" alt="samsung galaxy a51 blue preview6">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a51/p_a51_1.webp" alt="samsung galaxy a51 pink preview1">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a51/p_a51_2.webp" alt="samsung galaxy a51 pink preview2">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a51/p_a51_3.webp" alt="samsung galaxy a51 pink preview3">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a51/p_a51_4.webp" alt="samsung galaxy a51 pink preview4">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a51/p_a51_5.webp" alt="samsung galaxy a51 pink preview5">
                        </li>
                        <li class="li-product_color3">
                            <img src="/images/samsung/galaxy-a51/p_a51_6.webp" alt="samsung galaxy a51 pink preview6">
                        </li>
                    </ul>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;background: rgba(0,0,0,0.1);margin-top:10px;padding:20px !important;">
                    <h2 style="font-size:13px;color:grey;">Smartphone</h2>
                    <h1 class="product_name">Galaxy A51</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:30px !important;border-bottom:1px solid">
                    <h3 for="" style="font-size:20px;color:black;font-weight:bold">Specification</h3><br>
                    <ul>
                        <li>
                            <label for="">Display : (6.5" full rectangle) / (6.3" rounded corners) </label>
                        </li>
                        <li>
                            <label for="">Resolution (Main Display) : 1080 x 2400 (FHD+) </label>
                        </li>
                        <li>
                            <label for="">CPU Speed : 2.3GHz, 1.7GHz </label>
                        </li>
                        <li>
                            <label for="">CPU Type : Octa-Core </label>
                        </li>
                        <li>
                            <label for="">RAM : 6 | 8   GB</label>
                        </li>
                        <li>
                            <label for="">ROM : 128 GB </label>
                        </li>
                        <li>
                            <label for="">Front Camera : 32.0 MP </label>
                        </li>
                        <li>
                            <label for="">Rear Camera : 48.0 MP + 12.0 MP + 5.0 MP + 5.0 MP </label>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container" style="margin: 8% 0">
            <div class="row text-center feature-tab" style="align-items: center;">
                    <div class="border-right-solid col-3 feature-tab-icon">
                        <span class="icon icon-display-6-5"></span>
                        <p style="margin-top:10px">Infinity O-display</p>
                    </div>
                    <div class="border-right-solid col-3 feature-tab-icon">
                        <span class="icon icon-device-design"></span>
                        <p style="margin-top:10px">Device design</p>
                    </div>
                    <div class="border-right-solid col-3 feature-tab-icon">
                        <span class="icon icon-quad-camera"></span>
                        <p style="margin-top:10px">Rear camera</p>
                    </div>
                    <div class="border-right-solid col-3 feature-tab-icon" style="border:none">
                        <p class="ghz">2.3GHz, 1.7GHz</p>
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
                        <img src="/images/samsung/galaxy-a51/au-feature-galaxy-a51-a515-226606468.webp" style="width:100%;" alt="samsung galaxy a51 Display">
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
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Big screen. Small price</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">A51's Infinity-O Display optimises visual symmetry. Now you can game, watch, surf, and multi-task without interruption on a 6.5" FHD+ widescreen display*—all powered by Super AMOLED technology. Enjoy a smartphone experience that minimises the bezel and maximises screen space.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a51/au-feature-see-the-whole-view-on-the-infinity-o-display-223338682.webp" style="width:100%;" alt="samsung galaxy a51 Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*Measured diagonally, the screen size is 6.5" in the full rectangle and 6.3" with accounting for the rounded corners. Actual viewable area is less due to the rounded corners and the camera cutout.
                        **Images simulated for illustrative purposes.
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
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Designed for a refined level of style and comfort</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">The rhythmical pattern of A51's design theme is smooth and elegant. A premium gloss finish adds the perfect touch of style to its sleek and slim body, perfectly blending of style with in-hand comfort.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a51/au-feature-galaxy-a51-a515-223710504.webp" style="width:100%;" alt="samsung galaxy a51 Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">* Images simulated for illustrative purposes. Colour availability may vary by retailer and carrier.
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
                        <img src="/images/samsung/galaxy-a51/au-feature-galaxy-a51-a515-223710506.webp" style="width:100%; padding-bottom: 50px;" alt="samsung galaxy a51 camera">
                    </figure>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 set-middle">
                <div data-aos="fade-down">
                <label class="section3_text_line1" for="" style="font-size:70px;font-weight:bold;">Quad camera to capture more</label><br>
                <p class="section3_text_line2" style="font-size:17px;padding:0 10%;width:80%;">Go ultra high-res with a 48MP Main Cam for crisp, clear photos day and night. A 123° Ultra Wide Cam captures more of the view. Choose the upgraded Macro Cam for highly refined close-ups, and make sure the subject always stands out with the Depth Camera’s multiple Live Focus effects.
                </p>
                <p style="padding-top: 100px; width:70%; font-size:13px;">* Images simulated for illustrative purposes. Colour availability may vary by retailer and carrier.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- !!End important "Layout 6:6 pic left & content right"!! --}}

<!--choose angle wide ultra wide-->
<section >
    <div class="container-fluid">
        <div class="row justify-content-center" style="padding-top:200px;">
            <div class="block-h1 flex-column"style="text-align:center;">
                <label class="section1_text_line1" for="" style="font-size:70px;font-weight:bold;">Capture more of view from the same spot</label><br>
                <p class="section1_text_line_svg" style="font-size:17px;padding:0 10%;">Capture the wider world with the Ultra Wide Camera's wider field of vision**. And with the 48MP Main Camera, your story stays bright and clear throughout the day.</p>
            </div>
        </div>
            <div class="row" style="flex:0 0 100%;max-width:100%;">
                <div class="flex-full">
                    <figure class="svg_camera_size text-center wide">
                        <img src="{{URL::asset('/images/samsung/galaxy-a51/80-on.svg')}}" alt="">
                        <figcaption class="mt-3 mb-5">Wide angle</figcaption>
                    </figure>
                    <figure class="svg_camera_size text-center ultrawide">
                        <img src="{{URL::asset('/images/samsung/galaxy-a51/123-off.svg')}}" alt="">
                        <figcaption class="mt-3 mb-5"style="width: 118px;">Ultra Wide angle</figcaption>
                    </figure>
                </div>
            </div>
        <div class="flex-banner">
            <img id="changecamerawide" src="{{URL::asset('/images/samsung/galaxy-a51/au-feature---223338686.webp')}}" style="width:100%;" alt="">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
            <p style="padding-top: 0px; font-size:13px; text-align:center;">*Color availability may vary by country or carrier.
            </p>
        </div>
    </div>
</section>
<!--End choose angle wide ultra wide-->

{{-- !!important "Layout 6:6 pic right & content left"!! --}}
<section style="padding-top:100px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 set-closer">
                <div data-aos="fade-down">
                <label class="section3_text_line1" for="" style="font-size:70px;font-weight:bold;">Macro Cam that captures the up-close details</label><br>
                <p class="section3_text_line2" style="font-size:17px;padding:0 10%;width:80%;">Quad Cam’s built-in Macro Cam (40mm) shoots with clarity and quality helping you bring out the ultra-fine details of your close-up shots**. Apply and adjust natural background blur (Bokeh) to isolate your subject and increase its visual impact.
                <p style="padding-top: 150px; width:70%; font-size:13px;">*Images simulated for illustrative purposes.<br>
                    **Ultra wide experience (photo/video) and Macro Cam are supported for rear camera only.
                    </p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 " style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a51/au-feature-macro-cam-that-captures-the-up-close-details-223338670.jpg" style="width:100%; padding-bottom: 50px;" alt="samsung galaxy a51 camera">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- !!End important "Layout 6:6 pic right & content left"!! --}}

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Shoots smooth and steady just like the pros</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Galaxy A51 records like a pro-level action camera utilising the Ultra Wide Camera and predictive software. Super steady gives you smooth live videos, even when your journey is on the adventurous side.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a51/au-feature-shoots-smooth-and-steady-just-like-the-pros-223338660.webp" style="width:100%;" alt="samsung galaxy a51 Display">
                    </figure>
                </div>
            </div>
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
{{-- !!End text UP image down samsung --}}

<!--choose angle Front Rear-->
<section>
    <div class="container-fluid">
        <div class="row justify-content-center" style="padding-top:200px;">

            <div class="block-h1 flex-column"style="text-align:center;">
                <label class="section1_text_line1" for="" style="font-size:70px;font-weight:bold;">Depth Camera brings your subject into the spotlight</label><br>
                <p class="section1_text_line_svg" style="font-size:17px;padding:0 10%;">The Depth Camera lets you adjust the depth of field before and after you nail the shot. The advanced Depth Camera knocks out unwanted background noise from your images to make them look more professional.</p>
            </div>
        </div>
        <div class="row" style="flex:0 0 100%;max-width:100%;">
            <div class="flex-full">
                <figure class="svg_camera_size text-center front">
                    <img src="{{URL::asset('/images/samsung/galaxy-a51/front-on.png')}}" alt="">
                    <figcaption class="mt-3 mb-5">Live focus off</figcaption>
                </figure>
                <figure class="svg_camera_size text-center rear">
                    <img src="{{URL::asset('/images/samsung/galaxy-a51/rear-off.png')}}" alt="">
                    <figcaption class="mt-3 mb-5">Live focus on</figcaption>
                </figure>
            </div>
        </div>
        <div class="flex-banner">
            <img id="changecamera" src="{{URL::asset('/images/samsung/galaxy-a51/au-feature---223338711.webp')}}" style="width:100%;" alt="">
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
                        <img src="/images/samsung/galaxy-a51/au-feature-attention-grabbing-selfies-made-easy-223338676.webp" style="width:100%; padding-bottom: 50px;" alt="samsung galaxy a51 camera">
                    </figure>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 set-middle">
                <div data-aos="fade-down">
                <label class="section3_text_line1" for="" style="font-size:70px;font-weight:bold;">Attention-grabbing selfies made easy</label><br>
                <p class="section3_text_line2" style="font-size:17px;padding:0 10%;width:80%;">You want your selfie to look good. So for stunning daytime looks, Galaxy A51's 32MP front camera gives you clear, high-resolution photos. And with Selfie focus to gently blur the background, your face becomes the star.
                </p>
                <p style="padding-top: 100px; width:70%; font-size:13px;">*Images simulated for illustrative purposes.
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
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Long lasting battery at no extra charge</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">When out living life, you need a phone that can last. A 4,000mAh (typical) battery gives you the power to stream, share and game on**. And if you start running low, plug in and power up with 15W Fast Charging.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a51/au-feature-power-that-keeps-you-going-223338680.webp" style="width:100%;" alt="samsung galaxy a51 Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*Images simulated for illustrative purposes.<br>
                        **Based on independent third party testing. Battery capacity value of a ‘typical’ user. Rated (i.e. minimum) battery capacity value is 3,890 mAh. Actual battery capacity value may vary. See user manual for instructions on optimum battery life.<br>
                        ***Actual battery life varies by network environment, features and apps used, frequency of calls and messages, number of times charged, and many other factors. Please see user manual for instructions on how to care for the battery and achieve optimum battery life. Adaptive Fast Charger required for fast charging.
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
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Premium storage at no extra cost</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Galaxy A51 has fast processing and spacious storage so you can focus on now. An advanced Octa-core processor and 6GB of RAM deliver smooth and efficient performance. Download more and delete less with up to 128GB internal storage.** Add even more with a 512GB microSD card.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a51/au-feature-galaxy-a51-a515-223710515.webp" style="width:100%;" alt="samsung galaxy a51 Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*Images simulated for illustrative purposes.<br>
                        **Based on independent third party testing. Battery capacity value of a ‘typical’ user. Rated (i.e. minimum) battery capacity value is 3,890 mAh. Actual battery capacity value may vary. See user manual for instructions on optimum battery life.<br>
                        ***Actual battery life varies by network environment, features and apps used, frequency of calls and messages, number of times charged, and many other factors. Please see user manual for instructions on how to care for the battery and achieve optimum battery life. Adaptive Fast Charger required for fast charging.
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
                    <p class="section3_text_line2" style="font-size:17px;">Maximise performance with Game Booster. Cut distractions and up your game with a dedicated interface and easy-to-reach menu. Frame Booster gives graphics smooth, life-like motion. And play at your best as Game Booster learns your usage patterns to optimise battery, temperature and memory.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a51/au-feature-game-booster-gives-you-the-edge-223338668.webp" style="width:100%;" alt="samsung galaxy a51 Display">
                    </figure>
                </div>
            </div>
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
{{-- !!End text UP image down samsung --}}

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Defense-grade security available to everyone</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Built into the phone's hardware and software from the start, Samsung Knox protects your phone from the minute it's turned on. Offering multi-layered security, it defends your most sensitive information from malware and malicious threats.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a51/au-feature-defense-grade-security-available-to-everyone-223338662.webp" style="width:100%;" alt="samsung galaxy a51 Display">
                    </figure>
                </div>
            </div>
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
{{-- !!End text UP image down samsung --}}

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Your fingerprint is the key</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Galaxy A51 comes with high-tech biometric authentication. The On-Screen Fingerprint scanner recognises your unique fingerprint, so you are the only one who can press and unlock in one easy move.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a51/au-feature-made-to-focus-223338666.webp" style="width:100%;" alt="samsung galaxy a51 Display">
                    </figure>
                </div>
            </div>
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
                        <img src="/images/samsung/galaxy-a51/au-feature-galaxy-a51-a515-226659047.webp" style="width:100%;" alt="samsung galaxy a51 Display">
                    </figure>
                </div>
            </div>
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
{{-- !!End text UP image down samsung --}}




@endsection



@section('script')
<script src="{{ URL::asset('/js/page-js/samsung/galaxy-a51/main.js')}}"></script>
@endsection
