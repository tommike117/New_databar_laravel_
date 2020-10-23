@extends('layouts/main')

@section('title', 'Samsung Smartphone | DATABAR Company Limited')

@section('link')

<link rel="stylesheet" href="{{ URL::to('/css/page-style/samsung/tablet/main.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/zoom-slider/component.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/animate.css')}}">


@endsection


@section('content')
<style>
.slide__title a:hover{
    text-decoration: none;
}
.slide__title{
    font-weight: 600;
}
</style>


<body>
    <div class="container my-container animated fadeIn">
        <section class="slider overflow-hidden">
            <div class="slide slide--current" data-content="content-1">
                <div class="slide__mover">
                    <div class="zoomer flex-center">
                        <figure style="width:250px;height:auto;">
                            <img class="zoomer__image"
                            data-url="{{URL::to('products/samsung/mobile/tablet/'.encode_url('Galaxy Tab Active2'))}}"
                                src="{{URL::asset('images/samsung/tablet/tab2.png')}}"
                                alt="galaxy tab active2" title=" samsung galaxy tab active2" style="width:100%;" />
                        </figure>
                        <div class="preview">
                            <div class="zoomer__area zoomer__area--size-2"></div>
                        </div>
                    </div>
                </div>
                <div class="slide__title">
                    <a href="{{URL::to('/products/samsung/mobile/tablet/Galaxy-Tab-Active2')}}">
                        <h2 class="product_name font-weight-600 slide__title">Galaxy Tab Active2</h2>
                        <p class="small">Tough and Rugged</p>
                    </a>
                </div>
            </div>
            <div class="slide" data-content="content-2">
                <div class="slide__mover">
                    <div class="zoomer flex-center">
                        <figure style="width:350px;height:auto;">
                            <img class="zoomer__image"
                                data-url="{{URL::to('products/samsung/mobile/tablet/'.encode_url('Galaxy Tab S4'))}}"
                                src="{{URL::asset('images/samsung/tablet/ipad.png')}}"
                                alt="galaxy tab s4" title="samsung galaxy tab s4"" style="width:100%;" />
                        </figure>
                        <div class="preview">
                            <div class="zoomer__area zoomer__area--size-4"></div>
                        </div>
                    </div>
                </div>
                <div class="slide__title">
                    <a href="{{URL::to('/products/samsung/mobile/tablet/Galaxy-Tab-S4-10-5')}}">
                        <h2 class="product_name font-weight-600 slide__title">Galaxy Tab S4</h2>
                        <p class="small">Our premium tablets</p>
                    </a>
                </div>
            </div>
            <div class="slide" data-content="content-3">
                <div class="slide__mover">
                    <div class="zoomer flex-center">
                        <figure style="width:300px;height:auto;">
                            <img class="zoomer__image"
                            data-url="{{URL::to('products/samsung/mobile/tablet/'.encode_url('Galaxy Tab A 10 5'))}}"
                            src="{{URL::asset('images/samsung/tablet/tab-a-10.5.png')}}"
                                data-url="{{URL::to('products/samsung/mobile/smartphone/'.encode_url('Samsung Galaxy S10'))}}"
                                alt="galaxy tab A10.5" title="samsung galaxy tab A10.5" style="width:100%;" />
                        </figure>
                        <div class="preview">
                            <div class="zoomer__area zoomer__area--size-3"></div>
                        </div>
                    </div>
                </div>
                <div class="slide__title">
                    <a href="{{URL::to('/products/samsung/mobile/tablet/Galaxy-Tab-A-10-5')}}">
                        <h2 class="product_name font-weight-600 slide__title">Galaxy Tab A10.5</h2>
                        <p class="small">Great family tablets</p>
                    </a>
                </div>
            </div>

            <nav class="slider__nav">
                <button class="button button--nav-prev" onclick="setTimeout(check_active,500)"><i
                        class="fas myfa-chevron-left"></i><span class="text-hidden">Previous product</span></button>
                <button class="button button--zoom" style="display:none;"><span
                        class="text-hidden">View
                        details</span></button>
                <a href="" class="button my-zoom"><span class="text-hidden">View
                        details</span></a>
                <button class="button button--nav-next" onclick="setTimeout(check_active,500)"><i
                        class="fas myfa-chevron-right"></i><span class="text-hidden">Next product</span></button>
            </nav>
        </section>
        <!-- /slider-->
        <section class="content">
            <button class="button button--close"><i class="fas fa-times-circle"></i><span class="text-hidden">Close
                    content</span></button>
        </section>

        <div class="row mb-xs-5 mb-sm-5 mb-md-5 mb-lg-5 mt-xs-5 mt-sm-5 mt-md-5 mt-lg-5 m-auto text-center">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title_section" style="margin: auto auto;">
                    <label class="font-weight-600 choose_your_tablet">Choose Your Tablets</label><br>
                    <a href="{{URL::route('samsung.tablet.all')}}" class="show_all_smartphone">
                        <label class="see_all_tablet">SEE ALL THE TABLETS > </label>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row banner_tabs5e m-auto">
        <img src="{{URL::asset('images/samsung/tablet/PF-tab-s5e-desktop.webp')}}" style="width:100%;"
            alt="galaxy tab s5e" title=" samsung galaxy tab s5e">
        <div class="s5e_content">
            <h1 class="s5e_content_text">The new</h1>
            <h1 class="s5e_content_text">Galaxy Tab s5e</h1>
        </div>
    </div>

    <div class="container-fluid p-lg-5">
        <section class="section_four">

            <div class="row flex-direction-row">
                <div class="block_content">
                    <h1 class="head-text-section4">Galaxy Tab S4</h1>
                    <p class="small-text-section4">The Galaxy Tab S4 makes working on the go easy. Enjoy plenty of space
                        with a stunning, crystal clear 10.5” screen, and transform your tablet by attaching the bespoke
                        keyboard case*. And for those jobs that need a larger screen, you can connect to a monitor** and
                        make light work of the chunkiest spreadsheet.</p>
                </div>
                <div class="block_image">
                    <figure class="figure_img_section4">
                        <img src="{{URL::asset('images/samsung/tablet/tab-s4-prod.png')}}" alt="galaxy tab s4"
                            title=" samsung galaxy tab s4">
                    </figure>
                </div>
            </div>

            <div class="row flex-direction-row flex-row-reverse">
                <div class="block_content">
                    <h1 class="head-text-section4">Galaxy Tab A</h1>
                    <p class="small-text-section4">Meet the new Galaxy Tab A 10.5. A tablet with a 10.5” immersive
                        display, 3D surround sound quad speakers and up to 15 hours battery life. It’s made for the
                        whole family to enjoy.</p>
                </div>
                <div class="block_image">
                    <figure class="figure_img_section4">
                        <img src="{{URL::asset('images/samsung/tablet/tab-a-10.5_2.jpg')}}" alt="Galaxy Tab A"
                            title="Samsung Galaxy Tab A">
                    </figure>
                </div>
            </div>

            <div class="row flex-direction-row">
                <div class="block_content">
                    <h1 class="head-text-section4">Galaxy Tab Active2</h1>
                    <p class="small-text-section4">The tough just got even tougher - with anti-shock protection, the
                        Galaxy Tab Active2 is able to withstand drops of up to 1 metre.* With an IP68** certification
                        it's water resistant up to 1.5 metres and dust proof, so now you can explore places you never
                        could before. Enjoy next-level, military standard durability that's tough enough to withstand
                        temperatures of -20c° to +60c°†. So, no matter if you're exploring the Sahara or the South Downs
                        Way, we've got you covered.</p>
                </div>
                <div class="block_image">
                    <figure class="figure_img_section4">
                        <img src="{{URL::asset('images/samsung/tablet/GTA2_6.jpg')}}" alt="Galaxy Tab Active2"
                            title="Samsung Galaxy Tab Active2">
                    </figure>
                </div>
            </div>
        </section>
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
