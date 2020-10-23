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
            <h2 class="product-type">17-inch Flat Panel Display with Touchscreen</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s line of high-quality, compact TFT flat panel displays are ideal solutions for industrial computing environments. Our flat panel displays can be easily integrated into new or existing systems. Featuring a NEMA 4X rating with a stainless steel front bezel and gasketing, the FP17-PMT provides a durable solution. It has 250 nits of brightness and a 40,000 hour backlight life. Menu items such as brightness and contrast are easily accessed on the back of the display.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Resistive Touchscreen</li>    
                    <li class="feature-li mb-2">Stainless Steel Case</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection