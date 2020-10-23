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
            <h2 class="product-type">Thin Military OEM Keyboard with Touchpad</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s TMLT-890-TP-OEM keyboard packs full military specifications into an extremely thin, 0.41″ depth, making it ideal for rugged applications.</p>
            <p class="p-description">Designed to meet MIL-461G standards, the TMLT-890-OEM has excellent performance for conducted and radiated emissions, including 50 volts/meter. It also is designed to meet MIL-STD-810F, and is resistant to sand, debris and liquids.</p>
            <p class="p-description">The TMLT-890-TP-OEM features dual pointing deviceds – an integrated FSR pointing device and a touchpad. The keyboard also has adjustable green LED backlighting, with optional NVIS Green B.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Designed to meet MIL-STD-461G Specifications</li>    
                    <li class="feature-li mb-2">Integrated FSR pointing device</li>
                    <li class="feature-li mb-2">Integrated Touchpad</li>
                    <li class="feature-li mb-2">Optional NVIS Compliant – Green B backlighting</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection