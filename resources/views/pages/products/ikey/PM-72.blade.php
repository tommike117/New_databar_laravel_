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
            <h2 class="product-type">Panel Mount Keyboard with Oversized Keys</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s innovative PM-72 panel mount keyboard was designed to accommodate rugged applications in manufacturing, material handling and remote data entry. Its unique, oversize keys are color arranged and feature a roomy layout for convenient gloved-hand use. It features a small-footprint design and a large numeric pad. Like other keyboards in the iKey line, the PM-72 is constructed with an industrial silicone keypad, sealing it from dust, liquids and corrosives.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">72-Key Functionality</li>    
                    <li class="feature-li mb-2">8 Function Keys</li>
                    <li class="feature-li mb-2">USB and PS/2 configurations available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection