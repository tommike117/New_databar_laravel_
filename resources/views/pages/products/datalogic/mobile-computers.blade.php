@extends('layouts/main-all-products')

{{-- Title Website --}}
@section('title','Mobile Computers | Datalogic | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/datalogic/mobile-computers.css')}}">
@endsection

{{-- Body HTML --}}
@section('content')
<div class="bg-section-1">
    <section class="section-1">
        <div class="text-product desktop-none">
            <a class="hover-sec-1" href="/products/datalogic/barcode-scanners">Barcode Scanners</a>
            <a style="font-weight: 600" >Mobile Computers</a>
            <a class="hover-sec-2" href="/products/datalogic/automation">Automation</a>
        </div>
        <div class="text-section-1">
            <h1>
                Datalogic Mobile Computers
            </h1>
        </div>
        <figure class="pic-sec-1">
            <img src="/images/new-website/products/datalogic/banner-2.jpg" alt="Banner" width="100%">
        </figure>
        <div class="text-product tap-mobile-none">
            <a class="hover-sec-1" href="/products/datalogic/barcode-scanners">Barcode Scanners</a>
            <a style="font-weight: 600">Mobile Computers</a>
            <a class="hover-sec-2" href="/products/datalogic/automation">Automation</a>
        </div>
        <p class="text-all-product">
            All Mobile Computers
        </p>
    </section>
    <section class="section-2" style="display: flex">
        <div class="row">
            @foreach ($data as $item)
                <div class="flex-25 box-product">
                    <figure class="flex-100" style="text-align: center; padding-top:15%;">
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
       <a href="/products/datalogic">Datalogic</a> >
       <a href="#" style="font-weight: 600;">Mobile Computers</a>
    </section>
</div>






<section>
    @include('includes/footer')
</section>

@endsection


@section('script')



@endsection
