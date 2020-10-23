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
            <h2 class="product-type">Backlit Keyboard in Stainless Steel Case</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The DBL-81 is a small-footprint keyboard from iKey® that offers an alternative solution when space is at a premium. Built in an industrial strength stainless steel bezel, the DBL-81 features red LED backlighting for use in low-light environments. It has 12 function keys and standard keycap sizing. The DBL-81 is designed to meet NEMA 4X specifications for protection in harsh environments from dirt, dust, debris and liquids.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">Green Backlit Keys</li>
                    <li class="feature-li mb-2">Stainless Steel Case</li>
                    <li class="feature-li mb-2">USB, PS/2 and AT Configurations Available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection