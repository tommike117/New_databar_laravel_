@extends('layouts/main-all-products')

{{-- Title Website --}}
@section('title','Sam4s-Handheld | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/sam4s/hand-held.css')}}">
@endsection

{{-- Body HTML --}}
@section('content')
<div class="bg-section-1">
    <section class="section-1">

        <div class="text-section-1">
            <h1>
                Handheld Computers
            </h1>
        </div>
        <figure class="pic-sec-1">
            <img src="/images/new-website/products/sam4s/sam_banner-02.jpg"class="desktop-only" alt="Banner" width="100%">
            <img src="/images/new-website/products/sam4s/sam_banner-750-2.jpg"class="mobile-only" alt="Banner" width="100%">
        </figure>
        <div class="text-product tap-mobile-none">
            <a class="hover-sec-1" href="/products/sam4s/receipt-printers" >Receipt Printers</a>
            <a class="hover-sec-2" style="font-weight: 600">Handheld Computers</a>
        </div>
        <p class="text-all-product">
            All Handheld Computers
        </p>
    </section>
    <section class="section-2" style="display: flex">
        <div class="row">
            <div class="flex-25 box-product">
                <figure class="flex-100">
                    <img src="/images/new-website/products/sam4s/20171031173649_pdt.jpg" width="100%" alt="product">
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
       <a href="/products/sam4s">sam4s</a> >
       <a href="#" style="font-weight: 600;">Handheld Computers</a>
    </section>
</div>






<section>
    @include('includes/footer')
</section>

@endsection


@section('script')



@endsection