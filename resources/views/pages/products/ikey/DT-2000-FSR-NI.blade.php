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
            <img src="{{URL::asset('images/ikey/oil&gas/'.$name.".jpg")}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">{{$name}}</h1>
            <h2 class="product-type">DT-2000-FSR-NI Nonincendive Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Now available to ship. The non-incendive DT-2000-FSR-NI keyboard from iKey(R) is constructed using a highly-rugged stainless steel case and industrial silicone rubber pad, ensuring NEMA 4X protection in extremely rugged applications. An integrated FSR pointing device offers additional usability. It has a Factory Mutual approval of Class I, Division II. These units do not require barriers and are ideal for harsh working conditions. The DT-2000-FSR-NI also provides users with a full 114-key industrial keyboard and has two rows of function keys that allow for single keystroke access to software shortcuts. All units ship with bulkhead cables. New item number for DT-2000-NI is: DT-2000-FSR-NI</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">24 Function Keys</li>    
                    <li class="feature-li mb-2">Force Sensing Resistor(FSR) Pointing Device, with improved redesign and increased sensitivity</li>    
                    <li class="feature-li mb-2">Optional Mounting Holes Available</li>    
                    <li class="feature-li mb-2">PS/2 or USB configurations available. PS/2 ships with bulkhead cable. USB ships with PG7 cable gland.</li>   
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection