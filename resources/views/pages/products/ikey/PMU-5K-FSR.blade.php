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
            <h2 class="product-type">Panel Mount Keyboard with Force Sensing Resistor</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s rugged panel mount keyboards allow for easy integration into workstations or other industrial environments. The PMU-5K-FSR combines a Force Sensing Resistor pointing device and a 10-key numeric keypad to provide dual functionality in one compact unit. Its 24 function keys provide user versatility. This keyboard also offers user Windows keys for ease of access to the operating system.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">24 Function Keys</li>
                    <li class="feature-li mb-2">ABS Polycarbonate Frame with 4-40 Mounting Studs</li>
                    <li class="feature-li mb-2">PS/2 and USB configurations available</li>
                    <li class="feature-li mb-2">Integrated Force Sensing Resistor Pointing Device</li>
                    <li class="feature-li mb-2">MS Windows Function Keys</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection