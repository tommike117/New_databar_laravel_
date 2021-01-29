
@extends('layouts/main-all-products')


{{-- Title Website --}}
@section('title', 'Galaxy Tab Active3 | Samsung Tablet | DATABAR COMPANY LIMITED')

@section('canonical')
<link rel="stylesheet" type="text/css" href="/css/page-style/samsung/galaxy-tab-active-3/main.css">

@endsection


{{-- Link CSS --}}
@section('link')

@endsection

{{-- Body HTML --}}
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 firstrow" style="overflow:hidden;padding-bottom:5%;">
            <nav aria-label="breadcrumb" id="breadcrumb">
                <ol class="breadcrumb mt-lg-5" style="background:transparent;">
                    <li class="breadcrumb-item"><a href="{{URL::to("/")}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{URL::route('samsung_tablets')}}">Samsung
                            Tablet</a></li>
                    <li class="breadcrumb-item d-flex active" aria-current="page">
                        <h1 class="m-auto" style="font-size:15px;">Galaxy Tab Active3</h1>
                    </li>
                </ol>
            </nav>
            <img id="GTA2" src="/images/samsung/galaxy-tab-active3/1.jpg" style="width:100%;padding:0 5% 0 20%;"
                title="Samsung Galaxy Tab Active3 Rugged Tablet" alt="Galaxy Tab Active3 Rugged Tablet">
            <div class="thumbnails">
                <ul class="ul-product">
                    <li class="li-product">
                        <img src="/images/samsung/galaxy-tab-active3/1.jpg" alt="Galaxy Tab Active Pro Rugged Tablet preview-1" title="Samsung Galaxy Tab Active Pro Rugged Tablet preview-1">
                    </li>
                    <li class="li-product">
                        <img src="/images/samsung/galaxy-tab-active3/2.jpg" alt="Galaxy Tab Active Pro Rugged Tablet preview-2" title="Samsung Galaxy Tab  Active Pro Rugged Tablet preview-2">
                    </li>
                    {{-- <li class="li-product">
                        <img src="/images/samsung/galaxy-tab-active-pro/GTApro_3.png" alt="Galaxy Tab Active Pro Rugged Tablet preview-3" title="Samsung Galaxy Tab Active Pro Rugged Tablet preview-3">
                    </li>
                    <li class="li-product">
                        <img src="/images/samsung/galaxy-tab-active-pro/GTApro_4.png" alt="Galaxy Tab Active Pro Rugged Tablet preview-4" title="Samsung Galaxy Tab Active Pro Rugged Tablet preview-4">
                    </li>
                    <li class="li-product">
                        <img src="/images/samsung/galaxy-tab-active-pro/GTApro_5.png" alt="Galaxy Tab Active Pro Rugged Tablet preview-5" title="Samsung Galaxy Tab Active Pro Rugged Tablet preview-5">
                    </li>
                    <li class="li-product">
                        <img src="/images/samsung/galaxy-tab-active-pro/GTApro_6.png" alt="Galaxy Tab Active Pro Rugged Tablet preview-6" title="Samsung Galaxy Tab Active Pro Rugged Tablet preview-6">
                    </li> --}}
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 "
                    style="text-align: center;background: rgba(0,0,0,0.1);padding:20px; margin-top: 60px;">
                    <label for="" style="font-size:16px;color:grey;margin-top:10px;">Tablet</label>
                    <h1 class="product_name">Galaxy Tab Active3</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:30px !important;border-bottom:1px solid">
                    <label for="" style="font-size:20px;color:black;font-weight:bold">Specification</label><br>
                    <ul>
                        <li>
                            <label style="font-size:13px;" for="">Size : 8" (255.4mm) </label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">Rugged and durable design</label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">Accelerometer,Fingerprint Sensor,Gyro Sensor,ETC.</label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">Rear Camera : 13.0 MP AF,Flash </label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">Front Camera : 5.0 MP </label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">RAM : 4 (GB)</label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">ROM : 64 (GB) | Micro SD up to 1TB</label>
                        </li>
                        <li>
                            <label style="font-size:13px;" for="">Display : 1920 x 1200 (WUXGA) </label>
                        </li>
                    </ul>
                </div>
            </div>



        </div>
    </div>
</div>



<div class="container">
    <div class="row text-center feature-tab" style="align-items: center;">
        <div class="border-right-solid col-3 " style="padding:50px">
            <img src="/images/samsung/galaxy-xcover-pro/icon-ip68.png" style="width: 70%" alt="ip68">
            <p style="margin-top:10px">IP 68</p>
        </div>
        <div class="border-right-solid col-3 "style="padding:50px">
            <img src="/images/samsung/galaxy-xcover-pro/icon-drop.png" style="width: 70%" alt="drop">
            <p style="margin-top:10px">Rugged</p>
        </div>
        <div class="border-right-solid col-3 "style="padding:50px">
            <img src="/images/samsung/galaxy-xcover-pro/icon-grade.png" style="width: 70%" alt="grade">
            <p style="margin-top:10px">Military Standard</p>
        </div>
        <div class="border-right-solid col-3 " style="border:none;padding:50px">
            <img src="/images/samsung/galaxy-xcover-pro/icon-temp.png" style="width: 70%" alt="temp">
            <p style="margin-top:10px">Operating Temperature</p>
        </div>
    </div>
</div>


{{-- <div class="container container-fluid">
    <h2 class="text-header">The tablet that can do what others can't</h2>
    <p class="description-header">Its tough, rugged IP68 and anti-shock design with protective case make it the ultimate device, whether it's used at home, on the road, or the other places life takes you. A large screen and long-lasting replaceable battery let you travel without boundaries and experience more.</p>
</div>
<img class="img-header" src="/images/samsung/galaxy-tab-active-pro/uk-feature-the-tablet.webp" alt="galaxy-tab-active-pro">
<div class="text-center">
    <sub>*Galaxy Tab Active Pro is available in two models: LTE and Wi-Fi. Model availability may vary by country and region.</sub>
</div>

<div class="container">
    <h2 class="text-header">Built to be as active as you</h2>
    <p class="description-header">Galaxy Tab Active Pro was built to be as active as you, whether indoor or out. IP68 water and dust resistance lets you handle it in various conditions, while anti-shock protection makes it extra durable. The large 10.1 inch screen allows you to see and do more.</p>
</div>
<img src="/images/samsung/galaxy-tab-active-pro/feature-built-to-be-as-active-as-you-185437739.webp" alt="#" style="width:100%">
<div class="container">
    <h2 class="text-header">Powered to keep going</h2>
    <p class="description-header">Bring your tablet along with you for the ride with a battery that lasts. A 7,600mAh capacity gives up to 15 hours of video playback from full charge, so you can keep going even when outlets are few and far away. USB-C charging minimises time spent near the socket.</p>
</div>
<img src="/images/samsung/galaxy-tab-active-pro/feature-powered-to-keep-going-185437743.webp" alt="#" style="width:100%">
<div class="container text-center" style="margin-top:30px;">
    <sub>*Images for demonstration purposes only.*Based on results from internal lab tests for local video playback time conducted by Samsung. Test Results from a pre-release version of the device under default settings (audio volume and brightness levels) without connection to Wi-Fi or mobile network. Battery life varies significantly with settings, usage, and other factors.</sub>
</div>


<div class="container">
    <h2 class="text-header">Express yourself in the moment</h2>
    <p class="description-header">The S Pen feels natural to hold, and the 4,096 levels of sensitivity and slim-lined 0.7mm tip mean it's super accurate too. When you're outdoors, you can use it to quickly edit your pictures, follow your inspiration and sketch, and check and make notes on your road map.</p>
</div>
<img src="/images/samsung/galaxy-tab-active-pro/uk-feature-express-yourself-in-the-moment-185437723.webp" alt="#" style="width:100%">
<div class="container text-center" style="margin-top:30px;">
    <sub>*Images for demonstration purposes only.</sub>
</div>

<div class="container-fluid" style="margin:10% 0;">
    <div class="row">
        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
            <div class="container" style="padding:0 15%;">
                <h2 class="header-col-6">Enhanced performance and storage space</h2>
                <p class="description-col-6">4GB of memory and 64GB of storage space let Galaxy Tab Active Pro keep up with you and your contents, while a Micro SD adds up to 512GB more to keep all your data in one place. Get quick a connection to other devices with a POGO pin for added productivity and data transfer while simultaneously recharging.</p>
                <div class="text-left" style="margin-top:30px;">
                    <sub>*MicroSD card and accessories sold separately.</sub>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
            <img src="/images/samsung/galaxy-tab-active-pro/uk-feature-enhanced-performance-and-storage-space-185437737.webp" alt="#" style="width:100%">
        </div>
    </div>
    <div class="row flex-row-reverse" style="margin-top:15%;">
        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
            <div class="container" style="padding:0 15%;">
                <h2 class="header-col-6">A PC-like experience that follows you</h2>
                <p class="description-col-6">Get the PC-like experience of Samsung DeX whether inside or in the great outdoors. Quickly set up Galaxy Tab Active Pro with a keyboard and mouse to express your creativity regardless of location. Or connect to a big screen to make light work of even the chunkiest spreadsheet.</p>
                <div class="text-left" style="margin-top:30px;">
                    <sub>*Adapter, keyboard, and external display sold separately.</sub>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto;">
            <img src="/images/samsung/galaxy-tab-active-pro/uk-feature-a-pc-like-experience-that-follows-you-185437731.webp" alt="#" style="width:100%">
        </div>
    </div>
</div>



<div class="container">
    <h2 class="text-header">Finally a reason to put down your phone</h2>
    <p class="description-header">Stay in touch when your phone is out of reach. Galaxy Tab Active Pro seamlessly synchronises to your Galaxy smartphone, so you can take calls when they come in just like you answer your phone. It also allows you to reply to text messages, so you’re never out of the loop.</p>
</div>
<img src="/images/samsung/galaxy-tab-active-pro/uk-feature-finally-a-reason-to-put-down-your-phone-185437721.webp" alt="#" style="width:100%">
<div class="container text-center" style="margin-top:30px;margin-bottom:50px;">
    <sub>*Performance may vary depending on distance and network quality. Network connection required to use Call & Message Continuity on both Galaxy smartphone and Galaxy Tab Active Pro.</sub>
</div> --}}




@endsection


@section('script')

<script src="{{URL::asset('/js/page-js/samsung/galaxy-tab-active3/main.js')}}"></script>

@endsection
