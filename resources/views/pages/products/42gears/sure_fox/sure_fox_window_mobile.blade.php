@extends('layouts/main-all-products')

@section('title', '42Gears | SureLock Android | Mobile Device Manegement | Unified Enterprise Management | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')



@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/42gears/sure_fox_window_mobile.css')}}">
@endsection




@section('content')
<div class="bg-body">
    <section class="section-1">
        <div class="bg-1">
            <div class="text-sup-1">
                <h2 class="head-1">
                    SureFox Windows Mobile & CE
                </h2>
                <h3>
                    Kwindow-ceK MODE WEB BROWSING
                </h3>
                <p>
                    ■ Restrict browsing to only Allowed Websites <br>
                    ■ Password protected Browser Settings <br>
                    ■ Run Internet Explorer in Full-Screen <br>
                    ■ Disable Keypad & Address Bar
                </p>
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
                    ■ Restrict navigation to allowed websites only <br>
                    ■ Block access to browser settings e.g. Favorites, Security settings <br>
                    ■ Run Internet Explorer in Full-Screen mode <br>
                    ■ Disable Address Bar <br>
                    ■ Disable Tap and Hold menu <br>
                    ■ Disable Keypad
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
        <div class="flex-row-reverse row w-100">
            <div class="body-2">
                <div class="text-2">
                    <h2>
                        Using SureFox with SureLock
                    </h2>
                    <p>
                        ■ Make sure SureFox is installed and configured <br>
                        ■ properly on the device <br>
                        ■ Launch SureLock Studio on the desktop <br>
                        ■ Click Add button and specify windowsiexplore.exe as allowed application <br>
                        ■ Make sure that This is a fullscreen application option is also selected
                    </p>
                </div>
            </div>
            <div class="body-2">
                <figure>
                    <img src="/images/new-website/products/42gears/web/SureFox/surelock_studio.png" class="icon-sec1" width="90%" alt="surefox">
                </figure>
            </div>
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
                            <img src="/images/new-website/products/42gears/web/SureFox/icon/icon_fox-03.png" class="icon-sec2" width="45%" alt="Android version">
                        </figure>
                        <h2>Windows Mobile 6.5 (Classic & Professional)</h2>
                    </div>
                </div>
                <div class="col-android">
                    <div class="box">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureFox/icon/icon_fox-03.png" class="icon-sec2" width="45%" alt="Android version">
                        </figure>
                        <h2>Windows Mobile 6.1 (Classic & Professional)3</h2>
                    </div>
                </div>
                <div class="col-android">
                    <div class="box">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureFox/icon/icon_fox-03.png" class="icon-sec2" width="45%" alt="Android version">
                        </figure>
                        <h2>Windows Mobile 6.0 (Classic & Professional)</h2>
                    </div>
                </div>
                <div class="col-android">
                    <div class="box">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureFox/icon/icon_fox-03.png" class="icon-sec2" width="45%" alt="Android version">
                        </figure>
                        <h2>Windows Mobile 5.0 (Pocket PC and Pocket PC Phone Edition)</h2>
                    </div>
                </div>
                <div class="col-android">
                    <div class="box">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureFox/icon/icon_fox-03.png" class="icon-sec2" width="45%" alt="Android version">
                        </figure>
                        <h2>Windows CE 6.0</h2>
                    </div>
                </div>
            </div>
    </section>

    <section class="section-3">
        <a href="/products">Products</a><span style="color: #707070af;"> > </span>
        <a href="/products/42gears">42Gears</a><span style="color: #707070af;"> > </span>
        <a href="/products/42gears/sure_fox">Sure Fox</a><span style="color: #707070af;"> > </span>
        <a href="#" style="font-weight: 600; color: #707070;">Window Mobile</a>
    </section>
</div>


<section>
    @include('includes/footer')
</section>

@endsection



@section('script')


@endsection
