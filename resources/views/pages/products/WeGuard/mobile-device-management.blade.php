{{-- Include  --}}
@extends('layouts/main')



{{-- Title Website --}}
@section('title', 'Mobile Device Management | WeGuard | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="{{URL::asset('css/page-style/WeGuard/style.css')}}">

@endsection

{{-- Body HTML --}}

@section('content')
<h2 style="color:white;position:absolute;visibility: hidden;">EMM</h2>
<h2 style="color:white;position:absolute;visibility: hidden;">Enterprise Mobility Management</h2>

<div class="container-fluid p-0">
    <div class="row m-auto background-banner-weguard">
        <div class="banner-weguard-flex">
            <figure class="logo-weguard">
                <img src="{{URL::asset('images/WeGuard/apple-touch-icon.png')}}" style="width:100%;"
                    alt="WeGuard logo icon">
            </figure>
            <article class="text-center" style="padding:0 15px;">
                <strong>
                    <h1 class="text-weguard-h1 mt-md-3 mb-md-3">Mobile Device Management</h1>
                </strong>
                <p class="font20 my-color-grey">WeGuard Platform is your
                    one-stop solution for
                    all of your Mobile Device Management needs.</p>
            </article>
        </div>
    </div>
</div>

<div class="container-fluid">
    <!-- section1 -->
    <section>
        <div class="row">
            <div class="flex-half image">
                <figure class="half-image-size">
                    <img src="{{URL::asset('images/WeGuard/weguard_mdm.jpg')}}" style="width:100%;"
                        alt="WeGuard platform" title="WeGuard platform">
                </figure>
            </div>
            <div class="flex-half content">
                <p class="padding-side-md-10p font-md-20">
                    "With mobile devices, laptops and desktops being a part of your enterprise, managing them from a
                    single interface is the only option to stay hassle free. WeGuard platform takes care of all the
                    MDM tasks your business will ever need."
                </p>
            </div>
        </div>
    </section>
    <!-- end section1 -->

    <!-- section2 -->
    <section class="sec-2">
        <div class="row justify-content-center mt-2 mb-2">
            <h1 class="underline">WeGuard</h1>
        </div>
        <div class="row justify-content-center mt-5 mb-5">
            <span>
                <h3 class="font-400 font-md-20">Manage all of your
                    devices from a single interface</h3>
            </span>
        </div>
    </section>
    <!-- end section2 -->

    <!-- section3 mobile -->

    <section class="section-mobile">
        <div class="row justify-content-center">
            <strong>
                <span>
                    <p class="my-color-lightgrey font-400">WeGuard platform for</p>
                </span>
            </strong>
        </div>
        <div class="row justify-content-center">
            <h1 class="text-weguard-h1 mt-md-1 mb-md-3">Mobile Device
                Management</h1>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <figure class="tablet-preview">
                    <img src="{{URL::asset('images/WeGuard/weguard-m2m-in-motion-eld-fleet-tracking-gps-2.png')}}"
                        style="width:100%" alt="weguard platform tablet" title="WeGuard platform tablet">
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <figure class="icon-platform left">
                            <img src="{{URL::asset('images/WeGuard/platform-icon-1.png')}}" style="width:100%;" alt="Mobile Device Management Easy Installations"
                            title="WeGuard Mobile Device Management Easy Installations">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <h2 class="text-weguard-h1 head-platform ">Easy Installations</h2>
                        <p class="my-color-lightgrey font-400 detail-platform">Zero touch installations to
                            remove deployment nightmares.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <figure class="icon-platform left">
                            <img src="{{URL::asset('images/WeGuard/platform-icon-2.png')}}" style="width:100%;" alt="Mobile Device Management KIOSK Mode"
                            title="WeGuard Mobile Device Management KIOSK Mode">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <h2 class="text-weguard-h1 head-platform">KIOSK Mode</h2>
                        <p class="my-color-lightgrey font-400 detail-platform">Lock your devices to kiosk
                            mode &
                            remote control at will.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <figure class="icon-platform left">
                            <img src="{{URL::asset('images/WeGuard/platform-icon-3.png')}}" style="width:100%;"
                            alt="Mobile Device Management Remote Reboot"
                            title="WeGuard Mobile Device Management Remote Reboot">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <h2 class="text-weguard-h1 head-platform">Remote Reboot</h2>
                        <p class="my-color-lightgrey font-400 detail-platform">Reboot your devices remotely.
                            Remote KIOSK unlock.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <figure class="icon-platform left">
                            <img src="{{URL::asset('images/WeGuard/platform-icon-4.png')}}" style="width:100%;"
                            alt="Mobile Device Management Customized Persona"
                            title="WeGuard Mobile Device Management Customized Persona">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <h2 class="text-weguard-h1 head-platform ">Customized Persona</h2>
                        <p class="my-color-lightgrey font-400 detail-platform">You brand as your persona,
                            customization of persona.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <figure class="icon-platform left">
                            <img src="{{URL::asset('images/WeGuard/platform-icon-5.png')}}" style="width:100%;"
                            alt="Mobile Device Management Disable App Store"
                            title="WeGuard Mobile Device Management Disable App Store">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <h2 class="text-weguard-h1 head-platform ">Disable App Store</h2>
                        <p class="my-color-lightgrey font-400 detail-platform">Allow only specific apps to
                            be
                            installed.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <figure class="icon-platform left">
                            <img src="{{URL::asset('images/WeGuard/platform-icon-6.png')}}" style="width:100%;"
                            alt="Mobile Device Management FOTA Updates"
                            title="WeGuard Mobile Device Management FOTA Updates">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <h2 class="text-weguard-h1 head-platform ">FOTA Updates</h2>
                        <p class="my-color-lightgrey font-400 detail-platform">Firmware Over-The-Air version
                            control.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end section3 mobile -->

    <!-- section 3 laptop-->
    <section class="sec-3 section-laptop">
        <div class="row justify-content-center">
            <strong>
                <span>
                    <p class="my-color-lightgrey font-400">WeGuard platform for</p>
                </span>
            </strong>
        </div>
        <div class="row justify-content-center">
            <h1 class="text-weguard-h1 mt-md-1 mb-md-3">Mobile Device
                Management</h1>
        </div>
        <div class="background-for-platform">
            <div class="row mt-6 mb-6">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3">
                            <figure class="icon-platform left">
                                <img src="{{URL::asset('images/WeGuard/platform-icon-1.png')}}" style="width:100%;"
                                alt="Mobile Device Management Easy Installations"
                            title="WeGuard Mobile Device Management Easy Installations">
                            </figure>
                        </div>
                        <div class="col-md-9">
                            <h2 class="text-weguard-h1 head-platform ">Easy Installations</h2>
                            <p class="my-color-lightgrey font-400 detail-platform">Zero touch installations to
                                remove deployment nightmares.</p>
                        </div>
                    </div>
                    <div class="row m-md-50-auto">
                        <div class="col-md-3">
                            <figure class="icon-platform left">
                                <img src="{{URL::asset('images/WeGuard/platform-icon-2.png')}}" style="width:100%;"
                                alt="Mobile Device Management KIOSK Mode"
                            title="WeGuard Mobile Device Management KIOSK Mode">
                            </figure>
                        </div>
                        <div class="col-md-9">
                            <h2 class="text-weguard-h1 head-platform ">KIOSK Mode</h2>
                            <p class="my-color-lightgrey font-400 detail-platform">Lock your devices to kiosk
                                mode &
                                remote control at will.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-md-3">
                            <figure class="icon-platform left">
                                <img src="{{URL::asset('images/WeGuard/platform-icon-3.png')}}" style="width:100%;"
                                alt="Mobile Device Management Remote Reboot"
                                title="WeGuard Mobile Device Management Remote Reboot">
                            </figure>
                        </div>
                        <div class="col-md-9">
                            <h2 class="text-weguard-h1 head-platform ">Remote Reboot</h2>
                            <p class="my-color-lightgrey font-400 detail-platform">Reboot your devices remotely.
                                Remote KIOSK unlock.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 text-center">
                    <figure class="tablet-preview">
                        <img src="{{URL::asset('images/WeGuard/weguard-m2m-in-motion-eld-fleet-tracking-gps-2.png')}}"
                            style="width:100%" alt="weguard playform tablet">
                    </figure>
                </div>

                <div class="col-md-4">

                    <div class="row">
                        <div class="col-md-3">
                            <figure class="icon-platform right">
                                <img src="{{URL::asset('images/WeGuard/platform-icon-4.png')}}" style="width:100%;"
                                alt="Mobile Device Management Customized Persona"
                                title="WeGuard Mobile Device Management Customized Persona">
                            </figure>
                        </div>
                        <div class="col-md-9">
                            <h2 class="text-weguard-h1 head-platform ">Customized Persona</h2>
                            <p class="my-color-lightgrey font-400 detail-platform">You brand as your persona,
                                customization of persona.</p>
                        </div>
                    </div>
                    <div class="row m-md-50-auto">
                        <div class="col-md-3">
                            <figure class="icon-platform right">
                                <img src="{{URL::asset('images/WeGuard/platform-icon-5.png')}}" style="width:100%;"
                                alt="Mobile Device Management Disable App Store"
                            title="WeGuard Mobile Device Management Disable App Store">
                            </figure>
                        </div>
                        <div class="col-md-9">
                            <h2 class="text-weguard-h1 head-platform ">Disable App Store</h2>
                            <p class="my-color-lightgrey font-400 detail-platform">Allow only specific apps to
                                be
                                installed.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <figure class="icon-platform right">
                                <img class="icon6" src="{{URL::asset('images/WeGuard/platform-icon-6.png')}}"
                                    style="width:100%;"
                                    alt="Mobile Device Management FOTA Updates"
                            title="WeGuard Mobile Device Management FOTA Updates">
                            </figure>
                        </div>
                        <div class="col-md-9">
                            <h2 class="text-weguard-h1 head-platform ">FOTA Updates</h2>
                            <p class="my-color-lightgrey font-400 detail-platform">Firmware Over-The-Air version
                                control.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end section 3 -->
    <style>
        .btn-outline-primary {
            color: #0066cc;
            border-color: #0066cc;
            width: 50%;
            height: 50px;
            margin: auto;
            justify-content: center;
            align-items: center;
            display: flex;
            border-radius: 10px;
            font-size: 15px;
        }

    </style>


    {{-- <div class="row" style="margin-bottom: 6%;margin-top: -8%;">
        <div class="col-6">
            <a href="{{URL::route('WeGuard.buy')}}" class="btn btn-outline-primary mt-4 mb-4">Buy</a>
        </div>
        <div class="col-6">
            <a href="{{URL::route('WeGuard.trial')}}" class="btn btn-outline-primary mt-4 mb-4">Trial</a>
        </div>
    </div> --}}

</div>
@endsection
