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
            <h2 class="product-type">Intrinsically Safe Panel Mount Keyboard with FSR</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Now available! iKey® manufactures devices to reduce risk of failure in your hazardous areas. The intrinsically safe PM-2000-FSR-IS is constructed using a highly rugged stainless steel case and industrial silicone rubber pad, ensuring NEMA 4X protection in extremely rugged applications. An integrated force-sensing resistor (FSR) pointing device offers additional usability. The PM-2000-FSR-IS has a Factory Mutual approval for Class I, II and III, Division I, Groups C, D, E, F and G. The unit includes optical isolated barriers and bulkhead cables for complete protection in hazardous locations. The PM-2000-FSR-IS provides users with a full 114-key industrial keyboard and has two rows of function keys that allow for single keystroke access to software shortcuts.  Panel mount.  New part number for this PM-2000-IS is: PM-2000-FSR-IS.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">24 Function Keys</li>    
                    <li class="feature-li mb-2">Integrated FSR Pointing Device</li>    
                    <li class="feature-li mb-2">PS/2 configurations available</li>    
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection