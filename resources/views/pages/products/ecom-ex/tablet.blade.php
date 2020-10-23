@extends('layouts/main-all-products')

{{-- Title Website --}}
@section('title','Ecom-ex | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/ecom-ex/tablet.css')}}">
@endsection

{{-- Body HTML --}}
@section('content')
<div class="bg-section-1">
    <section class="section-1">
        <div class="text-product desktop-none">
            <a class="hover-sec-1" style="font-weight: 600">Tablet for hazardous areas</a>
            <a class="hover-sec-2" href="/products/bixolon/mobile-printer">Smartphones protection</a>
        </div>
        <div class="text-section-1">
            <h1>
                Tablet for hazardous areas
            </h1>
        </div>
        <figure class="pic-sec-1">
            <img src="/images/new-website/products/ecom-ex/banner-01.jpg" alt="Banner" width="100%">
        </figure>
        <div class="text-product tap-mobile-none">
            <a class="hover-sec-1" style="font-weight: 600">Tablet for hazardous areas</a>
            <a class="hover-sec-2" href="/products/ecom-ex/smartphone">Smartphones protection</a>
        </div>
        <p class="text-all-product">
            All Tablet
        </p>
    </section>
    <section class="section-2" style="display: flex">
        <div class="row">
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="/images/new-website/products/ecom-ex/csm_pad-ex_p8_teaser_cont_3a50bdc8c3.png" width="100%" alt="product">
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
       <a href="/products/ecom-ex">Ecom-ex</a> >
       <a href="#" style="font-weight: 600;">Tablet for hazardous areas</a>
    </section>
</div>






<section>
    @include('includes/footer')
</section>

@endsection


@section('script')



@endsection
