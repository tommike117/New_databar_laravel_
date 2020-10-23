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
            <h2 class="product-type">Military Keyboard with Adjustable Backlighting</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The SLK-880-FSR-OEM from iKey® exceeds NEMA 4X requirements when properly installed and is fully-submersible, meeting IP68 specifications. Unique features of the SLK-880-FSR-OEM include a conductive plastic case, adjustable green backlighting that is also available in a night vision (NVIS) compatible configuration, and an integrated Interlink Electronics Force Sensing Resistor (FSR) pointing device.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Adjustable backlighting</li>    
                    <li class="feature-li mb-2">Integrated FSR pointing device</li>
                    <li class="feature-li mb-2">Optional NVIS Compliant – Green B backlighting</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection