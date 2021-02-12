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
        </div>
            <picture class="bg-footer-section-2">
                <source media="(max-width: 767.98px)" srcset="{{URL::to('images/ikey/phone/Bg_750px-02.jpg')}}">
                <source media="(max-width: 1023.98px)" srcset="{{URL::to('images/ikey/tap/ikry2048px-02.jpg')}}">
                <img src="{{URL::to('images/ikey/web/ikey1920x1080-02.jpg')}}" alt="" style="width:100%;height:auto;">
            </picture>
            <figure class="m-0 figure-section2 flex-column" >
                <img src="{{URL::to('images/ikey/logo.png')}}" alt="">
            </figure>
    </div>
</section>

{{-- section3 --}}
{{-- <section id="section3">
    <div class="container-fluid">
        <div class="title-section-2">
            <div class="text-block-section-2">
                <div class="d-flex flex-row align-items-center">
                    <p class="title-section-3">Browse by industry</p>
                </div>
            </div>
        </div>

        <div class="carousel-block">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active carousel-list-style-circle"></li>
                  <li class="carousel-list-style-circle" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li class="carousel-list-style-circle" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li class="carousel-list-style-circle" data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li class="carousel-list-style-circle" data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                  <li class="carousel-list-style-circle" data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{URL::to('images/ikey/phone/carousel/pic_phone-01.jpg')}}" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <h3 class="carousel-title">Medical</h3>
                        <p>Waterproof Keyboards for Dentist, Doctor Office and Medical Research Use.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::to('images/ikey/phone/carousel/pic_phone-02.jpg')}}" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <h3 class="carousel-title">Fleet</h3>
                        <p>Rugged Keyboard and Computers for Fleet.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::to('images/ikey/phone/carousel/pic_phone-03.jpg')}}" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <h3 class="carousel-title">Public Safety</h3>
                        <p>Public Safety PC Peripherals by iKey.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::to('images/ikey/phone/carousel/pic_phone-04.jpg')}}" alt="Fourth slide">
                    <div class="carousel-caption d-md-block">
                        <h3 class="carousel-title">Oil & Gas</h3>
                        <p>Rugged Computers and Keyboards for Oil & Gas.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::to('images/ikey/phone/carousel/pic_phone-05.jpg')}}" alt="Fifth slide">
                    <div class="carousel-caption d-md-block">
                        <h3 class="carousel-title">Military</h3>
                        <p>Rugged Computers and Keyboards for Military.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::to('images/ikey/phone/carousel/pic_phone-06.jpg')}}" alt="Sixth slide">
                    <div class="carousel-caption d-md-block">
                        <h3 class="carousel-title">Industrial</h3>
                        <p>Rugged Industrial Keyboards iKey.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section> --}}

{{-- section3 --}}
<section>
    <div class="container-fluid">
        <div class="title-section-4">
            <div class="text-block-section-4">
                <div class="d-flex flex-row align-items-center">
                    <p class="title">All Product</p>
                </div>
                <span class="detail-section-4">
                    <p class="m-sm-0">We are the proud makers of rugged keyboards and computer peripherals for professionals iKey's products are relied upon in many of the world's toughest working conditions.</p>
                </span>
                <a href="">
                    <button class="btn-databar m-sm-button">
                        View All
                    </button>
                </a>
            </div>
        </div>
        <div class="highlight w-100 d-flex">
            <div class="flexbox">
                <figure>
                    <img src="/images/new-website/products/ikey/main/ikey_tab active2-1.png" width="100%" alt="">
                </figure>
                <h2>
                    SM-T397UZKAXAA
                </h2>
                <p>
                    Samsung® Galaxy® Tab Active2 Rugged Tablet + iKey® Keyboard
                </p>
                <a class="button-box" href="/products/ikey/sm-t397uzkaxaa">
                    <button class="btn-databar">
                        View more
                    </button>
                </a>
            </div>
            <div class="flexbox">
                <figure>
                    <img src="/images/new-website/products/ikey/main/ik-sam-at-ikey.png" width="100%" alt="">
                </figure>
                <h2>
                    IK-SAM-AT
                </h2>
                <p>
                    The IK-SAM-AT Keyboard is unique
                </p>
                <a class="button-box" href="/products/ikey/ik-sam-at">
                    <button class="btn-databar">
                        View more
                    </button>
                </a>
            </div>
        </div>


        <picture class="figure-picture-1">
            <source media="(max-width: 799px)" srcset="{{URL::to('/images/new-website/products/ikey/main/pic-main_newikey-02.png')}}">
            <source media="(max-width: 1023.98px)" srcset="{{URL::to('/images/new-website/products/ikey/main/pic-main_newikey-02.png')}}">
            <img src="{{URL::to('/images/new-website/products/ikey/main/pic-main_newikey-02.png')}}" alt="" class="pic-sec4" style="width:100%;height:auto;">
        </picture>

    </div>
</section>

@include('includes/footer')

@endsection





@section('script')

<script>
    $('.carousel').carousel({
        interval: 2000
    });
</script>

@endsection
