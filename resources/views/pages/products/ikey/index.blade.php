@extends('layouts/main-products-jingjingna')


@section('title', 'iKey | DATABAR COMPANY LIMITED')


@section('link')
    <link rel="stylesheet" href="{{URL::to('css/new-website/products/ikey/style.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/new-website/partners/flickity-docs.css')}}">
@endsection




@section('content')

{{-- section1 --}}

<section>
    <picture class="section-picture-1">
        <source media="(max-width: 767.98px)" srcset="{{URL::to('images/ikey/phone/Bg_750px-01.jpg')}}">
        <source media="(max-width: 1023.98px)" srcset="{{URL::to('images/ikey/tap/ikry2048px-01.jpg')}}">
        <img src="{{URL::to('images/ikey/web/ikey1920x1080-01.jpg')}}" alt="" style="width:100%;height:auto;">
        <div class="block-text">
            <figure class="m-0 figure-section-1 flex-column align-items-center" >
                <img src="{{URL::to('images/ikey/large-logo.png')}}" stle="width:100%;" alt="">
                <span style="text-align:center">
                    <p class="section-1-text">Real Tough for Real Life.</p>
                    <h2 class="section-1-h2">Rugged Keyboards and Computer Peripherals</h2>
                </span>
            </figure>
        </div>
    </picture>
</section>

{{-- section2 --}}
<section>
    <div class="container-fluid">
        <div class="title-section-2">
            <div class="text-block-section-2">
                <div class="d-flex flex-row align-items-center">
                    <p class="title">Why</p>&nbsp<h1>iKey ?</h1>
                </div>
                <span class="detail-section-2">
                    <p class="m-sm-0">As the industry leader in rugged peripherals.</p>
                    <p>iKey constantly develops cutting-edge products that allow customers to maximize productivity with current technology. Real customized solutions,real ROI and real value are what we provide.</p>
                </span>
            </div>
        </div>
    </div>
</section>



@include('includes/footer')

@endsection





@section('script')

@endsection
