@extends('layouts/main-all-products')

@section('title', 'Galaxy S21 | S21 Ultra | Samsung Smartphone | DATABAR COMPANY LIMITED')


@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-s21/main.css')}}">

@endsection


@section('content')
    <section class="section-1">
        <div class="text">
            <h1>
                Galaxy S21 5G | S21+ 5G
            </h1>
            <p>
                Everyday just got epic.
            </p>
        </div>
        <picture>
            <source media="(max-width: 850px)" srcset="{{URL::to('/images/samsung/galaxy-s21/Untitled-1.jpg')}}">
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_kv.png')}}" width="100%" alt="S21" >
        </picture>
        <div class="text text-1">
            <h2>
                Everyday epic
            </h2>
            <p>
                Introducing Galaxy S21 5G and S21+ 5G.1
                <br>
                Super high-resolution camera and 8K video.
                Galaxy's fastest processor yet.
                All-day intelligent battery.2
                A striking new design.
            </p>
        </div>
    </section>
    <section class="section-2">
        <div class="text text-2">
            <p>
                DESIGN AND DISPLAY

            </p>
            <h2>
                MADE TO <br>
                TURN HEAD
            </h2>
        </div>
        <picture>
            <source  media="(max-width: 850px)" srcset="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_display_start_mobile.jpg')}}">
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_display_start.jpg')}}" width="90%" alt="S21" >
        </picture>
    </section>
    <section class="section-3">
        <img src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_display.jpg" width="100%" alt="S21">
    </section>
    <section class="section-4 d-flex w-100">
        <div class="text text-3">
            <p>
                COLORS
            </p>
            <h2>
                PHANTOM VIOLET
            </h2>
            <h2>
                PHANTOM SILVER
            </h2>
            <h2>
                PHANTOM BLACK
            </h2>
        </div>
        <picture>
            <img src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_colors_3.png" width="100%" alt="">
        </picture>
    </section>
    <section class="section-5">
        <picture>
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_glass.png')}}" width="100%" alt="S21" >
        </picture>
        <div class="text text-5">
            <h2>
                Total eye candy
            </h2>
            <p>
                Brilliant and protected in every way.
            </p>
        </div>
        <div class="text text-5-1">
            <p>
                DURABLE DISPLAY
            </p>
            <h2>
                The toughest Gorilla Glass yet
            </h2>
            <p>
                Built for those "oh no!" moments, Corning® Gorilla® Glass Victus™ delivers scratch and damage protection that makes it the toughest glass on a Samsung smartphone.7
            </p>
        </div>
    </section>
    <section class="section-6">
        <picture>
            <source  media="(max-width: 850px)" srcset="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_summary-video_mobile.jpg.png')}}">
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_summary-video_.png')}}" width="100%" alt="S21" >
        </picture>
        <div class="text text-6">
            <h2>
                Video does't get <br>
                any better than this
            </h2>
        </div>
    </section>
    <section class="section-7">
        <picture class="pic-none">
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_8k_end_mobile.jpg')}}" width="100%" alt="S21" >
        </picture>
        <video autoplay muted loop style="width: 100%;" class="video-7">
            <source src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_8k.mp4" type="video/mp4">
        </video>
        <div class="text text-7">
            <h2>Everyday moments that outshine the cinema</h2>
        </div>
    </section>








@endsection



@section('script')
<script src="{{ URL::asset('/js/page-js/samsung/galaxy-s21/main.js')}}"></script>
@endsection
