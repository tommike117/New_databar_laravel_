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
            <h2 class="product-type">OEM Backlit Numeric Pad</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The SL-18-OEM is an 18-key OEM numeric keypad from iKey® that is designed for easy integration into any system. The SL-18-OEM has integrated green LED backlighting, and is available with customizable LED color options. When properly installed, the SL-18-OEM is NEMA 4X-compliant and resistant to dirt, debris and liquids.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Integrated Backlighting</li>    
                    <li class="feature-li mb-2">Meets NEMA 4X (IP65) Specifications</li>    
                    <li class="feature-li mb-2">Small Footprint Design</li>   
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection