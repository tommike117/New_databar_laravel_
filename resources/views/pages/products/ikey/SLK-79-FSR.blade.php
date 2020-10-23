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
                        <h1 class="m-auto" style="font-size:15px;">SLK-79-FSR</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/fleet/SLK-79-FSR.jpg')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">SLK-79-FSR</h1>
            <h2 class="product-type">Compact Backlit Keyboard with Force Sensing Resistor</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The SLK-79-FSR by iKey® has been designed for those mobile applications when a small-footprint keyboard may come in handy. Featuring an integrated Force Sensing Resistor pointing device with dual left-click capability, the SLK-79-FSR offers a large amount of functionality in an ultra-small package. For working in low-light environments, the SLK-79-FSR features the added convenience of backlit keys. Like other keyboards in the iKey line, the SLK-79-FSR features sealed industrial silicone rubber keypads, as well as robust ABS polycarbonate cases.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">Integrated Backlighting</li>    
                    <li class="feature-li mb-2">Integrated Force Sensing Resistor Pointing Device</li>    
                    <li class="feature-li mb-2">USB and PS/2 configurations available</li> 
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection