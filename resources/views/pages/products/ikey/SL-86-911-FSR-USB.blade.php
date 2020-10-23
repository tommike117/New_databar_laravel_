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
                        <h1 class="m-auto" style="font-size:15px;">SL-86-911-FSR-USB</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/fleet/SL-86-911-FSR-USB.jpg')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">SL-86-911-FSR-USB</h1>
            <h2 class="product-type">Industrial Keyboard with Emergency Key</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The SL-86-911-FSR-USB by iKey® offers a rugged keyboard and a rugged computer pointing device in one compact package. Ideal for public safety applications, it features a specially designed emergency key and red LED backlit keys. The SL-86-911-FSR-USB integrates the Force Sensing Resistor, an upgraded pointing device that offers improved sensitivity and increased durability. Featuring a compact design with mounting holes, the SL-86-911-FSR-USB fits securely in a vehicle’s console to serve effectively as a mobile application. It boasts a completely sealed and ruggedized construction that allows it to meet NEMA 4X specifications, ensuring that this keyboard is sealed against the elements or unwanted spills.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">86-Key Functionality</li>    
                    <li class="feature-li mb-2">PS/2 and USB or configurations available</li>    
                    <li class="feature-li mb-2">Integrated Backlighting</li>      
                    <li class="feature-li mb-2">Integrated Force Sensing Resistor Pointing Device</li>      
                    <li class="feature-li mb-2">One-Touch Emergency Key</li>      
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection