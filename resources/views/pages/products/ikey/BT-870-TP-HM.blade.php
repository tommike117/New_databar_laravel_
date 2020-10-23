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
                    <li class="breadcrumb-item"><a href="{{ route('ecom-ex.index') }}">iKey</a></li>
                    <li class="breadcrumb-item"><a href="{{url()->previous()}}">{{ikey_breadcrumb()}}</a></li>
                    <li class="breadcrumb-item d-flex active" aria-current="page">
                        <h1 class="m-auto" style="font-size:15px;">BT-870-TP-HM</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/fleet/BT-870-TP-HM.jpg')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">BT-870-TP-HM</h1>
            <h2 class="product-type">dual connectivity keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Connect with USB or Bluetooth®. This keyboard has a built-in touchpad and is made of industrial silicone rubber.</p>
            <p class="p-description">This fully-sealed keyboard is designed to meet IP67 and NEMA 4X specifications, meaning it is resistant to dirt, dust, water, ice and corrosives. Built with an industrial silicone rubber keypad and a rugged ABS polycarbonate case, the BT-870-TP-HM is easy to clean with disinfectants. The compact design and internal Bluetooth® module make the BT-870-TP-HM highly portable. In addition, its red LED backlighting is ideal for nighttime or ambient-light use.</p>
            <p class="p-description">BT-870-TP-HM is an ideal fit for mobile, material handling, food and beverage processing, medical, and other environments where rugged flexibility is a necessity and you are using the new Havis mounting system. The keyboard is rated IP67.</p>
            <div class="feature d-none">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Durable ABS/polycarbonate case</li>    
                    <li class="feature-li mb-2">Ultra-wide, resistive touchpad for full glove capability</li>    
                    <li class="feature-li mb-2">Built-in Windows multimedia controls: Mute, Volume Control, Microphone Mute, Stealth Mode, Display Switch, Search, Display Brightness Control, and Sleep mode, compatible with Windows 7/8/10</li>    
                    <li class="feature-li mb-2">Tested to MIL-STD-810 and MIL-STD-461</li>     
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection