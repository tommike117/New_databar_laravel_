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
            <h2 class="product-type">Stainless Steel Optical Trackball</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The DT-TB from iKey® offers solid-state laser trackball technology in a completely sealed and waterproof enclosure. Designed to meet NEMA 4X protection, the DT-TB’s 38-mm trackball sits inside polycarbonate housing with a stainless steel case. The trackball is easily removable for convenience cleaning, while an adjustable tension ring ensures the proper amount of trackball smoothness for any user. In addition, the DT-TB features sealed stainless steel switches, including a programmable button.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Adjustable Tension Ring</li>    
                    <li class="feature-li mb-2">ESD Safe</li>    
                    <li class="feature-li mb-2">PS/2 or USB configurations available</li>
                    <li class="feature-li mb-2">Removable Ball</li>
                    <li class="feature-li mb-2">Stainless Steel Case</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection