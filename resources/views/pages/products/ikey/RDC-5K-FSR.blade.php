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
            <h2 class="product-type">Rackdrawer Keyboard with Force Sensing Resistor</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The RDC-5K-FSR by iKey® integrates a Force Sensing Resistor pointing device and a full numeric keypad for dual functionality. Standard size units have 14-inch rails (15-inch-deep drawer) and come with chrome handle or pull slot options. Larger size units have 16-inch rails (17-inch drawer) and come with T-handle or locking T-handle options. The drawers have a CRS steel construction, which is coated with black epoxy paint and chrome-plated, ball-bearing slides.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">20 Function Keys</li>    
                    <li class="feature-li mb-2">Integrated Force Sensing Resistor Pointing Device</li>
                    <li class="feature-li mb-2">Slide Load Rating: 130 Lbs/Pair</li>
                    <li class="feature-li mb-2">USB and PS/2 configurations available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection