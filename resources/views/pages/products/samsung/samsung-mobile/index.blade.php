@extends('layouts/main-all-products')

@section('title', 'Samsung Smartphones | DATABAR COMPANY LIMITED')


@section('link')
{{-- <link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/knox/style.css')}}"> --}}
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/smartphone/style.css')}}">


@endsection




@section('content')

<div class="bg-all">
    <section style="width: 100%">
        <div class="text-all-samsung tablet-mobile">
            <p>Smartphone</p>
            <a href="/products/samsung/tablets" style="margin: 0px 7%;">Tablet</a>
            <a href="/products/samsung/knox">Samsung Knox</a>
        </div>
        <div class="section-1">
            <h1>Samsung Smartphone</h1>
            <figure style="margin: 0">
                <img class="banner-desktop" src="/images/new-website/products/samsung/smartphones/ban-sam-phone-desk.jpg" alt="Banner-Smartphones" width="100%">
                <img class="banner-mobile" src="/images/new-website/products/samsung/smartphones/ban-sam-phone-mob.jpg" alt="Banner-Smartphones" width="100%">
            </figure>

            <div class="text-all-samsung desktop-none">
                <p>Smartphone</p>
                <a href="/products/samsung/tablets" style="margin: 0px 7%;">Tablet</a>
                <a href="/products/samsung/knox">Samsung Knox</a>
            </div>
        </div>

    </section>

    <div class="text-center show-products">
        <h3 style="font-weight: 300; font-size:25px;">All Smartphones</h3>
    </div>

    <section>
        <div class="set-block-product-samsung-smartphone">
            @foreach ($data as $item)
                @if ($item->Plist_Status == "1")
                <div class="block-product-samsung-smartphone">
                    <figure>
                        <img src="{{URL::asset('images/database/samsung/mobile/'.$item->Plist_Image)}}"
                        alt="{{$item->Plist_Name}}" title="{{$item->Plist_Name}}" style="width:100%; padding:10%;">
                    </figure>
                    <div class="text-center">
                        <h3 style="color:#6b6b6b;font-family: poppins; font-size: 13px;">
                            {{$item->Plist_Subtitle}}
                        </h3>
                    </div>
                    <div class="row text-center">
                        <div class="col-xs-12 col-sm-12 col-md-12" >
                            <h2 class="product_name mb-2" for="" style="margin:5px auto;font-size: 16px;">
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
    <a href="#" style="font-weight: 600;">Smartphones</a>
 </section>

<section>
    @include('includes/footer')
</section>



@endsection





@section('script')

@endsection
