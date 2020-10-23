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
            <h2 class="product-type">Ultra-Thin Keyboard with QuickLock™</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The SB-101 by iKey® is one of the thinnest keyboards to date with a depth less than half an inch. Featuring a QuickLock® key, the SB-101 can be disabled quickly to avoid unwanted keystrokes during the cleaning and disinfection process. Built for versatility, the SB-101 features individually lit red LED backlit keys for nighttime or ambient light use and comes in a fully-sealed polycarbonate case with rubber keypad. The SB-101’s ultra-thin design and cleaning capabilities make it an ideal solution for use in small spaces, vehicles, forklifts, and rackdrawers. Optional magnetic mounting is available.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">QuickLock<sup>®</sup></li>    
                    <li class="feature-li mb-2">Industrial Silicone Rubber Keypad</li>    
                    <li class="feature-li mb-2">Lightweight ABS Polycarbonate Case</li>    
                    <li class="feature-li mb-2">Meets NEMA 4X (IP65) Specifications</li>    
                    <li class="feature-li mb-2">Red LED Backlit Keys</li>    
                    <li class="feature-li mb-2">USB Connectivity</li>    
                    <li class="feature-li mb-2">Shallow Depth</li>    
                    <li class="feature-li mb-2">Ultra-Thin Design</li>    
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection