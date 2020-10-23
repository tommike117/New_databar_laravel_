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
            <h2 class="product-type">Compact Industrial OEM Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The KYB-81-OEM by iKey® provides full 101-key functionality in a small-footprint size. Its compact design and durable construction ensure mobility and durability no matter the application. The numeric keypad is integrated onto the alpha keys and is easily accessed by pressing the function and NumLock keys. Each kit is comprised of an industrial silicone keypad, switch matrix board, keyboard controller and cables.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">81-Key Functionality</li>    
                    <li class="feature-li mb-2">OEM Kit: PCB, rubber overlay, and cable</li>
                    <li class="feature-li mb-2">USB, PS/2 and AT Configurations Available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection