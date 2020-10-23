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
            <p class="p-description">The DT-810-TB from iKey® is constructed using a highly rugged, stainless steel case and industrial silicone rubber pad. The DT-810-TB’s trackball pointing device is a completely sealed 25-mm unit. The trackball is operated using sealed stainless steel switches with left, right and middle click functions.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">Integrated Trackball</li>
                    <li class="feature-li mb-2">Fn Key for secondary legend</li>
                    <li class="feature-li mb-2">PS2 or USB available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection