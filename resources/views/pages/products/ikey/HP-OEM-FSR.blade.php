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
            <img src="{{URL::asset('images/ikey/military/'.$name.".jpg")}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">{{$name}}</h1>
            <h2 class="product-type">OEM Force Sensing Resistor Industrial Pointing Device</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The OEM version of the Force Sensing Resistor industrial pointing device by iKey® offers the same functionality as the enclosed Force Sensing Resistor. The low-profile design contains no protruding parts that might break and no moving elements to collect dust. With its completely sealed NEMA 4X design, the Force Sensing Resistor can withstand spills, washdowns, contaminants and the impacts of an industrial environment.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">OEM Kit: PCB, rubber overlay, and cable</li>    
                    <li class="feature-li mb-2">USB, PS/2 and AT/serial configurations available</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection