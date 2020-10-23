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
                    <li class="breadcrumb-item"><a href="{{ route('ecom-ex.index') }}">iKey</a></li>
                    <li class="breadcrumb-item"><a href="{{url()->previous()}}">{{ikey_breadcrumb()}}</a></li>
                    <li class="breadcrumb-item d-flex active" aria-current="page">
                        <h1 class="m-auto" style="font-size:15px;">SLK-101-FL</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/medical/SLK-101-FL.png')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">SLK-101-FL</h1>
            <h2 class="product-type">Medical Rugged Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Designed for the infection control challenges of today’s healthcare environment, the SlimKey-MD® SLK-101-FL medical keyboard is ideal for use in an array of clinical settings. Featuring a sealed industrial silicone keypad and low-profile keys, the SlimKey-MD SLK-101-FL is easily disinfected using any hospital-approved cleaning agent. For working in low-light areas, SlimKey-MD series of keyboards come with the added convenience of backlit keys. Other standard features include 12 function keys and an oversized numeric pad. These keyboards are compatible with germicidal sprays and wipes, making them ideal for use in ORs, patient rooms, on carts and at nursing stations.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">Cleanable</li>    
                    <li class="feature-li mb-2">Liquidproof Design</li>    
                    <li class="feature-li mb-2">Integrated Backlighting</li>    
                    <li class="feature-li mb-2">Low-profile keys for easy cleaning</li>    
                    <li class="feature-li mb-2">USB configurations available</li>  
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection