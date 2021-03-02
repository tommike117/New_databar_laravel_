@extends('layouts/main-all-products')

@section('title', 'Galaxy A32  | Samsung Smartphone | DATABAR COMPANY LIMITED')


@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-a32/main.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-a32/style.css')}}">

@endsection


@section('content')

    {{--!!Header of samsung--}}
    <section>
        <div class="container">
            <div class="row" >
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 firstrow" style="overflow:hidden;">
                    <div>
                        <nav aria-label="breadcrumb" id="breadcrumb">
                            <ol itemscope itemtype="http://schema.org/Product" class="breadcrumb mt-lg-5" style="background:transparent;">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a itemprop="brand" itemscope itemtype="http://schema.org/Brand" href="/products/samsung/smartphones"><span itemprop="name">Samsung Smartphone</span></a></li>
                                <li class="breadcrumb-item d-flex active" aria-current="page">
                                    <h1 itemprop="name" class="m-auto" style="font-size:15px;">Galaxy A32</h1>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <img id="a32" src="{{URL::asset('/images/samsung/galaxy-a32/b-1.webp')}}"
                        style="width:100%;" alt="Galaxy A12" title="Samsung Galaxy A12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: -webkit-center;z-index:1;">
                                <div class="color">
                                    <div class="color1"></div>
                                    <div class="color2"></div>
                                    <div class="color3"></div>
                                    <div class="color4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnails">
                            <ul class="ul-product">
                                <li class="li-product_color1">
                                    <img src="/images/samsung/galaxy-a32/b-1.webp" alt="samsung galaxy a12 blue preview1">
                                </li>
                                <li class="li-product_color1">
                                    <img src="/images/samsung/galaxy-a32/b-2.webp" alt="samsung galaxy a12 blue preview2">
                                </li>
                                <li class="li-product_color1">
                                    <img src="/images/samsung/galaxy-a32/b-3.webp" alt="samsung galaxy a12 blue preview3">
                                </li>
                                <li class="li-product_color1">
                                    <img src="/images/samsung/galaxy-a32/b-4.webp" alt="samsung galaxy a12 blue preview4">
                                </li>
                                <li class="li-product_color1">
                                    <img src="/images/samsung/galaxy-a32/b-5.webp" alt="samsung galaxy a12 white preview5">
                                </li>
                                <li class="li-product_color1">
                                    <img src="/images/samsung/galaxy-a32/b-6.webp" alt="samsung galaxy a32 white preview6">
                                </li>
                                <li class="li-product_color2">
                                    <img src="/images/samsung/galaxy-a32/bu-1.webp" alt="samsung galaxy a32 black preview7">
                                </li>
                                <li class="li-product_color2">
                                    <img src="/images/samsung/galaxy-a32/bu-2.webp" alt="samsung galaxy a32 black preview8">
                                </li>
                                <li class="li-product_color2">
                                    <img src="/images/samsung/galaxy-a32/bu-3.webp" alt="samsung galaxy a32 black preview9">
                                </li>
                                <li class="li-product_color2">
                                    <img src="/images/samsung/galaxy-a32/bu-4.webp" alt="samsung galaxy a32 black preview10">
                                </li>
                                <li class="li-product_color2">
                                    <img src="/images/samsung/galaxy-a32/bu-5.webp" alt="samsung galaxy a32 black preview11">
                                </li>
                                <li class="li-product_color2">
                                    <img src="/images/samsung/galaxy-a32/bu-6.webp" alt="samsung galaxy a32 black preview12">
                                </li>
                                <li class="li-product_color3">
                                    <img src="/images/samsung/galaxy-a32/p-1.webp" alt="samsung galaxy a32 white preview13">
                                </li>
                                <li class="li-product_color3">
                                    <img src="/images/samsung/galaxy-a32/p-2.webp" alt="samsung galaxy a32 white preview14">
                                </li>
                                <li class="li-product_color3">
                                    <img src="/images/samsung/galaxy-a32/p-3.webp" alt="samsung galaxy a32 white preview15">
                                </li>
                                <li class="li-product_color3">
                                    <img src="/images/samsung/galaxy-a32/p-4.webp" alt="samsung galaxy a32 white preview16">
                                </li>
                                <li class="li-product_color3">
                                    <img src="/images/samsung/galaxy-a32/p-5.webp" alt="samsung galaxy a32 white preview17">
                                </li>
                                <li class="li-product_color3">
                                    <img src="/images/samsung/galaxy-a32/p-6.webp" alt="samsung galaxy a32 white preview18">
                                </li>
                                <li class="li-product_color4">
                                    <img src="/images/samsung/galaxy-a32/w-1.webp" alt="samsung galaxy a32 white preview13">
                                </li>
                                <li class="li-product_color4">
                                    <img src="/images/samsung/galaxy-a32/w-2.webp" alt="samsung galaxy a32 white preview14">
                                </li>
                                <li class="li-product_color4">
                                    <img src="/images/samsung/galaxy-a32/w-3.webp" alt="samsung galaxy a32 white preview15">
                                </li>
                                <li class="li-product_color4">
                                    <img src="/images/samsung/galaxy-a32/w-4.webp" alt="samsung galaxy a32 white preview16">
                                </li>
                                <li class="li-product_color4">
                                    <img src="/images/samsung/galaxy-a32/w-5.webp" alt="samsung galaxy a32 white preview17">
                                </li>
                                <li class="li-product_color4">
                                    <img src="/images/samsung/galaxy-a32/w-6.webp" alt="samsung galaxy a32 white preview18">
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="row" style="margin-top: 40px;">
                        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;background: rgba(0,0,0,0.1);margin-top:10px;padding:20px !important;">
                            <h2 style="font-size:13px;color:grey;">Smartphone</h2>
                            <h1 class="product_name">Galaxy A32</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12" style="padding:30px !important;border-bottom:1px solid">
                            <h3 for="" style="font-size:20px;color:black;font-weight:bold">Specification</h3><br>
                            <ul>
                                <li>
                                    <label for="">Display : 165.5mm (6.5" full rectangle) / 161.4mm (6.4" rounded corners)</label>
                                </li>
                                <li>
                                    <label for="">Resolution (Main Display) : 720 x 1600 (HD+)</label>
                                </li>
                                <li>
                                    <label for="">CPU Speed : 2GHz</label>
                                </li>
                                <li>
                                    <label for="">CPU Type : Octa-Core</label>
                                </li>
                                <li>
                                    <label for="">RAM : 6 GB</label>
                                </li>
                                <li>
                                    <label for="">ROM : 128 GB </label>
                                </li>
                                <li>
                                    <label for="">Front Camera : 13.0 MP F2.2</label>
                                </li>
                                <li>
                                    <label for="">Rear Camera : 48.0 MP + 8.0 MP + 5.0 MP + 2.0 MP  F1.8 , F2.2 , F2.4 , F2.4</label>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-1">
        <div class="text text-1">
            <h2>
                Speed up with the 5G-ready Galaxy A32 5G
            </h2>
            <p>
                On the next-generation mobile data network, the power of 5G fast speeds change the way you experience and share content—from super smooth gaming and streaming, to ultra fast sharing and downloading. Upgrade to the Galaxy A32 5G and speed up your smartphone experience.
            </p>
        </div>
        <picture class="pic-1">
            <img src="/images/samsung/galaxy-a32/s-1.webp" width="100%" alt="">
        </picture>
    </section>
    <section class="section section-2">
        <div class="text">
            <h2>
                Maximize your view to the fullest
            </h2>
            <p>
                Expand your view to the 6.5-inch Infinity-V Display of Galaxy A32 5G and see what you've been missing. Thanks to HD+ technology, your everyday content looks sharp, crisp and stunning.
            </p>
            <picture>
                <img src="/images/samsung/galaxy-a32/s-2.jfif" width="100%" alt="">
            </picture>
        </div>
    </section>
    <div class="section section-3">
        <div class="text text-3">
            <h2>
                Minimalist design with striking style
            </h2>
            <p>
                Galaxy A32 5G looks good and feels even better in your hands. The seamless design features hues with a subtle glow, and minimal rear camera housing for iconic style. Choose from four colors to express yourself: Awesome Black, Awesome White, Awesome Blue, Awesome Violet
            </p>
        </div>
        <picture>
            <img src="/images/samsung/galaxy-a32/s-3.webp" width="100%" alt="">
        </picture>
    </div>
    <section class="section section-4">
        <picture class="pic-4">
            <img src="/images/samsung/galaxy-a32/s-4.webp" width="100%"  alt="">
        </picture>
        <div class="text text-4">
            <h2>
                Advanced Quad Camera, advanced photography powers
            </h2>
            <p>
                Snap memorable moments in clear detail with the 48MP Main Camera. Expand the viewing angle with Ultra Wide Camera. Customize focus with Depth Camera, or get closer to the details with Macro Camera.
            </p>
        </div>
    </section>
    <section class="section section-5">
        <div class="text text-5">
            <h2>
                Ultra Wide Camera, ultra wide moments
            </h2>
            <p>
                Similar to human eye sight, the 8MP Ultra Wide Camera sees the world with a 123-degree angle of view, adding more perspective to everything you shoot.
            </p>
        </div>
        <div class="row" style="flex:0 0 100%;margin: auto; justify-content: center;">
            <div class="d-flex">
                <figure class="svg_camera_size text-center wide">
                    <img src="{{URL::asset('/images/samsung/galaxy-a12/80-b.svg')}}" width="50%" alt="">
                    <figcaption class="mt-3 mb-5">Wide angle</figcaption>
                </figure>
                <figure class="svg_camera_size text-center ultrawide">
                    <img src="{{URL::asset('/images/samsung/galaxy-m31/123-off.svg')}}" width="50%" alt="">
                    <figcaption class="mt-3 mb-5">Ultra Wide angle</figcaption>
                </figure>
            </div>
        </div>
        <div style="padding: 0 10%">
            <img id="changecamerawide" src="{{URL::asset('/images/samsung/galaxy-a32/s-5-1.jfif')}}" style="width:100%;" alt="">
        </div>
    </section>
    <section class="section section-4 section-6">
        <picture class="pic-4">
            <img src="/images/samsung/galaxy-a32/s-6.webp" width="100%"  alt="">
        </picture>
        <div class="text text-4">
            <h2>
                Macro Camera pays attention to the tiny details
            </h2>
            <p>
                Get in close with the 5MP Macro Camera and discover details you may have missed otherwise. It applies natural Bokeh effect to your pictures, allowing your subject to stand out from the background.
            </p>
        </div>
    </section>
    <section class="section section-7">
        <div class="text text-7">
            <h2>
                Bring the focus to the front with Depth Camera
            </h2>
            <p>
                The 2MP Depth Camera lets you adjust the depth of field in your photos. With a simple touch, you can easily fine-tune the background blur behind your subject for high-quality portrait shots that truly stand out.
            </p>
        </div>
        <div class="row" style="flex:0 0 100%; justify-content: center;">
            <div class="d-flex">
                <div class="svg_camera_size text-center front">
                    <img src="{{URL::asset('/images/samsung/galaxy-a12/rear-on.png')}}" width="50%" alt="">
                    <figcaption class="mt-3 mb-5">Portrait On</figcaption>
                </div>
                <div class="svg_camera_size text-center rear">
                    <img src="{{URL::asset('/images/samsung/galaxy-a12/front-off.png')}}" width="50%" alt="">
                    <figcaption class="mt-3 mb-5">Portrait Off</figcaption>
                </div>
            </div>
        </div>
        <div style="padding: 0 10%">
            <img id="changecamera" src="{{URL::asset('/images/samsung/galaxy-a32/s-7-1.webp')}}" style="width:100%;" alt="">
        </div>
    </section>
    <section class="section section-4 section-8">
        <picture class="pic-4">
            <img src="/images/samsung/galaxy-a32/s-8.jfif" width="100%"  alt="">
        </picture>
        <div class="text text-4">
            <h2>
                Front Camera, eye-catching selfies
            </h2>
            <p>
                With the Galaxy A32 5G 13MP Front Camera and bokeh effect, it's easy to snap stunning selfies that feature more you and less background.
            </p>
        </div>
    </section>
    <section class="section section-9">
        <div class="text">
            <h2>
                Power that keeps you going
            </h2>
            <p>
                Stay ahead of the day with a battery that won't slow you down. The 5,000mAh (typical)* battery lets you keep doing what you do, for hours on end. And with up to 15W of Adatptive Fast Charging, Galaxy A32 5G quickly gets back to full power.
            </p>
        </div>
        <picture>
            <img src="/images/samsung/galaxy-a32/s-9.webp" width="100%" alt="">
        </picture>
    </section>
    <section class="section section-10">
        <div class="text">
            <h2>
                Game booster gives you the edge
            </h2>
            <p>
                Maximize performance with Game Booster. Cut distractions and up your game with a dedicated interface and easy-to-reach menu. Frame Booster gives graphics smooth, life-like motion. And play at your best as Game Booster learns your usage patterns to optimize battery, temperature and memory.
            </p>
        </div>
        <picture>
            <img src="/images/samsung/galaxy-a32/s-10.jfif" width="100%" alt="">
        </picture>
    </section>
    <section class="section section-11">
        <div class="text">
            <h2>
                Storage and speed you can count on
            </h2>
            <p>
                Galaxy A32 5G combines Octa-core processing power with up to 6GB of RAM for fast and efficient performance for the task at hand. Enjoy 128GB of internal storage or add even more space with up to 1TB microSD card.
            </p>
        </div>
        <picture>
            <img src="/images/samsung/galaxy-a32/s-11.webp" width="100%" alt="">
        </picture>
    </section>
    <section class="section section-13">
        <picture class="pic-13">
            <img src="/images/samsung/galaxy-a32/s-13.webp" width="100%" alt="">
        </picture>
        <div class="text text-4 text-13 ">
            <h2>
                Optimized for your ease
            </h2>
            <p>
                Enjoy smooth motion and a delightful design on One UI. Optimized for any screen size, it lets you focus on what matters in a comfortable and intuitive way. One UI lets you customize your phone to perfectly suit your tastes and fully enjoy your comfortable Galaxy experience.
            </p>
        </div>
    </section>
    <section class="section section-13">
        <picture class="pic-13">
            <img src="/images/samsung/galaxy-a12/levant-feature-an-awesome-android--experience--always-367806854.webp" width="100%" alt="">
        </picture>
        <div class="text text-4 text-13 ">
            <h2>
                An awesome Android™ experience, always
            </h2>
            <p>
                Get the latest Google apps on Android OS, fully supported on your Galaxy A32 5G.
            </p>
        </div>
    </section>
@endsection

@section('script')
<script src="{{ URL::asset('/js/page-js/samsung/galaxy-a32/main.js')}}"></script>
@endsection
