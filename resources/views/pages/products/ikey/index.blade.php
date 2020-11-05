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
                <img src="{{URL::to('images/ikey/large-logo.png')}}" style="width:calc((100vh - 200px) / 2);" alt="">
                <span style="text-align:center">
                    <p class="section-1-text">Real Tough for Real Life.</p>
                    <h2 class="section-1-h2">Rugged Keyboards and Computer Peripherals</h2>
                </span>
            </figure>
        </div>
    </picture>
</section>

{{-- section2 --}}
<section id="section-2">
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
        <div class="card-block-section-2">
            <div class="bg-card"></div>
            <div class="card-section-2">
                <ul>
                    <li>Durable by design</li>
                    <p>Industrial durability ratings ranging from NEMA 12 to NEMA 4X, which allow for use in dirty, dusty and greasy environments.</p>
                    <li>Live support</li>
                    <p>Talk to a real person. Customers never get a recording or automated system when calling iKey.</p>
                    <li>Custom built for you</li>
                    <p>Each iKey product is hand-built and hand-tested in our Austin facilities the same day it ships.</p>
                    <li>Reliable, fast shipping</li>
                    <p>We can usually ship standard product within a week of order date.</p>
                    <li>Reduce downtime</li>
                    <p>Reliable waterproof and non-corrosive designs that will last up to 10 years in harsh settings.</p>
                    <li>Customization is key</li>
                    <p>With over 3,500 SKUs, there’s a good chance iKey has a product for any need.</p>
                    <li>From A to Z</li>
                    <p>25 readily available language layouts to accommodate international customers.</p>
                    <li>Hot or cold</li>
                    <p>The ability to withstand extreme temperatures that permits function in freezers, heat-sensitive areas, and other severe environments.</p>
                    <li>Disinfect instantly</li>
                    <p>Low-profile keys that allow for efficient cleaning, reduce disinfection time and protection against cross contamination.</p>
                    <li>No light? No problem</li>
                    <p>Backlit keys that allow employees to optimize performance while working in low-light environments. We can customize color and other features as well. Just ask.</p>
                    <li>Maximize your space</li>
                    <p>Small footprint designs that increase mobility.</p>
                    <li>Easy to mount</li>
                    <p>Multiple mounting options including panel mounting, VESA mounting holes, OEM models, rackdrawers and more.</p>
                    <li>Lifetime repair</li>
                    <p>iKey can repair products long after the warranty expires.</p>
                    <li>Get it first</li>
                    <p>With many industry firsts, iKey is always the market leader in rugged peripherals.</p>
                </ul>
            </div>
            <picture class="bg-footer-section-2">
                <source media="(max-width: 767.98px)" srcset="{{URL::to('images/ikey/phone/Bg_750px-02.jpg')}}">
                <source media="(max-width: 1023.98px)" srcset="{{URL::to('images/ikey/tap/ikry2048px-02.jpg')}}">
                <img src="{{URL::to('images/ikey/web/ikey1920x1080-02.jpg')}}" alt="" style="width:100%;height:auto;">
            </picture>
            <figure class="m-0 figure-section2 flex-column" >
                <img src="{{URL::to('images/ikey/logo.png')}}" style="width:calc((100vh - 300px) / 2);transform: scale(1.1);" alt="">
            </figure>
        </div>

        

    </div>
</section>



@include('includes/footer')

@endsection





@section('script')

@endsection
