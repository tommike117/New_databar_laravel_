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
            <h2 class="product-type">Stand Alone Keyboard IK-DELL-SA</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Innovation continues with iKey® and its partnership with the rugged division of Dell. Introducing: the new iKey keyboard for the Dell Latitude 12® Rugged Extreme Tablet.  This keyboard comes in a stand alone model, IK-DELL-SA and an attachable keyboard, IK-DELL-AT. The attachable model has a built-in latching mechanism with quick release button.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Durable ABS/polycarbonate case</li>    
                    <li class="feature-li mb-2">Ultra-wide, resistive touchpad for full glove capability</li>    
                    <li class="feature-li mb-2">Built-in Windows multimedia controls: Mute, Volume Control and Sleep mode, compatible with Windows 7/8/10</li>    
                    <li class="feature-li mb-2">Standard 3ft USB cable</li>
                    <li class="feature-li mb-2">Built-in 50 mm and 75mm mounting patterns</li>
                    <li class="feature-li mb-2">See the docking solution from Gamber Johnson for the Dell Rugged Tablet in this short video</li>
                    <li class="feature-li mb-2">Designed to meet MIL-STD-810G</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection