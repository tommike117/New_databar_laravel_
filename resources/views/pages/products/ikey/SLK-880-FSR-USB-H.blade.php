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
            <h2 class="product-type">Ideal for applications where outlets and space are at a premium</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Ideal for applications where outlets and space are at a premium, the robust SLK-880-FSR-USB-H by iKey® has a USB 2.0 hub integrated directly into its case. The SLK-880-FSR exceeds NEMA 4X requirements and is fully-submersible, meeting IP68 specifications. Other unique features of the SLK-880-FSR include a conductive plastic case, adjustable green backlighting that is also available in a night vision (NVIS) compatible configuration, and an integrated Interlink Electronics Force Sensing Resistor (FSR) pointing device. Successful drop tests on the keyboard have been completed at 2.0 meters on concrete, and the cable strain relief exceeds 25 pound pull limits. In addition, the SLK-880-FSR-USB-H is designed to meet MIL-STD-461G.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Adjustable backlighting</li>    
                    <li class="feature-li mb-2">Conductive plastic case</li>
                    <li class="feature-li mb-2">Integrated FSR pointing device</li>
                    <li class="feature-li mb-2">Optional NVIS Compliant – Green B backlighting</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection