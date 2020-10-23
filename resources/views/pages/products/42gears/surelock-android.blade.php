@extends('layouts/main')

@section('title', 'SureLock-Android | 42Gears | DATABAR CONPANY LIMITED')



@section('link')

    <link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/surelock/style-android.css')}}">

@endsection



@section('content')

<div class="container-fluid">
    <section class="section_background" style="height:500px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 row_banner" style="padding:0;">
                <figure>
                    <img class="background" src="{{ URL::asset('/images/42gears/surelock/android/background.jpg') }}" style="width:100%;" alt="">
                </figure>
                <figure class="banner_image" >
                    <img src="{{ URL::asset('/images/42gears/surelock/android/surelock-banner-image.png') }}" style="width:400px;" alt="">
                </figure>
                <div class="banner_text" >
                    <label class="banner_text_line1" for="">SureLock for Android</label><br>
                    <label class="banner_text_line1_sub" for="">LOCK DOWN MOBILE DEVICES INTO KIOSK MODE</label>
                    <p class="banner_text_line2">Restrict users to only one or a few specific apps</p>
                    <p class="banner_text_line2">Prevent unwanted malicious use of devices</p>
                    <p class="banner_text_line2">Easy mass deployment</p>
                    <p class="banner_text_line2">Collect application usage with analytics engine</p>

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
                    <p class="section1_text_line2" for="">SureLock turns any Android tablet or smartphone into a
                        kiosk. It is an Android kiosk app that replaces the default Home Screen or Launcher and
                        restricts user access to only one application or a few allowed applications.

                        Are you worried about unwanted misuse of your company owned Android devices? It has become
                        common to use off-the-shelf mobile devices to run business applications or self-service
                        kiosks. However, device misuse can impact user productivity, increase device maintenance
                        costs and cause other problems such as increase in mobile data usage etc.

                        You can use SureLock to lockdown android tablets and smartphones and restrict access to only
                        selected applications and device features. Games such as Angry Birds, social media
                        applications such as Facebook and Twitter, System settings, or any other applications can be
                        completely hidden from the user.

                        SureLock achieves perfect lockdown on all kinds of Android devices and it does not require
                        root access. Besides this, we have partnered with many device manufacturers that allow us to
                        implement enhanced security and access control on their devices.</p><br>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top:10%;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 half_list">
                <div >
                    <label class="head_list" for="">Features</label><br>
                    <ul>
                        <li class="feature_list">Lockdown Android devices with restricted access to selected applications.</li>
                        <li class="feature_list">Display widgets on home screen</li>
                        <li class="feature_list">Display application shortcuts</li>
                        <li class="feature_list">Block user from altering system settings</li>
                        <li class="feature_list">Set passwords for chosen applications</li>
                        <li class="feature_list">Auto launch applications at startup</li>
                        <li class="feature_list">Control access to peripherals (WiFi, Bluetooth, Camera, Screen Orientation, Airplane mode, Audio, GPS, etc.)</li>
                        <li class="feature_list">Customize home screen (Layout, Application captions, Wallpaper, screensaver etc.)</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 half_list">
                <div>
                    <label class="head_list" for="">Advanced Features</label>
                    <ul>
                        <li class="feature_list">Restrict access to Safe mode of the device.</li>
                        <li class="feature_list">Restriction of Wi-fi/mobile data access for applications.</li>
                        <li class="feature_list">Single application mode</li>
                        <li class="feature_list">Hide the icon of an allowed application</li>
                        <li class="feature_list">Application idle timeout</li>
                        <li class="feature_list">Disable status bar and notification panel</li>
                        <li class="feature_list">Disable power button</li>
                        <li class="feature_list">Delay application launch</li>
                        <li class="feature_list">Selectively allow or block individual child windows</li>
                        <li class="feature_list">Restrict device usability while driving</li>
                        <li class="feature_list">Collect application usage data (launch time, duration of usage, etc.)</li>
                        <li class="feature_list">Multi-user profile settings</li>
                        <li class="feature_list">Samsung Knox feature integrated with SureLock</li>
                        <li class="feature_list">Remotely deploy SureLock configuration from Cloud or by using <strong>SureMDM</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection


@section('script')

@endsection
