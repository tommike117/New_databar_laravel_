@extends('layouts/main')

@section('title', 'SureVideo-android | 42Gears | DATABAR COMPANY LIMITED')



@section('link')
<link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/surevideo/android/style.css')}}">

@endsection



@section('content')

<div class="container-fluid">
    <section class="section_background" style="height:500px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 row_banner" style="padding:0;">
                <figure>
                    <img class="background" src="{{ URL::asset('/images/42gears/surevideo/android/background.jpg') }}" style="width:100%;" alt="">
                </figure>
                <figure class="banner_image">
                    <img src="{{ URL::asset('/images/42gears/surevideo/android/surelock-banner-image.png') }}" style="width:400px;" alt="">
                </figure>
                <div class="banner_text" >
                    <label class="banner_text_line1" for="">SureVideo for Android</label><br>
                    <label class="banner_text_line1_sub" for="">DIGITAL SIGNAGE FOR TABLETS AND TV STICKS</label>
                    <p class="banner_text_line2">Loops videos automatically</p>
                    <p class="banner_text_line2">Restrict users to play only allowed media files</p>
                    <p class="banner_text_line2">Multiple formats supported</p>
                    <p class="banner_text_line2">Block user from changing System Settings</p>
                    <p class="banner_text_line2">Deploy easily on multiple devices</p>

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
                    <p class="section1_text_line2" for="">SureVideo enables your Android tablets and TV sticks to
                        continuously play media files (videos and images) in a loop. It converts your regular tablet
                        into a professional looking Android Digital Signage solution.</p><br>
                </div>
            </div>
        </div>
    </section>
    <section class="section_3" style="height:400px;margin-top:10%;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 half_col" style="padding:0;">
                <label class="banner_text_line1" for="">How does SureVideo work?</label>
                <p class="how_to_content">1. Download and install SureVideo onto your Android tablet or TV stick</p>
                <p class="how_to_content">2. Go to SureVideo Settings</p>
                <p class="how_to_content">3. Create and apply a playlist of videos and images
                    That is all you need to create a Digital Signage solution out of an Android device.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6" style="text-align:center;" >
                <iframe style="width:100%;" width="478" height="270" src="https://www.youtube.com/embed/JBoEIBD86A8"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section class="section_4" style="height:600px;margin-top:10%;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;text-align:center;">
                <label class="banner_text_line1" for="">Supported Android Versions</label>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 row_icon_support" >
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surevideo/android/version-4.png') }}" alt="">
                    </figure>
                    <figcaption>Version 4.0</figcaption>
                </div>
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surevideo/android/version-4.1223.png') }}" alt="">
                    </figure>
                    <figcaption>Version 4.1, 4.2, 4.3</figcaption>
                </div>
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surevideo/android/version4.4.png') }}" alt="">
                    </figure>
                    <figcaption>Version 4.4</figcaption>
                </div>
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surevideo/android/version-5.png') }}" alt="">
                    </figure>
                    <figcaption>Version 5.0</figcaption>
                </div>
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surevideo/android/version-6.png') }}" alt="">
                    </figure>
                    <figcaption>Version 6.0</figcaption>
                </div>
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surevideo/android/version-7.png') }}" alt="">
                    </figure>
                    <figcaption>Version 7.0</figcaption>
                </div>
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surevideo/android/VERSION-8.png') }}" alt="">
                    </figure>
                    <figcaption>Version 8.0</figcaption>
                </div>
            </div>
        </div>
</div>
</section>
</div>



@endsection




@section('script')

@endsection
