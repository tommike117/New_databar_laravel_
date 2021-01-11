{{-- Include  --}}
@extends('layouts/main-products-jingjingna')

{{-- Title Website --}}
@section('title','ARMOR-X | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/armor-x/index.css')}}">

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
                ONE SYSTEM.<br>ENDLESS ADVENTURE.
            </h2>
            <p>
                Our vision has always been to create an unique design that allows you to make your urban life more active. Think ahead of time, ARMOR-X has created a slim and military-grade everyday case for your smartphone integrating of the mounting interface - X-MOUNT. It is a built-in interchangeable mounting solution to suit your modern urban lifestyle. This unique design allows the ARMOR-X cases and mounts to be much smaller than any others on the market.
            </p>
            <p>
                ARMOR-X helps you access your Strava, and other fitness or Navigation apps without any hassle. We keep your mobile devices safe and securely mounted when you are wandering the city or embarking upon any kind of sporting activity. Now you can use your smartphone or tablet in any extreme environment at any time without fear of damage. Simply "Slide, Lock & Go!"
            </p>
        </div>
    </div>
</section>
<section class="section-3">
    <div class="bg-section-3">
        <div class="text-section-3">
            <h2>
                SAMSUNG GALAXY NOTE 20<br>WATERPROOF CASE
            </h2>
            <p>
                ARMOR-X has created a protective case
                for your mobile device bundled With the patented X-Mount System,
                your smartphone or other devices can now latch on to anywhere
                you can possibly think of. Works seamlessly with
                your favourite APPs. Always let you stay connected with your friends.
            </p>
            {{-- <a href="/contact" class="tab-mobile-none">
                <button class="btn btn-banner">View more</button>
            </a> --}}
            <figure>
                <img src="/images/new-website/products/armor-x/product1_1.jpg" width="100%" alt="accessory">
            </figure>
            <a href="/products/armor-x/device-case/water-proof-case-note20">
                <button class="btn btn-banner button-sec-3 ">View more</button>
            </a>
        </div>
    </div>
</section>
<section class="section-4">
    <div class="bg-section-4">
        <div class="text-section-4">
            <h2>
                SAMSUNG GALAXY TAB ACTIVE PRO<br>RUGGED CASE WITH HAND STRAP &
                KICK-STAND & PEN HOLDER
            </h2>
            <p>
                ARMOR-X SAMSUNG GALAXY TAB ACTIVE PRO T545 T547
                Ultra 3 layers impact resistant design.
                Ultra 3 layers impact resistant design. Front raised edges recess
                your screen to protect it.when placed face down.
                All tablet Features, Buttons and sensitivity are
                accessible and easily operated with the case installed.
            </p>
            <figure class="desktop-none">
                <img src="/images/new-website/products/armor-x/product2_2.jpg" width="65%"alt="accessory-1">
            </figure>
            <figure class="tab-mobile-none">
                <img src="/images/new-website/products/armor-x/750px-04.png" width="65%"  alt="accessory-1" >
            </figure>
            <a href="/products/armor-x/device-case/rugged-case-gta-pro">
                <button class="btn btn-banner button-sec-4">View more</button>
            </a>
        </div>
    </div>
</section>
<section class="section-5">
    <div class="bg-section-5">
        <div class="text-section-5">
            <h2>
                DESIGN YOUR OWN GEAR NOW!
            </h2>
            <p>
                Firstly, choose your favourite phone case to protect your device from life’s daily hazards. Then, pick the right mount for your device. Finally, select the add-ons that cater to your specific needs. Simply attach your device with the Armor-X slide, lock, and go technology for a safe and secure connection.
            </p>
            <figure class="desktop-none">
                <img src="/images/new-website/products/armor-x/pic1920x1080-02.jpg" style="padding: 0 10%;
                width: 100%;" alt="accessory-3">
            </figure>
            <figure class="tab tab-mobile-none">
                <img src="/images/new-website/products/armor-x/pic-01.png" style="padding: 0 10%;
                width: 100%;" alt="accessory-3">
            </figure>
            <div class="text-product">
                <a class="hover-sec-5" style="border-right: solid 1px #4d4d4d;" href="/products/armor-x/device-case">Device Case</a>
                <a class="hover-sec-5" href="/products/armor-x/mounting-product">Mounting Product</a>
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
