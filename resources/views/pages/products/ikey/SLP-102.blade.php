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
            <img src="{{URL::asset('images/ikey/industrial/'.$name.".jpg")}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">{{$name}}</h1>
            <h2 class="product-type">Panel Mount Keyboard with FSR and Backlighting</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s SlimKey® SLP-102 panel mount keyboard provides full-size versatility in a rugged, compact design with the added convenience of an integrated Force Sensing Resistor.  It  features red LED backlighting for easy use in areas with minimal lighting. When properly installed, the SlimKey® SLP-102 is engineered for NEMA 4X protection against dust, water and corrosive liquids. It is designed for easy integration into workstations, kiosks and industrial environments. The large numeric pad on the SLP-102 allows for easy data entry, while the robust polycarbonate case is durable in the roughest of environments.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">ABS Polycarbonate Frame</li>    
                    <li class="feature-li mb-2">Cleanable, Liquidproof Design</li>
                    <li class="feature-li mb-2">Industrial Silicone Rubber Keypad</li>
                    <li class="feature-li mb-2">Integrated FSR Pointing Device</li>
                    <li class="feature-li mb-2">PS/2 or USB configurations available</li>
                    <li class="feature-li mb-2">Red Backlit Keys</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection