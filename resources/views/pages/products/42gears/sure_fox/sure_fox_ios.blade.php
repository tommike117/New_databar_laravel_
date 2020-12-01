@extends('layouts/main-all-products')

@section('title', '42Gears | SureLock Android | Mobile Device Manegement | Unified Enterprise Management | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')



@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/42gears/sure_fox_ios.css')}}">
@endsection




@section('content')
<div class="bg-body">
    <section class="section-1">
        <div class="bg-1">
            <div class="text-sup-1">
                <h2 class="head-1">
                    SureFox for iOS
                </h2>
                <h3>
                    CONVERT iOS DEVICES INTO INTERNET KIOSKS
                </h3>
                <p>
                    ■ Restrict users to only selected websites <br>
                    ■ Run iOS secure browser in kiosk mode <br>
                    ■ Customizable home screen <br>
                    ■ Password protect browser settings <br>
                    ■ Enterprise distribution
                </p>
            </div>
            <div class="button">
                <a href="/contact">
                    <button class="btn btn-banner">Contact now</button>
                </a>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="text-2">
            <h2>
                SureFox Basic Features
            </h2>
            <p>
                ■ Restrict access to selected websites <br>
                ■ Allow local webpages and files <br>
                ■ Customizable home screen <br>
                ■ Password protect browser settings <br>
                ■ Full screen browsing <br>
                ■ Set browser homepage <br>
                ■ Auto redirect due to user inactivity <br>
                ■ Motion detection <br>
                ■ Custom JavaScript API<br>
                ■ Export and import settings through Cloud
            </p>
        </div>
        <div class="text-2-2">
            <h2>
                Supported iOS Versions
            </h2>
        </div>
            <div class="row container-2">
                <div class="col-android ">

                </div>
                <div class="col-android ">

                </div>
                <div class="col-android ">

                </div>
                <div class="col-android">
                    <div class="box">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/SureFox/icon/icon_fox-04.png" class="icon-sec2" width="80%" alt="Android version">
                        </figure>
                        <h2>IOS 8 & Later</h2>
                    </div>
                </div>
                <div class="col-android">

                </div>
                <div class="col-android ">

                </div>
            </div>
    </section>

    <section class="section-3">
        <a href="/products">Products</a><span style="color: #707070af;"> > </span>
        <a href="/products/42gears">42Gears</a><span style="color: #707070af;"> > </span>
        <a href="/products/42gears/sure_fox">Sure Fox</a><span style="color: #707070af;"> > </span>
        <a href="#" style="font-weight: 600; color: #707070;">IOS</a>
    </section>
</div>
<section>
    @include('includes/footer')
</section>

@endsection



@section('script')


@endsection
