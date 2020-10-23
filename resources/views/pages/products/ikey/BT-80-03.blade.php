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
                        <h1 class="m-auto" style="font-size:15px;">BT-80-03</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/fleet/BT-80-03.jpg')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">BT-80-03</h1>
            <h2 class="product-type">Rechargeable Bluetooth<sup>®</sup> Keyboard for Windows/Android</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®  introduces the BT-80-03, the first rechargeable Bluetooth®-compatible rugged keyboard designed for use with any Android, Windows tablet or iPad. This compact keyboard is less than an inch thick making it the perfect rugged solution to pair with a tablet. The BT-80-03 has also been designed with ease of use in mind. Boasting a one-touch pairing process, the BT-80-03 can be paired to your device in less than 30 seconds. Integrated red backlighting makes the BT-80-03 the ideal solution in low-light environments and also features an automatic shut-off after 10 seconds of inactivity to preserve battery life. The BT-80-03 also comes standard with a VESA mounting pattern and optional magnetic mount making it ideal for in-vehicle use and medical cart solutions.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Fully Sealed, IP67 Case</li>    
                    <li class="feature-li mb-2">Bluetooth® wireless technology</li>    
                    <li class="feature-li mb-2">Red LED Backlit Keys</li>    
                    <li class="feature-li mb-2">VESA Mounting Pattern</li>      
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection