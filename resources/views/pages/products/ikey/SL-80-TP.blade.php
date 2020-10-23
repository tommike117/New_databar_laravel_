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
                        <h1 class="m-auto" style="font-size:15px;">SL-80-TP Compact</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/medical/SL-80-TP-1.jpg')}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">SL-80-TP Compact</h1>
            <h2 class="product-type">Medical Rugged Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The SL-80-TP is a compact, lightweight, and fully-rugged mobile keyboard. This fully-sealed keyboard is designed to meet NEMA 4X specifications, meaning it is resistant to dirt, dust, water, ice and corrosives. Built with an industrial silicone rubber keypad and a rugged ABS polycarbonate case, the SL-80-TP is submersible and easy to clean with disinfectants..</p>
            <p class="p-description">The SL-80-TP has an integrated touchpad and a small footprint design ideal for mobile application where space is a premium. In addition, its red LED backlighting is ideal for nighttime or ambient-light use. It is an ideal fit for public safety, mobile, material handling, food and beverage processing, medical, and other environments where rugged flexibility is a necessity.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Three levels of red LED backlighting</li>    
                    <li class="feature-li mb-2">VESA mount pattern</li>    
                    <li class="feature-li mb-2">12 function keys</li>    
                    <li class="feature-li mb-2">integrated touchpad</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection