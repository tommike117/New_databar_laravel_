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
            <h2 class="product-type">Panel Mount Stainless Steel Keyboard with Touchpad</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey® has combined the convenience of a panel-mounted, touchpad keyboard with the rugged strength of stainless steel in the new PM-102-SS industrial keyboard. Stainless steel is known for its longevity, corrosion resistance and ability to retain strength in extreme temperatures. It’s also low-maintenance and easy to clean. Each of these characteristics make stainless steel an excellent material for keyboards used in industrial and food processing applications. The durable PM-102-SS is completely sealed and designed to meet NEMA 4X and IP66 specifications when properly installed.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Integrated Touchpad</li>    
                    <li class="feature-li mb-2">Low-profile stainless steel keys</li>
                    <li class="feature-li mb-2">PS/2 or USB configurations available</li>
                    <li class="feature-li mb-2">Stainless Steel Bezel</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection