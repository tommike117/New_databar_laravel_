@extends('layouts/main')

@section('title', 'SureVideo | 42Gears | DATABAR COMPANY LIMITED')



@section('link')
<link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/surevideo/style.css')}}">

@endsection



@section('content')
<div class="container-fluid">
    <div class="row rowlogo" style="height:400px;">
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
            <div class="logo_42gears">
                <img src="{{ URL::asset('/images/42gears/surevideo/42-Gearslogo.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <section class="section_background" style="margin-top:15%;height:500px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <figure>
                    <img class="background" src="{{ URL::asset('/images/42gears/surevideo/background.jpg') }}" style="width:100%;" alt="">
                </figure>
                <figure class="banner_image" >
                    <img src="{{ URL::asset('/images/42gears/surevideo/SureVideo-Home-Banner.png') }}" style="width:400px;" alt="">
                </figure>
                <div class="banner_text">
                    <label class="banner_text_line1" for="">SureVideo Digital Signage Solution</label>
                    <p class="banner_text_line2">Efficiently engage audience</p>
                    <p class="banner_text_line2">Targeted content delivery</p>
                    <p class="banner_text_line2">Generate advertisement revenues</p>
                    <p class="banner_text_line2">Easy setup</p>
                    <p class="banner_text_line2">Easily update content</p>

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
                    <p class="section1_text_line2" for="">Digital Signage solutions are useful for delivering
                        targeted content to audiences in order to grab their attention. SureVideo can be used as
                        video looper to display advertisements, news, product information, or anything your business
                        wants to deliver to the customers.

                        Install SureVideo on a tablet or TV stick and configure a playlist that plays videos in a
                        loop. You can easily deploy the playlist on multiple devices and update it at any time.</p>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div class="block2-color">
                    <div>
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
                                                    <a class="my_a" href="{{ route('42gears.sureVideo-android') }}">
                                                        <figure>
                                                            <img class="icon_device_management"
                                                                src="{{ URL::asset('/images/42gears/surevideo/android.png') }}" alt="#">
                                                        </figure>
                                                        <figcaption>Android</figcaption>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-3">
                                                    <a class="my_a" href="{{ route('42gears.sureVideo-ios') }}">
                                                        <figure>
                                                            <img class="icon_device_management"
                                                                src="{{ URL::asset('/images/42gears/surevideo/ios.png') }}" alt="#">
                                                        </figure>
                                                        <figcaption>IOS</figcaption>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-3">
                                                    <a class="my_a" href="{{ route('42gears.sureVideo-window') }}">
                                                        <figure>
                                                            <img class="icon_device_management"
                                                                src="{{ URL::asset('/images/42gears/surevideo/windows-mobile-e1524825731824.png') }}" alt="#">
                                                        </figure>
                                                        <figcaption>Windows</figcaption>
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
