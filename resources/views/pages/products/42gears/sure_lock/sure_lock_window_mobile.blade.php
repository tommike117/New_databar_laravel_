@extends('layouts/main-all-products')

@section('title', '42Gears | SureLock window mobile | Mobile Device Manegement | Unified Enterprise Management | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')



@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/42gears/sure_lock_window_mobile.css')}}">
@endsection




@section('content')
<div class="bg-body">
    <section class="section-1">
        <div class="bg-1">
            <div class="text-sup-1">
                <h2 class="head-1">
                    SureLock for Windows Mobile & CE
                </h2>
                <h3>
                    LOCKDOWN RUGGED DEVICES INTO KIOSK MODE
                </h3>
                <p>
                    ■ Restrict users to allowed applications only <br>
                    ■ Block users from accessing home screen <br>
                    ■ Block user from changing system settings <br>
                    ■ Password security feature <br>
                    ■ Leading Windows Rugged device lockdown solution
                </p>
            </div>
            <div class="button">
                <a href="/contact">
                    <button class="btn btn-banner">Contact now</button>
                </a>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="text-2">
            <h2>
                Overview
            </h2>
            <p>
                ■ Lock down Windows Mobile and Windows CE devices <br>
                ■ Allow user to launch and use allowed applications only <br>
                ■ Disable installation of third-party programs (cabs or from desktop) <br>
                ■ Block users from deleting applications <br>
                ■ Disable keypad <br>
                ■ Disable ActiveSync <br>
                ■ Disable Autorun <br>
                ■ Administrator access<br>
                ■ Bundle multiple CABs into a single CAB for easier installation<br>
                ■ Remote cab update support<br>
                ■ Fullscreen support<br>
                ■ Launch applications in desired order during startup<br>
                ■ Custom Icons in Kiosk Main Screen<br>
                ■ Phone Signal Strength icon<br>
                ■ WiFi Signal Strength icon<br>
                ■ Display current date and time on kiosk launcher screen<br>
                ■ View IP Address of the mobile device<br>
                ■ Volume Control<br>
                ■ Align Screen (Stylus Calibration)<br>
                ■ Custom TaskManager<br>
                ■ Battery Indicator<br>
                ■ Enable Windows Mobile taskbar<br>
                ■ Install cab directly from SureLock Studio<br>
                ■ Enable logging in kiosk mode (Useful during development and integration)<br>
                ■ Device branding (Change background, colors on Kiosk Main Screen)<br>
                ■ Quickly allow built-in applications without typing anything<br>
                ■ Remote Manager<br>
                &nbsp;&nbsp;&nbsp; - Remotely access active window properties<br>
                &nbsp;&nbsp;&nbsp; - Easily identify the path of device applications<br>
                &nbsp;&nbsp;&nbsp; - Remotely capture screenshots<br>
                &nbsp;&nbsp;&nbsp; - Remote device reset
            </p>
        </div>
        <section class="section-3">
            <a href="/products">Products</a><span style="color: #707070af;"> > </span>
            <a href="/products/42gears">42Gears</a><span style="color: #707070af;"> > </span>
            <a href="/products/42gears/sure_lock">Sure Lock</a><span style="color: #707070af;"> > </span>
            <a href="#" style="font-weight: 600; color: #707070;">Window Mobile & CE</a>
         </section>

</div>
<section>
    @include('includes/footer')
</section>

@endsection



@section('script')


@endsection
