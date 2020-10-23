@extends('layouts/main')

@section('title', 'SureVideo-ios | 42Gears | DATABAR COMPANY LIMITED')



@section('link')
<link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/surevideo/ios/style.css')}}">

@endsection



@section('content')
<div class="container-fluid">
    <section class="section_background" style="height:500px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 row_banner" style="padding:0;">
                <figure>
                    <img class="background" src="{{ URL::asset('/images/42gears/surevideo/ios/background.jpg') }}" style="width:100%;" alt="">
                </figure>
                <figure class="banner_image">
                    <img src="{{ URL::asset('/images/42gears/surevideo/ios/SureVideo-iOS.png') }}" style="width:400px;" alt="">
                </figure>
                <div class="banner_text" >
                    <label class="banner_text_line1" for="">SureVideo for iOS</label><br>
                    <label class="banner_text_line1_sub" for="">iPAD DIGITAL SIGNAGE</label>
                    <p class="banner_text_line2">Loops videos automatically</p>
                    <p class="banner_text_line2">Supports all Standard and High-Definition formats</p>
                    <p class="banner_text_line2">Restricts access to home screen</p>
                    <p class="banner_text_line2">Cloud-based Management</p>

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
                    <p class="section1_text_line2" for="">SureVideo enables your iPad to continuously play videos in
                        a loop. It converts your regular tablet into a professional looking iOS Digital Signage
                        solution. Your iPad can be used to display engaging video content at checkout counters,
                        receptionist desks, trade shows, or any other use.</p><br>
                </div>
            </div>
        </div>
    </section>
    <section class="section_3" style="height:600px;margin-top:5%;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <label class="banner_text_line1" for="">Supported iOS Versions</label>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 row_icon_support">
                <div class="block_icon_android_support">
                    <figure>
                        <img src="{{ URL::asset('/images/42gears/surevideo/ios/SureFox-iOS-1.png') }}" alt="">
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
