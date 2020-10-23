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
            <h2 class="product-type">Thin Military OEM Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s TMLT-890-OEM keyboard packs full military specifications into an extremely thin, 0.54″ depth, making it ideal for rugged applications.</p>
            <p class="p-description">Designed to meet MIL-461G standards, the TMLT-890-OEM has excellent performance for conducted and radiated emissions, including RS103 and 200 volts/meter. It also meets 25 kV ESD requirements.</p>
            <p class="p-description">The TMLT-890-OEM’s top-mounted assembly eliminates the need to dismantle laptop components to reach the keyboard. In addition, it features an integrated FSR pointing device and adjustable green LED backlighting, with optional NVIS Green B.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Integrated FSR pointing device</li>    
                    <li class="feature-li mb-2">Optional NVIS Compliant – Green B backlighting</li>
                    <li class="feature-li mb-2">Designed to meet MIL-STD-461G Specifications</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection