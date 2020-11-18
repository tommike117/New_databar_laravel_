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
        </picture>
    </section>
    <section class="section-2">

    </section>
    {{-- <section class="section-7">
        <div class="row body-7">
            <div class="col-lg-3">
                <div class="box-7">
                    <div class="text-7">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/42_icon-01.png" width="45%" alt="">
                        </figure>
                        <h2>
                            MOBILE DEVICE MANAGEMENT
                        </h2>
                        <p>
                            Secure, monitor, and manage all your endpoints using 42Gears’ award-winning mobile device management platform.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box-7">
                    <div class="text-7">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/42_icon-02.png" width="45%" alt="">
                        </figure>
                        <h2>
                            RUGGED DEVICE MANAGEMENT
                        </h2>
                        <p>
                            42Gears’ MDM solution brings the promise of data and device security to the table, even in harsh work environments.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box-7">
                    <div class="text-7">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/42_icon-03.png" width="45%" alt="">
                        </figure>
                        <h2>
                            VR DEVICE
                            MANAGEMENT
                        </h2>
                        <p>
                            42Gears’ VR device management solution eases VR adoption while ensuring data and device security.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box-7">
                    <div class="text-7">
                        <figure>
                            <img src="/images/new-website/products/42gears/web/42_icon-04.png" width="45%" alt="">
                        </figure>
                        <h2>
                            THINGS
                            MANAGEMENT
                        </h2>
                        <p>
                            42Gears Things Management Technology makes it possible to manage and monitor devices that do not run any OS.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

</div>
<section>
    @include('includes/footer')
</section>

@endsection



@section('script')


@endsection
