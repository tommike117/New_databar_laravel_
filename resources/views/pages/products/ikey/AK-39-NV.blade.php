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
            <h2 class="product-type">Wearable Small-Footprint Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s rugged AK-39-NV keyboard is wearable, designed to be worn on the arm, providing a simple, compact data-input solution that does not restrict the user’s arm movements. It is designed to meet MIL-461 standards and is intended for use in very harsh electro magnetic interference (EMI) environments. The AK-39-NV’s small footprint design features essential components for military and public safety applications, including an integrated Force Sensing Resistor (FSR) pointing device with left- and right-click functionality. The AK-39-NV also features six levels (including off) of adjustable green B LED backlighting that is night vision (NVIS) compatible. Designed with gloved users in mind, the AK-39’s snap-on faceplate eliminates accidental key strokes and can be easily removed to clean the pad.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Integrated FSR pointing device</li>    
                    <li class="feature-li mb-2">Wearable design</li>
                    <li class="feature-li mb-2">USB</li>
                    <li class="feature-li mb-2">Force Sensing Resistor</li>
                    <li class="feature-li mb-2">NVIS Green B</li>
                    <li class="feature-li mb-2">NumLock Access</li>
                    <li class="feature-li mb-2">Snap-On Faceplate</li>
                    <li class="feature-li mb-2">High EMI Standards</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection