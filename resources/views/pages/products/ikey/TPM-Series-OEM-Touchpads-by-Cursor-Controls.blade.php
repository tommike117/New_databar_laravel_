{{-- Include  --}}
@extends('layouts/main')



{{-- Title Website --}}
@section('title', "{$name} Rugged Keyboard | iKey | DATABAR COMPANY LIMITED")




{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="{{URL::asset('css/page-style/ikey/product-detail/main.css')}}">

@endsection

{{-- Body HTML --}}

@section('content')

<div class="container-fluid p-lg-5">
    <div class="row m-xs-auto">
        <div class="flex-half image">
            <nav aria-label="breadcrumb" id="breadcrumb">
                <ol class="breadcrumb" style="background:transparent;">
                    <li class="breadcrumb-item"><a href="{{ route('ikey.index') }}">iKey</a></li>
                    <li class="breadcrumb-item"><a href="{{url()->previous()}}">{{ikey_breadcrumb()}}</a></li>
                    <li class="breadcrumb-item d-flex active" aria-current="page">
                        <h1 class="m-auto" style="font-size:15px;">{{$name}}</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/military/'.$name.".jpg")}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">{{$name}}</h1>
            <h2 class="product-type">TPM Series Touchpad</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">As part of their ever expanding range of product offerings, Cursor Controls are delighted to introduce a new range of advanced rugged touchpad solutions which provide smooth and precise cursor control using the latest capacitive technology. With no moving parts, these solid-state pointing devices are ideal for environments where contamination is commonplace. The touchpads are available in a variety of mounting styles, electrical outputs, overlay options, and custom features. Ask iKey® for the right Cursor Controls solution for your project, and for pricing and availability.  Please see all the photos for desktop and panel mount options.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Solid state sensing technology – capacitive touch sensing tracking engine</li>    
                    <li class="feature-li mb-2">Glass or polyester overlays available</li>
                    <li class="feature-li mb-2">Multi-finger gesture support</li>
                    <li class="feature-li mb-2">Output: USB & PS/2 (auto-select)</li>
                    <li class="feature-li mb-2">Left, middle & right switch input feature</li>
                    <li class="feature-li mb-2">Customer defined sealing</li>
                    <li class="feature-li mb-2">Custom connector options available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection