{{-- Include  --}}
@extends('layouts/main')



{{-- Title Website --}}
@section('title')
iKey | Rugged Keyboard | Databar </title>
  <meta name="title" content="iKey | Rugged Keyboard | Databar ">
  <meta name="description" content="As the industry leader in rugged peripherals, iKey constantly develops cutting-edge products that allow customers to maximize productivity with current technology. Real customized solutions, real ROI and real value are what we provide">
  <meta name="keywords" content="iKey , Rugged Keyboard , Databar">
  <meta name="url" content="https://www.databar.co.th/product/non-samsung/ikey/rugged_keyboard/">
  <meta name="author" content="">
@endsection

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="{{URL::asset('css/page-style/ikey/style.css')}}">

@endsection

{{-- Body HTML --}}

@section('content')

<section>
    <div class="banner-header">
        <div class="overlay"></div>
        <div class="banner-detail text-center">
            <img src="{{URL::asset('images/ikey/large-logo.png')}}" alt="">
            <div class="title-header">
                <h3>Real Tough for Real Life.</h3>
                <h2>Rugged Keyboards and Computer Peripherals</h2>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="why-ikey text-center">
        <div class="row justify-content-center" style="max-width:100%;">
            <div class="col-md-8 col-12">
                <h1 class=" font-weight-bold">Why iKey ?</h1>
                <p class="small" style="font-size:14px;">As the industry leader in rugged peripherals, iKey constantly develops cutting-edge products that allow customers to maximize productivity with current technology. Real customized solutions, real ROI and real value are what we provide. </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section-menu-list">
        <div class="menu-list-mg">
        <a href="{{URL::to('products/non-samsung/ikey/rugged_keyboard/medical')}}">
                <img src="{{URL::asset('images/ikey/medical.jpg')}}" alt="">
                <div class="overlay"></div>
                <div class="title-menu">
                    <h2>Medical</h2>
                </div>
            </a>
        </div>
        <div class="menu-list-mg">
            <a href="{{URL::to('products/non-samsung/ikey/rugged_keyboard/fleet')}}">
                <img src="{{URL::asset('images/ikey/fleet.jpg')}}" alt="">
                <div class="overlay"></div>
                <div class="title-menu">
                    <h2>Fleet</h2>
                </div>
            </a>
        </div>
        <div class="menu-list-mg">
            <a href="{{URL::to('products/non-samsung/ikey/rugged_keyboard/public-safety')}}">
                <img src="{{URL::asset('images/ikey/public_safety.jpg')}}" alt="">
                <div class="overlay"></div>
                <div class="title-menu">
                    <h2>Public Safety</h2>
                </div>
            </a>
        </div>
    </div>
    <div class="section-menu-list">
        <div class="menu-list-mg">
            <a href="{{URL::to('products/non-samsung/ikey/rugged_keyboard/oil&gas')}}">
                <img src="{{URL::asset('images/ikey/oil&gas.jpg')}}" alt="">
                <div class="overlay"></div>
                <div class="title-menu">
                    <h2>Oil & Gas</h2>
                </div>
            </a>
        </div>
        <div class="menu-list-mg">
            <a href="{{URL::to('products/non-samsung/ikey/rugged_keyboard/military')}}">
                <img src="{{URL::asset('images/ikey/Military.jpg')}}" alt="">
                <div class="overlay"></div>
                <div class="title-menu">
                    <h2>Military</h2>
                </div>
            </a>
        </div>
        <div class="menu-list-mg">
            <a href="{{URL::to('products/non-samsung/ikey/rugged_keyboard/industrial')}}">
                <img src="{{URL::asset('images/ikey/Industrial.jpg')}}" alt="">
                <div class="overlay"></div>
                <div class="title-menu">
                    <h2>Industrial</h2>
                </div>
            </a>
        </div>
    </div>
</section>

@endsection