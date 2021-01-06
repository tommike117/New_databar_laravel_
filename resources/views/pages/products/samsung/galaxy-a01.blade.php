@extends('layouts/main-all-products')

@section('title', 'Galaxy A01 | Samsung Smartphone | DATABAR COMPANY LIMITED')


@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-a01/main.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/galaxy-a01/style.css')}}">

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
                            <h1 itemprop="name" class="m-auto" style="font-size:15px;">Galaxy A01</h1>
                        </li>
                    </ol>
                </nav>
            </div>
            <img id="a01" src="{{URL::asset('/images/samsung/galaxy-a01/b_a01_1.jpg')}}"
                style="width:100%;" alt="Galaxy a01" title="Samsung Galaxy a01">
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
                            <img src="/images/samsung/galaxy-a01/b_a01_1.jpg" alt="samsung galaxy a01 black preview1">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a01/b_a01_2.webp" alt="samsung galaxy a01 black preview2">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a01/b_a01_3.webp" alt="samsung galaxy a01 black preview3">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a01/b_a01_4.webp" alt="samsung galaxy a01 black preview4">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a01/b_a01_5.webp" alt="samsung galaxy a01 black preview5">
                        </li>
                        <li class="li-product_color1">
                            <img src="/images/samsung/galaxy-a01/b_a01_6.webp" alt="samsung galaxy a01 black preview6">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a01/bl_a01_1.webp" alt="samsung galaxy a01 Green preview1">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a01/bl_a01_2.webp" alt="samsung galaxy a01 Green preview2">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a01/bl_a01_3.webp" alt="samsung galaxy a01 Green preview3">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a01/bl_a01_4.webp" alt="samsung galaxy a01 Green preview4">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a01/bl_a01_5.webp" alt="samsung galaxy a01 Green preview5">
                        </li>
                        <li class="li-product_color2">
                            <img src="/images/samsung/galaxy-a01/bl_a01_6.webp" alt="samsung galaxy a01 Green preview6">
                        </li>

                    </ul>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="row" style="margin-top: 40px;">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;background: rgba(0,0,0,0.1);margin-top:10px;padding:20px !important;">
                    <h2 style="font-size:13px;color:grey;">Smartphone</h2>
                    <h1 class="product_name">Galaxy A01</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:30px !important;border-bottom:1px solid">
                    <h3 for="" style="font-size:20px;color:black;font-weight:bold">Specification</h3><br>
                    <ul>
                        <li>
                            <label for="">Display : (5.7" full rectangle) / (5.6" rounded corners)</label>
                        </li>
                        <li>
                            <label for="">Resolution (Main Display) : 720 x 1520 (HD+)</label>
                        </li>
                        <li>
                            <label for="">CPU Speed : 2GHz, 1.45GHz</label>
                        </li>
                        <li>
                            <label for="">CPU Type : Octa-Core</label>
                        </li>
                        <li>
                            <label for="">RAM : 2 GM</label>
                        </li>
                        <li>
                            <label for="">ROM : 16 GB</label>
                        </li>
                        <li>
                            <label for="">Front Camera : 5.0 MP</label>
                        </li>
                        <li>
                            <label for="">Rear Camera : 13.0 MP + 2.0 MP </label>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container" style="margin: 8% 0">
            <div class="row text-center feature-tab" style="align-items: center;">
                    <div class="border-right-solid col-3 feature-tab-icon">
                        <span class="icon icon-duo-camera"></span>
                        <p style="margin-top:10px">Dual Camera</p>
                    </div>
                    <div class="border-right-solid col-3 feature-tab-icon">
                        <span class="icon icon-display-5-7"></span>
                        <p style="margin-top:10px">Infinity Diaplay</p>
                    </div>
                    <div class="border-right-solid col-3 feature-tab-icon">
                        <span class="icon icon-octa-performance"></span>
                        <p style="margin-top:10px">CPU Speed</p>
                    </div>
                    <div class="border-right-solid col-3 feature-tab-icon" style="border:none">
                        <p class="ghz">2GHz, 1.45GHz</p>
                        <p>CPU speed</p>
                    </div>
            </div>
        </div>
    </div>
</div>

{{--!!text down image up samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a01/pk-feature---207169515.webp" style="width:100%;" alt="samsung galaxy a01 Display">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- !!End text down image up samsung --}}

{{--!!text merge samsung--}}
<section>
    <div class="container-fluid" style="position: relative">

        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a01/pk-feature-infinity-v-display--more-view-for-what-you-do-207169505.jpg" style="width:100%;" alt="samsung galaxy a01 Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin: 70px 0 0 0;position: absolute;top: 0;color:white">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Infinity-V Display. More view for what you do</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Game for hours, stream a whole series, or do more all at once with Galaxy A01's 5.7-inch HD+ TFT screen. The Infinity-V Display's mini camera notch creates a v-cut screen for a bigger view and an immersive experience.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*Images simulated for illustrative purposes.<br>
                        **Infinity Display: a near bezel-less, full-frontal glass, edge-to-edge screen.<br>
                        ***Screen measured diagonally as a full rectangle without accounting for the rounded corners. Actual viewable area is less due to the rounded corners and camera hole.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- !!text merge samsung --}}

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Sleek design made with comfort in mind</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Available in black, blue, and red, Galaxy A01's colors are intensified by the modern matte finish. The slender body is 8.3 mm so it fits comfortably in your hand, meaning you can hold on for longer.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a01/pk-feature-sleek-design-made-with-comfort-in-mind-207169503.webp" style="width:100%;" alt="samsung galaxy a01 Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*Color availability may vary by country or carrier.
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
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Dual camera takes your photography to new depths</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Capture clear, beautiful photos in sunlight or low light with Galaxy A01's bright 13MP rear camera. You can also use Live focus to experiment with the background blur before or after taking the shot — the Depth Camera softens the surroundings and brings your friends' faces to the front.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a01/pk-feature-dual-camera-takes-your-photography-to-new-depths-207169491.webp" style="width:100%;" alt="samsung galaxy a01 Display">
                    </figure>
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
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Awesome selfies every time — no edits needed</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">The camera's on you, so it's your time to shine. Galaxy A01's 5MP front camera makes your selfies stunning, and with Selfie focus, you get a gentle background blur that makes you the star of the picture. And with the selfie timer, you can make sure you get the right pose before the shutter clicks.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a01/pk-feature-awesome-selfies-every-time---no-edits-needed-207169499.webp" style="width:100%;" alt="samsung galaxy a01 Display">
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
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">More power to move faster and last longer</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">The Octa-Core processor and 2GB of RAM handle your graphic-heavy games and livestreams at rapid speeds. With 16GB of internal storage and a 3000mAh(typical) battery, you have plenty of room and power to stream, download, and post.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a01/pk-feature-more-power-to-move-faster-and-last-longer-207169509.webp" style="width:100%;" alt="samsung galaxy a01 Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0 10%;">
                <div data-aos="fade">
                    <p class="extra-line ">*RAM and internal memory capacity may vary depending on country or region.<br>
                        **Actual storage available may vary depending on pre-installed software.<br>
                        ***Typical value tested under third-party laboratory condition. Typical value is the estimated average value considering the deviation in battery capacity among the battery samples tested under IEC 61960 standard. Rated (minimum) capacity is 3,000 mAh. Actual battery life may vary depending on network environment, usage patterns and other factors.
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
                        <img src="/images/samsung/galaxy-a01/pk-feature-face-unlock-detects-your-look-to-unlock-fast-207169501.webp" style="width:100%; padding-bottom: 50px;" alt="samsung galaxy a01 camera">
                    </figure>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 set-middle">
                <div data-aos="fade-down">
                <label class="section3_text_line1" for="" style="font-size:70px;font-weight:bold;">Face unlock detects your look to unlock fast</label><br>
                <p class="section3_text_line2" style="font-size:17px;padding:0 10%;width:80%;">Now you can unlock your phone instantly by simply holding it to your face. Face Recognition technology grants mobile access for you alone to ensure your personal data doesn't fall into the wrong hands.
                </p>
                <p style="padding-top: 100px; width:70%; font-size:13px;">*The availability of this service may vary by country.<br>
                    **Images simulated for illustrative purposes.
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
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">One UI Core, designed for easy use</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Focus on what matters. The hardware and software work in harmony to intuitively deliver content and features at your fingertips. Night Mode helps you wind down your day as it turns to a dark mode to go easy on eyes for a better nights rest.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a01/pk-feature-one-ui-core--designed-for-easy-use-207169489.webp" style="width:100%;" alt="samsung galaxy a01 Display">
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
    </div>
</section>
{{-- !!End text UP image down samsung --}}

{{--!!text UP image down samsung--}}
<section>
    <div class="container-fluid">
        <div class="row" style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;padding:0 10%;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Get a theatre-like experience with Dolby Atmos</label><br>
                    <p class="section3_text_line2" style="font-size:17px;">Simply plug in your earphones to be transported to the middle of your music and movies. With Dolby Atmos, you'll hear sound that's full, loud, and seems to surround you in the scene.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a01/pk-feature-get-a-theatre-like-experience-with-dolby-atmos-207169497.webp" style="width:100%;" alt="samsung galaxy a01 Display">
                    </figure>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <p class="extra-line">*Dolby Atmos only support stereo headsets and BT speakers.<br>
                        **Dolby Atmos is only available when Dolby Atmos mode is activated in Settings.<br>
                        ***Headsets sold separately.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- !!End text UP image down samsung --}}

{{--!!end Page of samsung!!--}}
<section>
    <div class="container-fluid">
        <div class="row"style="margin-top:200px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos="fade-down">
                    <label class="section1_text_line1" for="" style="font-size:100px; font-weight:bold; width: 70%;">Keep your device in tip top condition with us</label><br>
                    <p class="section3_text_line2" style="font-size:17px;padding:0 10%;">Enjoy peace of mind when you choose to buy a Galaxy smartphone. The Interactive diagnostics and optimization on Samsung Members app makes it easy to tune up the performance of your devices, while our helpline lets you troubleshoot problems when you need the extra assistance.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div data-aos="fade">
                    <figure>
                        <img src="/images/samsung/galaxy-a01/pk-feature-keep-your-device-in-tip-top-condition-with-us-207169513.webp" style="width:100%;" alt="samsung galaxy a01 Display">
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
    </div>
</section>
    {{--!!end Page of samsung Done!!--}}

@endsection



@section('script')
    <script src="{{ URL::asset('/js/page-js/samsung/galaxy-a01/main.js')}}"></script>
@endsection
