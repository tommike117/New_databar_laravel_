@extends('layouts/main')


@section('title', 'Mobile Device Management |sureMDM | 42gears | DATABAR COMPANY LIMITED')

@section('link')
<link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/suremdm/style.css')}}">
@endsection





@section('content')

<div class="container-fluid">
    <div class="row rowlogo" style="height:400px;">
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
            <div class="logo_42gears">
                <img src="{{ URL::asset('/images/42gears/suremdm/42-Gearslogo.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <section class="section_background" style="margin-top:15%;height:500px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <figure>
                    <img class="background" src="{{ URL::asset('/images/42gears/suremdm/background.jpg')}}"
                        style="width:100%;" alt="">
                </figure>
                <figure class="banner_image">
                    <img src="{{ URL::asset('/images/42gears/suremdm/banner-image.png')}}" style="width:400px;" alt="">
                </figure>
                <div class="banner_text" >
                    <label class="banner_text_line1" for="">SureMDM</label><br>
                    <p class="banner_text_line2">UNIFIED ENDPOINT MANAGEMENT</p><br>
                    <p class="banner_text_line3">ANDROID | iOS | WINDOWS | WEAR OS | LINUX | macOS | VR DEVICES</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div class="block-color">
                </div>
                <div class="block_color_content_animation" >
                    <label class="section1_text_line1" for="">Overview</label><br>
                    <p class="section1_text_line2" for="">SureMDM, powered by 42Gears UEM, is an intuitive and
                        powerful Enterprise Mobility Management (EMM) tool for Android, iOS, Windows, Linux and
                        macOS platforms. You can secure, monitor and manage company owned devices for dedicated
                        use as well as employee owned devices used to access company data (BYOD). SureMDM
                        incorporates all aspects of enterprise mobility through unified endpoint management such
                        as Mobile Application Management, Mobile Device Management and Mobile Content
                        Management.</p><br>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div class="block2-color">
                    <div>
                        <div class="width_block_content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label class="section2_text_line1" for="">Mobile Device Management</label><br>
                                    <p class="section2_text_line2">Remotely manage and secure your device fleet</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{ URL::asset('/images/42gears/suremdm/Quick-enrollment.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Device
                                                        Enrollment</label><br>
                                                    <p class="icon_device_text_line2" for="">Enroll devices in
                                                        seconds with
                                                        QR code scanning. Perform bulk enrollment. Secure enrollment
                                                        using
                                                        Active Directory authentication.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{ URL::asset('/images/42gears/suremdm/device-grouping.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Device
                                                        Grouping</label><br>
                                                    <p class="icon_device_text_line2" for="">Group devices based on
                                                        geographic location, business function or any other
                                                        criteria. Tag devices for easy classification and filtering.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{ URL::asset('/images/42gears/suremdm/Location-tracking.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Location
                                                        Tracking</label><br>
                                                    <p class="icon_device_text_line2" for="">Track devices on map
                                                        real-time, View historical location data. Geo Tag landmarks.
                                                        Push policies based on Geo-Fence.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{ URL::asset('/images/42gears/suremdm/UEM-analytic-engine.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">UEM Analytics
                                                        Engine</label><br>
                                                    <p class="icon_device_text_line2" for="">Track and monitor
                                                        trends and issues related to performance and usage of
                                                        business devices and applications.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{ URL::asset('/images/42gears/suremdm/Device-provisioning.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Device
                                                        Provisioning</label><br>
                                                    <p class="icon_device_text_line2" for="">Setup devices with
                                                        required apps and settings using default jobs and policies.
                                                        Provision with WiFi, Email, VPN settings.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{ URL::asset('/images/42gears/suremdm/Device-health-Monitoring.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Device Health
                                                        Monitoring</label><br>
                                                    <p class="icon_device_text_line2" for="">Monitor devices
                                                        remotely, setup battery and connectivity alert
                                                        notifications.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{ URL::asset('/images/42gears/suremdm/Device-Lock-down.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Device
                                                        Security</label><br>
                                                    <p class="icon_device_text_line2" for="">Remotely lock and wipe
                                                        devices, apply password policies.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div>
                    <div class="width_block_content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label class="section2_text_line1_green" for="">Mobile Application
                                    Management</label><br>
                                <p class="section2_text_line2_green">Deploy, manage, and secure apps on devices</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <figure>
                                                    <img class="icon_device_management"
                                                        src="{{ URL::asset('/images/42gears/suremdm/Configure-apps.png')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                                <label class="icon_device_text_line1_green" for="">Application
                                                    Distribution</label><br>
                                                <p class="icon_device_text_line2_green" for="">Push apps and updates
                                                    to mobile devices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <figure>
                                                    <img class="icon_device_management"
                                                        src="{{ URL::asset('/images/42gears/suremdm/Configure-apps.png')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                                <label class="icon_device_text_line1_green" for="">App
                                                    Management</label><br>
                                                <p class="icon_device_text_line2_green" for="">View installed
                                                    applications and versions on devices. Software asset management.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <figure>
                                                    <img class="icon_device_management"
                                                        src="{{ URL::asset('/images/42gears/suremdm/Distribute-apps.png')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                                <label class="icon_device_text_line1_green" for="">Enterprise App
                                                    Store</label><br>
                                                <p class="icon_device_text_line2_green" for="">Publish applications
                                                    to
                                                    Enterprise App Store. Allow users to download apps on-demand
                                                    through enterprise app store.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div class="block2-color_section2">
                    <div>
                        <div class="width_block_content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label class="section2_text_line1" for="">Mobile Content Management</label><br>
                                    <p class="section2_text_line2">Securely deliver data and keep it safe on devices
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{ URL::asset('/images/42gears/suremdm//Content-delivery.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Content
                                                        Delivery</label><br>
                                                    <p class="icon_device_text_line2" for="">Deliver content to
                                                        devices remotely.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{ URL::asset('/images/42gears/suremdm//Content-removal.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Content
                                                        Removal</label><br>
                                                    <p class="icon_device_text_line2" for="">Wipe or delete company
                                                        data from devices based on compliance policies such as
                                                        non-compliant password, un-enrollment from MDM.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{ URL::asset('/images/42gears/suremdm//Content-security.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Content
                                                        Security</label><br>
                                                    <p class="icon_device_text_line2" for="">Secure content on mobile
                                                        devices using containerization.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div>
                    <div class="width_block_content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label class="section2_text_line1_green" for="">Bring your Own Device (BYOD)
                                </label><br>
                                <p class="section2_text_line2_green">Give your employees the ability to use their
                                    personal device for work</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <figure>
                                                    <img class="icon_device_management"
                                                        src="{{ URL::asset('/images/42gears/suremdm//mail-configuration.png')}} "
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                                <label class="icon_device_text_line1_green" for="">Email
                                                    Configuration</label><br>
                                                <p class="icon_device_text_line2_green" for="">Add enterprise email to
                                                    any device.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <figure>
                                                    <img class="icon_device_management"
                                                        src="{{ URL::asset('/images/42gears/suremdm//wifi-configuration.png')}} "
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                                <label class="icon_device_text_line1_green" for="">Wifi
                                                    Configuration</label><br>
                                                <p class="icon_device_text_line2_green" for="">Push Enterprise Wifi
                                                    configuration and credentials to device.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <figure>
                                                    <img class="icon_device_management"
                                                        src="{{URL::asset('/images/42gears/suremdm//VPN-configuration.png')}} "
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                                <label class="icon_device_text_line1_green" for="">VPN
                                                    Configuration</label><br>
                                                <p class="icon_device_text_line2_green" for="">Send and receive private
                                                    data through a secure network.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div class="block2-color_section3">
                    <div>
                        <div class="width_block_content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label class="section2_text_line1" for="">Mobile Identity Management</label><br>
                                    <p class="section2_text_line2">Integrate seamlessly with your in-house Identity
                                        Provider. Enable hassle free and secure authentication from mobile devices.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{URL::asset('/images/42gears/suremdm//Single-sign-on.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Single
                                                        Sign-on</label><br>
                                                    <p class="icon_device_text_line2" for="">Integrate with your
                                                        Enterprise Active Directory and enable Single Sign-on.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{URL::asset('/images/42gears/suremdm//Quick-enrollment.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Device
                                                        Enrollment</label><br>
                                                    <p class="icon_device_text_line2" for="">Enroll device using
                                                        Active Directory authentication.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{URL::asset('/images/42gears/suremdm//Certificate-management.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Certificate
                                                        Management</label><br>
                                                    <p class="icon_device_text_line2" for="">Remotely push identity
                                                        certificates to devices. View and manage list of installed
                                                        certificates.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{URL::asset('/images/42gears/suremdm//Self-service.png')}}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Self-service
                                                        Portal</label><br>
                                                    <p class="icon_device_text_line2" for="">Self-service portal for
                                                        employees to locate, lock, wipe their device and view device
                                                        health.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div>
                    <div class="width_block_content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label class="section2_text_line1_green" for="">Android Wearable
                                    Management</label><br>
                                <p class="section2_text_line2_green">Remotely manage and control your Android
                                    Smartwatches</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <figure>
                                                    <img class="icon_device_management"
                                                        src="{{URL::asset('/images/42gears/suremdm//Location-tracking-1.png')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-8 col_left">
                                                <label class="icon_device_text_line1_green" for="">Locate</label><br>
                                                <ul class="ul_device" style="list-style:none;">
                                                        <li class="li_icon_device_text_line2">
                                                            Real time location tracking
                                                        </li>
                                                    <li class="li_icon_device_text_line2">Call and SMS log updates
                                                    </li>
                                                    <li class="li_icon_device_text_line2">Remote buzz device service
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <figure>
                                                    <img class="icon_device_management"
                                                        src="{{URL::asset('/images/42gears/suremdm//Secure.png')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-8 col_left">
                                                <label class="icon_device_text_line1_green" for="">Secure</label><br>
                                                <ul class="ul_device" style="list-style:none;">
                                                    <li class="li_icon_device_text_line2">Lockdown wearable device
                                                    </li>
                                                    <li class="li_icon_device_text_line2">Whitelist applications
                                                    </li>
                                                    <li class="li_icon_device_text_line2">Restrict access to
                                                        settings
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <figure>
                                                    <img class="icon_device_management"
                                                        src="{{URL::asset('/images/42gears/suremdm//Transfer.png')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-8 col_left">
                                                <label class="icon_device_text_line1_green" for="">Transfer</label><br>
                                                <ul class="ul_device" style="list-style:none;">
                                                    <li class="li_icon_device_text_line2">Remote file transfer
                                                    </li>
                                                    <li class="li_icon_device_text_line2">Send files run script
                                                    </li>
                                                    <li class="li_icon_device_text_line2">Push apps updates
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <figure>
                                                    <img class="icon_device_management"
                                                        src="{{URL::asset('/images/42gears/suremdm//Alerts.png')}}"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-8 col_left">
                                                <label class="icon_device_text_line1_green" for="">Alerts</label><br>
                                                <ul class="ul_device" style="list-style:none;">
                                                    <li class="li_icon_device_text_line2">Two-way messaging
                                                    </li>
                                                    <li class="li_icon_device_text_line2">Data/Battery notifications
                                                    </li>
                                                    <li class="li_icon_device_text_line2">Alerts on SIM change
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>





@endsection







@section('script')


@endsection
