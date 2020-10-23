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
            <h2 class="product-type">Compact Panel Mount Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The PM-81 by iKey® is a small-footprint keyboard that offers an alternative solution when space is at a premium. It has 12 function keys and standard keycap sizing. iKey’s rugged panel mount keyboards allow for easy integration into workstations or other industrial environments. The PM-81 is designed to meet NEMA 4X specifications, which enables it to withstand the roughest of conditions.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Stainless Steel Bezel</li>    
                    <li class="feature-li mb-2">USB, PS/2 and AT Configurations Available</li>    
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection