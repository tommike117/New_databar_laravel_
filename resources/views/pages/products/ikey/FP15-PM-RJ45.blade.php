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
            <h2 class="product-type">15-Inch Flat Panel Display with USB over Ethernet Support</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Incorporating an industry first USB over Ethernet server, iKey®’s 15 inch display eliminates the clutter, routing frustration, and extra cost associated with traditional KVM and extender setups. Utilizing the built in USB server feature and an open RJ45 port on a host computer or switch, the FP15-PM-RJ45 will enable you to transmit both video and USB signals up to 300 feet using a single Ethernet cable. The display has 3 built-in USB ports to support additional peripherals.</p>
            <p class="p-description">The FP-15-PM-RJ45 features 350 nits of brightness, a stainless steel front bezel, optional NEMA 4X sealed USB front port (FP15-PM-RJ45-U / FP15-PMT-RJ45-U), and an optional resistive touch screen (FP15-PMT-RJ45 / FP15-PMT-RJ45-U). It is rated NEMA 4X, making the unit a durable solution that resists, corrosion, dust, water, and ice.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Stainless Steel Bezel</li>    
                    <li class="feature-li mb-2">USB over Ethernet Support</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection