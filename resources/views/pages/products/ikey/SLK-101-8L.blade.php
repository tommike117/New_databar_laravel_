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
            <h2 class="product-type">Slim, Rugged Keyboard Offers Eight Levels of Backlighting</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s SlimKey® SLK-101-8L keyboard provides full-sized versatility in a rugged, compact design. It features eight levels of green LED backlighting, and is also available in a night vision (NVIS) compatible configuration. Engineered for NEMA 4X protection from dust, water and corrosive liquids, the SLK-101-8L is ideal for use in military applications, with 8 levels of green backlighting. The large numeric pad on the SLK-101-8L allows for easy data entry, while the robust polycarbonate case stands up in the roughest of conditions. Ideal for harsh EMI environments, this rugged keyboard is designed to meet MIL-STD-461G specifications.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">ABS Polycarbonate Frame</li>    
                    <li class="feature-li mb-2">Green Backlit Keys</li>
                    <li class="feature-li mb-2">Slim, Compact Design</li>
                    <li class="feature-li mb-2">USB</li>
                    <li class="feature-li mb-2">Military</li>
                    <li class="feature-li mb-2">Backlighting</li>
                    <li class="feature-li mb-2">Meets MIL-STD-461G</li>
                    <li class="feature-li mb-2">1 Year Limited Warranty</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection