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
            <h2 class="product-type">Intrinsically Safe FSR Pointing Device</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Now available to ship! The intrinsically safe force sensing resistor (FSR) by iKey® features an upgraded pointing device that offers improved sensitivity and increased durability. It combines the functionality of a mouse and the flexibility of a joystick in one convenient, small-footprint package. The HP-DT-FSR-IS is designed to reduce risk of failure in your hazardous areas. It has a Factory Mutual approval of Class I, II and III, Division I, Groups C, D, E, F and G. Housed in a sturdy stainless steel case, it provides pressure-sensitive feedback for positive motion control without requiring vigorous movement. The low-profile of the FSR design contains no protruding parts that might break and no moving elements to collect dust. Completely sealed NEMA 4X design. The HP-DT-FSR-IS units come with optical isolated barriers and bulkhead cables for complete protection. The new part number for HP-DT-IS is: HP-DT-FSR-IS.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">PS2 Configurations Available</li>    
                    <li class="feature-li mb-2">Stainless Steel Case</li>  
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection