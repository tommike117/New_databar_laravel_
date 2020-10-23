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
            <h2 class="product-type">NVIS Backlit Industrial Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey® SlimKey® SLK-101-NV keyboard provides full-sized versatility in a rugged, compact design. Designed for use with night-vision goggles, it features NVIS Green B backlit keys.</p>
            <p class="p-description">Engineered for NEMA 4X protection from dust, water and corrosive liquids, the SlimKey® SLK-101-NV is ideal for use in harsh environments. The large numeric pad on the SLK-101-NV allows for easy data entry, while the robust polycarbonate case stands up in the roughest of conditions.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">12 Function Keys</li>
                    <li class="feature-li mb-2">MS Windows™ Function Keys</li>
                    <li class="feature-li mb-2">NVIS Compliant -Green B backlighting</li>
                    <li class="feature-li mb-2">Slim, Compact Design</li>
                    <li class="feature-li mb-2">USB and PS/2 configurations available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection