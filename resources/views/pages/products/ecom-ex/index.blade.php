{{-- @extends('layouts/main-all-products') --}}
@extends('layouts/main-products-jingjingna')

{{-- Title Website --}}
@section('title','Ecom-ex | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/ecom-ex/index.css')}}">
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
                Your safety is our top priority.
            </h2>
            <p>
                Ecom instruments is an innovative company which is characterised
                by its integrity, professionalism, high levels of expertise and reliability
                in realising demanding projects in the field of explosion - shielded
                products.Your requirements are accommodated by our employees
                around the world. We regard ourselves as a partner to customers
                from the most diverse sectors, which include the chemical,
                petrochemical, pharmaceutical and mining industry to name
                but a few.
            </p>
            <p>
                Exploring Mobility in our four core disciplines of Mobile Computing,
                Communication, Measuring & Calibration and Handlamps we offer
                a huge variety of innovative and proven solutions.
            </p>
            <p>
                Immaterial whether you are looking for an industrial PDA,
                mobile phone, measuring device or torch : products from ecom
                are thought-out to the finest detail, combine uncompromising
                safety features with maximum functionality, and come with
                all of the necessary approvals and certification for
                use in your area of application.
            </p>
        </div>
    </div>
</section>
<section class="section-3">
    <div class="bg-section-3">
        <div class="text-section-3">
            <h2>
                Tablets for hazardous areas
            </h2>
            <p>
                The Tab-Ex® 02, based on the latest Samsung Galaxy Tab Active2,
                combines high performance with innovative applications such as
                augmented reality. With the Tab-Ex® 02, the mobile user can
                communicate in real-time, anytime, anywhere, as well as collect
                and retrieve data, parameters and information remotely.
            </p>
            <a href="/products/ecom-ex/tablet">
                <button class="btn btn-banner button-sec-3 ">View more</button>
            </a>
            {{-- <a href="/contact" class="tab-mobile-none">
                <button class="btn btn-banner">View more</button>
            </a> --}}
            <div class="flex-sec-3">
                <div>
                    <figure>
                        <img src="/images/new-website/products/ecom-ex/ecom-01.png" class="pic-1" width="65%" alt="accessory">
                    </figure>
                    <h2>
                        Tab-Ex® 02
                    </h2>
                    <p>
                        Ensuring and maximizing mobile worker's efficiency & productivity
                    </p>
                    <a href="/products/ecom-ex/tablet">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
                <div>
                    <figure>
                        <img src="/images/new-website/products/ecom-ex/ecom-02.png" class="pic-2" width="65%" alt="accessory">
                    </figure>
                    <h2>
                        Pad-Ex® 01 P8 DZ2
                    </h2>
                    <p>
                        Rugged revolution thin, light and strong.
                    </p>
                    <a href="/products/ecom-ex/tablet">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="section-4">
    <div class="bg-section-4">
        <div class="text-section-4">
            <h2>
                Smartphones protection
            </h2>
            <p>
                The Tab-Ex® 02, based on the latest Samsung Our Vision is to
                fully exploit the potential of interconnected hand portable devices
                centred on a computing hub. Already known for our Quality,
                Reliability and High Performance ecom and its partners innovate
                and enable the mobile worker to operate even more efficiently
                and safely with multipurpose hardware, applications, service
                and support from a single provider.The ecom App Library
                presents a wide collection of enabling partner applications.
            </p>
            <a href="/products/ecom-ex/smartphone">
                <button class="btn btn-banner button-sec-3 ">View more</button>
            </a>
            <div class="flex-sec-3">
                <div>
                    <figure>
                        <img src="/images/new-website/products/ecom-ex/smart-ex_02_teaser_01.png" class="pic-3" width="60%" alt="accessory">
                    </figure>
                    <h2>
                        Smart-Ex® 02 DZ1
                    </h2>
                    <p>
                        The world's first intrinsically safe smartphone for Zone 1/21 and DIV 1 areas.
                    </p>
                    <a href="/products/ecom-ex/smartphone">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
                <div>
                    <figure>
                        <img src="/images/new-website/products/ecom-ex/smart-ex_02_dz2_teaser_01.png" class="pic-4" width="60%" alt="accessory">
                    </figure>
                    <h2>
                        Smart-Ex® 02 DZ2
                    </h2>
                    <p>
                        Safe smartphone Smart-Ex® 201 for Zone 2/22 and DIV 2 areas.
                    </p>
                    <a href="/products/ecom-ex/smartphone">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
        </div>
    </div>
</section> --}}

<section>
    @include('includes/footer')
</section>

@endsection


@section('script')



@endsection
