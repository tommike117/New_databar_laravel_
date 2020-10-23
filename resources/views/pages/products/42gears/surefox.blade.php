@extends('layouts/main')

@section('title', 'SureFox | 42Gears | DATABAR COMPANY LIMITED')

@section('link')
    <link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/surefox/style.css')}}">

@endsection

@section('content')

<div class="container-fluid">
    <div class="row rowlogo" style="height:400px;">
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
            <div class="logo_42gears">
                <img src="{{ URL::asset('/images/42gears/surelock/42-Gearslogo.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <section class="section_background" style="margin-top:15%;height:500px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <figure >
                    <img class="background" src="{{ URL::asset('/images/42gears/surelock/background.jpg') }}" style="width:100%;" alt="">
                </figure>
                <figure >
                    <img src="{{ URL::asset('/images/42gears/surelock/SureFox-Secure-Browser.png') }}" style="width:400px;" alt="">
                </figure>
                <div class="banner_text" >
                    <label class="banner_text_line1" for="">SureFox Secure Browser</label>
                    <p class="banner_text_line2">Maximizes User Productivity with Restricted Browsing</p>
                    <p class="banner_text_line2">Quick and Easy Configuration Process</p>
                    <p class="banner_text_line2">Reduces Device Maintenance Effort</p>
                    <p class="banner_text_line2">Device branding</p>
                    <p class="banner_text_line2">Easy Mass Deployment with Cloud Export and Import of Settings</p>

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
                    <p class="section1_text_line2" for="">Overview
                        When deploying mobile web applications, security is an important criteria for success. The
                        most common requirement is to limit access to only certain websites for corporate use.
                        SureFox Secure Browser creates a safe browsing environment on mobile devices and desktops.
                        This makes the devices suitable for use as self-service web kiosks and data collection
                        terminals for various types of businesses.

                    </p>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div  class="block2-color">
                    <div >
                        <div class="width_block_content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label class="section2_text_line1" for="">Select your platform</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_os">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <a class="my_a" href="{{ route('42gears.sureFox-android') }}">
                                                        <figure>
                                                            <img class="icon_device_management"
                                                                src="{{ URL::asset('/images/42gears/surefox/android.png') }}" alt="">
                                                        </figure>
                                                        <figcaption>Android</figcaption>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <a class="my_a" href="{{ route('42gears.sureFox-ios') }}">
                                                        <figure>
                                                            <img class="icon_device_management"
                                                                src="{{ URL::asset('/images/42gears/surefox/ios.png') }}" alt="">
                                                        </figure>
                                                        <figcaption>iOS</figcaption>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <a class="my_a" href="{{ route('42gears.sureFox-window-ce') }}">
                                                        <figure>
                                                            <img class="icon_device_management"
                                                                src="{{ URL::asset('/images/42gears/surefox/windows-mobile-e1524825731824.png') }}"
                                                                alt="">
                                                        </figure>
                                                        <figcaption>Windows Mobile & CE</figcaption>
                                                    </a>
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
</div>

@endsection

@section('script')

@endsection
