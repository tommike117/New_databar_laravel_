
@extends('layouts/main')



{{-- Title Website --}}
@section('title', 'Xciel | XCS10 | XCZ1 S10 | Samsung Galaxy S10 | DATABAR COMPANY LIMITED')


{{-- Link CSS --}}
@section('link')
    <link rel="stylesheet" href="{{URL::asset('css/page-style/xciel/style.css')}}">
@endsection




{{-- Body HTML --}}
@section('content')

<section class="section-1">
    <h1>XCIEL ATEX ZONE1&2, XCIEL XCS10</h1>

    <img class="for-desktop" style="width:100%" src="/images/xciel/T1-01.png" alt="#">
    <img class="t1-01-mobile for-mobile" src="/images/xciel/Mobile-02.png" alt="#">
    <img class="t1-03-mobile for-mobile" src="/images/xciel/Mobile-03.png" alt="#">
    <img class="t1-02-01 for-desktop" src="/images/xciel/T1-02-01.png" alt="#">
    <img class="t1-02-02 for-desktop"src="/images/xciel/T1-02-02.png" alt="#">

    <div class="logo-brand logo-xciel">
        <figure>
            <img style="width:100%;" src="/images/xciel/LOGO-NEW.png" alt="#">
        </figure>
    </div>
    <div class="text-logo">
         <p>Explosion-proof,<br>
            Non-Incentive, Intrinsically Safe <br>
            Smartphones <br> and Tablets</p>
    </div>
</section>

<section class="section-2">
    <img class="for-desktop" style="width:100%" src="/images/xciel/T2-02.png" alt="#">
    <img class="t2-02 for-desktop" style="width:100%" src="/images/xciel/T2-01.png" alt="#">
    <img class="mobile-05 for-mobile" src="/images/xciel/Mobile-05.png" alt="#">
    <img class="t1-04-mobile for-mobile" src="/images/xciel/Mobile-04.png" alt="#">
    <img class="mobile-08 for-mobile" src="/images/xciel/Mobile-08.png" alt="#">

</section>

<section class="section-3">

    <img class="for-desktop" style="width:100%; margin-top:-1px;" src="/images/xciel/T3-01-01.png" alt="#">
    {{-- <img class="mobile-09 for-mobile" style="width:100%" src="/images/xciel/Mobile-09.png" alt="#"> --}}
    <div class="mobile-09 for-mobile"></div>
    {{-- <div class="text-comingsoon">
        <p>Coming <br>
        Soon </p>
    </div> --}}
    <img class="t3-01-02 for-desktop" style="width:100%" src="/images/xciel/T3-01-02.png" alt="#">
    {{-- <img class="mobile-07 for-mobile" style="width:100%" src="/images/xciel/Mobile-07.png" alt="#"> --}}
    <div>
        <div class="for-mobile xciel-zone1-2">
            <p class="xciel-atex" style="color: #007ca2; opacity:0.5;">XCIEL ATEX <br>
                ZONE 1 & 2</p>
            <p class="xciel-atex" style="margin-right: 3px; margin-top: -2px; color: #00aeef;">XCIEL ATEX <br>
                ZONE 1 & 2</p>
        </div>
        <h3 class="text-descript">XCIEL XCS10</h3>       
        <p  class="text-descript2">Zone 1 and Zone 2 Rugged Samsung S10 : This product will allow you carry around in a     
            Zone 1 and Zone 2 area one of the most popular Phone in the world. The XCS10 is designed
            to resist to shocks, vibrations, dust and water in indoor and outdoor environments.
            The XCS10 allows you to connect securely to your VPN network through Wi-Fi, 3G or 4G
        </p>
    </div>
    
    <img class="t3-01-03" style="width:100%" src="/images/xciel/T3-01-03.png" alt="#">


</section>

@endsection



{{-- Script Java --}}
@section('script')

@endsection
