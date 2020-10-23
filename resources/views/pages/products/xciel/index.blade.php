
@extends('layouts/main-products-jingjingna')


{{-- Title Website --}}
@section('title', 'Xciel | XCS10 | XCZ1 S10 | Samsung Galaxy S10 | DATABAR COMPANY LIMITED')


{{-- Link CSS --}}
@section('link')


@endsection



@section('content')

<style>
    .flex-12{
        flex: 0 0 100%;
        max-width: 100%;
        display: flex;

    }
    .flex-6{
        flex: 1 0 50%;
        max-width: 50%;
        text-align: right;
        font-size: 14px;
    }
    .flex-text{
        margin-top: 15%;
        padding: 0 5%;
    }
    .flex-text h2{
        color: #3399ff;
        font-weight: 600;
    }

    .sec-3 .flex-text{
        margin-top: 7%;
        padding: 0 5%;
    }
    .sec-5 .flex-text img{
        margin-top: 5%;
        padding-left: 50%;
    }
    .sec-5 .flex-text{
        margin-top: 5%;
        padding: 0 5%;
    }
</style>

<section class="sec-1">
    <img width="100%" src="/images/new-website/products/xciel/X_1920-01.jpg" alt="#">
</section>


<section class="sec-2">
    <div class="flex-12">
        <div class="flex-6">
            <img width="100%" src="/images/new-website/products/xciel/X_1920-02.jpg" alt="#">
        </div>
        <div class="flex-6 flex-text">
            <h2>Xciel</h2>
            <p>Xciel Inc is a manufacturer of intrinsically safe portable devices like smartphones and tablets, which are designed to survive the challenges of rugged environments. Whether you work at a construction site or at an oil and gas plant, count on us to provide devices that offer complete protection from shocks, dust, vibrations, and water.</p>
            <p>You will not only get great functionality from our products but also durability that can withstand the type of abuse that can happen in a busy work site. We ruggedize and certify comme rcial - grade products so they can be used in
                hazardous areas.</p>
        </div>
    </div>
</section>



<section class="sec-3">

    <div class="flex-12">
        <div class="flex-6">
            <img width="100%" src="/images/new-website/products/xciel/X_1920-03.jpg" alt="#">
        </div>
        <div class="flex-6 flex-text">
            <h2>ATEX Zone 2 area</h2>
            <p>This is a step up from the safe area. In this zone the gas, vapor or mist would only be present under abnormal conditions (most often leaks under abnormฟal conditions). As a general guide for Zone 2, unwanted substances should only be present under 10 hours /year or 0–0.1% of the time. </p>
            <p>You will not only get great functionality from our products but also durability that can withstand the type of abuse that can happen in a busy work site. We ruggedize and certify comme rcial - grade products so they can be used in
                hazardous areas.</p>
            <h2>ATEX Zone 1 area</h2>
            <p>This is a step up from the safe area. In this zone the gas, vapor or mist would only be present under abnormal conditions (most often leaks under abnormฟal conditions). As a general guide for Zone 2, unwanted substances should only be present under 10 hours /year or 0–0.1% of the time. </p>
            <p>Gas, vapor or mist will be present or expected to be present for long periods of time under normal operating conditions. As a guide for Zone 1, this can be d fined as 10–1000 hours /year or 0.1–10% of the time.</p>
        </div>
    </div>

</section>



<section class="sec-4">

    <div class="flex-12">
        <div class="flex-6">
            <img width="100%" src="/images/new-website/products/xciel/X_1920-04.jpg" alt="#">
        </div>
        <div class="flex-6 flex-text">
            <h2>XCIEL ATEX ZONE 1 & 2</h2>
            <h3>XCEIL XCS10</h3>
            <p>Zone 1 and Zone 2 Rugged Samsung S10 : This product will allow you carry around in a Zone 1 and Zone 2 area one of the most popular Phone in the world.
                The XCS10 is designed to resist to shocks, vibrations, dust and water in indoor and outdoor environments. The XCS10 allows you to connect securely to your VPN
                network through Wi-Fi, 3G or 4G</p>
            <img width="100%" src="/images/new-website/products/xciel/icon-04.png" alt="#">

        </div>
    </div>

</section>


<section class="sec-5">
    <div class="flex-12">
        <div class="flex-6">
            <img width="100%" src="/images/new-website/products/xciel/X_1920-05.jpg" alt="#">
        </div>
        <div class="flex-6 flex-text">
            <h2 style="font-size: 28px;">CERTIFIED C1D2/ ATEX ZONE2 1 & 2</h2>
            <h2 style="font-size: 20px; font-weight:300; color:#4d4d4d">RUGGED SAMSUNG GALAXY S10 ENCLOSURE</h2>

            <img width="100%" src="/images/new-website/products/xciel/ตาราง-05.png" alt="#">

        </div>
    </div>
</section>



<section>
    @include('includes/footer')
</section>

@endsection




@section('script')

@endsection
