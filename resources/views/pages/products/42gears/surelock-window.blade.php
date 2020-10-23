@extends('layouts/main')

@section('title', 'SureLock-Window | 42Gears | DATABAR CONPANY LIMITED')



@section('link')
    <link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/surelock/style-window.css')}}">
@endsection




@section('content')

<div class="container-fluid">
    <section class="section_background" style="height:500px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 row_banner" style="padding:0;">
                <figure  >
                    <img class="background" src="{{ URL::asset('/images/42gears/surelock/window/background.jpg') }}" style="width:100%;" alt="">
                </figure>
                <figure class="banner_image"  >
                    <img src="{{ URL::asset('/images/42gears/surelock/window/SureLock-for-Windows.png') }}" style="width:400px;" alt="">
                </figure>
                <div class="banner_text" >
                    <label class="banner_text_line1" for="">SureLock for Windows</label><br>
                    <label class="banner_text_line1_sub" for="">CONVERT WINDOWS PCS AND TABLETS INTO PUBLIC
                        KIOSKS</label>
                    <p class="banner_text_line2">Restrict access to specific applications</p>
                    <p class="banner_text_line2">Restrict access to specific websites</p>
                    <p class="banner_text_line2">Prevent unwanted malicious use</p>
                    <p class="banner_text_line2">Keyboard blocking and filtering</p>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div   class="block-color">
                </div>
                <div class="block_color_content_animation">
                    <label class="section1_text_line1" for="">Overview</label><br>
                    <p class="section1_text_line2" for="">Dedicated or public use kiosks based on Windows operating
                        systems are often deployed in locations that cannot always be monitored by the IT team. It
                        is important to maintain the security of these kiosks and protect them from intentional or
                        unintentional misuse by users.

                        SureLock for Windows transforms a Windows based computer or tablet by locking them into a
                        secure kiosk system. This allows IT administrators to restrict the use of these kiosks to
                        only desired applications and functions.</p><br>
                </div>
            </div>
        </div>
    </section>
    <section class="last_section" >
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div
                    class="col-xs-12 col-sm-12 col-md-12 half_list">
                    <div style="margin:30px auto;">
                        <label class="head_list" for="">Features</label><br>
                        <ul>
                            <li class="feature_list">Allows only white-listed applications to run</li>
                            <li class="feature_list">Allow browsing of only selected websites or URLs</li>
                            <li class="feature_list">Auto-launch selected applications at system startup</li>
                            <li class="feature_list">Auto-logon after system reboot</li>
                            <li class="feature_list">Keyboard filtering and configuration</li>
                            <li class="feature_list">Password protect settings</li>
                            <li class="feature_list">Customize background wallpaper</li>
                            <li class="feature_list">Disables access to Windows Task Manager</li>
                            <li class="feature_list">Easy mass deployment using <strong>SureMDM</strong>.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div
                    class="col-xs-12 col-sm-12 col-md-12">
                    <div style="margin:30px auto;">
                        <label class="head_list" for="">Supported Platforms</label><br>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4" style="text-align:center">
                                <figure class="window_support_icon">
                                    <img src="_assets/images/windows-logo-silhouette-1-copy-4.png" alt="">
                                </figure>
                                <p class="support_text">Window 10</p>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4" style="text-align:center">
                                <figure class="window_support_icon">
                                    <img src="_assets/images/windows-logo-silhouette-1-copy-4.png" alt="">
                                </figure>
                                <p class="support_text">Window 8</p>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4" style="text-align:center">
                                <figure class="window_support_icon">
                                    <img src="_assets/images/windows-logo-silhouette-1-copy-4.png" alt="">
                                </figure>
                                <p class="support_text">Window 7</p>
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
