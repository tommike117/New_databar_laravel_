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
            <h2 class="product-type">OEM Compact Backlit Industrial Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The SL-81-OEM by iKey® provides a solution for low-light areas where size constraints exist. Its compact design and durable construction ensure mobility and durability no matter the application. Integrated backlighting ensures functionality in low-light environments. Each kit includes an industrial silicone keypad, switch matrix board, keyboard controller and cables. When installed correctly, SL-81-OEM is designed to meet NEMA 4X specifications, sealing it from dust, liquids and corrosives.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">81-Key Functionality</li>
                    <li class="feature-li mb-2">Industrial Silicone Rubber Keypad</li>
                    <li class="feature-li mb-2">Integrated Backlighting</li>
                    <li class="feature-li mb-2">Numlock Key for Secondary Keyboard</li>
                    <li class="feature-li mb-2">USB, PS/2 and AT Configurations Available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection