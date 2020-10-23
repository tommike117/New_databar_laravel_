@extends('layouts/main')

@section('title', 'SureVideo-window | 42Gears | DATABAR COMPANY LIMITED')



@section('link')
<link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/surevideo/window/style.css')}}">

@endsection



@section('content')
<div class="container-fluid">
    <section class="section_background" style="height:500px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 row_banner" style="padding:0;">
                <figure>
                    <img class="background" src="{{ URL::asset('/images/42gears/surevideo/window/background.jpg') }}" style="width:100%;" alt="">
                </figure>
                <figure class="banner_image">
                    <img src="{{ URL::asset('/images/42gears/surevideo/window/surelock-banner-image.png') }}" style="width:400px;" alt="">
                </figure>
                <div class="banner_text">
                    <label class="banner_text_line1" for="">SureVideo for Windows</label><br>
                    <label class="banner_text_line1_sub" for="">DIGITAL SIGNAGE FOR WINDOWS 10 DEVICES</label>
                    <!-- <p class="banner_text_line2">Loops videos automatically</p>
                    <p class="banner_text_line2">Restrict users to play only allowed media files</p>
                    <p class="banner_text_line2">Multiple formats supported</p>
                    <p class="banner_text_line2">Block user from changing System Settings</p>
                    <p class="banner_text_line2">Deploy easily on multiple devices</p> -->

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
                    <p class="section1_text_line2" for="">SureVideo transforms Windows 10 devices to a captivating
                        Digital Signage solution. Convert Windows PCs, laptops, tablets and mobile phones into a
                        professional video-looping solution. Display engaging video content at checkout counters,
                        receptions, trade shows, store fronts or any other high-traffic areas.</p><br>
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
                                    <label class="banner_text_line1" style="margin-top:5%;" for="">Digital Signage Solution</label><br>
                                    <p class="banner_text_line1_sub">Turn Windows Devices into Video Playing Kiosk</p>
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
                                                            src="{{ URL::asset('/images/42gears/surevideo/window/Mobile-device-support.png') }}" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1"
                                                        for="">Multiple Device Support</label><br>
                                                    <p class="icon_device_text_line2" for="">Supports all Windows 10 devices; desktops, laptops, tablets and mobile phones</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{ URL::asset('/images/42gears/surevideo/window/screensaver-mode.png') }}" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Screensaver Mode</label><br>
                                                    <p class="icon_device_text_line2" for="">Enable video screensaver on any Windows 10 desktops, laptops and tablets</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{ URL::asset('/images/42gears/surevideo/window/Remote-configuration.png') }}" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Remote Configuration</label><br>
                                                    <p class="icon_device_text_line2" for="">Remotely install SureVideo on devices, configure settings or compile playlist using SureMDM.</p>
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
                                                            src="{{ URL::asset('/images/42gears/surevideo/window/Smart-video-looper.png') }}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Smart Video Looper</label><br>
                                                    <p class="icon_device_text_line2" for="">Play selected videos in full screen mode</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col_icon_device">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-4">
                                                    <figure>
                                                        <img class="icon_device_management"
                                                            src="{{ URL::asset('/images/42gears/surevideo/window/Setting-file-and-export.png') }}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">
                                                    <label class="icon_device_text_line1" for="">Settings File Import and Export</label><br>
                                                    <p class="icon_device_text_line2" for="">Allows export of settings to File and import from File for easy configuration.</p>
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
