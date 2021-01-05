@extends('layouts/main-all-products')

@section('title', '42Gears | SureLock window | Mobile Device Manegement | Unified Enterprise Management | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')



@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/42gears/sure_lock_watch.css')}}">
@endsection




@section('content')
<div class="bg-body">
    <section class="section-1">
        <div class="bg-1">
            <div class="text-sup-1">
                <h2 class="head-1">
                    SureLock for Wearables
                </h2>
                <h3>
                    LOCKDOWN YOUR ANDROID SMARTWATCH
                </h3>
            </div>
            <div class="button">
                <a href="/contact">
                    <button class="btn btn-banner">Contact now</button>
                </a>
            </div>
            <div class="text-1 mobile-none">
                <h2>
                    Overview
                </h2>
                <p>
                    Wearables are the next wave in Enterprise Mobility Management (EMM) industry. They are all set to
                    support businesses by strengthening communication, enhancing workforce mobility and productivity,
                    especially in challenging industries like healthcare, logistics, retail, supply chain and remote support.
                    42Gears EMM Suite allows enterprises to convert Android Smartwatches into dedicated-purpose devices and
                    remotely manage them, making them enterprise ready.
                </p>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="text-1 desktop-none">
            <h2>
                Overview
            </h2>
            <p>
                Wearables are the next wave in Enterprise Mobility Management (EMM) industry. They are all set to
                support businesses by strengthening communication, enhancing workforce mobility and productivity,
                especially in challenging industries like healthcare, logistics, retail, supply chain and remote support.
                42Gears EMM Suite allows enterprises to convert Android Smartwatches into dedicated-purpose devices and
                remotely manage them, making them enterprise ready.
            </p>
        </div>

        <section class="section-4">
            <div class="text-2">
                <h2>
                    Android Wearable Lockdown
                </h2>
                <p>
                    Turn Android Smartwatches into dedicated-purpose devices
                </p>
            </div>
            <div class="row row1-sec4">
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="box-2">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureLock/icon/iconlook-05.png" class="icon-sec2" width="35%">
                        </figure>
                        <h2>
                            App Whitelisting
                        </h2>
                        <p>
                            Lockdown Android Smartwatch with access to only allowed
                            applications
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box-2">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureLock/icon/iconlook-06.png" class="icon-sec2" width="35%">
                        </figure>
                        <h2>
                            Password Protected Settings
                        </h2>
                        <p>
                            Restrict the users from accessing and modifying lockdown or device settings
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box-2">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureLock/icon/iconlook-07.png" class="icon-sec2" width="35%">
                        </figure>
                        <h2>
                            Customizable UI
                        </h2>
                        <p>
                            Customize Android Smartwatch with desired wallpapers to suit your company's branding
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box-2">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureLock/icon/iconlook-08.png" class="icon-sec2" width="35%">
                        </figure>
                        <h2>
                            Single Application Mode
                        </h2>
                        <p>
                            Lock your Android Smartwatch with just one application in the foreground
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box-2">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureLock/icon/iconlook-09.png" class="icon-sec2" width="35%">
                        </figure>
                        <h2>
                            Remote Settings
                        </h2>
                        <p>
                            Use local network to remotely configure or edit SureLock
                            settings
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box-2">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureLock/icon/iconlook-10.png" class="icon-sec2" width="35%">
                        </figure>
                        <h2>
                            Device Enrollment
                        </h2>
                        <p>
                            Enroll devices in seconds with Import / Export Settings option to perform bulk enrollment
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-3">
            <a href="/products">Products</a><span style="color: #707070af;"> > </span>
            <a href="/products/42gears">42Gears</a><span style="color: #707070af;"> > </span>
            <a href="/products/42gears/sure_lock">Sure Lock</a><span style="color: #707070af;"> > </span>
            <a href="#" style="font-weight: 600; color: #707070;">Wearables</a>
         </section>

</div>
<section>
    @include('includes/footer')
</section>

@endsection



@section('script')


@endsection
