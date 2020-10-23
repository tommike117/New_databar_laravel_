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
            <h2 class="product-type">iKey's SlimKey<sup>®</sup> SLK-102-461</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Designed to meet MIL-STD-461G standards, iKey®’s SlimKey® SLK-102-461 is ideal for harsh environments where electromagnetic interference is a top concern. In addition the SLK-102-461 provides full-size versatility in a rugged, compact design, with the added convenience of an integrated force sensing resistor. The SlimKey® SLK-102-461 is engineered to meet NEMA 4X specifications, and is resistant to sand, debris and the elements. The large numeric pad on the SLK-102-461 allows for easy data entry, while the robust polycarbonate case is durable in the roughest of environments. Other features also include red LED backlit keys for nighttime use.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">Designed to meet MIL-STD-461G Specifications</li>
                    <li class="feature-li mb-2">Military</li>
                    <li class="feature-li mb-2">Full-Size</li>
                    <li class="feature-li mb-2">Integrated FSR Pointing Device</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection