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
            <h2 class="product-type">SkinnyBoard™ Sealed Keyboard with Touchpad</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The SB-97-TP, part of iKey®’s SkinnyBoard® line of thin profile keyboards, is a completely washable keyboard with the added convenience of a built-in touchpad and backlit keys. Built to be fully sealed and easy to clean, the SB-97-TP is compatible with hospital-grade disinfectants, and is resistant to liquids and debris.</p>
            <p class="p-description">For added durability, the SB-97-TP is built into a rugged ABS polycarbonate case. It features green LED backlighting for use in low-light environments, and boasts an integrated touchpad that is designed with gloved-use in mind. Its slim features make it ideal for use on carts, wall mounts and other areas where space is at a premium.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">Green Backlit Keys</li>
                    <li class="feature-li mb-2">USB and PS/2 configurations available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection