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
            <h2 class="product-type">HP-PM-FSR-NI FSR Pointing Device</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Now available to ship. The nonincendive HP-PM-FSR-NI by iKey® features an integrated force sensing resistor(FSR), our newly designed and upgraded pointing device that offers improved sensitivity and increased durability. The low-profile design contains no protruding parts that might break and no moving elements to collect dust. With its completely sealed NEMA 4X design, the FSR can withstand spills, washdowns, contaminants and the impacts of an industrial environment. The HP-PM-FSR-NI has a Factory Mutual approval for Class I, Division II, Groups A, B, C, and D. All units include isolation barrier.  Panel mount. The new part number for HP-PM-NI is: HP-PM-FSR-NI.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Nonincendive for use in hazardous locations</li>    
                    <li class="feature-li mb-2">PS/2 or USB configurations available (PS/2 ships with bulkhead cable. USB ships with PG7 cable gland.)</li>    
                    <li class="feature-li mb-2">Stainless Steel Bezel</li>    
                    <li class="feature-li mb-2">Transition from CTS to Force Sensing Resistor</li>    
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection