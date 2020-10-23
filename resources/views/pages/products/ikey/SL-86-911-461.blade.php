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
            <h2 class="product-type">MIL-STD-461G Approved Rugged Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s SL-86-911-461 is MIL-STD-461G approved, making this keyboard suitable for surface ships, submarines, aircraft and other space and ground systems used in military applications. MIL-STD-461G approval ensures that the SL-86-911-461 can coexist with other sensitive equipment without causing interference. This keyboard operates effectively around radios, transmitters and other susceptible equipment without creating adverse effects from conducted disturbances. Additionally, the SL-86-911-461 offers a rugged keyboard and a rugged Force Sensing Resistor pointing device in one compact package. Other features include a programmable Blackout key and mounting holes for a secure fit in vehicles.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">86-Key Functionality</li>
                    <li class="feature-li mb-2">Green Backlit Keys</li>
                    <li class="feature-li mb-2">One-Touch Blackout Key</li>
                    <li class="feature-li mb-2">PS/2</li>
                    <li class="feature-li mb-2">NumLock Access</li>
                    <li class="feature-li mb-2">Mounting Holes</li>
                    <li class="feature-li mb-2">MIL-STD-461G Approved</li>
                    <li class="feature-li mb-2">Integrated Force Sensing Resistor Pointing Device</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection