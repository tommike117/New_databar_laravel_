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
            <h2 class="product-type">Panel Mount Stainless Steel with Trackball</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey®’s stainless steel panel mount keyboards are durable, cleanable and easily customized to fit the unique demands of its application. The PM-65-TB-SS integrates an industrial trackball for controlled usability. For public display kiosks, these features create a waterproof, environmentally durable solution perfect for harsh kiosk implementations. Because most kiosks do not require supervision by operators or retailers, these products help prevent theft and damage by vandals through stainless steel keys, an easily mountable design and unparalleled durability.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">Integrated, programmable function keys</li>    
                    <li class="feature-li mb-2">Vandal proof design</li>    
                    <li class="feature-li mb-2">Integrated trackball</li>   
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection