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
                        <h1 class="m-auto" style="font-size:15px;">SLK-97-TP</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/medical/slk-97-tp-pardot_Touchpad2.jpg')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">SLK-97-TP</h1>
            <h2 class="product-type">Medical Rugged Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey’s SLK-97-TP keyboard provides users with all the functionality of a full-size keyboard and mouse in a slim, compact package. It is designed for infection control in today’s healthcare environment and for industrial applications. The fully sealed keyboard has an integrated touchpad and is compatible with all hospital-approved disinfectants. It is manufactured with red LED backlighting for use in low-light environments. The SLK-97-TP features left and right-click buttons below the touchpad, adding convenience and functionality. The durable and easily cleanable SLK-97-TP is ideal for use in ORs, medical carts and industrial workstations.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">Cleanable</li>    
                    <li class="feature-li mb-2">Liquidproof Design</li>    
                    <li class="feature-li mb-2">Integrated 10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">Red Backlit Keys</li>    
                    <li class="feature-li mb-2">USB configurations available</li>  
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection