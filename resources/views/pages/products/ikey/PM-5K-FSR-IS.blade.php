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
            <img src="{{URL::asset('images/ikey/oil&gas/'.$name.".jpg")}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">{{$name}}</h1>
            <h2 class="product-type">Panel Mount Intrinsically Safe Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey® manufactures devices to reduce risk of failure in your hazardous areas. The intrinsically safe PM-5K-IS keyboard features an integrated force sensing resistor (FSR) pointing device and comes enclosed in non-corrosive stainless steel with optical isolated barriers and bulkhead cables for complete protection. It has a Factory Mutual approval for Class I, II and III, Division I, Groups C, D, E, F and G. The new part number for PM-5K-IS is: PM-5K-FSR-IS.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">Integrated Force Sensing Resistor Pointing Device, with improved design and increased sensitivity</li>    
                    <li class="feature-li mb-2">PS/2</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection