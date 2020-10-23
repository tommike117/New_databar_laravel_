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
            <h2 class="product-type">Mobile Keyboard with HulaPoint<sup>™</sup></h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s SlimKey® SK-102-M keyboard provides full-size versatility in a rugged, compact design, with the added convenience of an integrated force sensing resistor.</p>
            <p class="p-description">The SlimKey SK-102-M is engineered to meet NEMA 4X specifications and is ideal for use in industrial, medical and material handling applications. The large numeric pad on the SK-102-M allows for easy data entry, while the robust polycarbonate case is durable in the roughest of environments.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">Integrated FSR Pointing Device</li>    
                    <li class="feature-li mb-2">MS Windows™ Function Keys</li>
                    <li class="feature-li mb-2">Polycarbonate Case with Mounting Holes</li>
                    <li class="feature-li mb-2">USB and PS/2 configurations available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection