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
                        <h1 class="m-auto" style="font-size:15px;">IK-18-USB</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/fleet/IK-18-USB.jpg')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">IK-77-FSR</h1>
            <h2 class="product-type">Mobile Numeric Pad/ Number Pad by iKey<sup>®</sup></h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Ideal for high volume number entry, warehouse shipping and receiving, entryway number pad, and more.  This rugged numeric pad will withstand harsh environments, heavy use and may be the last number pad you ever need to purchase. Mountable on forklift as well.  Ideal for high volume number entry.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">ABS polycarbonate</li>    
                    <li class="feature-li mb-2">Features Built-In Mounting Holes : 1.5″ x 1.188″ (AMPS), 8-32 x 1/4</li> 
                    <li class="feature-li mb-2">USB connection</li>   
                    <li class="feature-li mb-2">Black</li>   
                    <li class="feature-li mb-2">Built to IP 65 standards (water -resistant)</li>   
                    <li class="feature-li mb-2">Backlit (green)</li>   
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection