{{-- @extends('layouts/main-all-products') --}}
@extends('layouts/main-products-jingjingna')

{{-- Title Website --}}
@section('title','Unitech | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/unitech/index.css')}}">
@endsection

{{-- Body HTML --}}
@section('content')
<section class="section-1">
    <div class="bg-section-1">
    </div>
</section>

<section class="section-2">
    <div class="bg-section-2">
        <div class="text-section-2">
            <h2>
                Who We Are
            </h2>
           <p>
                Founded in 1979 in Taiwan, unitech is a global provider of AIDC (Automatic Identification and Data Capture) technologies with over 40 years
                experience.
           </p>
            <p>
                Unitech offers a wide range of products such as enterprise mobile computers, rugged handheld PDAs, industrial tablets,
                barcode scanners, RFID readers and IoT solutions. We bring value to customers in various applications in logistics, healthcare, retail,
                warehousing, manufacturing, government and transportation and field services.
            </P>
        </div>
    </div>
</section>
<section class="section-3">
    <div class="bg-section-3">
        <div class="text-section-3">
            <h2>
                Mobile Computer
            </h2>
            <p>
                The Rugged Mobile Computer product line is
                defined by ergonomic design, versatility,
                and durability, for use in enterprise,
                industrial and harsh environments.
                Our Windows-based and Android-based
                handheld devices feature a wide range of
                connectivity options, development software
                and strong database integration. We develop
                mobile computers that provide our customers
                with value-driven solutions that meet their business needs.
            </p>
            <a href="/products/unitech/mobile-computer">
                <button class="btn btn-banner button-head ">View more</button>
            </a>
            <div class="flex-sec-3">
                <div>
                    <figure>
                        <img src="/images/new-website/products/unitech/pic_phone_1.jpg" class="pic-1" width="50%" alt="accessory">
                    </figure>
                    <h2>
                        EA630
                    </h2>
                    <p>
                        Rugged Smartphone
                    </p>
                    <a href="/products/unitech/mobile-computer/ea630">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
                <div>
                    <figure>
                        <img src="/images/new-website/products/unitech/pic_phone_2.jpg" class="pic-2" width="50%" alt="accessory">
                    </figure>
                    <h2>
                        EA602
                    </h2>
                    <p>
                        Rugged Smartphone
                    </p>
                    <a href="/products/unitech/mobile-computer/ea602">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
            </div>
        </div>
        <figure class="only-mobile">
            <img src="/images/new-website/products/unitech/Uni_750-03.jpg" width="100%" alt="label printers">
        </figure>
    </div>
</section>

<section class="section-4">
    <div class="bg-section-4">
        <div class="text-sec-4">
            <h2>
                EnterpriseTablets
            </h2>
            <p>
                Featuring superior 2D barcode imaging technology,
                it ensures read reliability for mobile phone screens and
                paper in any orientation.We develop Tablets that provide
                our customers with value-driven solutions that meet their
                business needs.
            </p>
            <a href="/products/unitech/enterprise-tablet">
                <button class="btn btn-banner button-head ">View more</button>
            </a>
            <div class="row">
                <div class="col-6">
                    <figure>
                        <img src="/images/new-website/products/unitech/pic_phone_Tap1.jpg" class="pic-3" width="50%" alt="accessory">
                    </figure>
                    <h2>
                        TB162
                    </h2>
                    <p>
                        Window 10 Rugged Tablet
                    </p>
                    <a href="/products/unitech/enterprise-tablet">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
                <div class="col-6">
                    <figure>
                        <img src="/images/new-website/products/unitech/pic_phone_Tap2.jpg" class="pic-4" width="50%" alt="accessory">
                    </figure>
                    <h2>
                        TB85
                    </h2>
                    <p>
                        Android Rugged Tablet
                    </p>
                    <a href="/products/unitech/enterprise-tablet">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
            </div>
        </div>
                <figure class="only-mobile">
                    <img src="/images/new-website/products/unitech/Uni_750-04.jpg" width="100%" alt="label printers">
                </figure>
    </div>
</section>


<section>
    @include('includes/footer')
</section>

@endsection


@section('script')



@endsection
