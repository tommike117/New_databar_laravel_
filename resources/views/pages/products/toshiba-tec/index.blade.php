{{-- @extends('layouts/main-all-products') --}}
@extends('layouts/main-products-jingjingna')

{{-- Title Website --}}
@section('title','Toshiba TEC | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/toshiba-tec/index.css')}}">
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
                Who we are
            </h2>
            <p>
                Toshiba Tec Thailand, is a leading provider of
                technology system and solutions in Thailand.
                Toshiba delivers technology and products
                remarkable for their innovation and artistry –
                contributing to a safer, more comfortable,
                more productive life.
            </P>
            <p style="font-size: 1vw" class="text-p-sec-2">
                Creating our product with pride and passion. <br>Keeping our cutomer in mind all the time and everywhere.
            </p>
        </div>
    </div>
</section>
<section class="section-3">
    <div class="bg-section-3">
        <div class="text-section-3">
            <h2>
                Label Printers
            </h2>
            <p>
                The B-SA4TP brings the performance of an industrial printer into your office. <br>The B-SA4TP offers the efficiency and reliability of an industrial printer in the compact body of a desktop printer. Its ergonomic design makes the B-SA4TP the printer of choice for any quiet office situation with no compromise on performance, image quality, and reliability. As business life often requires reactivity, the B-SA4TP has been designed to provide maximum flexibility and ease of use to adapt to changing requirements.
            </p>
            <a href="/products/toshiba-tec/label-printers">
                <button class="btn btn-banner button-head ">View more</button>
            </a>
            <div class="flex-sec-3">
                <div>
                    <figure>
                        <img src="/images/new-website/products/toshiba-tec/Toshiba-B-SA4TP-links-Eti.jpg" class="pic-1" width="50%" alt="accessory">
                    </figure>
                    <h2>
                        Receipt Printer <br>
                        GIANT PRO
                    </h2>
                    <p>
                        NFC Receipt printers
                    </p>
                    <a href="/products/toshiba-tec/label-printers">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
                <div>
                    <figure>
                        <img src="/images/new-website/products/toshiba-tec/B-SA4TM-R.jpg" class="pic-2" width="50%" alt="accessory">
                    </figure>
                    <h2>
                        Receipt Printer <br>
                        GIANT-100
                    </h2>
                    <p>
                        COMPACT Receipt printers
                    </p>
                    <a href="/products/toshiba-tec/label-printers">
                        <button class="btn btn-banner button-sec-3 ">View more</button>
                    </a>
                </div>
            </div>
        </div>
        <figure class="only-mobile">
            <img src="/images/new-website/products/toshiba-tec/750-03.jpg" width="100%" alt="label printers">
        </figure>
    </div>
</section>


<section>
    @include('includes/footer')
</section>

@endsection


@section('script')



@endsection
