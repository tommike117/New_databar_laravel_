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
            <h2 class="product-type">Keyboard for Panasonic FZG1 Panasonic Tablet</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The IK-PAN-FZG1-C1-V5 iKey® keyboard, specifically designed to attach to the Panasonic® FZG1 Tablet.</p>
            <p class="p-description">The V5 is improved from previous models, designed with a more robust latching mechanism which provides increased docking strength while reducing wear and tear on the keyboard. The new latching mechanism now locks and secures the keyboard to the tablet and does not require a key of any kind. This model specifically includes Green backlighting and 1x external USB 2.0 port.</p>
            <p class="p-description">This rugged keyboard is resistant to dirt, dust and spills. It is rated IP54.  Splashes of water and most liquids will have no harmful effect.  It is made of industrial silicone rubber.  The keyboard is a full QWERTY keyboard with integrated touchpad.</p>
            <div class="feature d-none">
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