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
            <h2 class="product-type">Membrane Keyboard with Touchpad</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">The PM-5K-MEM-TP is the panel mount model in iKey®’s membrane keyboard product line, built to withstand the harshest environments. It is manufactured with a hardcoated, textured polyester film and trampoline-mounted, snap-dome switches that provide a superior feel and actuation over a standard membrane keyboard. The integrated Synaptics® touchpad is completely sealed under an extra layer of PVC membrane, which extends the life of the product. It lacks the crevices found between the keys of regular keyboards. It is designed to meet NEMA 4X specifications, withstanding directed hose water, disinfectants, environmental contaminants and heavy industrial use. This keyboard also has medical setting applications.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">24 Function Keys</li>    
                    <li class="feature-li mb-2">Hardcoated Textured Polyester Film</li>
                    <li class="feature-li mb-2">Integrated Touchpad</li>
                    <li class="feature-li mb-2">Stainless Steel Case</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection