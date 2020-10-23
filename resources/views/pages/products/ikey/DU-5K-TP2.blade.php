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
            <h2 class="product-type">Desktop Keyboard with Touchpad</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The DU-5K-TP2 by iKey® features an integrated Cirque extended temperature touchpad pointing device, with left and right-click mouse buttons underneath for additional ease of use. It is designed to meet NEMA 4X specifications. It has 116-key functionality, including 24 function keys. The mounting holes on the back further increase the unit’s versatility. Note: this keyboard is often chosen for flight safety training and simulators.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">24 Function Keys</li>    
                    <li class="feature-li mb-2">Polycarbonate Case with Mounting Holes</li>
                    <li class="feature-li mb-2">USB and PS/2 configurations available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection