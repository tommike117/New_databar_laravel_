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
                        <h1 class="m-auto" style="font-size:15px;">IK-TR-911-FSR-RED</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/fleet/IK-TR-911-FSR-RED.jpg')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">IK-TR-911-FSR-RED</h1>
            <h2 class="product-type">IK-TR-911-FSR-RED Full Travel Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Designed to fit into existing mobile mounting systems, iKey®’s Transformer Keyboard has built-in high-speed USB hubs and modular options to accommodate multiple custom configurations, making this the ideal all-in-one, on-the-go solution. These rugged keyboards are built for use in EMS, police and service vehicles. The Transformer Keyboard is also fully sealed and is resistant to dirt, dust and spills that can ruin most keyboards. Red LED Backlighting.</p>
            <p class="p-description">The mobile, full travel keyboard by iKey® with Force Sensing Resistor(FSR) is made of industrial silicone rubber.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">88-Key Functionality</li>    
                    <li class="feature-li mb-2">Integrated Red LED Backlighting</li>    
                    <li class="feature-li mb-2">Integrated Touchpad</li>    
                    <li class="feature-li mb-2">Mobile Mounting Holes</li> 
                    <li class="feature-li mb-2">One-Touch Emergency Key</li> 
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection