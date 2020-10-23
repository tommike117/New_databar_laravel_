@extends('layouts/new-main')



{{-- Title Website --}}
@section('title', 'DATABAR COMPANY LIMITED | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" media="screen and (min-width: 992px)" href="{{ URL::to('/css/new-website/services/style_d.css')}}">
<link rel="stylesheet" media="(min-width: 768px) and (max-width: 991.98px)"  href="{{ URL::to('/css/new-website/services/style_t.css')}}">
<link rel="stylesheet" media="screen and (max-width: 767.98px)" href="{{ URL::to('/css/new-website/services/style_m.css')}}">
@endsection



{{-- Body HTML --}}
@section('content')



<div class="bg-cus">

<section>
    <div style="position: relative;">
        <div class="img-banner"></div>
        <div class="text-banner">
            <h2>Services for Our <br> Corporate Customer</h2>
            <a href="/contact">
                <button class="btn btn-banner">Contact Now</button>
            </a>
        </div>
    </div>
        <div class="text-service1">
            <p>Whether it's a product repair or just some help and advice.</p>
            <p>We are authorised service centre for corporate or <br>
                enterprise customers that can help you.</p>
            <p>All are fully trained and use genuine parts in all repairs <br>
            from Samsung and other brands original sources.</p>
            <p>Find your product type below to contact us <br>
            to get the support you need.</p>

        </div>
        <h2 class="header-Corporate">Corporate Service</h2>
        <div class="flex-12">
            <div class="flex-3">
                <div class="icon-cus">
                    <img src="images/new-website/services/web_icon-01.png" style="width: 100%" alt="">
                </div>
                <div class="text-cus">
                    <h3>Samsung consumer graded Smartphone or Tablet</h3>
                    <p>Samsung corporate service centre can help you with anything, from a cracked screen to transferring data. Email us at services@databar.co.th or give us a call today on
                        (099) 287-4709, (099) 287-4733</p>
                </div>
            </div>
            <div class="flex-3">
                <div class="icon-cus">
                    <img src="images/new-website/services/web_icon-02.png" style="width: 100%" alt="">
                </div>
                <div class="text-cus">
                    <h3>Samsung rugged Smartphone or Tablet</h3>
                    <p>Samsung corporate service centre can help you with anything, from a cracked screen to transferring data. Email us at services@databar.co.th or give us a call today on
                        (099) 287-4709, (099) 287-4733.</p>
                </div>
            </div>
            <div class="flex-3">
                <div  class="icon-cus">
                    <img src="images/new-website/services/web_icon-03.png" style="width: 100%" alt="">
                </div>
                <div class="text-cus">
                    <h3>Samsung KNOX</h3>
                    <p>For more information about Samsung Knox, please contact us knox@databar.co.th or Call
                        (099)-287-4728, (099)-287-4723</p>
                </div>
            </div>
            <div class="flex-3">
                <div class="icon-cus">
                    <img src="images/new-website/services/web_icon-04.png" style="width: 100%" alt="">
                </div>
                <div class="text-cus">
                    <h3>Non Samsung products</h3>
                    <p>For other Android or Windows device, barcode scanner, barcode printer, accessory and others, please send us inquiry at services@databar.co.th or give us a call today on
                        (099) 287-4709, (099) 287-4733.</p>
                </div>
            </div>
        </div>

</section>


<section class="section-3" >
    <h2 class="header-Corporate-2">What services do we offer?</h2>
<div class="container-fluid">
    <div class="row flex-12">
        <div class="flex-4">
            <div class="pd-img">
                <img src="images/new-website/services/web_icon2-1.png" width="100%" alt="">
            </div>
            <h4>Call Centre / Help Desk</h4>
            <p>Customers can log in a request for service or seek technical assistance via our Call Centre or Helpdesk. Our support teams are ready to provide troubleshooting via e-mail, phone call or fax.</p>
        </div>
        <div class="flex-4">
            <div class="pd-img">
                <img src="images/new-website/services/web_icon2-2.png" width="100%" alt="">
            </div>
            <h4>Depot Repair</h4>
            <p>Send your hardware to a convenient depot location specified by us; a repair expert will diagnose the problem and provide a free repair estimate. Your repair will be performed within 48 hours of approval. Every repair includes guaranteed workmanship, realignment, testing and return to factory specifications utilizing only original parts.</p>
        </div>
        <div class="flex-4">
            <div class="pd-img">
                <img src="images/new-website/services/web_icon2-3.png" width="100%" alt="">
            </div>
            <h4>Extended warranty and Product service contracts</h4>
            <p>The extended warranty and service contracts can be purchased for a vast majority of our hardware products. Our product experts can help you with the right plan that will extend the life of your purchased product and help you minimize downtime. Our extended warranty and service contracts are also available for purchase when you purchase your hardware equipment.</p>
        </div>
        <div class="flex-4">
            <div class="pd-img">
                <img src="images/new-website/services/web_icon2-4.png" width="100%" alt="">
            </div>
            <h4>Onsite Repair</h4>
            <p>A factory-trained technician will arrive at your location in Bangkok and outskirts within 24-48 hours of your service call equipped with the parts needed to perform repair on the first visit. This service is available for purchase of extended warranty and/or product service contact.</p>
        </div>
        <div class="flex-4">
            <div class="pd-img">
                <img src="images/new-website/services/web_icon2-5.png" width="100%" alt="">
            </div>
            <h4>User Training</h4>
            <p>We offer user training, seminar on all our products and solutions at our office or clients’ place. Users will learn to configure, operate, maintain and troubleshoot the hardware and software.</p>
        </div>
        <div class="flex-4">
            <div class="pd-img">
                <img src="images/new-website/services/web_icon2-6.png" width="100%" alt="">
            </div>
            <h4>Consulting Services</h4>
            <p>We offer customers a wide variety of consulting services, which include efficiency planning, business process design, integration and mobility technology trend. We seek to provide an integrated solution that fits our clients’ needs today and in the future.</p>
        </div>
    </div>
</div>
</section>
<section>
    @include('includes/send-email-1')
</section>


</div>


<section>
    <div class="copy-right">
        <p>Copyright © 2020 DATABAR - All Right Reserved</p>
    </div>
</section>

@endsection
