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
                        <h1 class="m-auto" style="font-size:15px;">BT-80-TP</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/fleet/BT-80-TP.jpg')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">BT-80-TP</h1>
            <h2 class="product-type">Bluetooth-Compatible Keyboard with Touchpad</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">This fully-sealed keyboard is designed to meet NEMA 4X  and IP67 specifications, meaning it is resistant to dirt, dust, water, ice and corrosives. Built with an industrial silicone rubber keypad and a rugged ABS polycarbonate case, the BT-80-TP is easy to clean with disinfectants. The compact design and internal Bluetooth® module make the BT-80-TP highly portable. In addition, its red LED backlighting is ideal for nighttime or ambient-light use. It is an ideal fit for mobile, material handling, food and beverage processing, medical, and other environments where rugged flexibility is a necessity.</p>
            <p class="p-description"><strong>Related:</strong>  Dual connectivity  keyboard with Bluetooth and USB connectivity,  BT-870-TP</p>
            <div class="feature d-none">
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