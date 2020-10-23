@extends('layouts/main-all-products')

@section('title', 'Direct Store Delivery | Ivy Mobility | DATABAR COMPANY LIMITED')


@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/ivymobility/direct-store-delivery/style.css')}}">


@endsection


@section('content')


<div class="img-bg">

<section>
    <div class="img-banner">
        <div class="text-banner">
            <h1>Direct Store Delivery</h1>
            <p>Tap the power of Artificial Intelligence (AI) and Machine Learning (ML) to increase efficiency and automate your sales and distribution activities. Designed to meet the needs of manufacturers, wholesalers and independent route distributors selling consumer goods to retailers.</p>
        </div>
    </div>
</section>


    <section>
        <div class="img-bg1">
            <div class="block-60 m-none" style="height:100%">
                <h3 class="header-text ">Key Benefits</h3>
                <div class="content-box">
                    <div class="text-box">
                        <ul>
                            <li>Improve the speed of getting products on shelves</li>
                            <li>Reduce the time products spend in the supply chain</li>
                            <li>Better control of stock and inventory</li>
                            <li>Optimize routes and tours</li>
                            <li>Reduce the cost of ordering and stocking</li>
                            <li>Increase margins and promotion effectiveness</li>
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
        <p>Do you want a platform to scale your business to local markets? Drive mass adoption of products from premium to low end to meet the local needs, price points, and preferences of consumers while offering pay on delivery options</p>
        <p>Do you want to digitize your processes and eliminate paper? The tool replicates an order placed out of a print catalog by showcasing the images of the products on the device. This is particularly useful for new launches or promos involving free gifts to provide a visual argument. This can be further enhanced with ad videos as well.</p>
        <div class="text-feature">
            <h3>Key Features</h3>
            <div class="flex-12">
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/direct-store-delivery/direct_icon-01.png" alt="#">
                    </div>
                    <h3>Visit Planning  </h3>
                    <p>Plan field team days by specifying the number and order of customers to visit by road and employee. Manage and analyze the tasks performed by your teams in the field.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/direct-store-delivery/direct_icon-02.png" alt="#">
                    </div>
                    <h3>Autonomous Dispatch</h3>
                    <p>Monitor the performance of your field force by receiving check-in and check-out notifications, setting sales and delivery targets, and dynamically managing routes.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/direct-store-delivery/direct_icon-03.png" alt="#">
                    </div>
                    <h3>On-Demand Distribution</h3>
                    <p>Gain the flexibility to offer several routes to market through configurable processes by category of customers in different areas geographically.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/direct-store-delivery/direct_icon-04.png" alt="#">
                    </div>
                    <h3>Inventory Control</h3>
                    <p>Quickly respond to customer needs by leveraging real-time access and visibility to stock and movements in the warehouse, van, and on the shelf. Drivers can track any remaining, allocated, delivered or returned inventory for the day.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/direct-store-delivery/direct_icon-05.png" alt="#">
                    </div>
                    <h3>Mobile Operations</h3>
                    <p>Manage your orders, pre-orders, deliveries, and invoices efficiently. Drivers receive interactive daily plans and routes on their mobile devices and synchronize the data throughout the day. Your merchandisers can send visit reports and satisfaction surveys directly from the mobile.</p>
                </div>
                <div class="flex-4 bg-gray">
                    <div class="setup-img">
                        <img width="100%" src="/images/new-website/products/ivymobility/direct-store-delivery/direct_icon-06.png" alt="#">
                    </div>
                    <h3>Sell & Deliver directly to retailers</h3>
                    <p>Create extra value for your retailers by enabling your Account Managers, Sales reps and Van Sellers to provide shelf inventory management, price and promotion management, order management and in-store merchandising.</p>
                </div>
            </div>
        </div>
    </div>




</section>



<section>
    @include('includes/footer')
</section>


@endsection
