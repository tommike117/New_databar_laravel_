@extends('layouts/main-brands')

@section('title', '42Gears | Mobile Device Manegement | Unified Enterprise Management | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')



@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/42gears/sure_mdm.css')}}">
@endsection




@section('content')
<div class="bg-body">
    <section class="section-1">
        <picture>
            <img class="desktop-pic" src="/images/new-website/products/42gears/web/SureMDM/MDM_1920-01_r.jpg" width="100%">
            <img class="mobile-pic" src="/images/new-website/products/42gears/mobile/42_750-01.jpg" width="100%">
            <a href="/contacts">
                <button class="btn btn-banner">Contact now</button>
            </a>
        </picture>
        <div class="text-1">
            <h2>
                Overview
            </h2>
            <p>
                SureMDM, powered by 42Gears UEM, is an intuitive and powerful Enterprise Mobility Management (EMM) tool for Android, iOS, Windows, Linux and macOS platforms. You can secure, monitor and manage company owned
                devices for dedicated use as well as employee owned devices used to access company data (BYOD). SureMDM
                 incorporates all aspects of enterprise mobility through unified endpoint management such as Mobile Application Management, Mobile Device Management and Mobile Content Management.
            </p>
        </div>
    </section>
    <section class="section-2">

    </section>


</div>
<section>
    @include('includes/footer')
</section>

@endsection



@section('script')


@endsection
