@extends('layouts/main-all-products')

@section('title', 'Retail execution | Ivy Mobility | DATABAR COMPANY LIMITED')


@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/ivymobility/retail-execution/style.css')}}">


@endsection


@section('content')


<div class="img-bg">

<section>
    <div class="img-banner">
        <div class="text-banner">
            <h1>Retail execution</h1>
            <p>With Ivy Intelligent Retail Execution you can streamline your sales, merchandising, and marketing organizations directly from the cloud. Designed to help you drive more sales and increase efficiency by automation of your business processes. The Ivy Sales Assistant powered by AI helps your sales reps with day to day execution of managing accounts, processing orders, completing surveys, gathering competitive intelligence, planning visits and more.</p>
        </div>
    </div>
</section>


    <section>
        <div class="img-bg1">
            <div class="block-60 m-none" style="height:100%">
                <h3 class="header-text ">Major Processes</h3>
                <div class="content-box">
                    <div class="text-box">
                        <ul>
                            <li>Sales Force Automation</li>
                            <li>Digital Merchandising</li>
                            <li>Better control of stock and inventory</li>
                            <li>Route Optimization</li>
                            <li>Surveys & Audits</li>
                            <li>Guided selling</li>
                            <li>Sales Order Management</li>
                            <li>Schemes and Promotions Management</li>
                            <li>Assortment Planning and Allocation</li>
                        </ul>
                        {{-- <p>More ways to evolve your sales capabilities, fulfill category management requirements, and support multiple methods for product flow and retail execution models. The solution for companies to sell the right products in the right markets at the right times. Make informed decisions about product portfolios, marketing expenditures, size and deployment of sales force, and distribution models.</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="img-m-sec1"></div>
    </section>



<section class="sec-2">
    <div class="container">
        <p style="color: #3399ff;font-size: 18px;">Drive process efficiency deeper with a new mobile strategy.</p>
        <p>Progressive consumer goods organizations are transforming their merchandising activities to serve the market needs by providing guidance and focus to the day to day work at retail outlets, obtain more shelf facings, displays. and ensuring adherence to business defined call procedures.</p>
        <div class="text-feature">
            <div class="flex-12">
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/retail-execution/retail_icon-01.png" alt="#">
                    </div>
                    <h3>Promotions</h3>
                    <p>Ensure your products are available, visual, and priced correctly to the consumer using pre-defined business rules fundamental to optimize Share of Shelf, Share of Display, to analyze the return of investment of impact of promotional activities.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/retail-execution/retail_icon-02.png" alt="#">
                    </div>
                    <h3>Retail Audits</h3>
                    <p>Using a mobile device the reps and merchandisers can quickly streamline audits and complete forms, surveys, and checklists with integrated digital image capture to ensure placement and pricing are in compliance with promotions and recommend new displays to improve brand sales.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/retail-execution/retail_icon-03.png" alt="#">
                    </div>
                    <h3>Social Communication</h3>
                    <p>Enables user-friendly communications with peers, marketing, sales management, and district management via direct messaging and community forums on topics including roduct positioning, pricing, and competitive pressures to more effectivity position products and execute events.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/retail-execution/retail_icon-04.png" alt="#">
                    </div>
                    <h3>Visual Merchandising</h3>
                    <p>Using a mobile device the reps determine the placement of stock and location on the shelf is in compliance with the Planogram. The reps can capture digital photos of the displays in the field and find inconsistencies in seconds.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/retail-execution/retail_icon-05.png" alt="#">
                    </div>
                    <h3>Schemes Management</h3>
                    <p>You can quickly meet customer demands with increased agility by tracking scheme performance and brand distribution. Monitoring of freshness of products. Gather insights that ultimately influence the assortment and merchandising layout at the store.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/retail-execution/retail_icon-06.png" alt="#">
                    </div>
                    <h3>Market Analytics</h3>
                    <p>Easily track and compare sales of products in a particular store with similar stores in the region, and assess the reasons for differences. Home office personnel gain visibility to what’s happening at the shelf to enable updates to the field for product and pricing.</p>
                </div>
            </div>
        </div>
    </div>




</section>



<section>
    @include('includes/footer')
</section>


@endsection
