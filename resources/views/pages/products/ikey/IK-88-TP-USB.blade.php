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
                        <h1 class="m-auto" style="font-size:15px;">IK-88-TP-USB</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/public-safety/IK-88-TP-USB.jpg')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">IK-88-TP-USB</h1>
            <h2 class="product-type">Full Travel Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Designed to fit into existing mobile mounting systems, iKey® has added a new model to our keyboard line. This keyboard does not include a USB port. These rugged keyboards are built for use in EMS, police and service vehicles. The keyboard is also fully sealed and is resistant to dirt, dust and spills that can ruin most keyboards.</p>
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