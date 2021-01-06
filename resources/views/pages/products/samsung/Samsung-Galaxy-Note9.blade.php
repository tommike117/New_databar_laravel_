@extends('layouts/main')

@section('title', 'Samsung Galaxy Note9 | Samsung Smartphone | DATABAR COMPANY LIMITED')

@section('link')

<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-note9/main.css')}}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

@endsection




@section('content')
<div class="container">

    <div class="slide slide-one mt-5" data-background="rgb(53, 84, 172)">
        <div class="row text-center">
                <div data-aos="fade-down">
                    <label class="text-section1 text-white" style="font-size:40px;font-weight:bold;">The new super
                        powerful Note</label><br>
                    <label class="text-section1 text-white" style="font-size:40px;font-weight:bold;">Galaxy
                        Note9</label>
                </div>
        </div>
    </div>
    <div class="slide slide-two" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center">
                <div>
                <img data-aos="fade-right" id="note9" src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_overview_kv_type1.png')}}" alt="Galaxy Note 9 Overview1"
                        style="width:60%">
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-three" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div data-aos="fade-up" >
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 section2-grid">
                            <label class="text-section2" for=""
                                style="font-size:20px;color:white;text-align:center">One
                                of the best phones of the
                                year.</label><br><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 section2-grid">
                            <label class="text-section2" for="" style="font-size:20px;color:white;">Thanks to the
                                great S Pen stylus
                                the Galaxy Note9 is still in a class of its own.</label><br><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 section2-grid">
                            <label class="text-section2" for=""
                                style="font-size:20px;color:white;text-align:center">Note9
                                is a gaming beast.</label><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-three" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div data-aos="fade-down" >
                    <label class="text-section3_1" for="" style="font-size:50px;color:white;">Do what can't be
                        done.</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <label class="text-section3_2" for=""
                        style="font-size:25px;color:white;word-break:break-word;">Galaxy
                        Note has
                        always put powerful technology in the hands of those who demand more.
                        Now, the all new Galaxy Note9 surpasses even these high expectations,
                        focusing on what matters most in today’s always-on, mobile world.</label>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-four" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: -webkit-center;">
                <div data-aos="fade-up" >
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <video width="100%" autoplay muted controls>
                                    <source src="{{URL::asset('videos/samsung/galaxy-note9/The new super powerful Note_ Samsung Galaxy Note9.mp4')}}" type="video/mp4">
                                    <source src="{{URL::asset('videos/samsung/galaxy-note9/The new super powerful Note_ Samsung Galaxy Note9.ogg')}}" type="video/ogg">
                                </video>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-five" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos="fade-down" >
                    <svg width="111px" height="111px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                        preserveAspectRatio="xMidYMid" class="lds-ripple" style="background: rgb(0, 0, 0);left: 4px;
position: relative;top: -13px;">
                        <circle cx="50" cy="50" r="7.06252" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                        </circle>
                        <circle cx="50" cy="50" r="1.47175" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                        </circle>
                    </svg>
                    <label class="text-section4_1" for="" style="font-size:50px;color:white;">Performance</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos="fade-up" >
                    <label class="text-section4_2" for=""
                        style="font-size:25px;color:white;word-break:break-word;">The
                        phone powerful enough to keep up with you.</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;margin-top:100px;">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <img src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_performance_visual.jpg')}}" style="width:100%;"
                        alt="Galaxy Note 9 Performance">
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-six" data-background="rgb(0, 0, 0)">
        <div class="row" style="margin-top:100px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:left;">
                <div data-aos="fade-up" >
                    <svg class="svg_six" width="111px" height="111px" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-ripple" style="background: rgb(0, 0, 0);left: 4px;
position: relative;top: -13px;">
                        <circle cx="50" cy="50" r="7.06252" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                        </circle>
                        <circle cx="50" cy="50" r="1.47175" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                        </circle>
                    </svg>
                    <label class="text-section5_1" for="" style="font-size:40px;color:white;">All Day
                        Battery</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:left;">
                <div data-aos="fade-up" >
                    <label class="text-section5_2" for="" style="font-size:20px;color:white">Introducing a powerful
                        all day battery that goes the distance on a single charge — keeping pace with your
                        life</label>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-seven" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div data-aos="fade-up" >
                    <div class="battery1"></div>
                    <div class="battery2"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos-id="test" data-aos="fade-up" >
                    <div id="shiva" style="color:white;font-size:60px;"><span class="count lozad">4000</span><span
                            style="margin-left:30px;">mAh</span></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:left;">
                <div data-aos="fade-up" >
                    <img id="samsung-animation" src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_battery_phone.jpg')}}"
                        style="width:100%;" alt="Galaxy Note 9 Phone battery">
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-eight" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div data-aos-id="test" data-aos="fade-up" data-aos-delay="60" >
                <p class="alldaybat" style="color:white;font-size:12px;">*All day battery based against the usage
                    profile of an
                    ‘average’ user as determined and
                    independently
                    assessed by Strategy Analytics with pre-release versions of the Galaxy Note9 (128GB variant).
                    Actual battery life varies by network environment, features and apps used,
                    frequency of calls and messages, number of times charged, and many other factors.
                    Please see user manual for instructions on how to care for the battery and achieve optimum
                    battery life.</p>
            </div>
        </div>
    </div>
    <div class="slide slide-nine" data-background="rgb(0, 0, 0)">
        <div class="row" style="margin-top:100px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:left;">
                <div data-aos="fade-up" >
                    <svg width="111px" height="111px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                        preserveAspectRatio="xMidYMid" class="lds-ripple" style="background: rgb(0, 0, 0);left: 4px;
position: relative;top: -13px;">
                        <circle cx="50" cy="50" r="7.06252" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                        </circle>
                        <circle cx="50" cy="50" r="1.47175" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                        </circle>
                    </svg>
                    <label class="text-section5_1" for="" style="font-size:40px;color:white;">Storage</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:left;">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <label class="text-section5_2" for="" style="font-size:20px;color:white">Store more. Delete
                        less. With the power of 512GB storage built in — expandable up to 400GB
                        more — you’ll have room for what matters.</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;margin-top:200px;">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <img src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_storage_visual-2.jpg')}}" style="width:90%"
                        alt="Galaxy Note 9 Storage">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;margin-top:100px;">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <label class="text-section9_1" for="" style="font-size:20px;color:white">
                        *Up to 512GB additional storage with external microSD card, sold separately.</label><br>
                    <label class="text-section9_2" for="" style="font-size:20px;color:white">*External Memory may
                        be used to store media (photos, video, and music files) but not applications.</label>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-ten" data-background="rgb(0, 0, 0)">
        <div class="row" style="margin-top:100px;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:left;">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <svg class="svg_ten" width="111px" height="111px" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-ripple" style="background: rgb(0, 0, 0);left: 4px;
position: relative;top: -13px;">
                        <circle cx="50" cy="50" r="7.06252" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                        </circle>
                        <circle cx="50" cy="50" r="1.47175" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                        </circle>
                    </svg>
                    <label class="text-section10_1" for="" style="font-size:40px;color:white;">Optimised for
                        Gaming</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:left;">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <label class="text-section5_2" for=""
                        style="font-size:20px;color:white;break-word:wrod-break;">Level
                        up your mobile gaming experience.
                        The water-carbon cooling system on Galaxy Note9 sustains high performance
                        during game time by preventing overheating of the cutting-edge processor that cuts down on
                        lag.
                        Plus, the AI-based performance adjuster ensures your game stays smooth, not
                        sluggish.</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:100px;text-align:center;">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <figure class="model_game_note_9">
                        <img src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_game_show.png')}}" style="width:90%;" alt="Galaxy Note 9 Gameshow')}}">
                    </figure>
                    <figure class="video_game_note_9">
                        <video id="video_game_show" autoplay="autoplay" loop="loop" style="width:80%;">
                            <source src="https://image.samsung.com/uk/smartphones/galaxy-note9/videos/galaxy-note9_processor.mp4" type="video/mp4">
                            <source src="https://image.samsung.com/uk/smartphones/galaxy-note9/videos/galaxy-note9_processor.ogg" type="video/ogg">
                        </video>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-eleven" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <label style="font-size:15px;color:white;" for="">*Image simulated for illustration
                        purposes.</label>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-twelve" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <label class="label_performance" style="font-size:15px;color:white;" for="">Performance</label>

                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-thirtheen" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos="fade-up" >
                    <svg class="svg_thirtheen" width="111px" height="111px" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-ripple" style="background: rgb(0, 0, 0);left: 4px;
position: relative;top: -13px;">
                        <circle cx="50" cy="50" r="7.06252" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                        </circle>
                        <circle cx="50" cy="50" r="1.47175" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                        </circle>
                    </svg>
                    <label class="head_text_design" for="" style="font-size:45px;color:white;">Design</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos="fade-up" >
                    <label class="text_small" style="font-size:45px;color:white;" for="">See even more with our
                        largest Infinity
                        Display ever.</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:left;">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <img src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_design_visual.jpg')}}" style="width:100%" alt="Galaxy Note 9 design')}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <label class="remark_text" for="" style="font-size:13px;margin-top:50px;"> *Infinity Display: a
                        near bezel-less,
                        full-frontal glass, edge-to-edge screen.</label>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-fourtheen" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:left;">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <svg width="111px" height="111px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                        preserveAspectRatio="xMidYMid" class="lds-ripple" style="background: rgb(0, 0, 0);left: 4px;
position: relative;top: -13px;">
                        <circle cx="50" cy="50" r="7.06252" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                        </circle>
                        <circle cx="50" cy="50" r="1.47175" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                        </circle>
                    </svg>
                    <label class="text-section5_1" for="" style="font-size:45px;color:white;">Color</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:left;">
                <div data-aos="fade-up" data-aos-offset=" data-aos-delay=" 60" >
                    <label class="text_small" style="font-size:30px;color:white;" for="">Complementing the screen is
                        a monochrome
                        metal
                        frame available in a vibrant set of colors — with a matching or contrasting S Pen to suit
                        your style.</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12"
                style="text-align:center;display:inline-flex;margin-top:100px;">
                <div data-aos="fade-right" data-aos-offset=" data-aos-delay=" 60" >
                    <figure class="model_note9_purple">
                        <img src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_purple.png')}}" alt="Galaxy Note 9 Purple" style="width:100%">
                    </figure>
                </div>
                <div data-aos="fade-right" data-aos-offset=" data-aos-delay=" 300" data-aos-duration="1400">
                    <figure class="model_note9_black">
                        <img src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_black.png')}}" alt="Galaxy Note 9 Black" style="width:100%">
                    </figure>
                </div>
                <div data-aos="fade-right" data-aos-offset=" data-aos-delay=" 400" data-aos-duration="1600">
                    <figure class="model_note9_blue">
                        <img src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_blue.png')}}" alt="Galaxy Note 9 Blue" style="width:100%">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-fifththeen" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;margin-top:300px;">
                <div data-aos="fade-up" data-aos-offset=" data-aos-delay=" 60" >
                    <label class="text-section5_1" for="" style="font-size:45px;color:white;">Design</label>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-sixtheen" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;margin-top:300px;">
                <div data-aos="fade-up" data-aos-offset=" data-aos-delay=" 60" >
                    <svg width="111px" height="111px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                        preserveAspectRatio="xMidYMid" class="lds-ripple" style="background: rgb(0, 0, 0);left: 4px;
position: relative;top: -13px;">
                        <circle cx="50" cy="50" r="7.06252" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                        </circle>
                        <circle cx="50" cy="50" r="1.47175" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                        </circle>
                    </svg>
                </div>
                <div data-aos="fade-up" data-aos-offset=" data-aos-delay=" 60" >
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label style="position:relative;top:-20px;font-size:30px;" for="">S Pen</label>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset=" data-aos-delay=" 60" >
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label class="text_small"
                                    style="position:relative;top:-20px;font-size:60px;word-break:break-word;"
                                    for="">All new Bluetooth enabled S Pen. Now with intelligence for ultimate
                                    control.</label>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade" data-aos-offset=" data-aos-delay=" 60" >
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:100px;">
                                <img src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_s-pen.jpg')}}" style="width:100%;"
                                    alt="Galaxy Note 9 S-pen">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-seventheen" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:left;margin-top:500px;">
                <div data-aos="fade-up" data-aos-offset=" data-aos-delay=" 60" >
                    <svg class="svg_seventheen" width="111px" height="111px" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-ripple" style="background: rgb(0, 0, 0);left: 4px;
position: relative;top: -13px;">
                        <circle cx="50" cy="50" r="7.06252" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                        </circle>
                        <circle cx="50" cy="50" r="1.47175" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                        </circle>
                    </svg>
                    <label style="font-size:20px;position:relative;top:-10px;font-weight:bold;" for="">Bluetooth
                        Enabled and Perfect
                        Control</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:left;">
                <div data-aos="fade-up" data-aos-offset=" data-aos-delay=" 60" >
                    <label class="text_small" style="font-size:20px;position:relative;top:-10px;" for="">
                        The all new S Pen now boasts powerful Bluetooth technology,
                        letting you press a button to take control of your camera,
                        presentations, and apps without touching your phone.
                        4 While drawing, taking notes, and sending Live messages with the S Pen is as intuitive and
                        natural as pen and paper, thanks to the fine tip and 4096 pressure levels.
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-eighttheen" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 s9_withspen" style="text-align:right;">
                <div data-aos="fade" data-aos-delay="60" data-aos-duration="1400">
                    <img id="note_9_device" src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_spen_device.jpg')}}" alt="Galaxy Note 9 Device"
                        style="width:80%;">
                </div>
                <div data-aos="fade" data-aos-delay="900" data-aos-duration="1400" class="line-spen">
                    <img id="line-s-pen" src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_spen_line.png')}}" alt="Galaxy Note 9 s-pen line">
                </div>
                <div data-aos="fade" data-aos-delay="1200" data-aos-duration="1400" class="spen">
                    <img id="s-pen" src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_spen_pen.png')}}" alt="Galaxy Note 9 s-pen">
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-ninetheen" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos="fade-up" >
                    <svg width="111px" height="111px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                        preserveAspectRatio="xMidYMid" class="lds-ripple" style="background: rgb(0, 0, 0);left: 4px;
position: relative;top: -13px;">
                        <circle cx="50" cy="50" r="7.06252" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                        </circle>
                        <circle cx="50" cy="50" r="1.47175" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                        </circle>
                    </svg>
                </div>
                <div data-aos="fade-up" >
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label style="position:relative;top:-20px;font-size:30px;" for="">Camera</label>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="60" >
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label class="text_small"
                                    style="position:relative;top:-20px;font-size:60px;word-break:break-word;"
                                    for="">Dual Aperture adapts like the human eye for stunning shots, day or
                                    night.</label>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade" >
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                                <img src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_camera_visual.jpg')}}"
                                    style="width:90%;" alt="Galaxy Note 9 Camera">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                                <label style="font-size:13px;margin-top30px;" for="">*The rear wide-angle lens
                                    supports F1.5 and F2.4 modes.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-twenty" data-background="rgb(0, 0, 0)">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:left;margin-top:200px;">
                <div data-aos="fade-up" data-aos-delay="60" >
                    <svg class="svg_twenty" width="111px" height="111px" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-ripple" style="background: rgb(0, 0, 0);left: 4px;
position: relative;top: -13px;">
                        <circle cx="50" cy="50" r="7.06252" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="-0.8s" repeatCount="indefinite">

                            </animate>
                        </circle>
                        <circle cx="50" cy="50" r="1.47175" fill="none"
                             stroke="#ffffff" stroke-width="15">
                            <animate attributeName="r" calcMode="spline" values="0;10" keyTimes="0;1" dur="1.6"
                                keySplines="0 0.2 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                            <animate attributeName="opacity" calcMode="spline" values="1;0" keyTimes="0;1" dur="1.6"
                                keySplines="0.2 0 0.8 1" begin="0s" repeatCount="indefinite">

                            </animate>
                        </circle>
                    </svg>
                    <label class="intelligence_camera"
                        style="font-size:20px;position:relative;top:-10px;font-weight:bold;" for="">Intelligent
                        Camera</label>
                    <label for="">New revolutionary features make it nearly impossible to take a bad shot.
                        The Galaxy Note9 intelligently recognizes what you’re looking at,
                        optimizing color settings like contrast, white balance, exposure,
                        and more. And by detecting blinks and blurs, you can reshoot while the moment's
                        right.</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;margin-top:100px;height:500px;">

                <div class="capture_camera_block">
                    <div data-aos="new-animation" data-aos-delay="1500" data-aos-duration="2000"
                        class="capture_camera"></div>
                </div>
                <div data-aos="fade" data-aos-delay="500">
                    <div class="camera_image">
                        <img src="{{URL::asset('images/samsung/galaxy-note9/galaxy-note9_camera_scene_on.jpg')}}"
                            alt="Galaxy Note 9 Intelligent Camera">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection




@section('script')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{URL::asset('js/page-js/samsung/galaxy-note9/main.js')}}"></script>
@endsection
