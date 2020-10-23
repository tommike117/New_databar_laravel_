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
            <img src="{{URL::asset('images/ikey/public-safety/'.$name.".jpg")}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">{{$name}}</h1>
            <h2 class="product-type">The IK-SAM-AT snap-on keyboard by iKey<sup>®</sup></h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The IK-SAM-AT snap-on keyboard by iKey® is designed exclusively for the Samsung® Galaxy® Tab Active2 Rugged Tablet. The keyboard is designed to meet military specifications and IP54 standards. The keyboard easily snaps into place, provides an excellent typing experience and includes a USB-C Charging port for charging the tablet. The Galaxy Tab Active2 Tablet and iKey Keyboard is ideal for military and public safety settings, and other industries where the Samsung Tab Active2 Tablet is used.</p>
            
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">A USB-C Charging port for charging the tablet without needing to remove the tablet</li>    
                    <li class="feature-li mb-2">Standard red backlighting, with Green and NVIS options</li>    
                    <li class="feature-li mb-2">Designed to meet IP54 specifications</li>    
                    <li class="feature-li mb-2">Includes Samsung S pen holder</li>
                    <li class="feature-li mb-2">Integrated pointing device with left and right mouse buttons</li>
                    <li class="feature-li mb-2">Designed to the following environmental MIL-STDs</li>
                    <li class="feature-li mb-2">Designed to meet MIL-STD-810G</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection