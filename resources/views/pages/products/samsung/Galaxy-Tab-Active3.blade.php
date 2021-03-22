
@extends('layouts/main-all-products')


{{-- Title Website --}}
@section('title', 'Galaxy Tab Active3 | Samsung Tablet | DATABAR COMPANY LIMITED')

@section('canonical')
<link rel="stylesheet" type="text/css" href="/css/new-website/products/samsung/galaxy-tab-active-3/main.css">
<link rel="stylesheet" type="text/css" href="/css/new-website/products/samsung/galaxy-tab-active-3/style.css">


@endsection


{{-- Link CSS --}}
@section('link')

@endsection

{{-- Body HTML --}}
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 firstrow" style="overflow:hidden;padding-bottom:5%;">
            <nav aria-label="breadcrumb" id="breadcrumb">
                <ol class="breadcrumb mt-lg-5" style="background:transparent;">
                    <li class="breadcrumb-item"><a href="{{URL::to("/")}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{URL::route('samsung_tablets')}}">Samsung
                            Tablet</a></li>
                    <li class="breadcrumb-item d-flex active" aria-current="page">
                        <h1 class="m-auto" style="font-size:15px;">Galaxy Tab Active3</h1>
                    </li>
                </ol>
            </nav>
            <img id="GTA2" src="/images/samsung/galaxy-tab-active3/1.jpg" style="width:100%;padding:0 5% 0 20%;"
                title="Samsung Galaxy Tab Active3 Rugged Tablet" alt="Galaxy Tab Active3 Rugged Tablet">
            <div class="thumbnails">
                <ul class="ul-product">
                    <li class="li-product">
                        <img src="/images/samsung/galaxy-tab-active3/1.jpg" alt="Galaxy Tab Active Pro Rugged Tablet preview-1" title="Samsung Galaxy Tab Active Pro Rugged Tablet preview-1">
                    </li>
                    <li class="li-product">
                        <img src="/images/samsung/galaxy-tab-active3/2.jpg" alt="Galaxy Tab Active Pro Rugged Tablet preview-2" title="Samsung Galaxy Tab  Active Pro Rugged Tablet preview-2">
                    </li>
                    {{-- <li class="li-product">
                        <img src="/images/samsung/galaxy-tab-active-pro/GTApro_3.png" alt="Galaxy Tab Active Pro Rugged Tablet preview-3" title="Samsung Galaxy Tab Active Pro Rugged Tablet preview-3">
                    </li>
                    <li class="li-product">
                        <img src="/images/samsung/galaxy-tab-active-pro/GTApro_4.png" alt="Galaxy Tab Active Pro Rugged Tablet preview-4" title="Samsung Galaxy Tab Active Pro Rugged Tablet preview-4">
                    </li>
                    <li class="li-product">
                        <img src="/images/samsung/galaxy-tab-active-pro/GTApro_5.png" alt="Galaxy Tab Active Pro Rugged Tablet preview-5" title="Samsung Galaxy Tab Active Pro Rugged Tablet preview-5">
                    </li>
                    <li class="li-product">
                        <img src="/images/samsung/galaxy-tab-active-pro/GTApro_6.png" alt="Galaxy Tab Active Pro Rugged Tablet preview-6" title="Samsung Galaxy Tab Active Pro Rugged Tablet preview-6">
                    </li> --}}
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 "
                    style="text-align: center;background: rgba(0,0,0,0.1);padding:20px; margin-top: 60px;">
                    <label for="" style="font-size:16px;color:grey;margin-top:10px;">Tablet</label>
                    <h1 class="product_name">Galaxy Tab Active3</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:30px !important;border-bottom:1px solid">
                    <label for="" style="font-size:20px;color:black;font-weight:bold">Specification</label><br>
                    <ul>
                        <li>
                            <label style="font-size:13px;" for="">Size : 8" (255.4mm) </label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">Rugged and durable design</label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">Accelerometer,Fingerprint Sensor,Gyro Sensor,ETC.</label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">Rear Camera : 13.0 MP AF,Flash </label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">Front Camera : 5.0 MP </label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">RAM : 4 (GB)</label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">ROM : 64 (GB) | Micro SD up to 1TB</label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">Display : 1920 x 1200 (WUXGA) </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container icon-column">
    <div class="row text-center feature-tab" style="align-items: center;">
        <div class="border-right-solid col-3 " style="padding:50px">
            <img src="/images/samsung/galaxy-xcover-pro/icon-ip68.png" style="width: 70%" alt="ip68">
            <p style="margin-top:10px">IP 68</p>
        </div>
        <div class="border-right-solid col-3 "style="padding:50px">
            <img src="/images/samsung/galaxy-xcover-pro/icon-drop.png" style="width: 70%" alt="drop">
            <p style="margin-top:10px">Rugged</p>
        </div>
        <div class="border-right-solid col-3 "style="padding:50px">
            <img src="/images/samsung/galaxy-xcover-pro/icon-grade.png" style="width: 70%" alt="grade">
            <p style="margin-top:10px">Military Standard</p>
        </div>
        <div class="border-right-solid col-3 " style="border:none;padding:50px">
            <img src="/images/samsung/galaxy-xcover-pro/icon-temp.png" style="width: 70%" alt="temp">
            <p style="margin-top:10px">Operating Temperature</p>
        </div>
    </div>
</div>
<section class="section-1">
    <div class="text-1">
        <h2>
            Built strong from the inside out
        </h2>
        <p>
            Galaxy Tab Active3. Strong inside and out so you can take on the day. The rugged design has water, dust, and 1.5m drop resistance and replaceable battery, boosting productivity with Samsung DeX and enhanced NFC. With touch sensitivity settings, an Active key, and S Pen, put gloves on and get to it.
        </p>
    </div>
    <figure>
        <img src="/images/samsung/galaxy-tab-active3/levant-feature-built-strong-from-the-inside-out-314915736.webp" width="100%" alt="">
    </figure>
    <div class="text-1">
        <h3>
            Strong enough for tough environments
        </h3>
        <h2>
            Designed to be sturdy and reliable
        </h2>
        <p>
            Galaxy Tab Active3 is robust and reliable in harsh conditions. With an IP68 rating and the latest MIL-STD-810H certification, the durable 8-inch tablet is resistant to water and dust and can withstand 1.5m drops with Protective Cover. Portable and compact, it's built to tough out your day.
        </p>
    </div>
    <figure>
        <img src="/images/samsung/galaxy-tab-active3/levant-feature-designed-to-be-sturdy-and-reliable-314915740.jfif" width="100%" alt="">
    </figure>
    <div class="text-1">
        <h2>
            S Pen handles well even with gloves
        </h2>
        <p>
            The Galaxy Tab Active3 comes with a water- and dust-resistant S Pen in box, for an easy way to get things done on the go — and with no need to charge. Responsive and precise even with gloves on, you can take notes, capture ideas, and draw what inspires you all in the outdoors.
        </p>
    </div>
    <figure>
        <img src="/images/samsung/galaxy-tab-active3/levant-feature-s-pen-handles-well-even-with-gloves-314915746.jfif" width="100%" alt="">
    </figure>
    <div class="text-1">
        <h2>
            Powerful performance and connectivity
        </h2>
        <p>
            Running on the Exynos 9810 processor, the tablet is powerful enough to run heavy files and demanding programs seamlessly. With Wi-Fi6 and MIMO support and up to 1TB of external storage to boost speed and performance, you can get work done easy.
        </p>
    </div>
    <figure class="pic-1">
        <img src="/images/samsung/galaxy-tab-active3/levant-feature-powerful-performance-and-connectivity-314915728.webp" width="100%" alt="">
    </figure>
</section>
<section class="section-2">
    <div class="text-1" style="color: black">
        <h2>
            Replaceable battery with power that lasts
        </h2>
        <p>
            The Galaxy Tab Active3 is engineered with a powerful 5,050mAh replaceable battery. Bring a fully charged battery while camping under the stars or reaching new heights, then simply switch it out and keep going.
        </p>
    </div>
    <figure class="pic-2">
        <img src="/images/samsung/galaxy-tab-active3/levant-feature-replaceable-battery-with-power-that-lasts-314915750.webp" width="100%" alt="">
    </figure>
    <div class="text-1" style="color: black">
        <h3>
            Providing strong solutions
        </h3>
        <h2>
            Captures what you see
        </h2>
        <p>
            Life looks even better through the enhanced 13MP rear camera. Capture crisp, clear photos with each snap, then switch to the 5MP front camera for video calls. With Galaxy Tab Active3, you can get more of your best shots.
        </p>
    </div>
    <figure>
        <img src="/images/samsung/galaxy-tab-active3/levant-feature-captures-what-you-see-314915732.webp" width="100%" alt="">
    </figure>
    <div class="text-1" style="color: black">
        <h2>
            A glove-ready tablet
        </h2>
        <p>
            No need to take off the gloves. By adjusting the touch sensitivity settings, you can keep your gloves on as you get things done. Set an Active key for quick access to a frequently used app without unlocking, or unlock instantly and securely with Face recognition, while being sure others can't.
        </p>
    </div>
    <figure class="pic-2">
        <img src="/images/samsung/galaxy-tab-active3/levant-feature-a-glove-ready-tablet-314915734.jfif" width="100%" alt="">
    </figure>
    <div class="text-1" style="color: black">
        <h2>
            Enhanced PC-like experience with Samsung DeX
        </h2>
        <p>
            Samsung DeX lets you connect and use two different screens, so you can work more efficiently. Connect the tablet to a monitor and create a report on one screen while analyzing spreadsheets on the other, or connect wirelessly with a smart TV and give impressive sales presentations.
        </p>
    </div>
    <figure class="pic-2">
        <img src="/images/samsung/galaxy-tab-active3/levant-feature-enhanced-pc-like-experience-with-samsung-dex-314915730.jfif" width="100%" alt="">
    </figure>
    <div class="text-1" style="color: black">
        <h2>
            Security at every level protects what’s yours
        </h2>
        <p>
            Samsung Knox delivers defense-grade security. Your private data is protected from malware and malicious attacks by leveraging the hardware-backed and multi-layered Knox security platform.
        </p>
    </div>
    <figure>
        <img src="/images/samsung/galaxy-tab-active3/levant-feature-security-at-every-level-protects-what-s-yours-314915726.webp" width="100%" alt="">
    </figure>
</section>






@endsection


@section('script')

<script src="{{URL::asset('/js/page-js/samsung/galaxy-tab-active3/main.js')}}"></script>

@endsection
