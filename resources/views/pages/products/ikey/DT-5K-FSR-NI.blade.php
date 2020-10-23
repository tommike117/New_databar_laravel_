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
            <h2 class="product-type">Stainless Steel Nonincendive Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey® offers a full line of nonincendive keyboards and pointing devices. The DT-5K-NI is newly approved by Factory Mutual (2019) and now features an integrated force sensing resistor pointing device, and is enclosed in a stainless steel case. It carries a Factory Mutual approval of Class I, Division II. These units are ideal for harsh working conditions. DT-5K-NI includes isolation barrier. The new part number for DT-5K-NI is: DT-5K-FSR-NI.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">Integrated Force Sensing Resistor with improved design and sensitivity</li>    
                    <li class="feature-li mb-2">Optional Mounting Holes Available</li>    
                    <li class="feature-li mb-2">PS/2 or USB configurations available. PS/2 units ship with bulkhead cable.</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection