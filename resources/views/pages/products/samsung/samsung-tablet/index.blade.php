@extends('layouts/main-all-products')

@section('title', 'Samsung Tablets | DATABAR COMPANY LIMITED')


@section('link')

<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/tablets/style.css')}}">


@endsection




@section('content')

<div class="bg-all">
    <section style="width: 100%; position: relative;">
        <div class="text-all-samsung tablet-mobile">
            <a href="/products/samsung/smartphones">Smartphone</a>
            <p style="margin: 0px 7%;">Tablet</p>
            <a href="/products/samsung/knox">Samsung Knox</a>
        </div>
        <div class="section-1">
            <h1>Samsung Tablets</h1>
            <figure style="margin: 0">
                <img class="banner-desktop" src="/images/new-website/products/samsung/tablets/banner-1920x1080-02.jpg" alt="Banner-Smartphones" width="100%">
                <img class="banner-mobile" src="/images/new-website/products/samsung/tablets/banner-623x343-2.jpg" alt="Banner-Smartphones" width="100%">
            </figure>

            <div class="text-all-samsung desktop-none">
                <a href="/products/samsung/smartphones">Smartphone</a>
                <p style="margin: 0px 7%;margin-bottom: 1rem;">Tablet</p>
                <a href="/products/samsung/knox">Samsung Knox</a>
            </div>
        </div>
        <div class="text-banner">
            <h2>Indroducing the <br> Galaxy Tab S6 Lite</h2>
            <p>With an included S Pen, expansive display, sleek build and up to 13 hours of battery life, the new Galaxy Tab S6 Lite is perfect for doing more on the go.</p>
        </div>
    </section>

    <div class="text-center show-products">
        <h3 style="font-weight: 300;font-size:25px;">All Tablets</h3>
    </div>

    <section>
        <div class="set-block-product-samsung-smartphone">
            @foreach ($data as $item)
                @if ($item->Plist_Status == "1")
                <div class="block-product-samsung-smartphone">
                    <figure class="block_product_images">
                        <img src="{{URL::asset('images/database/samsung/mobile/'.$item->Plist_Image)}}"
                        alt="{{$item->Plist_Name}}" title="{{$item->Plist_Name}}" style="width:100%; padding:10%;">
                    </figure>
                    <div class="text-center">
                        <h3 style="color:#6b6b6b;font-family: poppins; font-size: 14px;">
                            {{$item->Plist_Subtitle}}
                        </h3>
                    </div>
                    <div class="row text-center">
                        <div class="col-xs-12 col-sm-12 col-md-12" >
                            <h2 class="product_name mb-2" for="" style="margin:5px auto;font-size: 18px;">
                                {{$item->Plist_Name}}
                            </h2>
                        </div>
                    </div>
                    <div class="text-center" style="margin-top: 10%">
                        <a href="#">
                            <button class="btn btn-banner">View more</button>
                        </a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </section>
</div>


<section class="section-3">
    <a href="/products">Products</a><span style="padding: 0 7px"> > </span>
    <a href="/products/samsung">Samsung</a><span style="padding: 0 7px"> > </span>
    <a href="#" style="font-weight: 600;">Tablets</a>
 </section>

<section>
    @include('includes/footer')
</section>



@endsection





@section('script')

@endsection
