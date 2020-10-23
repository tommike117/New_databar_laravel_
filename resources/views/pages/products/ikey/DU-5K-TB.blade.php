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
            <h2 class="product-type">Keyboard with Integrated Trackball</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The new DU-5K-TB by iKey® features one of our most popular industrial keyboard layouts with an integrated, 25-mm laser trackball. It is constructed with a highly rugged, ABS polycarbonate case and industrial silicone rubber keypad. The DU-5K-TB is completely sealed and designed to meet NEMA 4X specifications. The trackball pointing device is removable for convenient cleaning and has an adjustable tension ring. Keys above the trackball provide left, right and middle click functionality. The DU-5K-TB is also ADA 508 compliant.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Built-In Mounting Holes</li>    
                    <li class="feature-li mb-2">Integrated Trackball</li>    
                    <li class="feature-li mb-2">PS/2 or USB configurations available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection