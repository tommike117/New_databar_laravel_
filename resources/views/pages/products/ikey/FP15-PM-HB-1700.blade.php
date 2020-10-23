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
            <img src="{{URL::asset('images/ikey/oil&gas/'.$name.".jpg")}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">{{$name}}</h1>
            <h2 class="product-type">15-Inch High Bright Flat Panel Display</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The FP15-PM-HB-1700 is a high-bright, daylight readable flat panel display from iKey®. Built to operate in extreme temperatures, it is ideal for use in harsh environments. This display boasts a 1700-nit display and NEMA 4X rating to be resistant to dirt, debris, liquids and corrosives. In addition, the FP15-PM-HB-1700 has an LED backlight life of 70,000 hours.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Stainless Steel Bezel</li>    
                    <li class="feature-li mb-2">Contrast Ratio: 600:1</li>    
                    <li class="feature-li mb-2">Brightness: High-Bright 1700 nit</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection