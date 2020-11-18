@extends('layouts/main')

@section('title' , '42Gears | Mobile Device Manegement | Unified Enterprise Management | DATABAR COMPANY LIMITED')

@section('link')
    <link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/landing-page/main.css')}}">

@endsection

@section('content')
    <section>
        <div class="banner-background">
            <div class="row m-auto">
                <div class="flex-1 ">
                    <div class="img-visionary">
                        <img style="width:100%" src="{{ URL::asset('/images/42gears/landing-page/42Gears-Visionary.png') }}" alt="#">
                    </div>
                </div>
                <div class="flex-2">
                    <div class="img-42gears">
                        <img style="width:100%;" src="{{ URL::asset('/images/42gears/landing-page/42Gears-White-Logo.png') }}" alt="#">
                    </div>
                    <h3 class="text-banner text-right">Choose the best Unified Endpoint Management with our solutions</h3>
                </div>
            </div>
        </div>
            {{-- <img style="width: 100%" src="{{ URL::asset('/images/42gears/landing-page/IoT-Banner-3.png') }}" alt="#"> --}}
    </section>


    <section>
        <div class="container">
            <div class="row padding-20">
                <div class="col-md-12 col-lg-6">
                    <img src="{{ URL::asset('/images/42gears/landing-page/suremdm.png') }}" alt="SureMDM">

                        <p class="manage-p" >
                                SureMDM completes the ecosystem of our products by offering robust unified endpoint management capabilities. It is a comprehensive yet very simple and intuitive cloud solution that supports all major browsers and provides a centralized view of all connected devices. With SureMDM, tracking device activity, monitoring device health or analyzing device usage becomes really easy.
                        </p>

                    <div class="underline-animation">
                        <a href="{{ route('42gears.sureMDM') }}" class="link-learnmore ">Learn&nbspMore</a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 mobile-img align-items-md-center justify-content-md-end">
                    <img src="{{ URL::asset('/images/42gears/landing-page/MDM.png') }}" alt="#" style="width:85%;">
                </div>
            </div>

            <div class="row padding-20">
                    <div class="col-md-12 col-lg-6">
                        <img src="{{ URL::asset('/images/42gears/landing-page/surelock.png') }}" alt="SureLock">
                        <p class="manage-p">
                                Businesses with mobile workforce require secure and uncompromisable devices to ensure responsible usage, improve productivity and reduce maintenance cost. Device Lockdown by allowing access to only required applications and preventing users from making any unintended changes is the solution. With SureLock, you can allow only desired applications to run and allow only admin access to either modify lockdown configurations or exit the lockdown.
                        </p>
                        <div class="underline-animation">
                            <a href="{{ route('42gears.sureLock') }}" class="link-learnmore ">Learn&nbspMore</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 mobile-img align-items-md-center justify-content-md-end">
                        <img src="{{ URL::asset('/images/42gears/landing-page/LOCK.png') }}" alt="#" style="width:85%;">
                    </div>
            </div>
            <div class="row padding-20">
                    <div class="col-md-12 col-lg-6">
                        <img src="{{ URL::asset('/images/42gears/landing-page/surefox.png') }}" alt="SureFox">
                        <p class="manage-p">
                                Corporate applications delivered on mobile devices are gaining traction in organizations of all sizes and industries. Securely delivering the application on a mobile device, and preventing unauthorized usage of the device naturally becomes a priority. Enterprise Secure Browser -  SureFox creates a Secure Browsing environment in Android and iOS devices, delivering corporate applications with a seamless web browsing experience.
                        </p>
                        <div class="underline-animation">
                            <a href="{{ route('42gears.sureFox') }}" class="link-learnmore ">Learn&nbspMore</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 mobile-img align-items-md-center justify-content-md-end" >
                        <img src="{{ URL::asset('/images/42gears/landing-page/FOX.png') }}" alt="#" style="width:85%;">
                    </div>
            </div>
            <div class="row padding-20" >
                    <div class="col-md-12 col-lg-6">
                        <img src="{{ URL::asset('/images/42gears/landing-page/surevideo.png') }}" alt="SureVideo">
                        <p class="manage-p">
                                SureVideo locks down Android and iOS devices to play only allowed media files - a simple yet powerful Digital Signage solution. Install SureVideo, access its password protected settings, specify media files you wish to play in lockdown mode and your device is ready to be used as a video playing kiosk at a mall, office, store etc.
                        </p>
                        <div class="underline-animation">
                            <a href="{{ route('42gears.sureVideo') }}" class="link-learnmore ">Learn&nbspMore</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 mobile-img align-items-md-center justify-content-md-end">
                        <img src="{{ URL::asset('/images/42gears/landing-page/VIDEO.png') }}" alt="#" style="width:85%;">
                    </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
