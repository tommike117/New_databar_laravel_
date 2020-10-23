@extends('layouts/main-all-products')

@section('title', 'Ivy Mobility | DATABAR COMPANY LIMITED')


@section('link')
    <link rel="stylesheet" href="{{URL::asset('/css/new-website/products/ivymobility/style.css')}}">
    <link rel="stylesheet" href="{{ URL::to('css/new-website/partners/flickity-docs.css')}}">

@endsection




@section('content')

<section>
    <div class="img-banner">
        {{-- <img src="/images/new-website/products/ivymobility/ivy 1920-banner.jpg" width="100%" alt="ivymobility"> --}}
    </div>
</section>

<div class="img-bg">
    <section>
        <div class="container-fluid bg-body img-bg1">
            <div class="block-60" style="height:100%">
                <h3 class="header-text">Enabling sales to be more agile, intelligent, and efficient</h3>
                <div class="content-box">
                    <div class="text-box">
                        <h3 class="header-hov">Automating in-store sales activities</h3>
                        <p>Sales reps save an average of 13 minutes on each call within a retail outlet, leading to increased coverage within the seller’s territory and market.</p>
                    </div>
                    <div class="text-box">
                        <h3 class="header-hov">Increase same stores sales</h3>
                        <p>Increase upsell and cross-sell by an average of 21% resulting in higher revenue per store using Ivy Insights to provide analytics for guided selling and suggested next best order.</p>
                    </div>
                    <div class="text-box">
                        <h3 class="header-hov">In-flight Analytics</h3>
                        <p>Accurately measure productivity, incentives, promotion effectiveness, growth and analyze competitive data at various levels across markets, category, outlet and down to the SKU level using Ivy Insights and Analytics.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-m-sec1"></div>
    </section>

    <section>
        <div class="container-fluid bg-body img-bg2">
            <div class="block-60">
                <h3 class="header-text">Why they are easy to use</h3>
                <div class="content-box">
                    <div class="text-box">
                        <h3 class="header-hov">Easy to navigate requiring fewer clicks</h3>
                        <p>Ivy places emphasis on ease of use of its apps starting with design of an intuitive user interface with the end user experience in mind.</p>
                    </div>
                </div>
                <h3 class="header-text">Domain and Industry Expertise</h3>
                <div class="content-box">
                    <div class="text-box">
                        <h3 class="header-hov">Are you looking for an industry leading partner?</h3>
                        <p>Gain access to over a decade of experience in helping consumer goods companies win more at the shelf. Our products are powerful and we have a track record of supporting 110,000 users and processing over 1.7 billion transactions per year.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-m-sec2"></div>
    </section>

    <section>
        <div class="container-fluid bg-body img-bg3">
            <div class="block-60">
                <h3 class="header-text">Empowering your delivery network is easy and achieving the perfect store is a breeze</h3>

                <p>Industry Cloud for Consumer Goods, by Ivy Mobility,
                is a fully integrated suite of software applications built
                for the consumer goods industry. It supports and
                transforms all of your sales, merchandising, distribution
                and direct store delivery functions.</p>

                <div class="content-box">
                    <div>
                        <a href="/products/ivymobility/sales-force-automation">
                            <h3 class="header-hov">Sales Force Automation ></h3>
                        </a>
                        <p class="sec-3-m">Enables clientelling in the store by brand ambassadors
                        to promote products directly to consumers,
                        activate promotions, sell more and manage time and stock.</p>
                    </div>
                    <div>
                        <a href="/products/ivymobility/direct-store-delivery">
                            <h3 class="header-hov">Direct Store Delivery (DSD) ></h3>
                        </a>
                        <p class="sec-3-m">Typical users are sales, delivery, route sales, and independent reps.</p>
                    </div>
                    <div>
                        <a href="/products/ivymobility/retail-execution">
                            <h3 class="header-hov">Retail Execution ></h3>
                        </a>
                        <p class="sec-3-m">Field sales module for sales reps to enable the perfect store,
                        complete surveys, audits and perform guided selling.</p>
                    </div>
                    <div>
                        <a href="/products/ivymobility/distributor-management">
                            <h3 class="header-hov">Distributor Management ></h3>
                        </a>
                        <p class="sec-3-m">Used by brands and major distributors to
                        manage routes, sales and route accounting.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-m-sec3"></div>
    </section>

    <section>
        <div class="container-fluid bg-body img-bg4">
            <div class="block-60">
                <!-- <h3 class="header-text">Enabling sales to be more agile, intelligent, and efficient</h3>
                <div class="content-box">
                    <div class="text-box">
                        <h3 class="header-hov">Automating in-store sales activities</h3>
                        <p>Sales reps save an average of 13 minutes on each call within a retail outlet, leading to increased coverage within the seller’s territory and market.</p>
                    </div>
                    <div class="text-box">
                        <h3 class="header-hov">Increase same stores sales</h3>
                        <p>Increase upsell and cross-sell by an average of 21% resulting in higher revenue per store using Ivy Insights to provide analytics for guided selling and suggested next best order.</p>
                    </div>
                    <div class="text-box">
                        <h3 class="header-hov">In-flight Analytics</h3>
                        <p>Accurately measure productivity, incentives, promotion effectiveness, growth and analyze competitive data at various levels across markets, category, outlet and down to the SKU level using Ivy Insights and Analytics.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</div>

<style>
    .section-card{
        width: 100%;
        height: 64vh;
        display: flex;
        padding: 0px 9% 0 13%;
    }
    .flex-4{
        flex:0 0 100%;
        max-width: 100%;

    }
    .block-flex{
        margin: 15px;
        padding: 15px;
        width: 100%;
        background-color: white;
        box-shadow: 4px 9px 19px 2px #c2c2c28c;
        border-radius: 25px;
    }
    .set-icon-img{
        padding: 5% 25%;
    }
    .set-icon-text{
        padding: 15px 7%;
    }
    .set-icon-text p {
        font-size: 11.5px;
        font-weight: 300;
        font-family: poppins;
    }
    .header-last-section{
        padding-left: 52%;
        font-size: 14px;
        padding-right: 10%;
        margin-top: 5%;
        line-height: 1.5em;
        text-align: right;
        font-weight: 400;
    }
</style>

<div class="desktop-slide">

    <h3 class="header-text header-last-section">Ivy’s intelligent platform empowers more efficient
        and productive field force  management.
        It is packed with hundreds of features and
        new functionality is released several times a year.
        The platform supports extensive configuration
        options and can be easily tailored to meet
        specific use cases. The solution incorporates all
        the capabilities of modern cloud infrastructure.</h3>

    <section style="margin-top: 5%">
        <div class="section-card">
            <div class="block-flex">
                <div class="flex-4">
                    <div class="set-icon-img">
                        <img src="/images/new-website/products/ivymobility/icon_ivy-01.png" alt="#" style="width: 100%">
                    </div>
                    <div class="set-icon-text">
                        <p>You can access our platform from anywhere on any device.
                            No network coverage? No problem. Check out task lists,
                            complete orders,and sync once back online. You can upload an image
                            and use workflow to automate entry.</p>
                    </div>
                </div>
            </div>
            <div class="block-flex">
                <div class="flex-4">
                    <div class="set-icon-img">
                        <img src="/images/new-website/products/ivymobility/icon_ivy-02.png" alt="#" style="width: 100%">
                    </div>
                    <div class="set-icon-text">
                        <p>Using our portals, home office, and field management
                            employees can easily configure processes and business rules
                            functionality and have visibility to all the information going on
                            in  the field.  Also maintain all master data for outlets,
                            products, SKUs, and more.</p>
                    </div>
                </div>
            </div>
            <div class="block-flex">
                <div class="flex-4">
                    <div class="set-icon-img">
                        <img src="/images/new-website/products/ivymobility/icon_ivy-03.png" alt="#" style="width: 100%">
                    </div>
                    <div class="set-icon-text">
                        <p>You control and enable who can see and do what in the system.
                            Easy to setup varying access for sales reps, merchandisers,
                            independent route sales, key account managers and
                            warehouse users.</p>
                    </div>
                </div>
            </div>
            <div class="block-flex">
                <div class="flex-4">
                    <div class="set-icon-img">
                        <img src="/images/new-website/products/ivymobility/icon_ivy-04.png" alt="#" style="width: 100%">
                    </div>
                    <div class="set-icon-text">
                        <p>You and your field force gain insights using our dashboards,
                            into productivity, performance, sales, promotions and
                            other individual and management metrics.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>




<div class="container-section-3 hidden-desktop">
    <div class="main-carousel " data-js="select-cell"  data-flickity="{ 'groupCells': 1 }">
        <div class="carousel carousel--show-several">
            <div class="carousel-cell-1 ">
                <div class="block-hover-1">
                    <div class="set-icon-img">
                        <img src="/images/new-website/products/ivymobility/icon_ivy-01.png" alt="#" style="width: 100%">
                    </div>
                    <p>
                        You can access our platform from anywhere on any device.
                            No network coverage? No problem. Check out task lists,
                            complete orders,and sync once back online. You can upload an image
                            and use workflow to automate entry.
                    </p>
                </div>
            </div>
            <div class="carousel-cell-2">
                <div class="block-hover-1">
                    <div class="set-icon-img">
                        <img src="/images/new-website/products/ivymobility/icon_ivy-02.png" alt="#" style="width: 100%">
                    </div>
                    <p>
                    Using our portals, home office, and field management
                        employees can easily configure processes and business rules
                        functionality and have visibility to all the information going on
                        in  the field.  Also maintain all master data for outlets,
                        products, SKUs, and more.
                    </p>
                </div>
            </div>
            <div class="carousel-cell-3">
                <div class="block-hover-1">
                    <div class="set-icon-img">
                        <img src="/images/new-website/products/ivymobility/icon_ivy-03.png" alt="#" style="width: 100%">
                    </div>
                    <p>You control and enable who can see and do what in the system.
                        Easy to setup varying access for sales reps, merchandisers,
                        independent route sales, key account managers and
                        warehouse users.</p>
                </div>
            </div>
            <div class="carousel-cell-4">
                <div class="block-hover-1">
                    <div class="set-icon-img">
                        <img src="/images/new-website/products/ivymobility/icon_ivy-04.png" alt="#" style="width: 100%">
                    </div>
                    <p>You and your field force gain insights using our dashboards,
                        into productivity, performance, sales, promotions and
                        other individual and management metrics.</p>
                </div>
            </div>

        </div>
    </div>
</div>



<section>
    @include('includes/footer')
</section>

@endsection





@section('script')

<script src="{{URL::to('/js/page-js/New-databar/partners/flickity-docs.min.js')}}"></script>
<script>
    $('.main-carousel').flickity({
        groupCells: 2
    });
</script>
@endsection
