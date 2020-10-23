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
            <h2 class="product-type">OEM Keyboard with Integrated Force Sensing Resistor</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The 5K-OEM combines a 113-key keyboard with a Force Sensing Resistor, an upgraded pointing device that offers improved sensitivity and increased durability, into a single, fully integrated unit. Each kit is comprised of an industrial silicone keypad, switch matrix board, keyboard controller and cables. By iKey<sup>®</sup>.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">20 Function Keys</li>
                    <li class="feature-li mb-2">Integrated Force Sensing Resistor Pointing Device</li>
                    <li class="feature-li mb-2">Silicone Rubber</li>
                    <li class="feature-li mb-2">OEM</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection