@extends('layouts/main-all-products')

{{-- Title Website --}}
@section('title','KOAMTAC-Accessories | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/koamtac/accessories.css')}}">
@endsection

{{-- Body HTML --}}
@section('content')
<div class="bg-section-1">
    <section class="section-1">
        {{-- <div class="text-product desktop-none">
            <a class="hover-sec-1" href="/products/koamtac/pocket-scanner">Pocket Barcode Scanner</a>
            <a class="hover-sec-2" href="/products/koamtac/barcode-smartsled" >Barcode SmartSled</a>
            <a class="hover-sec-2" style="font-weight: 600" >Accessories</a>
        </div> --}}
        <div class="text-section-1">
            <h1>
                Accessories
            </h1>
        </div>
        <figure class="pic-sec-1">
            <img src="/images/new-website/products/koamtac/banner3-07.jpg"class="desktop-only" alt="Banner" width="100%">
            <img src="/images/new-website/products/koamtac/banner3-08.jpg"class="mobile-only" alt="Banner" width="100%">
        </figure>
        <div class="text-product ">
            <a class="hover-sec-1" href="/products/koamtac/pocket-scanner">Pocket Barcode Scanner</a>
            <a class="hover-sec-2" href="/products/koamtac/barcode-smartsled" >Barcode SmartSled</a>
            <a class="hover-sec-2" style="font-weight: 600" >Accessories</a>
        </div>
        <p class="text-all-product">
            All Accessories
        </p>
    </section>
    <section class="section-2" style="display: flex">
        <div class="row">
            @foreach ($data as $item)
                <div class="flex-25 box-product">
                    <figure class="flex-100" style="text-align: center; padding-top:15%;font-size: 16px;">
                        <img src="/images/database/{{$item->Plist_Image}}" width="75%" alt="product">
                    </figure>
                    <h2 class="flex-100" style="font-size: 16px;!important">
                        {{$item->Plist_Name}}
                    </h2>
                    <div class="flex-100">
                        <a href="mobile/{{$item->Plist_Url}}">
                            <button class="btn btn-banner button-sec-2">View More</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="section-3">
       <a href="/products">Products</a> >
       <a href="/products/koamtac">Koamtac</a> >
       <a href="#" style="font-weight: 600;">Accessories</a>
    </section>
</div>






<section>
    @include('includes/footer')
</section>

@endsection


@section('script')



@endsection
