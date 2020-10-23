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
            <h2 class="product-type">17-Inch High Bright Display with Touchscreen</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The FP17-PMT-HB-1000 by iKey<sup>®</sup> is a daylight-readable flat panel display with touchscreen. It operates in extreme temperatures, making it ideal for use in harsh environments. This displays boasts a 1000-nit display and is NEMA 4X rated, making it resistant to dirt, debris, liquids and corrosives. In addition, the FP17-PMT-HB-1000 has an LED backlight life of 70,000 hours.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Stainless Steel Bezel</li>    
                    <li class="feature-li mb-2">Contrast Ratio: 600:1</li>    
                    <li class="feature-li mb-2">Brightness: High-Bright 1000 nits</li>    
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection