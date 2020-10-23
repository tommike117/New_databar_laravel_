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
            <h2 class="product-type">OEM Keyboard DU-5K-OEM</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The DU-5K-OEM from iKey® features the newly improved integrated force sensing resistor pointing device, 24 function keys and a 10-key number pad. It is designed to meet NEMA 4X specifications when properly installed. This product is for OEM use.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">Industrial Silicone Rubber Keypad</li>    
                    <li class="feature-li mb-2">Integrated Force Sensing Resistor(FSR) Pointing Device</li>
                    <li class="feature-li mb-2">Meets NEMA 4X (IP65) Specifications</li>
                    <li class="feature-li mb-2">PS/2 or USB configurations available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection