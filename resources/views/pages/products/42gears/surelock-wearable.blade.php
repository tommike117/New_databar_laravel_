@extends('layouts/main')

@section('title', 'SureLock-Wearable | 42Gears | DATABAR CONPANY LIMITED')


@section('link')
    <link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/surelock/style-wearable.css')}}">

@endsection

@section('content')
<div class="container-fluid">
    <section class="section_background" style="height:500px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 row_banner" style="padding:0;">
                <figure>
                    <img class="background" src="{{ URL::asset('/images/42gears/surelock/wearable/background.jpg') }}" style="width:100%;" alt="">
                </figure>
                <figure class="banner_image">
                    <img src="{{ URL::asset('/images/42gears/surelock/wearable/surelock-wearble-banner-bg.png') }}" style="width:400px;" alt="">
                </figure>
                <div class="banner_text">
                    <label class="banner_text_line1" for="">SureLock for Wearables</label><br>
                    <label class="banner_text_line1_sub" for="">LOCKDOWN YOUR ANDROID SMARTWATCH</label>

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
                    <p class="section1_text_line2" for="">Wearables are the next wave in Enterprise Mobility
                        Management (EMM) industry. They are all set to support businesses by strengthening
                        communication, enhancing workforce mobility and productivity, especially in challenging
                        industries like healthcare, logistics, retail, supply chain and remote support. 42Gears EMM
                        Suite allows enterprises to convert Android Smartwatches into dedicated-purpose devices and
                        remotely manage them, making them enterprise ready.</p><br>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top:10%;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="head_list">
                    <label class="banner_text_line1" for="">Android Wearable Lockdown</label><br>
                    <label class="banner_text_line1_sub" for="">Turn Android Smartwatches into dedicated-purpose
                        devices</label>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 half_col">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col_icon_image">
                        <figure class="icon_list">
                            <img src="{{ URL::asset('/images/42gears/surelock/wearable/app-whitelisting.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <label class="list_head" for="">App Whitelisting</label>
                        <p class="list_content">Lockdown Android Smartwatch with access to only allowed applications
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col_icon_image">
                        <figure class="icon_list">
                            <img src="{{ URL::asset('/images/42gears/surelock/wearable/password-protected-settings.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <label class="list_head" for="">Password Protected Settings</label>
                        <p class="list_content">Restrict the users from accessing and modifying lockdown or device settings
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col_icon_image">
                        <figure class="icon_list">
                            <img src="{{ URL::asset('/images/42gears/surelock/wearable/customizable-ui.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <label class="list_head" for="">Customizable UI</label>
                        <p class="list_content">Customize Android Smartwatch with desired wallpapers to suit your company's branding
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 half_col">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col_icon_image">
                        <figure class="icon_list">
                            <img src="{{ URL::asset('/images/42gears/surelock/wearable/Single-application-mode.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <label class="list_head" for="">Single Application Mode</label>
                        <p class="list_content">Lock your Android Smartwatch with just one application in the foreground
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col_icon_image">
                        <figure class="icon_list">
                            <img src="{{ URL::asset('/images/42gears/surelock/wearable/Remote-settings.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <label class="list_head" for="">Remote Settings</label>
                        <p class="list_content">Use local network to remotely configure or edit SureLock settings
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col_icon_image">
                        <figure class="icon_list">
                            <img src="{{ URL::asset('/images/42gears/surelock/wearable/Device-enrollment.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <label class="list_head" for="">Device Enrollment</label>
                        <p class="list_content">Enroll devices in seconds with Import/Export Settings option to perform bulk enrollment
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection


@section('script')


@endsection
