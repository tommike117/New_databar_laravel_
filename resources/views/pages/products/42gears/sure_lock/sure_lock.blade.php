@extends('layouts/main-all-products')

@section('title', '42Gears | SureLock | Mobile Device Manegement | Unified Enterprise Management | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')



@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/42gears/sure_lock.css')}}">
@endsection




@section('content')
<div class="bg-body">
    <section class="section-1">
        <div class="bg-1">
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
                    SureMDM, powered by 42Gears UEM, is an intuitive and powerful Enterprise Mobility Management (EMM) tool for Android, iOS, Windows, Linux and macOS platforms. You can secure, monitor and manage company owned
                    devices for dedicated use as well as employee owned devices used to access company data (BYOD). SureMDM
                    incorporates all aspects of enterprise mobility through unified endpoint management such as Mobile Application Management, Mobile Device Management and Mobile Content Management.
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
                SureMDM, powered by 42Gears UEM, is an intuitive and powerful Enterprise Mobility Management (EMM) tool for Android, iOS, Windows, Linux and macOS platforms. You can secure, monitor and manage company owned
                devices for dedicated use as well as employee owned devices used to access company data (BYOD). SureMDM
                incorporates all aspects of enterprise mobility through unified endpoint management such as Mobile Application Management, Mobile Device Management and Mobile Content Management.
            </p>
        </div>
            <h2>
                Select your platform
            </h2>
        <div class="row row1-sec2">
            <div class="col-lg-3 col-md-6 tablet-margin-top">
                <a href="/products/42gears/sure_lock/sure_lock_android">
                    <div class="box-2">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureLock/icon/iconlook-01.png" class="icon-sec2" width="50%">
                        </figure>
                        <h2>
                            Android
                        </h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 tablet-margin-top">
                <a href="/products/42gears/sure_lock/sure_lock_window">
                    <div class="box-2">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureLock/icon/iconlook-02.png" class="icon-sec2" width="50%">
                        </figure>
                        <h2>
                            Window 7, 8 & 10
                        </h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 tablet-margin-top">
                <a href="/products/42gears/sure_lock/sure_lock_window_mobile">
                    <div class="box-2">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureLock/icon/iconlook-03.png" class="icon-sec2"width="50%">
                        </figure>
                        <h2>
                            Window mobile & CE
                        </h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 tablet-margin-top">
                <a href="/products/42gears/sure_lock/sure_lock_window_watch">
                    <div class="box-2">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureLock/icon/iconlook-04.png" class="icon-sec2" width="50%">
                        </figure>
                        <h2>
                            Android Smartwatch
                        </h2>
                    </div>
                </a>
            </div>
        </div>
    </section>
</div>
<section>
    @include('includes/footer')
</section>

@endsection



@section('script')


@endsection
