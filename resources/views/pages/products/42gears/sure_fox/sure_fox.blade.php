@extends('layouts/main-all-products')

@section('title', '42Gears | SureLock window | Mobile Device Manegement | Unified Enterprise Management | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')



@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/42gears/sure_fox.css')}}">
@endsection




@section('content')
<div class="bg-body">
    <section class="section-1">
        <div class="bg-1">
            <div class="text-sup-1">
                <h2 class="head-1">
                    SureFox Secure Browser
                </h2>
                <p>
                    ■ Maximizes User Productivity with Restricted Browsing <br>
                    ■ Quick and Easy Configuration Process <br>
                    ■ Reduces Device Maintenance Effort <br>
                    ■ Device branding <br>
                    ■ Easy Mass Deployment with Cloud Export and Import of Settings
                </p>
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
                    Overview When deploying mobile web applications, security is an important criteria for success.
                    The most common requirement is to limit access to only certain websites for corporate use. SureFox Secure
                    Browser creates a safe browsing environment on mobile devices and desktops. This makes the devices
                    suitable for use as self-service web kiosks and data collection terminals for various types of businesses.
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
                Overview When deploying mobile web applications, security is an important criteria for success.
                The most common requirement is to limit access to only certain websites for corporate use. SureFox Secure
                Browser creates a safe browsing environment on mobile devices and desktops. This makes the devices
                suitable for use as self-service web kiosks and data collection terminals for various types of businesses.
            </p>
        </div>

        <section class="section-4">
            <div class="text-2">
                <h2>
                    Select your platform
                </h2>
            </div>
            <div class="row row1-sec4">
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <a href="/products/42gears/sure_lock/sure_lock_window_mobile">
                        <div class="box-2">
                            <figure>
                                <img src="/images/new-website/products/42gears/web/SureFox/icon/icon_fox-01.png" class="icon-sec2" width="45%">
                            </figure>
                            <h2>
                                Android
                            </h2>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="/products/42gears/sure_lock/sure_lock_window_mobile">
                        <div class="box-2">
                            <figure>
                                <img src="/images/new-website/products/42gears/web/SureFox/icon/icon_fox-02.png" class="icon-sec2" width="45%">
                            </figure>
                            <h2>
                                iOS
                            </h2>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="/products/42gears/sure_lock/sure_lock_window_mobile">
                        <div class="box-2">
                            <figure>
                                <img src="/images/new-website/products/42gears/web/SureFox/icon/icon_fox-03.png" class="icon-sec2" width="45%">
                            </figure>
                            <h2>
                                Windows Mobile & CE
                            </h2>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="section-3">
            <a href="/products">Products</a><span style="color: #707070af;"> > </span>
            <a href="/products/42gears">42Gears</a><span style="color: #707070af;"> > </span>
            <a href="#">Sure Fox</a><span style="color: #707070af;">  </span>
         </section>
</div>
<section>
    @include('includes/footer')
</section>

@endsection



@section('script')


@endsection
