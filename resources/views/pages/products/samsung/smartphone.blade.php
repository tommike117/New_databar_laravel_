@extends('layouts/main')

@section('title', 'Samsung Smartphone | DATABAR Company Limited')

@section('link')

<link rel="stylesheet" href="{{ URL::to('/css/page-style/samsung/smartphone/smartphone-main.min.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/zoom-slider/component.css')}}">



@endsection


@section('content')

<h2 style="color:white;position:absolute;visibility: hidden;">Rugged Android Smartphone</h2>
<h2 style="color:white;position:absolute;visibility: hidden;">Rugged Android Smartphones</h2>
<h2 style="color:white;position:absolute;visibility: hidden;">Samsung Rugged Smartphones</h2>
<h2 style="color:white;position:absolute;visibility: hidden;">Samsung Galaxy XCover Pro</h2>
<h2 style="color:white;position:absolute;visibility: hidden;">XCover Pro</h2>
<h2 style="color:white;position:absolute;visibility: hidden;">XCover 4</h2>

<body>
    <div class="container my-container animated fadeIn">
        <section class="slider">
            <div class="slide slide--current" data-content="content-1">
                <div class="slide__mover">
                    <div class="zoomer flex-center">
                        <figure style="width:300px;height:250px;">
                            <img class="zoomer__image"
                                data-url="{{URL::to('products/samsung/mobile/smartphone/'.encode_url('Samsung Galaxy Note9'))}}"
                                src="{{ URL::asset('/images/samsung/galaxy-xcover-pro/xcoverpro.png')}}"
                                alt="Samsung Galaxy Note9" style="width:100%;" />
                        </figure>
                        <div class="preview">
                            <div class="zoomer__area zoomer__area--size-4"></div>
                        </div>
                    </div>
                </div>
                <div class="slide__title">
                    <a href="{{URL::to('/products/samsung/mobile/smartphone/Samsung-Galaxy-Xcover-Pro')}}" class="text-decorate-none">
                        <h2 class="product_name font-weight-600 slide__title">Samsung Galaxy Xcover Pro</h2>
                        <p class="small" style="font-family: 'SamsungOne 700';">The New Rugged Smartphone</p>
                    </a>
                </div>

            </div>
            <div class="slide" data-content="content-2">
                <div class="slide__mover">
                    <div class="zoomer flex-center">
                        <figure style="width:450px;height:300px;">
                            <img class="zoomer__image"
                                data-url="{{URL::to('products/samsung/mobile/smartphone/'.encode_url('Samsung Galaxy Xcover 4'))}}"
                                src="{{ URL::asset('/images/samsung/samsung-smartphone/xcover4-resize.jpg')}}"
                                alt="galaxy xcover 4" title="samsung galaxy xcover 4" style="width:100%;" />
                        </figure>
                        <div class="preview">
                            <div class="zoomer__area zoomer__area--size-2"></div>
                        </div>
                    </div>
                </div>
                <div class="slide__title">
                    <a href="{{URL::to('/products/samsung/mobile/smartphone/Samsung-Galaxy-Xcover-4')}}" class="text-decorate-none">
                        <h2 class="product_name font-weight-600 slide__title">Samsung Galaxy Xcover 4</h2>
                        <p class="small" style="font-family: 'SamsungOne 700';">Rugged Smartphone</p>
                    </a>
                </div>
            </div>
            <div class="slide" data-content="content-3">
                <div class="slide__mover">
                    <div class="zoomer flex-center">
                        <figure style="width:300px;height:250px;">
                            <img class="zoomer__image"
                                src="{{ URL::asset('/images/samsung/samsung-smartphone/s_type/s10.png')}}"
                                data-url="{{URL::to('products/samsung/mobile/smartphone/'.encode_url('Samsung Galaxy S10'))}}"
                                alt="Samsung Galaxy S10" style="width:100%;" />
                        </figure>
                        <div class="preview">
                            <div class="zoomer__area zoomer__area--size-3"></div>
                        </div>
                    </div>
                </div>
                <div class="slide__title">
                    <a href="{{URL::to('/products/samsung/mobile/smartphone/Samsung-Galaxy-S10')}}" class="text-decorate-none">
                        <h2 class="product_name font-weight-600 slide__title">Samsung Galaxy S10</h2>
                        <p class="small" style="font-family: 'SamsungOne 700';">The next generation takes shape</p>
                    </a>
                </div>
            </div>

            <nav class="slider__nav">
                <button class="button button--nav-prev" onclick="setTimeout(check_active,200)"><i
                        class="fas myfa-chevron-left"></i><span class="text-hidden">Previous product</span></button>
                <button class="button button--zoom" style="display:none;"><i class="fas myfa-search"></i><span
                        class="text-hidden">View
                        details</span></button>
                <a href="" class="button my-zoom" style="visibility:hidden !important;"><i class="fas myfa-search"></i><span class="text-hidden">View
                        details</span></a>
                <button class="button button--nav-next" onclick="setTimeout(check_active,200)"><i
                        class="fas myfa-chevron-right"></i><span class="text-hidden">Next product</span></button>
            </nav>
        </section>
        <!-- /slider-->
        <section class="content">
            <button class="button button--close"><i class="fas fa-times-circle"></i><span class="text-hidden">Close
                    content</span></button>
        </section>

        <div class="row mb-xs-5 mb-sm-5 mb-md-5 mb-lg-5 mt-xs-5 mt-sm-5 mt-md-5 mt-lg-5 text-center">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title_section" style="margin: auto auto;">
                    <h1 class="font-weight-600 choose_your_tablet mb-0"
                        style="font-family: 'Samsung Sharp Sans Bold' !important;">Choose Your Smartphone</h1><br>
                    <a href="{{URL::route('samsung.smartphone.all')}}" class="show_all_smartphone">
                        <label class="see_all_tablet ">SEE ALL THE SMARTPHONE > </label>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid " style="background-color:black;padding-bottom:5%;">>
        <div class="row">
            <img class="fold_banner" src="{{ URL::asset('/images/samsung/samsung-smartphone/fold_banner.jpg')}}"
                style="width:100%;" alt="galaxy fold banner" title="samsung galaxy fold banner">
            <div class="galaxy_fold_content">
                <h3 class="text-white galaxy_fold_content_line1">Find the perfect phone for you.</h3>
                <p class="text-white galaxy_fold_content_line2">Discover the right phone at the right price from the
                    innovative Galaxy S10 to the super powerful Galaxy Note9 to the feature-packed Galaxy A50.</p>
            </div>
        </div>
        <div class="row flex-direction-row">
            <div class="block_image">
                <figure class="figure_img_section4">
                    <img src="{{ URL::asset('/images/samsung/samsung-smartphone/Fold-Feature-Benefit.jpg')}}"
                        alt="galaxy fold" title="samsung galaxy fold">
                </figure>
            </div>
            <div class="block_content">
                <h2 class="text-white head-text-section4 ">Galaxy Fold</h2>
                <p class="text-white small-text-section4">We didn't just change the shape of the phone.
                    We changed the shape of tomorrow. </p>
            </div>
        </div>
    </div>
<style>
    @media (min-width: 1200px){
        .head-text-section4{
            font-size: 65px;
            font-weight: 700;

        }
    }
</style>
    <div class="container my-container">
        <section class="section_four">
            <div>
                <img class="mt-5 mb-5" src="{{ URL::asset('/images/samsung/samsung-smartphone/GTA_4.jpg')}}"
                    style="width:100%;" alt="galaxy xcover pro" title="samsung galaxy xcover 4">
            </div>
            <div class="row flex-direction-row flex-row-reverse">
                <div class="block_content">
                    <h2 class="head-text-section4">Samsung Galaxy Xcover Pro</h2>
                    <p class="small-text-section4">A durable phone made for the outdoors. The two XCover Key design lets you customise to access the apps you need with a press. Dual LED aids in low-light adventures, while the Service LED flashes when receiving messages. And with POGO charging support, it's easy to keep your XCover Pro ready to go.</p>
                    <a href="{{URL::to('products/samsung/mobile/smartphone/Samsung-Galaxy-Xcover-Pro')}}">
                        <button class="btn btn-outline-primary border-radius-25"
                            style="width:180px;font-size:16px;font-weight:400;font-family: 'SamsungOne 400';">Read
                            More</button>
                    </a>
                </div>
                <div class="block_image">
                    <figure class="figure_img_section4 text-center">
                        <img src="{{ URL::asset('/images/samsung/galaxy-xcover-pro/xcoverpro.png')}}"
                            alt="Samsung Galaxy A80" style='position: relative; width:70%' title="Samsung Galaxy A80">
                    </figure>
                </div>
            </div>
            <div class="row flex-direction-row ">
                <div class="block_content">
                    <h2 class="head-text-section4">Samsung Galaxy Xcover 4</h2>
                    <p class="small-text-section4">Designed to function wherever you go, with IP68 and MIL-STD 810G
                        certification, the Galaxy Xcover4 is durable enough to withstand harsh conditions. Whether
                        you’re hiking or playing outdoor sports. you can rest assured your device is protected against
                        dust and water.</p>
                    <a href="{{URL::to('products/samsung/mobile/smartphone/Samsung-Galaxy-Xcover-4')}}">
                        <button class="btn btn-outline-primary border-radius-25"
                            style="width:180px;font-size:16px;font-weight:400;font-family: 'SamsungOne 400';">Read
                            More</button>
                    </a>

                </div>
                <div class="block_image">
                    <figure class="figure_img_section4 text-center">
                        <img src="{{ URL::asset('/images/samsung/samsung-smartphone/xcover4-resize.jpg')}}"
                            alt="galaxy xcover 4" title="samsung galaxy xcover 4">
                    </figure>
                </div>
            </div>

            <div class="row flex-direction-row flex-row-reverse">
                <div class="block_content">
                    <h2 class="head-text-section4">Samsung Galaxy A80</h2>
                    <p class="small-text-section4">The Galaxy A80 changes how you document life. The triple camera
                        slides and rotates to catch what's happening in front and behind.Therefore, now you have one
                        camera that shoots on both sides to capture all your moments. The camera built for Live. Not
                        just for selfies.</p>
                    <a href="{{URL::to('products/samsung/mobile/smartphone/Samsung-Galaxy-A80')}}">
                        <button class="btn btn-outline-primary border-radius-25"
                            style="width:180px;font-size:16px;font-weight:400;font-family: 'SamsungOne 400';">Read
                            More</button>
                    </a>
                </div>
                <div class="block_image">
                    <figure class="figure_img_section4 text-center">
                        <img src="{{ URL::asset('/images/samsung/samsung-smartphone/a_type/a80.png')}}"
                            alt="Samsung Galaxy A80" style='position: relative; width:70%' title="Samsung Galaxy A80">
                    </figure>
                </div>
            </div>
        </section>
    </div>
    <div class="container-fluid p-0">
        <div class="row flex-direction-row" style="background:black; margin:auto;">
            <div class="block_content  pr-5 pl-7">
                <h2 class="head-text-section4 text-white">Samsung Galaxy S10</h2>
                <p class="small-text-section4 text-white">The result of 10 years of pioneering mobile firsts, the Galaxy
                    S10e, S10 and S10+ introduce the next generation of mobile innovation.</p>
                <a href="{{URL::to('products/samsung/mobile/smartphone/Samsung-Galaxy-S10')}}">
                    <button class="btn btn-outline-white border-radius-25 border-white" style="width:180px;">Read
                        More</button>
                </a>
            </div>
            <div class="s10flex">
                <figure class="s10model" style="width:220px;height:auto;margin:auto;">
                    <img class="s10e"
                        src="{{ URL::asset('/images/samsung/samsung-smartphone/s_type/galaxy-s10-e_highlight_intro-size.png')}}"
                        style="width:100%;" alt="galaxy s10e" title="samsung galaxy s10e">
                </figure>
                <figure class="s10model" style="width:220px;height:auto;margin:auto;">
                    <img class="s10"
                        src="{{ URL::asset('/images/samsung/samsung-smartphone/s_type/galaxy-s10_highlight_intro-size.png')}}"
                        style="width:100%;" alt="galaxy s10" title="samsung galaxy s10">
                </figure>
                <figure class="s10model" style="width:220px;height:auto;margin:auto;">
                    <img class="s10p"
                        src="{{ URL::asset('/images/samsung/samsung-smartphone/s_type/galaxy-s10-plus_highlight_intro-size.png')}}"
                        style="width:100%;" alt="galaxy s10plus" title="samsung galaxy s10plus">
                </figure>
            </div>
        </div>
    </div>
</body>






@endsection

@section('script')
<script src="{{ URL::asset('/js/zoom-slider/modernizr.custom.js')}}"></script>
<script src="{{ URL::asset('/js/zoom-slider/dynamics.min.js')}}"></script>
<script src="{{ URL::asset('/js/zoom-slider/classie.js')}}"></script>
<script src="{{ URL::asset('/js/zoom-slider/main.js')}}"></script>

<script>



    active = document.getElementsByClassName('slide--current')[0];
    active = active.getElementsByClassName('zoomer__image')[0];
    active = active.getAttribute('data-url');
    my_zoom = document.getElementsByClassName('my-zoom')[0];
    my_zoom.setAttribute("href", active);

    function check_active() {
        my_zoom.setAttribute("href", "");
        active = document.getElementsByClassName('slide--current')[0];
        active = active.getElementsByClassName('zoomer__image')[0];
        active = active.getAttribute('data-url');
        my_zoom.setAttribute("href", active);
    }

</script>

@endsection
