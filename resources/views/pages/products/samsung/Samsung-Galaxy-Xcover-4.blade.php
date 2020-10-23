@extends('layouts/main')

@section('title', 'Galaxy Xcover 4 | Samsung Smartphone | DATABAR COMPANY LIMITED')

@section('link')

<link rel="stylesheet" href="{{ URL::to('/css/page-style/samsung/Samsung Galaxy Xcover 4/main.css')}}">
<link rel="stylesheet" href="/css/animate.css">

@endsection


<!-- Grid -->

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 firstrow" style="overflow:hidden;">
            <nav aria-label="breadcrumb" id="breadcrumb">
                <ol itemscope itemtype="http://schema.org/Product" class="breadcrumb mt-lg-5" style="background:transparent;">
                    <li class="breadcrumb-item"><a href="{{URL::to("/")}}">Home</a></li>
                    <li class="breadcrumb-item"><a itemprop="brand" itemscope itemtype="http://schema.org/Brand" href="{{URL::route('samsung.smartphone.all')}}"><span itemprop="name">Samsung Smartphone</span></a></li>
                    <li class="breadcrumb-item d-flex active" aria-current="page">
                        <h1 itemprop="name" class="m-auto" style="font-size:15px;">Galaxy Xcover 4</h1>
                    </li>
                </ol>
            </nav>
            <img id="xcover4" src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover4-resize.jpg')}}"
                style="width:100%;" alt="Galaxy Xcover 4" title="Samsung Galaxy Xcover 4">
            <div class="thumbnails">
                <ul class="ul-product">
                    <li class="li-product">
                        <img src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover4-resize.jpg')}}"
                            alt="Rugged Smartphone Samsung Galaxy Xcover 4 preview1" title="Samsung Galaxy Xcover 4 Rugged Smartphone preview-1">
                    </li>
                    <li class="li-product">
                        <img src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover4_2.jpg')}}"
                            alt="Rugged Smartphone Samsung Galaxy Xcover 4 preview2" title="Samsung Galaxy Xcover 4 Rugged Smartphone preview-2">
                    </li>
                    <li class="li-product">
                        <img src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover4_3.jpg')}}"
                            alt="Rugged Smartphone Samsung Galaxy Xcover 4 preview3" title="Samsung Galaxy Xcover 4 Rugged Smartphone preview-3">
                    </li>
                    <li class="li-product">
                        <img src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover4_4.jpg')}}"
                            alt="Rugged Smartphone Samsung Galaxy Xcover 4 preview4" title="Samsung Galaxy Xcover 4 Rugged Smartphone preview-4">
                    </li>
                    <li class="li-product">
                        <img src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover4_5.jpg')}}"
                            alt="Rugged Smartphone Samsung Galaxy Xcover 4 preview5"title="Samsung Galaxy Xcover 4 Rugged Smartphone preview-5">
                    </li>
                    <li class="li-product">
                        <img src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover4_6.jpg')}}"
                            alt="Rugged Smartphone Samsung Galaxy Xcover 4 preview6"title="Samsung Galaxy Xcover 4 Rugged Smartphone preview-6">
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;background: rgba(0,0,0,0.1);">
                    <p class="mb-1" style="font-size:15px;color:grey;margin-top:20px;">Smartphone</p>
                    <h1 class="product_name">Galaxy Xcover 4</h1><br>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:30px !important;border-bottom:1px solid">
                    <h3 for="" style="font-size:20px;color:black;font-weight:bold">Specification</h3><br>
                    <ul>
                        <li>
                            <label style="font-size:15px;" for="">5.0" HD Display</label>
                        </li>
                        <li>
                            <label style="font-size:15px;" for="">Rugged and durable design</label>
                        </li>
                        <li>
                            <label style="font-size:15px;" for="">13MP rear camera</label>
                        </li>
                        <li>
                            <label style="font-size:15px;" for="">RAM : 2 (GB)</label>
                        </li>
                        <li>
                            <label style="font-size:15px;" for="">ROM : 16 (GB)</label>
                        </li>
                        <li>
                            <label style="font-size:15px;" for="">Resolution (Main Display) 720 x 1280 (HD)</label>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row text-center feature-tab" style="align-items: center;">
                <div class="border-right-solid col-3 ">
                    <img src="/images/samsung/galaxy-xcover-pro/icon-ip68.png" style="width: 100%" alt="ip68">
                    <p style="margin-top:10px">IP 68</p>
                </div>
                <div class="border-right-solid col-3 ">
                    <img src="/images/samsung/galaxy-xcover-pro/icon-drop.png" style="width: 100%" alt="drop">
                    <p style="margin-top:10px">Rugged</p>
                </div>
                <div class="border-right-solid col-3 ">
                    <img src="/images/samsung/galaxy-xcover-pro/icon-grade.png" style="width: 100%" alt="grade">
                    <p style="margin-top:10px">Military Standard</p>
                </div>
                <div class="border-right-solid col-3 " style="border:none">
                    <img src="/images/samsung/galaxy-xcover-pro/icon-temp.png" style="width: 100%" alt="temp">
                    <p style="margin-top:10px">Operating Temperature</p>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="slide slide-one">
        <div class="row  column-reverse">
            <div class="col-xs-12 col-sm-12 col-md-12 m-lg-30-auto" style="text-align:center;">
                <h2 class="text-section1" style="font-size:60px;font-weight:bold;">Fit for life on
                    the move</h2><br>
                <p class="content_text">Rugged
                    design with a sense
                    of sophistication. At a slim 9.7mm wide, the Galaxy Xcover 4 is thinner than previous
                    generations and features an easy-to-grip, non-slip finish. It won’t slide out of your
                    hand unexpectedly while on the go.</p><br>
            </div>
            <img class="FadeInUp" style="width:100%;" src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover_banner.jpg')}}"
                alt="Galaxy Xcover 4 Rugged Design" title="Samsung Galaxy Xcover 4 Rugged Design">
        </div>
    </div>
    <div class="slide slide-two">
        <div class="row column-reverse">
            <div class="col-xs-12 col-sm-12 col-md-12 m-lg-30-auto" style="text-align:center;">
                <h2 class="text-section1">Reliably durable</h2><br>
                <p class="content_text">Designed to function wherever you go, with IP68 and MIL-STD 810G
                    certification, the Galaxy Xcover 4 is durable enough to withstand harsh conditions. Whether
                    you’re hiking or playing outdoor sports. you can rest assured your device is protected
                    against dust and water.</p><br>
            </div>
            <img class="FadeInUp"  src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover4_reliable.jpg')}}"
                style="width:100%;" alt="Galaxy Xcover 4 is reliably durable with IP68 and MIL-STD 810G"
                title="Galaxy Xcover 4 is reliably durable with IP68 and MIL-STD 810G">
        </div>
    </div>
    <div class="slide slide-three">
        <div class="row column-reverse">
            <div class="col-xs-12 col-sm-12 col-md-12 m-lg-30-auto" style="text-align:center;">
                <h2 class="text-section1">Experience richer
                    resolution</h2><br>
                <p class="content_text">Open
                    your eyes to
                    extraordinary colour. Featuring a bigger screen than previous models,
                    the Galaxy Xcover 4 display measures 5.0” to deliver exceptional detail.
                    Discover an overall better viewing experience when streaming your favourite multimedia.</p>

            </div>
            <img class="FadeInUp"  src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover_banner_2.jpg')}}" style="width:100%;"
                alt="Galaxy Xcover 4 Experience richer resolution"
                title="Samsung Galaxy Xcover 4 Experience richer resolution">
        </div>
    </div>
    <div class="slide slide-four">
        <div class="row column-reverse">
            <div class="col-xs-12 col-sm-12 col-md-12 m-lg-30-auto" style="text-align:center;">
                <h2 class="text-section1 text-center" for="" style="font-size:60px;font-weight:bold;">Shoot
                    exceptional
                    photos</h2><br>
                <p class="content_text">Higher
                    resolution to create
                    stunning stories. Whether you’re taking selfies or capturing stunning landscapes
                    its front 5MP and 13MP rear flash cameras will bring out the best of the world around you.
                    Simply double click the home button for instant access and begin shooting.</p>
            </div>
            <img src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover_banner_3.jpg')}}" style="width:100%;"
                alt="Galaxy Xcover 4 Shoot exceptional photos" title="Samsung Galaxy Xcover 4 Shoot exceptional photos">

        </div>
    </div>
    <div class="slide slide-nine">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6" style="text-align:center;padding:0;">
                <div>
                    <img class="FadeInUp"  src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover_banner_4.jpg')}}"
                        style="width:100%;" alt="Galaxy Xcover 4 Increased touch sensitivity"
                        title="Samsung Galaxy Xcover 4 Increased touch sensitivity">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 half_content"
                style="text-align:center;display:flex;align-items: center;">
                <div>
                    <h2 class="text-section1" for="" style="font-size: 60px;font-weight: bold;">Increased
                        touch sensitivity</h2><br>
                    <p class="content_text">Keep
                        your hands warm and dry during use.
                        The Galaxy Xcover 4 features an intuitive display
                        that lets you interact with your device even with gloves on so you can go
                        on working outside or enjoying outdoor activities without any issue.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-ten">
        <div class="row reverse">
            <div class="col-xs-12 col-sm-12 col-md-6 half_content"
                style="text-align:center;display:flex;align-items: center;">
                <div>
                    <h2 class="text-section1" for="" style="font-size: 60px;font-weight: bold;">
                        Seamless transactions with NFC</h2><br>
                    <p class="content_text">
                        With NFC integration the Galaxy Xcover 4 doubles
                        as your wallet to make paying for purchases or
                        transportation super easy. Simply swipe your device
                        at the counter or subway turnstile to fulfill the transaction
                        and never worry about being without money again.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6" style="text-align:center;padding:0;">
                <div>
                    <img class="FadeInUp"  src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover_banner_6.jpg')}}"
                        style="width:100%;" alt="Galaxy Xcover 4 with NFC" title="Samsung Galaxy Xcover 4 with NFC">
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-eleven">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6" style="text-align:center;padding:0;">
                <div>
                    <img class="FadeInUp"  src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover_banner_7.jpg')}}"
                        style="width:100%;" alt="Galaxy Xcover 4 Packs More Power"
                        title="Samsung Galaxy Xcover 4 Packs More Power">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 half_content"
                style="text-align:center;display:flex;align-items: center;">
                <div>
                    <h2 class="text-section1" for="" style="font-size: 60px;font-weight: bold;">Packs more power
                    </h2><br>
                    <p class="content_text">Power made to deliver
                        even longer usage times to maximize enjoyment.
                        The Galaxy Xcover 4 comes equipped with a 2800mAh battery
                        to ensure you have plenty of charge to keep your workflow
                        or content streaming going without interruption.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-twelve mb-xs-5 mb-sm-0 mb-md-0">
        <div class="row reverse">
            <div class="col-xs-12 col-sm-12 col-md-6 half_content"
                style="text-align:center;display:flex;align-items: center;">
                <div>
                    <h2 class="text-section1" for="" style="font-size: 60px;font-weight: bold;">
                        Absolute privacy</h2><br>
                    <p class="content_text">
                        Spend less time worrying and more time enjoying with peace of mind protection.
                        Samsung Knox features passport-grade security so you can rest assured that your
                        device is defended from real-time malware threats that put your data and privacy constantly
                        at risk.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6" style="text-align:center;padding:0;">
                <div>
                    <img class="FadeInUp" src="{{URL::asset('/images/samsung/Samsung Galaxy Xcover 4/xcover_banner_8.jpg')}}"
                        style="width:100%;" alt="Galaxy Xcover 4 Absolute privacy"
                        title="Samsung Galaxy Xcover 4 Absolute privacy">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ URL::asset('/js/page-js/samsung/Samsung Galaxy Xcover 4/main.js')}}"></script>
@endsection
