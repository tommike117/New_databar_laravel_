
@extends('layouts/main')

@section('title','Samsung Galaxy A10 | Samsung Smartphone | DATABAR COMPANY LIMITED')

@section('link')

<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-a10/main.css')}}">

@endsection




@section('content')

<div class="container-fluid">

    <section class="first_show" data-aos="fade"
        style="display: flex;
        position: relative;
        height: 700px;
        top: 0;
        left: 0;
        right: 0;
        margin: auto;
        align-items: center;
        justify-content: center;">
        <div class="row justify-content-center">
            <h1 class="font-80">Samsung Galaxy A10</h1>
        </div>
    </section>

    <!-- section 1 -->
    <section style="margin-top:5px;">
        <div class="row margin-from-nav">
        <img src="{{URL::asset('images/samsung/galaxy-a10/banner_1.webp')}}" style="width:100%;" alt="">
        </div>
        <div class="row pl-3 pr-3 pb-0 mb-xs-5">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="row flex-column align-items-center justify-content-center">
                    <figure class="svg_block_image">
                        <img src="{{URL::asset('images/samsung/galaxy-a10/svg-1.svg')}}" alt="">
                    </figure>
                    <figcaption>Infinity Display</figcaption>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="row flex-column align-items-center justify-content-center">
                    <figure class="svg_block_image">
                        <img src="{{URL::asset('images/samsung/galaxy-a10/svg-2.svg')}}" alt="">
                    </figure>
                    <figcaption>Rear Camera</figcaption>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="row flex-column align-items-center justify-content-center">
                    <figure class="svg_block_image">
                        <img src="{{URL::asset('images/samsung/galaxy-a10/svg-3.svg')}}" alt="">
                    </figure>
                    <figcaption>Long-lasting battery and Fast Charging</figcaption>
                </div>
            </div>
        </div>
    </section>
    <!-- end section1 -->
    <!-- section2 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-5-auto text-center">A screen with a better view</h1>
                <div class="block-p">
                    <p class="font text-center">6.2 inches of HD+ screen for a phone you’ll love to watch. Whether
                        you’re into sitcoms or MMORPGs, Galaxy A10’s Infinity-V Display changes the way you
                        experience them by putting you right in the action. See how far the experience takes you on
                        the v-cut screen.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a10/banner_2.webp')}}" style="width:100%;" alt="">
            </div>

            <p class="remark text-black pr-20p pl-20p text-center mt-5-auto">​*Images simulated for illustrative
                purposes.**Infinity Display: a near bezel-less, full-frontal glass, edge-to-edge screen.***Screen
                measured diagonally as a full rectangle without accounting for the rounded corners. Actual viewable
                area is less due to the rounded corners and camera hole.</p>

        </div>
    </section>
    <!-- section3 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-3-auto text-center">Simple design in living colour</h1>
                <div class="block-p">
                    <p class="text-center">Galaxy A10’s slender 8.1 mm body feels like it’s made for your hand. The
                        glossy plastic finish stands out all on its own, and you can choose from black and blue.
                        Once it’s in your grip, you’ll never let go.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a10/banner_3.webp')}}" style="width:100%;" alt="">
            </div>
        </div>
    </section>
    <!-- end section3 -->
    <!-- section4 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-3-auto text-center">A camera to capture the moment</h1>
                <div class="block-p">
                    <p class="text-center">Take photos the way you want with the 13MP rear and 5MP front camera for
                        picture-book snapshots. Your memories stay vivid, bright and clear with the tap of a button.
                        And the Octa Core processor makes everything run smoothly to keep up with how you live life.
                    </p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a10/banner_4.webp')}}" style="width:100%;" alt="">
            </div>
        </div>
    </section>
    <!-- end section4 -->
    <!-- section5 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-5-auto text-center">Enjoy your photos to the fullest</h1>
                <div class="block-p">
                    <p class="font text-center">A photo isn’t just a photo with Galaxy A10. Decorate your memories
                        with AR stickers, stamps and filters to continue the fun even after you nail the shot.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a10/banner_5.webp')}}" style="width:100%;" alt="">
            </div>
            <p class="remark text-black pr-20p pl-20p text-center mt-5-auto">​*The availability of services may vary
                by country.</p>
        </div>
    </section>
    <!-- end section5 -->
    <!-- section6 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-5-auto text-center">Power for your everyday</h1>
                <div class="block-p">
                    <p class="font text-center">Galaxy A10’s 3,400 mAh (typical)* battery is enough for your day to
                        day. Whether you’re the type to have texting marathons with your friends, watch livestreams
                        or do what you love on a phone that lasts.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a10/banner_6.webp')}}" style="width:100%;" alt="">
            </div>
            <p class="remark text-black pr-20p pl-20p text-center mt-5-auto">*Typical value tested under third-party
                laboratory condition. Typical value is the estimated average value average value considering the
                deviation in battery capacity among the battery samples tested under IEC under IEC 61960 standard.
                Rated (minimum) capacity is 3,300 mAh. Actual battery life may vary depending on network
                environment, usage patterns and other factors.</p>
        </div>
    </section>
    <!-- end section6 -->
    <!-- section7 -->
    <section>
        <div class="row column-reverse">
            <div class="flex-image">
                <figure class="block_banner_11">
                    <img src="{{URL::asset('images/samsung/galaxy-a10/banner_7.webp')}}" style="width:100%;" alt="">
                </figure>
            </div>
            <div class="flex-content mt-xs-2 mb-xs-5">
                <h1 class="title_section11">Look to unlock</h1>
                <p> <strong>Personalised protection</strong><br>
                    Galaxy A10 gives you personalised protection with face recognition technology. It knows you, so
                    you can simply hold the phone to your face for an easy, secure way to unlock and access. It’s
                    that simple.
                </p>
                <p class="remark text-black mt-lg-7">*The availability of this service may vary by country.**Images
                    simulated for illustrative purposes.</p>
            </div>
        </div>
    </section>
    <!-- end section7 -->

    <!-- section8 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-5-auto text-center">Made to focus</h1>
                <div class="block-p">
                    <p class="font text-center">One UI helps you focus on what matters. The hardware and software work in harmony to intuitively deliver content and features at your fingertips. Night Mode helps you wind down your day as it turns to a dark mode to go easy on eyes for a better night's rest.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a10/banner_8.webp')}}" style="width:100%;" alt="">
            </div>
            <p class="remark text-black pr-20p pl-20p text-center mt-5-auto">*Availability of One UI features, apps and services may vary depending on device, OS version and country.**Device and screen images simulated for illustrative purposes.</p>
        </div>
    </section>
    <!-- end section8 -->



</div>

@endsection

@section('script')
<script src="{{URL::asset('js/page-js/samsung/galaxy-a10/main.js')}}"></script>
@endsection
