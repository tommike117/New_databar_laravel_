{{-- @extends('layouts/main-all-products') --}}
@extends('layouts/main-products-jingjingna')

{{-- Title Website --}}
@section('title','Sam4s | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/sam4s/index.css')}}">
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
                WHY SAM4S?
            </h2>
            <p class="text-sec-2">
                COMPLETE SYSTEM SUPPLIER
            </p>
            <p>
                <span class="text-color-1"> 100 +</span> <br>
                Number of SAM4S Product model
                POS, PDA, Printer, ECR, EFT POS Terminal, Peripheral
            </p>
            <p class="text-sec-2">
                EXPERIENCED R&D TEAM
            </p>
            <p>
                <span class="text-color-1"> 30Years + </span> <br>
                Over 30 Years of Experience for Retail Store Automation
            </p>
            <P class="text-sec-2">
                PRODUCTION CAPABILITY
            </P>
            <p>
                <span class="text-color-1"> 500,000 </span> <br>
                Annual production in SAM4S We have own
                production system from mold making to assembling
            </P>
            <P class="text-sec-2">
                TRUSTED PARTNERS
            </P>
            <p>
                <span class="text-color-1"> 60/80 </span> <br>
                60 Countries / 80 Partners
                Good business relationship with partners
            </P>
        </div>
    </div>
</section>
<section class="section-3">
    <div class="bg-section-3">
        <div class="text-section-3">
            <h2>
                RECEIPT PRINTERS
            </h2>
            <p>
                30% domestic market share, Reliable receipt printer
                Our receipt printers offer an outstanding value
                and speed for the retail and hospitality
            </p>
            <a href="/products/sam4s/receipt-printers">
                <button class="btn btn-banner button-head ">View more</button>
            </a>
            <div class="flex-sec-3">
                <div>
                    <figure>
                        <img src="/images/new-website/products/sam4s/20171102114048_pdt.jpg" class="pic-1" width="50%" alt="accessory">
                    </figure>
                    <h2>
                        Receipt Printer <br>
                        GIANT PRO
                    </h2>
                    <p>
                        NFC Receipt printers
                    </p>
                    <a href="/products/sam4s/receipt-printers">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
                <div>
                    <figure>
                        <img src="/images/new-website/products/sam4s/20171102124616_pdt.jpg" class="pic-2" width="50%" alt="accessory">
                    </figure>
                    <h2>
                        Receipt Printer <br>
                        GIANT-100
                    </h2>
                    <p>
                        COMPACT Receipt printers
                    </p>
                    <a href="/products/sam4s/receipt-printers">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
            </div>
        </div>
        <figure class="only-mobile">
            <img src="/images/new-website/products/sam4s/sam_pic750-03.png" width="100%" alt="Receipt Printer">
        </figure>
    </div>
</section>
<section class="section-4">
    <div class="bg-section-4">
        <div class="text-section-4">
            <h2>
                HANDHELD COMPUTER
            </h2>
            <p>
                Over 90% domestic market share in
                Department stores More Than You Think, Mobile Solution
            </p>
            <a href="/products/ram-mounts/tablet-mounts">
                <button class="btn btn-banner button-head ">View more</button>
            </a>
            <div class="flex-sec-3">
                <div>
                    <figure>
                        <img src="/images/new-website/products/sam4s/20171031173649_pdt.jpg" class="pic-1" width="50%" alt="accessory">
                    </figure>
                    <h2>
                        Receipt Printer <br>
                        GIANT-100
                    </h2>
                    <p>
                        COMPACT Receipt printers
                    </p>
                    <a href="/products/ram-mounts/tablet-mounts">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
                <div>
                    <figure>
                        <img src="/images/new-website/products/sam4s/20171031174224_pdt(0).jpg" class="pic-2" width="50%" alt="accessory">
                    </figure>
                    <h2>
                        Receipt Printer <br>
                        GIANT-100
                    </h2>
                    <p>
                        COMPACT Receipt printers
                    </p>
                    <a href="/products/ram-mounts/tablet-mounts">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
            </div>
        </div>
        <figure class="only-mobile">
            <img src="/images/new-website/products/sam4s/sam_pic750-04.png" width="100%" alt="Receipt Printer">
        </figure>
    </div>
</section>

<section>
    @include('includes/footer')
</section>

@endsection


@section('script')



@endsection
