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
            <h2 class="product-type">Rugged Wearable Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s rugged AK-39 keyboard is designed to be worn on the arm, providing a simple, compact data-input solution that does not restrict the user’s arm movements. It is designed to meet MIL-461 standards and is intended for use in very harsh electro magnetic interference (EMI) environments. The AK-39’s small-footprint design features essential components for military and public safety applications, including an integrated Force Sensing Resistor (FSR) pointing device with left- and right-click functionality. The AK-39 also features six levels (including off) of adjustable green LED backlighting that is also available in a night vision (NVIS) compatible configuration. Designed with gloved users in mind, the AK-39’s snap-on faceplate eliminates accidental key strokes and can be easily removed to clean the pad.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Integrated pointing device</li>    
                    <li class="feature-li mb-2">Optional NVIS Compliant – Green B backlighting</li>
                    <li class="feature-li mb-2">USB cable configuration</li>
                    <li class="feature-li mb-2">Wearable design</li>
                    <li class="feature-li mb-2">Green Backlight</li>
                    <li class="feature-li mb-2">NumLock Access</li>
                    <li class="feature-li mb-2">Snap-On Faceplate</li>
                    <li class="feature-li mb-2">High EMI Standards</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection