@extends('layouts/main-all-products')

@section('title', '42Gears | SureLock Android | Mobile Device Manegement | Unified Enterprise Management | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')



@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/42gears/sure_fox_android.css')}}">
@endsection




@section('content')
<div class="bg-body">
    <section class="section-1">
        <div class="bg-1">
            <div class="text-sup-1">
                <h2 class="head-1">
                    SureFox for Android
                </h2>
                <h3>
                    CONVERT ANDROID DEVICES INTO INTERNET KIOSKS
                </h3>
                <p>
                    ■ Restrict users to only selected websites <br>
                    ■ Prevent device misuse <br>
                    ■ Easy remote configuration <br>
                    ■ Collect application usage data
                </p>
            </div>
            <div class="button">
                <a href="/contact">
                    <button class="btn btn-banner">Contact now</button>
                </a>
            </div>
            <div class=" text-1 mobile-none">
                <h2 class="head-1">
                    SureFox Pro Features
                </h2>
                <h3>
                    Includes all features of SureFox Basic plus :
                </h3>
                <p>
                    ■ Kiosk Mode <br>
                    ■ Suppress system notifications <br>
                    ■ Allow website launch from custom toolbar <br>
                    ■ Allow launching applications from webpages
                </p>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class=" text-1 desktop-none">
            <h2 class="head-1">
                SureFox Pro Features
            </h2>
            <h3>
                Includes all features of SureFox Basic plus :
            </h3>
            <p>
                ■ Kiosk Mode <br>
                ■ Suppress system notifications <br>
                ■ Allow website launch from custom toolbar <br>
                ■ Allow launching applications from webpages
            </p>
        </div>
        </div>
        <div class="text-2">
            <h2>
                Features
            </h2>
            <p>
                ■ Lockdown Android devices with restricted access to selected applications. <br>
                ■ Display widgets on home screen <br>
                ■ Display application shortcuts <br>
                ■ Block user from altering system settings <br>
                ■ Set passwords for chosen applications <br>
                ■ Auto launch applications at startup <br>
                ■ Control access to peripherals (WiFi, Bluetooth, Camera, Screen Orientation, Airplane mode, Audio, GPS, etc.) <br>
                ■ Customize home screen (Layout, Application captions, Wallpaper, screensaver etc.)
            </p>
            <h2>
                Advanced Features
            </h2>
            <p>
                ■ Restrict access to Safe mode of the device. <br>
                ■ Restriction of Wi-fi / mobile data access for applications. <br>
                ■ Single application mode <br>
                ■ Hide the icon of an allowed application <br>
                ■ Application idle timeout <br>
                ■ Disable status bar and notification panel <br>
                ■ Disable power button <br>
                ■ Delay application launch <br>
                ■ Selectively allow or block individual child windows <br>
                ■ Restrict device usability while driving <br>
                ■ Collect application usage data (launch time, duration of usage, etc.) <br>
                ■ Multi-user profile settings <br>
                ■ Samsung Knox feature integrated with SureLock <br>
                ■ Remotely deploy SureLock configuration from Cloud or by using SureMDM
            </p>
        </div>
        <section class="section-3">
            <a href="/products">Products</a><span style="color: #707070af;"> > </span>
            <a href="/products/42gears">42Gears</a><span style="color: #707070af;"> > </span>
            <a href="/products/42gears/sure_lock">Sure Lock</a><span style="color: #707070af;"> > </span>
            <a href="#" style="font-weight: 600; color: #707070;">Android</a>
         </section>

</div>
<section>
    @include('includes/footer')
</section>

@endsection



@section('script')


@endsection
