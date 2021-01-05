@extends('layouts/main-all-products')

@section('title', '42Gears | SureLock window | Mobile Device Manegement | Unified Enterprise Management | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')



@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/42gears/sure_lock_window.css')}}">
@endsection




@section('content')
<div class="bg-body">
    <section class="section-1">
        <div class="bg-1">
            <div class="text-sup-1">
                <h2 class="head-1">
                    SureLock for Windows
                </h2>
                <h3>
                    CONVERT WINDOWS PCS AND TABLETS INTO PUBLIC KIOSKS
                </h3>
                <p>
                    ■ Restrict access to specific applications <br>
                    ■ Restrict access to specific websites <br>
                    ■ Prevent unwanted malicious use <br>
                    ■ Keyboard blocking and filtering
                </p>
            </div>
            <div class="button">
                <a href="/contact">
                    <button class="btn btn-banner">Contact now</button>
                </a>
            </div>
            <div class="text-1 mobile-none">
                <h2>
                    Overview
                </h2>
                <p>
                    Dedicated or public use kiosks based on Windows operating systems are often deployed in locations that cannot
                    always be monitored by the IT team. It is important to maintain the security of these kiosks and protect them from intentional or unintentional misuse by users. SureLock for Windows transforms a Windows based computer or tablet by locking them into a secure kiosk system. This allows IT administrators to restrict the use of these kiosks to only desired applications and functions.
                </p>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="text-1 desktop-none">
            <h2>
                Overview
            </h2>
            <p>
                Dedicated or public use kiosks based on Windows operating systems are often deployed in locations that cannot
                always be monitored by the IT team. It is important to maintain the security of these kiosks and protect them from intentional or unintentional misuse by users. SureLock for Windows transforms a Windows based computer or tablet by locking them into a secure kiosk system. This allows IT administrators to restrict the use of these kiosks to only desired applications and functions.
            </p>
        </div>
        <div class="text-2">
            <h2>
                Features
            </h2>
            <p>
                ■ Allows only white-listed applications to run <br>
                ■ Allow browsing of only selected websites or URLs <br>
                ■ Auto-launch selected applications at system startup <br>
                ■ Auto-logon after system reboot <br>
                ■ Keyboard filtering and configuration <br>
                ■ Password protect settings <br>
                ■ Customize background wallpaper <br>
                ■ Disables access to Windows Task Manager <br>
                ■ Easy mass deployment using SureMDM
            </p>
            <h2>
                Supported Platforms
            </h2>
            <p>
                ■ Window 10 <br>
                ■ Window 8 <br>
                ■ Window 7
            </p>
        </div>
        <section class="section-3">
            <a href="/products">Products</a><span style="color: #707070af;"> > </span>
            <a href="/products/42gears">42Gears</a><span style="color: #707070af;"> > </span>
            <a href="/products/42gears/sure_lock">Sure Lock</a><span style="color: #707070af;"> > </span>
            <a href="#" style="font-weight: 600; color: #707070;">Window</a>
         </section>

</div>
<section>
    @include('includes/footer')
</section>

@endsection



@section('script')


@endsection
