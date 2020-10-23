@extends('layouts/main')

@section('title', 'SureFox-Android | 42Gears | DATABAR COMPANY LIMITED')



@section('link')
<link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/surefox/android/style.css')}}">

@endsection



@section('content')
<div class="container-fluid">
    <section class="section_background" style="height:500px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 row_banner" style="padding:0;">
                <figure>
                    <img class="background" src="{{ URL::asset('/images/42gears/surefox/android/background.jpg') }}" style="width:100%;" alt="">
                </figure>
                <figure class="banner_image">
                    <img src="{{ URL::asset('/images/42gears/surefox/android/SureFox-Android.png') }}" style="width:400px;" alt="">
                </figure>
                <div class="banner_text">
                    <label class="banner_text_line1" for="">SureFox for Android</label><br>
                    <label class="banner_text_line1_sub" for="">CONVERT ANDROID DEVICES INTO INTERNET KIOSKS</label>
                    <p class="banner_text_line2">Restrict users to only selected websites</p>
                    <p class="banner_text_line2">Prevent device misuse</p>
                    <p class="banner_text_line2">Easy remote configuration</p>
                    <p class="banner_text_line2">Collect application usage data</p>

                </div>
            </div>
        </div>
    </section>
    <section class="section_2">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 half_list">
                <div >
                    <label class="head_list" for="">SureFox Basic Features
                    </label><br>
                    <ul>
                        <li class="feature_list">Restrict access to selected websites</li>
                        <li class="feature_list">Password protect browser settings</li>
                        <li class="feature_list">Create custom toolbars</li>
                        <li class="feature_list">Full-screen browsing</li>
                        <li class="feature_list">HTML5 support</li>
                        <li class="feature_list">Browse local webpages</li>
                        <li class="feature_list">Customizable homepage (thumbnail icon, wallpaper, website captions,
                        </li>
                        <li class="feature_list">Auto launch SureFox at startup</li>
                        <li class="feature_list">Show or hide website address and loading indicator on title bar
                        </li>
                        <li class="feature_list">Disable device turning off due to inactivity</li>
                        <li class="feature_list">Configurable context menu</li>
                        <li class="feature_list">Control access to peripherals (WiFi, Bluetooth, Camera, Screen
                            Orientation, Airplane mode, Audio, GPS, etc.)</li>
                        <li class="feature_list">Remotely deploy SureFox configuration using
                            <strong>SureMDM</strong></li>
                        <li class="feature_list">Disable upload and download of files</li>
                        <li class="feature_list">Built-in file download manager</li>
                        <li class="feature_list">Flash support (Android 4.0 and below only)</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 half_list">
                <div >
                    <label class="head_list" for="">SureFox Pro Features</label>
                    <p class="head_list_sub">Includes all features of SureFox Basic plus:</p>
                    <ul>
                        <li class="feature_list">Kiosk Mode</li>
                        <li class="feature_list">Suppress system notifications</li>
                        <li class="feature_list">Allow website launch from custom toolbar</li>
                        <li class="feature_list">Allow launching applications from webpages</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section_3" >
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12"  style="text-align:center;">
                <label class="banner_text_line1" for="">Supported Android Versions</label>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 row_icon_support" >
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surefox/android/version-4.png') }}" alt="">
                    </figure>
                    <figcaption>Version 4.0</figcaption>
                </div>
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surefox/android/version-4.1223.png') }}" alt="">
                    </figure>
                    <figcaption>Version 4.1, 4.2, 4.3</figcaption>
                </div>
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surefox/android/version4.4.png') }}" alt="">
                    </figure>
                    <figcaption>Version 4.4</figcaption>
                </div>
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surefox/android/version-5.png') }}" alt="">
                    </figure>
                    <figcaption>Version 5.0</figcaption>
                </div>
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surefox/android/version-6.png') }}" alt="">
                    </figure>
                    <figcaption>Version 6.0</figcaption>
                </div>
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surefox/android/version-7.png') }}" alt="">
                    </figure>
                    <figcaption>Version 7.0</figcaption>
                </div>
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surefox/android/VERSION-8.png') }}" alt="">
                    </figure>
                    <figcaption>Version 8.0</figcaption>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection




@section('script')

@endsection
