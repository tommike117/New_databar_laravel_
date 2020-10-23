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
                        <h1 class="m-auto" style="font-size:15px;">IK-77-FSR</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/fleet/IK-77-FSR.jpg')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">IK-77-FSR</h1>
            <h2 class="product-type">Compact and Mobile Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s IK-77-FSR is a compact and mobile keyboard that is designed for efficient use in military applications, warehouse and factory environments. The IK-77-FSR can also be mounted into forklifts or other work vehicles. Like other keyboards in iKey’s line, it is built with an industrial silicone rubber body and meets NEMA 4X specifications. This means it is resistant to shock, vibration, extreme temperatures, and humidity. This keyboard features an upgraded force sensing resistor pointing device that offers improved sensitivity and increased durability for easy navigation on your device.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Red LED backlight</li>    
                    <li class="feature-li mb-2">Industrial silicone rubber</li>    
                    <li class="feature-li mb-2">12 function keys</li>   
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection