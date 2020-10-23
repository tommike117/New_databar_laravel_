@extends('layouts/main-all-products')

@section('title', 'Distributor managment | Ivy Mobility | DATABAR COMPANY LIMITED')


@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/ivymobility/distributor-managment/style.css')}}">


@endsection


@section('content')


<div class="img-bg">

<section>
    <div class="img-banner">
        <div class="text-banner">
            <h1>Distributor Management</h1>
            <p>Ivy DMS is designed to meet the vertical requirements of consumer goods organizations and support fast moving consumer goods (FMCG) companies. A fully integrated Distributor Management and Mobility solution for the consumer goods industry.</p>
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
                            <li>Account management</li>
                            <li>Channel Sales Management</li>
                            <li>Inventory Management</li>
                            <li>Credit & Collections Management</li>
                            <li>Survey Management and Audit</li>
                            <li>Sales and Order Management</li>
                            <li>Promotion and Incentive Tracking</li>
                            <li>Display and Asset Tracking</li>
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
        <p>Do you want advanced workflow capabilities? With the rise in catering to consumers around the globe, real-time network view & dynamic decisions have become instrumental for optimizing resources and managing demands to support more brands, with different sizes, packaging, sales methods and increasing number of SKUs.</p>
        <p>Are you looking to control trade promotion spend? Consumer goods organizations are moving to cover more retail channels, and simplify trade terms and promotional spending. The solution enables you to manage incentive calculations used to drive up sales performance.</p>
        <div class="text-feature">
            <h3>Key capabilities and features</h3>
            <div class="flex-12">
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/distributor-managment/distributor_icon-01.png" alt="#">
                    </div>
                    <h3>Route Accounting</h3>
                    <p>Effortlessly manage the financial account of your network across account balances, receipts, payments, and charges. Systemically capture sales transactions and records for distributors with mobile warehouses, usually trucks, operating as direct store distributors.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/distributor-managment/distributor_icon-02.png" alt="#">
                    </div>
                    <h3>Multi Channel Order Management</h3>
                    <p>Take control of your network and streamline the order to cash process using automated workflow to timely process cash sales made from secondary sites or received from electronic purchase orders. Effortlessly manage credit and track collections.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/distributor-managment/distributor_icon-03.png" alt="#">
                    </div>
                    <h3>Inventory Management</h3>
                    <p>Effectively integrate the supply chain to ensure optimum stock levels at distributors and ensure zero out of stocks at the retailers. Manage inventory levels at the warehouse using forecasts. Gain visibility to distributor stock to improve planning.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/distributor-managment/distributor_icon-04.png" alt="#">
                    </div>
                    <h3>Merchandising</h3>
                    <p>Streamline merchandising across distributors to ensure consistency across retailers. Capture information from the route including sales, promotional activity, stock levels and schemes for brand and focus items.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/distributor-managment/distributor_icon-05.png" alt="#">
                    </div>
                    <h3>Sales Force Automation</h3>
                    <p>Benefit from secondary sales reps using mobile devices in the market to follow a structured sales call, plan retail visits, perform stock checks, and process sales orders. Information flows directly to back-end systems online or offline using synch capabilities.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/distributor-managment/distributor_icon-06.png" alt="#">
                    </div>
                    <h3>Order Fulfillment</h3>
                    <p>Collaborate with your distributor network on retail demand planning, fulfillment needs, and integrated inventory at the warehouse and van level to enable sales at the outlet.</p>
                </div>
            </div>
        </div>
    </div>




</section>



<section>
    @include('includes/footer')
</section>


@endsection
