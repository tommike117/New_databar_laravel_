{{-- @extends('layouts/main-all-products') --}}
@extends('layouts/main-products-jingjingna')

{{-- Title Website --}}
@section('title','Datalogic | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/datalogic/index.css')}}">
@endsection

{{-- Body HTML --}}
@section('content')
<section class="section-1">
    <div class="bg-section-1">
        <div class="text-banner">
            <img src="/images/new-website/products/datalogic/logo-01.png" alt="datalogic">
            <p>Our full range of barcode scanner products includes Fixed Retail Scanners,
            Hand Held Scanners, Mobile Computer, Sensors, Laser Marking Systems,
             Safety, Vision Systems, Stationary Industrial Scanners, RFID Systems
            and OEM Barcode Readers.</p>
        </div>
    </div>
</section>

<section class="section-2">
    <div class="bg-section-2">
        <div class="text-section-4">
            <h2>
                Barcode Scanners
            </h2>
            <p>
                Data collection products with outstanding performance and unyielding reliability: Tethered or cordless, Laser linear or area imaging technology, With standard, rugged or antimicrobial enclosure, Patented green spot good read indication.
            </p>
            <a href="/products/datalogic/barcode-scanners">
                <button class="btn btn-banner button-sec-3 ">View more</button>
            </a>
            <div class="flex-sec-3">
                <div>
                    <figure>
                        <img src="/images/new-website/products/datalogic/Magellan 1500i-882x882.png" width="60%" alt="accessory">
                    </figure>
                    <h2>
                        Magellan 1500i
                    </h2>
                    <p>
                        Barcode Scanners General
                    </p>
                    <a href="#">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
                <div>
                    <figure>
                        <img src="/images/new-website/products/datalogic/QuickScan I QD2400.png" width="60%" alt="accessory">
                    </figure>
                    <h2>
                        QuickScan I QD2400
                    </h2>
                    <p>
                        Barcode Scanners Industrial
                    </p>
                    <a href="#">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-3">
    <div class="bg-section-3">
        <div class="text-section-3">
            <h2>
                Mobile Computers
            </h2>
            <p>
                The offer of the business unit Mobile Computers includes pocket-sized to full-alpha-keyboard hand-held devices, industrial PDAs, pistol-grip terminals, Vehicle Mount Computers and a very complete choice of middleware SW solutions, which guarantee our partners and end users the highest level of compatibility and openness to industry standards.
            </p>
            <a href="/products/datalogic/mobile-computers">
                <button class="btn btn-banner button-sec-3 ">View more</button>
            </a>
            <div class="flex-sec-3">
                <div>
                    <figure>
                        <img src="/images/new-website/products/datalogic/Memor20Web.png" width="60%" alt="accessory">
                    </figure>
                    <h2>
                        Memor-20
                    </h2>
                    <p>
                        Mobile Computers (PDA)
                    </p>
                    <a href="#">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
                <div>
                    <figure>
                        <img src="/images/new-website/products/datalogic/FalconX4_882x882.png" width="60%" alt="accessory">
                    </figure>
                    <h2>
                        Falcon X4
                    </h2>
                    <p>
                        Mobile Computers (PDA)
                    </p>
                    <a href="#">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-4">
    <div class="bg-section-4">
        <div class="text-section-4">
            <h2>
                Automation
            </h2>
            <p>
                Automation
Engineered for applications that are not permanently monitored by operators: Bar code reading for track & trace, Omnidirectional stations for sorting and tracking, Image processing for inspection and quality control, OCR and OCV for verification, Most used industrial interfaces and protocols, Easy integration in any industrial installation.
            </p>
            <a href="/products/datalogic/automation">
                <button class="btn btn-banner button-sec-3 ">View more</button>
            </a>
            <div class="flex-sec-3">
                <div>
                    <figure>
                        <img src="/images/new-website/products/datalogic/AV900.png" width="60%" alt="accessory">
                    </figure>
                    <h2>
                        AV900
                    </h2>
                    <p>
                        Stationary Industrial Scanners
                    </p>
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
                <div>
                    <figure>
                        <img src="/images/new-website/products/datalogic/M120-ETH-USB.png" width="60%" alt="accessory">
                    </figure>
                    <h2>
                        MATRIX 120
                    </h2>
                    <p>
                        Vision Systems
                    </p>
                    <a href="/contact">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
            </div>
    </div>
</section>

<section>
    @include('includes/footer')
</section>

@endsection


@section('script')



@endsection
