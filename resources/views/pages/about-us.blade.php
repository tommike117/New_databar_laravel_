@extends('layouts/new-main')



{{-- Title Website --}}
@section('title', 'ABOUT US | DATABAR COMPANY LIMITED | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')

{{-- Link CSS --}}
@section('link')
    <link rel="stylesheet" href="{{ URL::to('/css/new-website/about-us/style.css')}}">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="{{ URL::to('/css/aos.css')}}">
@endsection



{{-- Body HTML --}}
@section('content')



<section>
    <div class="banner-about-us"></div>
    <div class="text-center ">
        <div class="container ">
            <div class="row ">
                <div class="set-banner">
                    <div class="col-3">
                        <h2 class="count1">2014</h2>
                        <p style="font-size:15px;color:white">ESTABLISHED</p>
                    </div>
                    <div class="col-3">
                        <h2 class="count2" style="float: left;padding-left:25%;">500</h2><span style="color:white;font-size:20px">+</span>
                        <p style="font-size:15px;color:white">CUSTOMERS</p>
                    </div>
                    <div class="col-3">
                        <h2 class="count2" style="float: left;padding-left:42%;">50</h2><span style="color:white;font-size:20px">+</span>
                        <p style="font-size:15px;color:white">PROFESSIONALS</p>
                    </div>
                    <div class="col-3">
                        <h2 class="count3" style="float: left;padding-left:30%;">20</h2><span style="color:white;font-size:20px;padding-right:10%;">+</span>
                        <p style="font-size:15px;color:white">BRANDS</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="mt-7 ">
    <div class="container-fluid row mg-0 pd-0 flex-row-reverse ">
        <div class="col-5 ">
            <div class="container text-right who-we-are FadeInUp">
                <div class="about-databar" style="padding-top:8%;margin-bottom:50px">
                    <h1>About DATABAR</h1>
                    <p>The preferred and best-of-breed Value
                         Added Distributor and Managed Services for enterprise mobility business.</p>
                </div>
                <h2>Who We Are</h2>
                {{-- <p>DATABAR is the leading Value Added Distributor and
                    Authorized Services that sell, support, repair service
                    the comprehensive products and solutions of
                    Samsung enterprise mobility and IT solutions,
                    cyber and mobile security, and complementary
                    mobility solutions on Samsung Android,
                    Android, iOS, Windows OS platforms.</p>
                <p> DATABAR provides a broad range of experienced <br>
                    sales reps, knowledgeable technical support and
                    skilled professional services to help channel
                    partners to achieve growth  in a variety of
                    vertical markets including field force automation,
                    retail, services, healthcare, finance & banking,
                    transport & logistics, manufacturing & supply chain,
                    government and public sector.</p> --}}
                    <p>DATABAR is authorized business-to-business (B2B) distributor and managed
                        services that sells, supports, repair services the comprehensive products
                        and solutions on Samsung Android, other Android, iOS, Windows OS
                        platforms.</p>
            </div>
        </div>
        <div class="col-7  pd-0" style="padding-left: 0px">
            <div class="bg-section-1">
            </div>
        </div>
    </div>
</section>

<section  style="overflow: hidden">
    <div class="container-fluid row ">
        <div class="col-6">
            <div class="container set-text-section2 FadeInUp" >
<style>
    ul.circle {
        list-style-type: circle;
        font-family: quicksand;
        font-size: 16px;
        color: #909090;

    }
</style>
                <h1>What We Do</h1>
                {{-- <p>Our mission is to help mobile operators or carriers, independent software providers, system integrators, technology solution providers, value-added resellers (VARs), at what they do best by providing the best product solutions, complementary mobility solutions, proprietary tools and supports in the vertical industries.</p>
                <br>
                <p>We aim to enhance our enterprise customer’s business with seamless integration of Samsung enterprise mobility and IT solutions, cyber and mobile security, complementary mobility solutions and authorized repair.</p> --}}
                <p>
                    DATABAR is authorized business-to-business (B2B) distributor and repair
                    services that sells, supports, repair services the comprehensive products
                    and solutions on Samsung Android, other Android, iOS, Windows OS
                    platforms.
                </p>
                <div class="set-block">
                    <ul class="circle" >
                        <li>
                            Samsung enterprise mobility
                        </li>
                        <li>
                            Samsung rugged devices
                        </li>
                        <li>
                            Samsung Knox (EMM)
                        </li>
                        <li>
                            Enterprise mobility solutions – SaaS/On-cloud and On-premise
                        </li>
                    </ul>
                    <p style="padding-left:40px;font-size: 15px;">
                        Mobile Devices Manage (MDM),
                        Mobile Threat Prevention (MTP),
                        Distribution Management System (DMS),
                        Salesforce Automation (SFA),
                        Retail Execution Management (REM),
                        Unified Communication (UC)
                    </p>
                    <ul class="circle" >
                        <li>
                            Rugged smartphones, tablets and Mobile computers
                        </li>
                        <li>
                            Barcode scanners & Data Collection as complementary mobility solutions

                        </li>
                        <li>
                            Mounting Solutions and Casing Accessories
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-6 height-100vh pd-0">
            <div class="bg-section-2" style="margin-left: 10%"></div>
        </div>
    </div>
</section>

<section>
    <div class="bg-section-3">
        <h2 class="text-vertical">Vertical End User</h2>
        <div class="icon-vertical">
            <div class="icon-set" style="margin-top: 3%">
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-01.png" alt="">
                </div>
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-02.png" alt="">
                </div>
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-03.png" alt="">
                </div>
            </div>
            <div class="icon-set">
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-04.png" alt="">
                </div>
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-05.png" alt="">
                </div>
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-06.png" alt="">
                </div>
            </div>
            <div class="icon-set">
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-07.png" alt="">
                </div>
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-08.png" alt="">
                </div>
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-09.png" alt="">
                </div>
            </div>
        </div>
        <div class="icon-vertical-m">
            <div class="icon-set" style="margin-top: 3%">
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-01.png" alt="">
                </div>
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-02.png" alt="">
                </div>
            </div>
            <div class="icon-set">
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-03.png" alt="">
                </div>
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-04.png" alt="">
                </div>

            </div>
            <div class="icon-set">
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-05.png" alt="">
                </div>
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-06.png" alt="">
                </div>
            </div>

            <div class="icon-set">
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-07.png" alt="">
                </div>
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-08.png" alt="">
                </div>

            </div>
            <div class="icon-set">
                <div class="block-set">
                    <img width="100%" src="/images/new-website/about-us/icon/icon-09.png" alt="">
                </div>
            </div>

        </div>
    </div>
</section>



<section>
    <div data-aos="fade-up"data-aos-duration="500"class="footer-desktop-none">
        <div class="footer-desktop" >
            <div class="footer-flex-30">
                <img src="/images/new-website/icon_footer-01.png" class="footer-flex-icon ld ld-shiver" alt="Databar-footer">
                <p>
                    Let's Connect<br>
                    Databar on social media.
                </p>
                <div data-aos="fade-up" class="icon-social">
                    <a href="https://www.facebook.com/VAD.databar" target="_blank">
                        <img  src="/images/new-website/icon_footer-02.png" alt="" class="ld ld-tick" width="8%" ;="">
                    </a>
                    <img src="/images/new-website/icon_footer-03.png" id="myline-home" alt="" class="ld ld-tick" style="width:8%; margin-left:10px; cursor:pointer;" >
                </div>
            </div>
            <div class="footer-flex-6"></div>
            <div class="footer-flex-18"style="display: flex;margin-top: 48px;">
                <div class="footer-flex-50">
                    <h2>
                        Brands
                    </h2>
                    <ul data-aos="fade-up"data-aos-duration="500">
                        <li><a href="/products">Samsung</a></li>
                        <li><a href="/products">Armor-X</a></li>
                        <li><a href="/products">Bixolon</a></li>
                        <li><a href="/products">Caterpillar</a></li>
                        <li><a href="/products">Datalogic</a></li>
                        <li><a href="/products">Ecom-EX</a></li>
                        <li><a href="/products">Gamber-Johnson</a></li>
                        <li><a href="/products">iKey</a></li>
                        <li><a href="/products">Ivy Mobility</a></li>
                    </ul>
                </div>
                <div class="footer-flex-50">
                    <ul data-aos="fade-up"data-aos-duration="500" style="margin-top: 29px;" >
                        <li><a href="/products">Koamtac</a></li>
                        <li><a href="/products">Ram-Mounts</a></li>
                        <li><a href="/products">Sam4s</a></li>
                        <li><a href="/products">Star2star</a></li>
                        <li><a href="/products">Toshiba Tec</a></li>
                        <li><a href="/products">Unitech</a></li>
                        <li><a href="/products">Wandera</a></li>
                        <li><a href="/products">WeGuard</a></a></li>
                        <li><a href="/products">42Gears</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-flex-6"></div>
            <div class="footer-flex-20" style="margin-top: 48px;" >
                    <h2>
                        Recommended
                    </h2>
                    <ul data-aos="fade-up"data-aos-duration="500">
                        <li><a href="/products">Samsung Galaxy Xcover</a></li>
                        <li><a href="/products">Galaxy Tab Active 2</a></li>
                        <li><a href="/products">Barcode Scanners</a></li>
                        <li><a href="/products">Mobile Printers</a></li>
                        <li><a href="/products">Mobile Computer</a></li>
                    </ul>
            </div>
            <div class="footer-flex-20"style="margin-top: 48px;">
                <h2>
                    Contact us
                </h2>
                <ul data-aos="fade-up"data-aos-duration="500">
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/about-us">About us </a></li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright">
            <h2>
                Copyright© 2020 DATABAR - All Rights Reserved.
            </h2>
        <div class="footer-link">
            <a href="/services"  target="_blank">Services </a>
            <a href="/about-us" style="padding:0 20px" target="_blank">About Us </a>
            <a href="/contact"  target="_blank">Contacts </a>
            </div>
        </div>
    </div>

    <div class="footer-home mobile tablet">
        <div class="bg-footer ">
            <figure class="footer-section">
                <img src="/images/new-website/icon_logo_-01.png" alt="DATABAR">
            </figure>
            <p>
                Copyright© 2019 DATABAR - All Rights Reserved.
            </p>
            <div class="footer-link">
                <a href="/services"  target="_blank">Services </a>
                <a href="/about-us" style="padding:0 7px" target="_blank">About US </a>
                <a href="/contact"  target="_blank">contacts </a>
            </div>
        </div>
    </div>
</section>
@endsection




@section('script')
<script src="{{URL::to('/js/aos.min.js')}}"></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>


<script>
    $('.count1').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 3000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    $('.count2').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 3000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    $('.count3').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 3000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>


@endsection
