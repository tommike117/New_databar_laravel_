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
            <h2 class="product-type">AquaPoint™ Sealed Industrial Optical Mouse</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Constructed using the same rugged materials that go into the entire line of iKey® peripherals, the NEMA 4X AquaPoint® industrial pointing device features a sealed industrial silicone overlay and robust polycarbonate frame. Its reliable optical technology allows it to function on most surfaces, while its smooth-surfaced buttons make the unit easy to clean. Solid-state engineering ensures the AquaPoint® a long operating life, making the new device the ideal alternative to the office-grade mice that are so commonly replaced in harsh environment settings.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Comfortable, Ergonomic Design</li>    
                    <li class="feature-li mb-2">Smooth-Surface Buttons</li>
                    <li class="feature-li mb-2">Solid State, Optical Tracking Technology</li>
                    <li class="feature-li mb-2">USB configurations available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection