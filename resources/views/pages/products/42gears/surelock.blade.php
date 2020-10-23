@extends('layouts/main')

@section('title', 'SureLock Secure Browser | 42gears | DATABAR COMPANY LIMITED')


@section('link')
    <link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/surelock/style.css')}}">

@endsection






@section('content')
<div class="container-fluid">
    <div class="row rowlogo" style="height:400px;">
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
            <div class="logo_42gears">
                <img src="{{ URL::asset('/images/42gears/surelock/42-Gearslogo.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <section class="section_background" style="margin-top:15%;height:500px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <figure >
                    <img class="background" src="{{ URL::asset('/images/42gears/surelock/background.jpg') }}" style="width:100%;" alt="">
                </figure>
                <figure class="banner_image" >
                    <img src="{{ URL::asset('/images/42gears/surelock/surelock-homepage-side-image.png') }}" style="width:400px;" alt="">
                </figure>
                <div class="banner_text">
                    <label class="banner_text_line1" for="">SureLock Kiosk Lockdown</label>
                    <p class="banner_text_line2">Maximizes user productivity</p>
                    <p class="banner_text_line2">Reduces device maintenance time and cost</p>
                    <p class="banner_text_line2">Save money on mobile data usage</p>
                    <p class="banner_text_line2">Quick installation and configuration</p>
                    <p class="banner_text_line2">No programming required</p>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div class="block-color">
                </div>
                <div class="block_color_content_animation">
                    <label class="section1_text_line1" for="">Overview</label><br>
                    <p class="section1_text_line2" for="">Kiosks are great tools for businesses to connect with
                        their customers, employees, and public users. However, the process of building a traditional
                        kiosk is complicated and time-consuming. The cost associated with industrial kiosks is also
                        unrealistic for most businesses.

                        SureLock offers a quick and easy way to lockdown off-the-shelf mobile devices. Tablets,
                        Smartphones, Smartwatches or even desktop computers can be used as dedicated purpose
                        devices.</p><br>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div class="block2-color">
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
                                                <div class="col-xs-12 col-sm-12 col-md-3">
                                                    <a class="my_a" href="{{ URL::to('products/non-samsung/42gears/sureLock/android')}}">
                                                        <figure>
                                                            <img class="icon_device_management"
                                                                src="{{ URL::asset('/images/42gears/surelock/android.png') }}" alt="">
                                                        </figure>
                                                        <figcaption>Android</figcaption>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-3">
                                                    <a class="my_a" href="{{ URL::to('products/non-samsung/42gears/sureLock/window')}}">
                                                        <figure>
                                                            <img class="icon_device_management"
                                                                src="{{ URL::asset('/images/42gears/surelock/windows.png') }}" alt="">
                                                        </figure>
                                                        <figcaption>Windows 7, 8 & 10</figcaption>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-3">
                                                    <a class="my_a" href="{{ URL::to('products/non-samsung/42gears/sureLock/window-ce')}}">
                                                        <figure>
                                                            <img class="icon_device_management"
                                                                src="{{ URL::asset('/images/42gears/surelock/windows-mobile-e1524825731824.png') }}"
                                                                alt="">
                                                        </figure>
                                                        <figcaption>Windows Mobile & CE</figcaption>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-3">
                                                    <a class="my_a" href="{{ URL::to('products/non-samsung/42gears/sureLock/wearable')}}">
                                                        <figure>
                                                            <img class="icon_device_management"
                                                                src="{{ URL::asset('/images/42gears/surelock/android-smart-watch-e1524825763626.png') }}"
                                                                alt="">
                                                        </figure>
                                                        <figcaption>Android Smartwatch</figcaption>
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
