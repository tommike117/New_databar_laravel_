@extends('layouts/main-all-products')

@section('title', '42Gears | SureLock Android | Mobile Device Manegement | Unified Enterprise Management | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')



@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/42gears/sure_video_window_mobile.css')}}">
@endsection




@section('content')
<div class="bg-body">
    <section class="section-1">
        <div class="bg-1">
            <div class="text-sup-1">
                <h2 class="head-1">
                    SureVideo for Windows
                </h2>
                <h3>
                    DIGITAL SIGNAGE FOR WINDOWS 10 DEVICES
                </h3>
            </div>
            <div class="button">
                <a href="/contact">
                    <button class="btn btn-banner">Contact now</button>
                </a>
            </div>
            <div class=" text-1 mobile-none">
                <h2>
                    Overview
                </h2>
                <p>
                    SureVideo transforms Windows 10 devices to a captivating Digital Signage solution. Convert Windows PCs, laptops, tablets and mobile phones into a professional
                    video-looping solution. Display engaging video content at checkout counters,
                    receptions, trade shows, store fronts or any other high-traffic areas.
                </p>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class=" text-1 desktop-none">
            <h2>
                Overview
            </h2>
            <p>
                ■ Restrict navigation to allowed websites only <br>
                ■ Block access to browser settings e.g. Favorites, Security settings <br>
                ■ Run Internet Explorer in Full-Screen mode <br>
                ■ Disable Address Bar <br>
                ■ Disable Tap and Hold menu <br>
                ■ Disable Keypad
            </p>
        </div>
        <div class="text-2-2">
            <h2>
                Supported Android Versions
            </h2>
        </div>
            <div class="row container-2">
                <div class="col-android">
                    <div class="box">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureVideo/icon/VDO-01.png" class="icon-sec2" width="35%" alt="Android version">
                        </figure>
                        <h2>Multiple Device Support</h2>
                        <p>
                            Supports all Windows 10 devices ; desktops, laptops, tablets and mobile phones
                        </p>
                    </div>
                </div>
                <div class="col-android">
                    <div class="box">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureVideo/icon/VDO-02.png" class="icon-sec2" width="35%" alt="Android version">
                        </figure>
                        <h2>Screensaver Mode</h2>
                        <p>
                            Enable video screensaver on any Windows 10 desktops, laptops and tablets
                        </p>
                    </div>
                </div>
                <div class="col-android">
                    <div class="box">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureVideo/icon/VDO-03.png" class="icon-sec2" width="35%" alt="Android version">
                        </figure>
                        <h2>Remote Configuration</h2>
                        <p>
                            Remotely install SureVideo on devices, configure settings or compile playlist using SureMDM.
                        </p>
                    </div>
                </div>
                <div class="row-2 w-100">
                <div class="col-android">
                        <div class="box">
                            <figure>
                                <img src="/images/new-website/products/42gears/web/SureVideo/icon/VDO-04.png" class="icon-sec2" width="35%" alt="Android version">
                            </figure>
                            <h2>Smart Video Looper</h2>
                            <p>
                                Play selected videos in full screen mode
                            </p>
                        </div>
                    </div>
                    <div class="col-android">
                        <div class="box">
                            <figure>
                                <img src="/images/new-website/products/42gears/web/SureVideo/icon/VDO-05.png" class="icon-sec2" width="35%" alt="Android version">
                            </figure>
                            <h2>Settings File Import and Export</h2>
                            <p>
                                Allows export of settings to File and import from File for easy configuration.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="section-3">
        <a href="/products">Products</a><span style="color: #707070af;"> > </span>
        <a href="/products/42gears">42Gears</a><span style="color: #707070af;"> > </span>
        <a href="/products/42gears/sure_video">SureVideo</a><span style="color: #707070af;"> > </span>
        <a href="#" style="font-weight: 600; color: #707070;">Window Mobile</a>
    </section>
</div>


<section>
    @include('includes/footer')
</section>

@endsection



@section('script')


@endsection
