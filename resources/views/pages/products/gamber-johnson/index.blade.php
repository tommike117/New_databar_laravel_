{{-- @extends('layouts/main-all-products') --}}
@extends('layouts/main-products-jingjingna')

{{-- Title Website --}}
@section('title','Gamber Johnson | DATABAR COMPANY LIMITED')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="{{URL::asset('/css/new-website/products/gamber-johnson/index.css')}}">
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
                Vehicle Interfacing Products
            </h2>
            <p>
                <strong>Console Systems</strong>  <br>
                Console systems are designed for police and other fleets that need to mount multiple radios and equipment within easy reach of the driver. The console system is made of two parts: a leg kit or top plate which secures the system to your vehicle’s frame and a vehicle-specific or universal console box to house your electronics. Add a computer mount, armrest, cup holder, microphone clip, or other accessory for a custom setup.
            </p>
            <p>
                <strong> Docking Stations / Cradles</strong> <br>
                Keep your laptop or tablet safe with a Gamber Johnson docking station or cradle. Docking stations replicate your computer’s ports such as USB, Ethernet, and RF and they’re ideal for when you have a printer or other peripheral electronics working with your computer. A cradle keeps your computer safe but doesn’t replicate any of the ports. It’s a better choice for when you simply want to mount a computer without any peripherals.
            </p>
            <figure class="tab-mobile-none" >
                <img src="/images/new-website/products/gamber-johnson/logo.jpg" alt="">
            </figure>
        </div>
    </div>
</section>
<section class="section-3">
    <div class="bg-section-3">
        <div class="text-section-3">
            <h2>
                Forklift Mounts
            </h2>
            <p>
                Gamber Johnson has the right solution for you and your fleet, no matter what device you are trying to mount. We work closely with top computer OEM’s such as Dell, Getac, Honeywell, Noax, Panasonic, Samsung, Xplore, and Zebra to ensure you can be confident in the fit and function of your mounting devices.
            </p>
            <a href="/products/gamber-johnson/folklift">
                <button class="btn btn-banner button-sec-3 ">View more</button>
            </a>
            <h2 class="text-sup-3" >
                Desktop Mounts
            </h2>
            <p>
                From an office desk or countertop, to
                a checkout station in a store or restaurant,
                 <br>-our mounting solutions range from fixed to
                full motion allowing you to adjust your computer
                in any direction for the best viewing angle.
            </p>
            <a href="/products/gamber-johnson/desktop-mounts">
                <button class="btn btn-banner button-sec-3 ">View more</button>
            </a>
        </div>
    </div>
</section>
<section class="section-4">
    <div class="bg-section-4">
        <div class="text-section-4">
            <h2>
                Zirkona Solutions
            </h2>
            <p>
                The Zirkona product line features an innovative
                encapsulated joiner that allows you to ratate your
                small, light-weight device (up to 11 Ibs depending on
                the joiner) to any angle.
            </p>
            <a href="/products/gamber-johnson/zirkona">
                <button class="btn btn-banner button-sec-3 ">View more</button>
            </a>
            <h2 class="text-sup-4" >
                Semi-Truck Mounts
            </h2>
            <p>
                The ELD mandate requires that semi-truck drivers
                use electronic logging devices to create a safer environment.
                With Gamber Johnson’s logistic mounts, we offer
                solutions designed with driver safety in mind.
                Our mounts are easy to install and features a sturdy
                platform for your tablet or phone.
            </p>
            <a href="/products/gamber-johnson/semi-truck">
                <button class="btn btn-banner button-sec-3 ">View more</button>
            </a>
        </div>
    </div>
</section>
<section class="section-5">
    <div class="bg-section-5">
        <div class="text-section-5">
            <h2>
                Customized Solutions
            </h2>
            <p class="text-sup-5" >
                Build your vehicle solution by finding your vehicle make,
                model, and year. Choose between a pedestal or console
                system for the equipment you want to mount. To integrate
                a computer, find a motion attachment or tablet display mount.
                Then complete your solution by choosing a compatible docking
                station or cradle based on your computer manufacturer.
            </p>
            <p>
                If you want to build your material handling solution, start by selecting the location on your forklift where you would like to mount a computer or equipment. Then, select the type of guard mount you need. To complete your solution, you may choose a docking station or cradle to fit your computer.
            </p>
            <a href="/products/gamber-johnson/mounting-product">
                <button class="btn btn-banner button-sec-3 ">View more</button>
            </a>
        </div>
    </div>
</section>


<section>
    @include('includes/footer')
</section>

@endsection


@section('script')



@endsection
