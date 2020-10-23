@extends('layouts/new-main')



{{-- Title Website --}}
@section('title', 'Become a reseller | DATABAR COMPANY LIMITED | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="{{ URL::to('css/new-website/partners/style.css')}}">
<link rel="stylesheet" href="{{ URL::to('css/new-website/partners/flickity-docs.css')}}">
@endsection



{{-- Body HTML --}}
@section('content')

    <section class="section-1">
        <div class="bg-partners">
            <div class="text-partners-1">
                <h2>
                    Welcome to<br>
                    Our Partner Ecosystem
                </h2>
                <p>
                    Databar proudly offers a global network of industry-leading partners to facilitate premium printing solutions and unmatched support.
                </p>
                <a href="/contact">
                    <button class="btn btn-banner">Contact Now</button>
                </a>
            </div>
        </div>
    </section>
<div class="bg-section">
    <section class="section-2">
            <div class="text-partner-2">
                <h2>
                    Become a reseller
                </h2>
                <p>
                    A broad selection of comprehensive Samsung enterprise mobility; smartphones, consumer graded tablets, Samsung Galaxy Tab Active; Samsung KNOX, barcode and complementary solutions
                    like barcode scanners, wireless handheld scanners, mobile computers, barcode printers, and mobile printers and POS printers including services, from financing, education, training
                    and business development resources to marketing services and pre- and post-sale technical assistance.<br><br>
                    <br> We welcome your participation in our DATABAR channel partner programs and communities.
                    <img src="images/new-website/partners/logo.png" alt="carier-logo">
                </p>
            </div>
        </section>
        <section class="section-3">
            <div class="container-section-3 hidden-desktop">
                <div class="main-carousel " data-js="select-cell"  data-flickity="{ 'groupCells': 1 }">
                    <div class="carousel carousel--show-several">
                        <div class="carousel-cell-1 ">
                            <div class="block-hover-1">
                                <h2>
                                    Solution partners
                                </h2>
                                <p>
                                    Solution Partners are mainly Samsung
                                    who work with Databar on the building, marketing, and sales of joint industry solutions.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-cell-2">
                            <div class="block-hover-1">
                                <h2>
                                    Technology partners
                                </h2>
                                <p>
                                    technology Partners are partners who provide ICT
                                    services to help customers succeed in digital transformation.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-cell-3">
                            <div class="block-hover-1">
                                <h2>
                                    System integrators
                                </h2>
                                <p>
                                    System partners are partners who work with
                                    Databar on the routes-to-market and sell products, solutions, and services to end customers.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-cell-4">
                            <div class="block-hover-1">
                                <h2>
                                    Value added resellers
                                </h2>
                                <p>
                                    DATABAR offers our channel partners; mobile operators, system integrators, technology solution providers, value-added resellers (VARs).
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="text-partners-3 hidden-desktop">
                    <p>Be part of a community full of opportunity See for yourself how our partners have accelerated their businesses.</p>
                </div>
            </div>

            <div class="container-section-3-desktop">
                <div class="carousel-cell-1-pc ">
                    <div class="block-hover-1-pc">
                        <h2>
                            Solution partners
                        </h2>
                        <p>
                            Solution Partners are mainly Samsung
                            who work with Databar on the building, marketing, and sales of joint industry solutions.
                        </p>
                    </div>
                </div>
                <div class="carousel-cell-2-pc">
                    <div class="block-hover-1-pc">
                        <h2>
                            Technology partners
                        </h2>
                        <p>
                            technology Partners are partners who provide ICT
                            services to help customers succeed in digital transformation.
                        </p>
                    </div>
                </div>
                <div class="carousel-cell-3-pc">
                    <div class="block-hover-1-pc">
                        <h2>
                            System integrators
                        </h2>
                        <p>
                            System partners are partners who work with
                            Databar on the routes-to-market and sell products, solutions, and services to end customers.
                        </p>
                    </div>
                </div>
                <div class="carousel-cell-4-pc">
                    <div class="block-hover-1-pc">
                        <h2>
                            Value added resellers
                        </h2>
                        <p>
                            DATABAR offers our channel partners; mobile operators, system integrators, technology solution providers, value-added resellers (VARs).
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-partners-3 hidden-mobile-tablet">
                <p>Be part of a community full of opportunity <br>See for yourself how our partners have accelerated their businesses.</p>
            </div>
        </section>


</div>

{{-- <section>


    @php
     $array = [

        ['image' => 'images/new-website/partners/partners_logo/armor-x.jpg',],
        ['image' => 'images/new-website/partners/partners_logo/bixolon.jpg',],
        ['image' => 'images/new-website/partners/partners_logo/bullitt.jpg',],
        ['image' => 'images/new-website/partners/partners_logo/catphone.jpg',],
        ['image' => 'images/new-website/partners/partners_logo/centrify-logo.png',],
        ['image' => 'images/new-website/partners/partners_logo/Datalogic-logo-large.png',],
        ['image' => 'images/new-website/partners/partners_logo/Ecom-Instruments.png',],
        ['image' => 'images/new-website/partners/partners_logo/gamber-johnson.jpg', ],
        ['image' => 'images/new-website/partners/partners_logo/iKey-Logo-RGB.jpg',],
        ['image' => 'images/new-website/partners/partners_logo/ivymobility.jpg',],
        ['image' => 'images/new-website/partners/partners_logo/koamtac.jpg',],
        ['image' => 'images/new-website/partners/partners_logo/Koolspan.jpg',],
        ['image' => 'images/new-website/partners/partners_logo/RAM-Logo-no-logo-no-website-Black.png',],
        ['image' => 'images/new-website/partners/partners_logo/sam4s.jpg',],
        ['image' => 'images/new-website/partners/partners_logo/star2star.png',],
        ['image' => 'images/new-website/partners/partners_logo/toshiba-tec.jpg',],
        ['image' => 'images/new-website/partners/partners_logo/unitech.png',],
        ['image' => 'images/new-website/partners/partners_logo/vocal-vest.jpg',],
        ['image' => 'images/new-website/partners/partners_logo/wandera-1.svg',],
        ['image' => 'images/new-website/partners/partners_logo/42gear.jpg',],
     ]
    @endphp --}}

    {{-- Code --}}
    {{-- <style>
    .img-chanel-partner{padding:2% 0 5%;}
    /* .image-partner .col-md-4{width:1px;} */
        .chanel-partner{
            padding:5em 0 0;
        }
        h2 {
            padding: 5% 0 2% 0;
            margin: 0;
        }


        .border-logo {
            padding: 0;
            border: 0.1px solid #eee;
        }
        .box-logo {
            height: 130px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .box-logo img {
            width: 60%;
        }
        .box-logosmall {
            height: 130px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box-logosmall img {
            width: 70%;
        }

        @media (max-width: 990px) {
            .box-logo {}

        }
        @media (max-width: 560px) {
            .box-logo img {
                width: 80%;
            }

            .box-logosmall img {
                width: 90%;
            }
        }  .header-brand {
        height: auto;
        font-family: quicksand;

    }

    .flex-2{
        flex:0 0 16.667%;
        max-width: 16.667%;
    }
    .brand-img{
        margin: 9% 2%;
        filter: grayscale(1);
    }
    .brand-img:hover{
        filter: grayscale(0);
    }

    </style>


</section> --}}
{{-- <section>
    <div class="header-brand">
        <h3>Technology Partners</h3>
    </div>
    <div class="section-img" style="margin-top: 5%;">
        <div style="padding:0 12%;">
            <div class="row">
                    <div class="col-md-2 col-4">
                        <div class="brand-img">
                            <img width="100%"   src="images/partner_page/samsungbusiness.jpg">
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="brand-img">
                                <img width="100%"   src="images/partner_page/Authorized service_Non_BG.png">
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="brand-img">
                                <img width="100%"   src="images/partner_page/Logo-Samsung-Knox.png">
                        </div>
                    </div>
                    <div class="col-md-2 col-4">
                        <div class="brand-img">
                                <img width="100%"   src="images/partner_page/Samsung_Galaxy.png">
                        </div>
                    </div>
                    <div class="col-md-2 col-4">
                        <div class="brand-img">
                                <img width="100%"   src="images/partner_page/Samsung_GalaxyTab_Active2.jpg">
                        </div>
                    </div>
                    <div class="col-md-2 col-4">
                        <div class="brand-img">
                            <img width="100%"   src="images/partner_page/Samsung_GalaxyXCover4.jpg">
                        </div>
                    </div>
                @foreach ($array as $item)
                    <div class="col-md-2 col-4">
                        <div class="brand-img">
                            <img width="100%"     src="{{ $item['image']}}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section> --}}

<section>
    <div class="copy-right">
        <p>Copyright © 2020 DATABAR - All Right Reserved</p>
    </div>
</section>
@endsection




@section('script')


<script src="{{URL::to('/js/page-js/New-databar/partners/flickity-docs.min.js')}}"></script>
<script>
    $('.main-carousel').flickity({
        groupCells: 2
    });
</script>

<script>



    // $(".example__demo.duo__cell").flickity({
    //     groupCells : 3,
    // });

// var $carousel = $('.example__demo.duo__cell').flickity({
//   on: {
//     ready: function() {
//       console.log('Flickity is ready');
//     },
//     change: function( index ) {
//       console.log( 'Slide changed to' + index );
//     }
//   }
// });
</script>



@endsection
