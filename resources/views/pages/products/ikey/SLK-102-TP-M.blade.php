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
            <h2 class="product-type">Mobile SlimKey Backlit Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s SlimKey® SLK-102-TP-M keyboard provides full-size versatility in a rugged, compact design, with the added convenience of an integrated touchpad. It features red LED backlit keys for use in areas with minimal lighting. The SlimKey® SLK-102-TP-M is engineered to meet NEMA 4X specifications and is ideal for use in industrial, medical and material handling applications. The large numeric pad on the SLK-102-TP-M allows for easy data entry, while the robust polycarbonate case is durable in the roughest of environments.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">Industrial Silicone Rubber Keypad</li>    
                    <li class="feature-li mb-2">Integrated Backlighting</li>
                    <li class="feature-li mb-2">Integrated Touchpad</li>
                    <li class="feature-li mb-2">Lightweight ABS Polycarbonate Case</li>
                    <li class="feature-li mb-2">Low-profile keys for easy cleaning</li>
                    <li class="feature-li mb-2">Mobile Mounting Holes</li>
                    <li class="feature-li mb-2">MS Windows™ Function Keys</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection