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
                    <li class="breadcrumb-item"><a href="{{ route('ecom-ex.index') }}">iKey</a></li>
                    <li class="breadcrumb-item"><a href="{{url()->previous()}}">{{ikey_breadcrumb()}}</a></li>
                    <li class="breadcrumb-item d-flex active" aria-current="page">
                        <h1 class="m-auto" style="font-size:15px;">FT-88-911-TP</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/fleet/FT-88-911-TP.jpg')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">FT-88-911-TP</h1>
            <h2 class="product-type">Backlit Keyboard with Integrated Touchpad</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The FT-88-911-TP by iKey® is designed for vehicle mount in emergency, police, service, transport trucks and marine vessels. With a full-travel keystroke, the FT-88-911-TP feels like a regular keyboard while maintaining the rugged standards of all iKey products. Ideal for in-vehicle use, the FT-88-911-TP features red LED backlit keys for low-light environments, a one-touch emergency key and an integrated touchpad.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">88-Key Functionality</li> 
                    <li class="feature-li mb-2">Integrated Backlighting</li>   
                    <li class="feature-li mb-2">Integrated Touchpad</li>   
                    <li class="feature-li mb-2">Mobile Mounting Holes</li>   
                    <li class="feature-li mb-2">One-Touch Emergency Key</li>   
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection