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
                        <h1 class="m-auto" style="font-size:15px;">SB-87-TP-M</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/fleet/SB-87-TP-M.jpg')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">SB-87-TP-M</h1>
            <h2 class="product-type">SkinnyBoard<sup>®</sup> Mobile Keyboard with Touchpad</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The SkinnyBoard® SB-87-TP-M is one of iKey®’s thinnest keyboards to date. Its sealed, streamlined case and silicone rubber keys meet IP65 standards, making it fully resistant to spills, cleaning procedures and the elements. Built for convenience and versatility in mobile computing applications, the SB-87-TP-M features an integrated touchpad, eliminating the need for an external pointing device. In addition, its red LED backlighting is ideal for nighttime or ambient-light use. An integrated AMPS mounting pattern makes it ideal for in-vehicle mounting.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">Red Backlit Keys</li> 
                    <li class="feature-li mb-2">Integrated Touchpad</li>   
                    <li class="feature-li mb-2">Silicone Rubber</li>   
                    <li class="feature-li mb-2">AMPS Mounting Pattern</li>   
                    <li class="feature-li mb-2">Ultra-Thin Design</li>   
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection