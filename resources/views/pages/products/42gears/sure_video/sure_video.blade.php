@extends('layouts/main-all-products')

@section('title', '42Gears | SureVideo | Mobile Device Manegement | Unified Enterprise Management | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')



@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/42gears/sure_video.css')}}">
@endsection




@section('content')
<div class="bg-body">
    <section class="section-1">
        <div class="bg-1">
            <div class="text-sup-1">
                <h2 class="head-1">
                    SureVideo Digital <br>
                    Signage Solution
                </h2>
                <p>
                    ■ Efficiently engage audienceEfficiently engage audience <br>
                    ■ Targeted content delivery <br>
                    ■ Reduces Device Maintenance Effort <br>
                    ■ Easy setup <br>
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
                    Digital Signage solutions are useful for delivering
                    targeted content to audiences in order to grab their attention.
                    SureVideo can be used as video looper to display advertisements,
                    news, product information, or anything your business wants to
                    deliver to the customers. Install SureVideo on a tablet or TV stick
                    and configure a playlist that plays videos in a loop. You can easily deploy the playlist on multiple devices and update it at any time.
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
                Digital Signage solutions are useful for delivering
                targeted content to audiences in order to grab their attention.
                SureVideo can be used as video looper to display advertisements,
                news, product information, or anything your business wants to
                deliver to the customers. Install SureVideo on a tablet or TV stick
                and configure a playlist that plays videos in a loop. You can easily deploy the playlist on multiple devices and update it at any time.
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
                    <a href="/products/42gears/sure_video/sure_video_android">
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
                    <a href="/products/42gears/sure_video/sure_video_ios">
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
                    <a href="/products/42gears/sure_video/sure_video_window_mobile">
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
            <a href="#">SureVideo</a><span style="color: #707070af;">  </span>
         </section>
</div>
<section>
    @include('includes/footer')
</section>

@endsection



@section('script')


@endsection
