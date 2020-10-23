@extends('layouts/main')

@section('title', 'SureFox-IOS | 42Gears | DATABAR COMPANY LIMITED')



@section('link')
<link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/surefox/ios/style.css')}}">

@endsection



@section('content')

<div class="container-fluid">
    <section class="section_background" style="height:500px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 row_banner" style="padding:0;">
                <figure>
                    <img class="background" src="{{ URL::asset('/images/42gears/surefox/ios/background.jpg') }}" style="width:100%;" alt="">
                </figure>
                <figure class="banner_image" >
                    <img src="{{ URL::asset('/images/42gears/surefox/ios/SureFox-iOS-banner.png') }}" style="width:400px;" alt="">
                </figure>
                <div class="banner_text" >
                    <label class="banner_text_line1" for="">SureFox for iOS</label><br>
                    <label class="banner_text_line1_sub" for="">CONVERT iOS DEVICES INTO INTERNET KIOSKS</label>
                    <p class="banner_text_line2">Restrict users to only selected websites</p>
                    <p class="banner_text_line2">Run iOS secure browser in kiosk mode</p>
                    <p class="banner_text_line2">Customizable home screen</p>
                    <p class="banner_text_line2">Password protect browser settings</p>
                    <p class="banner_text_line2">Enterprise distribution</p>

                </div>
            </div>
        </div>
    </section>
    <section class="section_2">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 half_col">
                <div>
                    <label class="head_list" for="">SureFox Basic Features
                    </label><br>
                    <ul>
                        <li class="feature_list">Restrict users to only allowed websites</li>
                        <li class="feature_list">Allow local webpages and files</li>
                        <li class="feature_list">Customizable home screen</li>
                        <li class="feature_list">Password protect browser settings</li>
                        <li class="feature_list">Full screen browsing</li>
                        <li class="feature_list">Set browser homepage</li>
                        <li class="feature_list">Auto redirect due to user inactivity
                        </li>
                        <li class="feature_list">Motion detection</li>
                        <li class="feature_list">Custom JavaScript API
                        </li>
                        <li class="feature_list">Export and import settings through Cloud</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 ">
                <div >
                    <figure style="margin:50px auto;text-align:center;">
                        <img  src="{{ URL::asset('/images/42gears/surefox/ios/Logistics-1024x682-panorama.jpg') }}" style="width:90%;" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="section_3">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12"  style="text-align:center;">
                <label class="banner_text_line1" for="">Supported iOS Versions</label>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 row_icon_support" >
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surefox/ios/SureFox-iOS-1.png') }}" alt="">
                    </figure>
                    <figcaption>iOS 8 or later</figcaption>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection




@section('script')


@endsection
