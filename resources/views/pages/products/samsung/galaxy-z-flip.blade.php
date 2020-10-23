@extends('layouts/main')

@section('title', 'Galaxy Z Flip | Samsung Smartphone | DATABAR COMPANY LIMITED')


@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/page-style/samsung/galaxy-z-flip/main.css')}}">

<link rel="stylesheet" href="/css/animate.css">
@endsection



@section('content')

<div class="container-fluid p-0">
    <div class="title-h1">
        <h1>Galaxy Z Flip</h1>
    </div>
    <div class="block-image-z-flip">
        <img src="{{URL::to('/images/samsung/galaxy-z-flip/galaxy-z-flip_highlight_kv_end.webp')}}" style="width:100%;" alt="Galaxy Z Flip" title="Samsung Galaxy Z Flip">
    </div>

    <section class="section section-1 bg-black">
        <div class="block-h2">
            <h2>Meet Galaxy Z Flip</h2>
            <p>The full screen phone that folds to fit in your pocket with revolutionary flexible display, a camera made to stand on its own, and a dual battery that lasts all day. Meet the phone changing the shape of the future.</p>
        </div>
    </section>

    <section class="section section-2">
        <div class="block-h2-section2">
            <h2>DESIGN</h2>
        </div>
        <div class="block-h3-section2">
            <h3>A whole new spin on the phone.</h3>
        </div>
    </section>

    <section class="section section-3">
        <div class="block-content">
            <h3>Impossibly compact for maximum impact.</h3>
            <p>Galaxy Z Flip folds to be surprisingly small for an outstanding design that easily fits into your pocket, bag or purse.</p>
        </div>
        <div class="block-image">
            <img src="{{URL::to('/images/samsung/galaxy-z-flip/galaxy-z-flip_slim_person.webp')}}" style="width:100%;" alt="">
        </div>
    </section>

    <section class="section section-4">
        <figure class="figure-image-section-4">
            <img src="{{URL::to('/images/samsung/galaxy-z-flip/galaxy-z-flip_future_purple.jpg')}}" style="width:100%;" alt="">
        </figure>
    </section>

    <section class="section section-5">
        <figure class="figure-image-section-5">
            <img src="{{URL::to('/images/samsung/galaxy-z-flip/galaxy-z-flip_beauty_img.jpg')}}" style="width:100%;" alt="">
        </figure>
        <div class="text-flow">
            <h3>Beauty is in the hand of the beholder</h3>
            <p>Galaxy Z Flip's unique form factor is enhanced with an impossible-to-ignore, color-shifting exterior in your choice of stunning hues.</p>
        </div>
    </section>

    <section class="section section-6">
        <div class="block-video">
        <video class="video-section-6" title="Samsung Galaxy z-flip" autoplay muted loop>
            <source src="/images/samsung/galaxy-z-flip/galaxy-z-flip_around_blackmirror.webm" type="video/mp4">
        </video>
        </div>
        <div class="block-text-section-6">
            <h3>Absolutely stunning, all the way around</h3>
            <p>Front to back, top to bottom, open to closed. Whichever way you look at it, the Galaxy Z Flip is one good-looking device.</p>
        </div>
    </section>

    <section class="section section-7">
        <div class="block-section-7">
            <div class="block-text-section-7 left">
                <h3>The full screen that fits in your pocket</h3>
            </div>
            <div class="block-video-section-7">
                <video class="video-section-7" title="Samsung Galaxy z-flip" autoplay muted>
                    <source src="/images/samsung/galaxy-z-flip/galaxy-z-flip_screen.webm" type="video/mp4">
                </video>
            </div>
            <div class="block-text-section-7 right">
                <p>Galaxy Z Flip's Infinity Flex Display is an immersive Dynamic AMOLED screen delivering incredible colour quality and reduced blue light. With minimised bezels and no notch, it's 6.7 inches of stunning cinematic viewing.</p>
                <p>6.7”</p>
                <p>Infinity Flex Display</p>
            </div>
        </div>
    </section>

    <section class="section section-8 bg-black">
        <div class="block-h8">
            <figure class="figure-image-section-8" style="overflow: hidden;">
                <img src="{{URL::to('/images/samsung/galaxy-z-flip/galaxy-z-flip_unique_end.jpg')}}"  alt="">
            </figure>
            <div class="text-flow-3">
                <h2>Camera</h2>
                <h3>Your unique point of view <br>just got more unique</h3>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row" style="margin-top: 200px">
                <div class="col-xs-12 col-sm-6 col-md-6 text-flow-4">
                    <figure class="figure-image-section-9" >
                        <img src="{{URL::to('/images/samsung/galaxy-z-flip/galaxy-z-flip_scene_night_hyperlapse_end.webp')}}" style="width: 100%; border-radius:35px;" alt="">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 text-flow-4">
                    <h9>Ready for the night scene</h9>
                    <p>Galaxy Z Flip's camera is powerful even at night. Seconds of long-exposure shots are morphed into a work of video art with light trails. And when you fold the phone, it can stand like a tripod, working with Night Hyperlapse to give you a new kind of night shot.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-10"style="margin-top:200px;">
        <figure class="figure-image-section-10" >
            <img src="{{URL::to('/images/samsung/galaxy-z-flip/galaxy-z-flip_talking_google_purple.webp')}}" style="width: 100%; border-radius:35px;" alt="">
        </figure>
    </section>

    <section class="section section-11">
        <div class="container">
            <div class="row" style="margin-top: 200px">
                <div class="col-xs-12 col-sm-6 col-md-6 text-flow-5">
                    <figure class="figure-image-section-11" >
                        <img src="{{URL::to('/images/samsung/galaxy-z-flip/galaxy-z-flip_flex_img.jpg')}}" style="width: 100%; border-radius:35px;" alt="">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 text-flow-5">
                    <h10>Do it all. All at once</h10>
                    <p>Level up your app use by having two open at once. Multitasking is even better on the massive 6.7” screen with Multi Active Window.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-12"style="margin-top:200px;">
            <div class="block-video-1">
                <video class="video-section-8" title="Samsung Galaxy z-flip" autoplay muted loop>
                    <source src="/images/samsung/galaxy-z-flip/galaxy-z-flip_cover.webm" type="video/mp4">
                </video>
            </div>
            <div class="block-text-section-12">
                <div class="block-h3">
                    <h3>External notifications go with the flow</h3>
                </div>
                <div class="block-p">
                    <p>Tap and swipe to control your phone even when it's folded shut. The cover screen notifies you at a glance, and contextual continuity lets you tap the notification to seamlessly transition to that app when you unfold your phone.</p>
                </div>
            </div>
    </section>

    <section class="section section-13 "style="margin-top:300px">
        <div class="block-h12">
            <figure class="figure-image-section-12" style="overflow: hidden;">
                <img src="{{URL::to('/images/samsung/galaxy-z-flip/galaxy-z-flip_outlast_img_purple.jpg')}}"  style="width: 100%;" alt="">
            </figure>
            <div class="text-flow-7">
                <h12>Stay in charge for longer.</h12>
                <p>The dual battery holds more power in less space, letting you fold and unfold all day long. With 3300mAh (typical) and cutting-edge intelligence, Galaxy Z Flip's powerful battery lets you make the most out of every charge.</p>
            </div>
        </div>
    </section>

    <section class="section section-14" style="margin-top: 200px">
        <div class="text-flow-8">
            <h13>What's in the box</h13>
        </div>
        <figure class="figure-image-section-13" style="overflow: hidden; margin-top:50px;">
            <img src="{{URL::to('/images/samsung/galaxy-z-flip/galaxy-z-flip_box_img_clear_ta4.jpg')}}"  style="width: 100%;" alt="">
        </figure>
    </section>

    <section class="section section-15" >
        <div class="text-flow-9">
            <p>Accessories</p>
            <h14>What's in the box</h14>
            <p> Galaxy Z Flip to a whole new dimension with your choice of cases. The Leather Cover features soft calf leather and a thin profile for elegant folds. </p>
        </div>
        <figure class="figure-image-section-13" style="overflow: hidden; margin-top:50px;">
            <img src="{{URL::to('/images/samsung/galaxy-z-flip/galaxy-z-flip_accessories_img.jpg')}}"  style="width: 100%;" alt="">
        </figure>
    </section>
</div>

@endsection



@section('script')
{{-- <script src="{{ URL::asset('/js/page-js/samsung/galaxy-a71/main.js')}}"></script> --}}
@endsection
