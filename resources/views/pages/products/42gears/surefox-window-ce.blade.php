@extends('layouts/main')

@section('title', 'SureFox-Window Mobile & CE | 42Gears | DATABAR COMPANY LIMITED')


@section('link')
<link rel="stylesheet" href="{{ URL::asset('/css/page-style/42gears/surefox/window-ce/style.css')}}">

@endsection



@section('content')
<div class="container-fluid">
    <section class="section_background" style="height:500px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 row_banner" style="padding:0;">
                <figure>
                    <img class="background" src="{{ URL::asset('/images/42gears/surefox/window-ce/background.jpg') }}" style="width:100%;" alt="">
                </figure>
                <figure class="banner_image" >
                    <img src="{{ URL::asset('/images/42gears/surefox/window-ce/banner-image.png') }}" style="width:400px;" alt="">
                </figure>
                <div class="banner_text" >
                    <label class="banner_text_line1" for="">SureFox Windows Mobile & CE</label><br>
                    <label class="banner_text_line1_sub" for="">Kwindow-ceK MODE WEB BROWSING</label>
                    <p class="banner_text_line2">Restrict browsing to only Allowed Websites</p>
                    <p class="banner_text_line2">Password protected Browser Settings</p>
                    <p class="banner_text_line2">Run Internet Explorer in Full-Screen</p>
                    <p class="banner_text_line2">Disable Keypad & Address Bar</p>

                </div>
            </div>
        </div>
    </section>
    <section class="section_2">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="col_half_first" >
                    <label class="head_list" for="">Overview
                    </label><br>
                    <ul>
                        <li class="feature_list">Restrict navigation to allowed websites only</li>
                        <li class="feature_list">Block access to browser settings e.g. Favorites, Security settings
                        </li>
                        <li class="feature_list">Run Internet Explorer in Full-Screen mode</li>
                        <li class="feature_list">Disable Address Bar</li>
                        <li class="feature_list">Disable Tap and Hold menu</li>
                        <li class="feature_list">Disable Keypad</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div >
                    <label class="head_list center" for="">Supported Platforms</label><br>
                    <div class="row" style="margin-top:5%;">
                        <div class="col-xs-12 col-sm-12 col-md-2" style="text-align:center;">
                            <figure>
                                <img class="support_icon" src="{{ URL::asset('/images/42gears/surefox/window-ce/windows-icon.png') }}" alt="">
                            </figure>
                            <p style="font-size:10px;margin-top:10px;">Windows Mobile 6.5 (Classic & Professional)
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2" style="text-align:center;">
                            <figure>
                                <img class="support_icon" src="{{ URL::asset('/images/42gears/surefox/window-ce/windows-icon.png') }}" alt="">
                            </figure>
                            <p style="font-size:10px;margin-top:10px;">Windows Mobile 6.1 (Classic & Professional)
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2" style="text-align:center;">
                            <figure>
                                <img class="support_icon" src="{{ URL::asset('/images/42gears/surefox/window-ce/windows-icon.png') }}" alt="">
                            </figure>
                            <p style="font-size:10px;margin-top:10px;">Windows Mobile 6.0 (Classic & Professional)
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2" style="text-align:center;">
                            <figure>
                                <img class="support_icon" src="{{ URL::asset('/images/42gears/surefox/window-ce/windows-icon.png') }}" alt="">
                            </figure>
                            <p style="font-size:10px;margin-top:10px;">Windows Mobile 5.0 (Pocket PC and Pocket PC
                                Phone Edition)</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2" style="text-align:center;">
                            <figure>
                                <img class="support_icon" src="{{ URL::asset('/images/42gears/surefox/window-ce/windows-icon.png') }}" alt="">
                            </figure>
                            <p style="font-size:10px;margin-top:10px;">Windows CE 6.0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_3">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                        <label class="banner_text_line1" for="">Using SureFox with SureLock</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 method_col_1" >
                        <p>1. Make sure SureFox is installed and configured properly on the device</p>
                        <p>2. Launch SureLock Studio on the desktop</p>
                        <p>3. Click Add button and specify windowsiexplore.exe as allowed application</p>
                        <p>4. Make sure that This is a fullscreen application option is also selected</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 method_col_2"  style="text-align:center;">
                        <img src="{{ URL::asset('/images/42gears/surefox/window-ce/kioskie_surelock.png') }}" style="width:50%;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection




@section('script')


@endsection
