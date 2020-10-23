@extends('layouts/main-all-products')

{{-- Title Website --}}
@section('title','Ram Mounts-Phone Mounts | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/ram-mounts/phone-mounts.css')}}">
@endsection

{{-- Body HTML --}}
@section('content')
<div class="bg-section-1">
    <section class="section-1">

        <div class="text-section-1">
            <h1>
                Phone Mounts
            </h1>
        </div>
        <figure class="pic-sec-1">
            <img src="/images/new-website/products/ram-mount/banner 1920-05.jpg"class="desktop-only" alt="Banner" width="100%">
            <img src="/images/new-website/products/ram-mount/banner750-06.jpg"class="mobile-only" alt="Banner" width="100%">
        </figure>
        <div class="text-product tap-mobile-none">
            <a class="hover-sec-1" href="/products/ram-mounts/motocyle" >Motocyle</a>
            <a class="hover-sec-2" href="/products/ram-mounts/tablet-mounts" >Tablet Mounts</a>
            <a class="hover-sec-2" style="font-weight: 600">Phone Mounts</a>
        </div>
        <p class="text-all-product">
            All Phone Mounts
        </p>
    </section>
    <section class="section-2" style="display: flex">
        <div class="row">
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="/images/new-website/products/ram-mount/RAM-B-149Z-A-GOP1U.jpg" width="100%" alt="product">
                </figure>
                <h2 class="flex-100">
                    HX.xxxxxxxxx
                </h2>
                <div class="flex-100">
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-2">View More</button>
                    </a>
                </div>
            </div>
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="" alt="">
                </figure>
                <h2 class="flex-100">
                    HX.xxxxxxxxx
                </h2>
                <div class="flex-100">
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-2">View More</button>
                    </a>
                </div>
            </div>
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="" alt="">
                </figure>
                <h2 class="flex-100">
                    HX.xxxxxxxxx
                </h2>
                <div class="flex-100">
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-2">View More</button>
                    </a>
                </div>
            </div>
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="" alt="">
                </figure>
                <h2 class="flex-100">
                    HX.xxxxxxxxx
                </h2>
                <div class="flex-100">
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-2">View More</button>
                    </a>
                </div>
            </div>
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="" alt="">
                </figure>
                <h2 class="flex-100">
                    HX.xxxxxxxxx
                </h2>
                <div class="flex-100">
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-2">View More</button>
                    </a>
                </div>
            </div>
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="" alt="">
                </figure>
                <h2 class="flex-100">
                    HX.xxxxxxxxx
                </h2>
                <div class="flex-100">
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-2">View More</button>
                    </a>
                </div>
            </div>
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="" alt="">
                </figure>
                <h2 class="flex-100">
                    HX.xxxxxxxxx
                </h2>
                <div class="flex-100">
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-2">View More</button>
                    </a>
                </div>
            </div>
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="" alt="">
                </figure>
                <h2 class="flex-100">
                    HX.xxxxxxxxx
                </h2>
                <div class="flex-100">
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-2">View More</button>
                    </a>
                </div>
            </div>
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="" alt="">
                </figure>
                <h2 class="flex-100">
                    HX.xxxxxxxxx
                </h2>
                <div class="flex-100">
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-2">View More</button>
                    </a>
                </div>
            </div>
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="" alt="">
                </figure>
                <h2 class="flex-100">
                    HX.xxxxxxxxx
                </h2>
                <div class="flex-100">
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-2">View More</button>
                    </a>
                </div>
            </div>
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="" alt="">
                </figure>
                <h2 class="flex-100">
                    HX.xxxxxxxxx
                </h2>
                <div class="flex-100">
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-2">View More</button>
                    </a>
                </div>
            </div>
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="" alt="">
                </figure>
                <h2 class="flex-100">
                    HX.xxxxxxxxx
                </h2>
                <div class="flex-100">
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-2">View More</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-3">
       <a href="/products">Products</a> >
       <a href="/products/koamtac">Koamtac</a> >
       <a href="#" style="font-weight: 600;">Pocket Barcode Scanner</a>
    </section>
</div>






<section>
    @include('includes/footer')
</section>

@endsection


@section('script')



@endsection
