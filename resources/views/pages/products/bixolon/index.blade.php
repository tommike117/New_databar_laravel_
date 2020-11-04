@extends('layouts/main-all-products')

{{-- Title Website --}}
@section('title','bixolon | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/bixolon/index.css')}}">
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
                A Better Solution for <br> your Business™
            </h2>
            <p>
                BIXOLON, a global manufacturer of advanced portable printers,
                Receipt, Label, and Mobile Printers offer both exciting
                and innovative POS and Mobile printing technologies
                for an array of industries such as Retail, Hospitality,
                Healthcare, Banking, Logistics and more.
                Contact our team to talk through our products
                so that we can help choose the perfect device for you.
            </p>
            <p>
                Our devices are a favourite in a range of industries for
                their speed and reliability. You can imagine when in
                a lot of industries, such as retail, this can improve
                customer satisfaction and customer flow and therefore
                help increase profitability within the shops.
            </p>
            <p>
                Setting the standard in printing technology,
                BIXOLON is an essential tool for any business.
                We offer the top of the range POS products.
                Our range of portable printers supports USB, Wifi,
                Bluetooth and NFC Auto Pairing Technology.
                Our devices also support Apple, Windows,
                Android and Symbian platforms.
            </p>
            <p>
                Choose from the categories above to go through our range
                and select the perfect one for your business.
            </p>
        </div>
    </div>
</section>
<section class="section-3">
    <div class="bg-section-3">
        <div class="text-section-3">
            <h2>
                POS Printers
            </h2>
            <p>
                BIXOLON’s range of POS printers are perfectly
                designed to meet customer requirements within both
                retail and hospitality. Whether you require speedy
                printing for receipts at a dining table or efficient
                printing of tickets at a venue, the superfast printing
                and excellent redability offered by our selection of
                POS printers is certain to serve the needs of you and
                your customers.
            </p>
            <a href="/products/bixolon/pos-printer">
                <button class="btn btn-banner button-sec-3 ">View more</button>
            </a>
            {{-- <a href="/contact" class="tab-mobile-none">
                <button class="btn btn-banner">View more</button>
            </a> --}}
            <div class="flex-sec-3">
                <div>
                    <figure>
                        <img src="/images/new-website/products/bixolon/hi_-01.png" class="pic-1"  alt="accessory">
                    </figure>
                    <h2>
                        SRP-Q300 Series
                    </h2>
                    <p>
                        Durable and Cost-Efficient POS Printer
                    </p>
                    <a href="/products/bixolon/pos-printer">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
                <div>
                    <figure>
                        <img src="/images/new-website/products/bixolon/hi_-02.png" class="pic-2"  alt="accessory">
                    </figure>
                    <h2>
                        SRP-275lll
                    </h2>
                    <p>
                        MMFi Bluetooth / WiFi mobile receipt printer
                    </p>
                    <a href="/products/bixolon/pos-printer">
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
                Mobile Printers
            </h2>
            <p>
                BIXOLON’s mobile printers are already used by
                customers around the world for labelling, receipting,
                ticketing and reporting. In fact, since launching our
                mobile printers in 2007, they have helped change the
                mobile printing industry drastically. This is partly due
                to the fantastic SDK’s available Apple™ (with MFI Certification),
                Android™, Windows™ & Symbian™ platforms.
            </p>
            <a href="/products/bixolon/mobile-printer">
                <button class="btn btn-banner button-sec-3 ">View more</button>
            </a>
            <div class="flex-sec-3">
                <div>
                    <figure>
                        <img src="/images/new-website/products/bixolon/hi_-03.png" class="pic-3"  alt="accessory">
                    </figure>
                    <h2>
                        SPP-R210
                    </h2>
                    <p>
                        Bluetooth / WiFi Receipt nad Lable Mobile Printer
                    </p>
                    <a href="/products/bixolon/mobile-printer">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
                <div>
                    <figure>
                        <img src="/images/new-website/products/bixolon/hi_-04.png" class="pic-4" alt="accessory">
                    </figure>
                    <h2>
                        SPP-R310
                    </h2>
                    <p>
                        MFi Bluetooth / WiFi mobile receipt printer
                    </p>
                    <a href="/products/bixolon/mobile-printer">
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

{{-- <script src="{{URL::to('/js/page-js/navbar/navtop-only-brands.js')}}"></script> --}}

@endsection
