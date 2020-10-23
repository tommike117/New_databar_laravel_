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
            <h2 class="product-type">Panel Mount Keyboard with Emergency Key</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">Designed to meet MIL-STD-461G standards, the SLP-86-911-461 is ideal for harsh environments where electromagnetic interference is a top concern.</p>
            <p class="p-description">In addition, the SLP-86-911-461 features an emergency key that, when pressed, sends a signal of Shift+F1 and lights up for 30 seconds. The SLP-86-911-461 integrates the Force Sensing Resistor, an upgraded pointing device that offers improved sensitivity and increased durability. It boasts a completely sealed and ruggedized construction that, when properly sealed, allows it to meet NEMA 4X specifications, ensuring that this keyboard is sealed against the elements or unwanted spills.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">12 Function Keys</li>    
                    <li class="feature-li mb-2">86-Key Functionality</li>
                    <li class="feature-li mb-2">Designed to meet MIL-STD-461G Specifications</li>
                    <li class="feature-li mb-2">Integrated Backlighting</li>
                    <li class="feature-li mb-2">Integrated Force Sensing Resistor Pointing Device</li>
                    <li class="feature-li mb-2">One-Touch Emergency Key</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection