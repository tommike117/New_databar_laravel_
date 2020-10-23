@extends('layouts/main-home')


{{-- Title Website --}}
@section('title', 'DATABAR COMPANY LIMITED | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/home/style.css')}}">
<link rel="stylesheet" href="{{ URL::to('/bootstrap-4.5.0/_carousel.scss')}}">
<link rel="stylesheet" href="{{ URL::to('/css/aos.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/animate-icon.min.css')}}">

@endsection



{{-- Body HTML --}}
@section('content')

{{-- section1 --}}
{{-- Banner --}}
<section class="bg-main-1">
    <div id="carouselExampleCaptions1" class="carousel slide desktop" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

            {{-- <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li> --}}

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                {{-- <img src="/images/new-website/banner_M-01.jpg" class="slide-pic w-100 mobile tablet" alt="Banner-1-mobile tablet" >
                <div class="slide-caption  mobile tablet">
                    <h5>Welcome to DATABAR</h5>
                    <p class="normal-mobile"> is Thai Value-added
                        Tier 1 and Worldwide product
                        specialty distributor of IT Security,
                        Information Management and Network Solutions.</p>
                    <p class="small-mobile" > is Thai Value-added
                        Tier 1 and Worldwide product.
                    </p>
                </div> --}}
                    <img src="/images/new-website/banner-01.jpg" class="slide-pic w-100 desktop" alt="Banner-1-desktop">
                    <div class="slide-caption desktop">
                        <h5>Welcome to DATABAR</h5>
                        <p> The Authorized B2B Distributor and Managed Services for Enterprise Mobility Products and Solutions
                        </p>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="/images/new-website/banner-02.jpg" class="slide-pic  w-100 desktop" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/new-website/banner-03.jpg" class="slide-pic w-100  desktop" alt="...">
            </div>
            {{-- <div class="carousel-item mobile tablet">
                <img src="/images/new-website/braner_1920x650px-04.png" style="display: none" alt="...">
            </div> --}}
            {{-- <div class="carousel-item">
                <img src="/images/new-website/banner_phone-05.jpg" class="slide-pic w-100 mobile tablet" alt="...">
                <img src="/images/new-website/braner_1920x650px-05.png" class="slide-pic w-100  desktop" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="/images/new-website/banner_phone-06.jpg" class="slide-pic w-100 mobile tablet" alt="...">
                <img src="/images/new-website/braner_1920x650px-06.png" class="slide-pic w-100  desktop" alt="...">
            </div> --}}
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="carouselExampleCaptions2" class="carousel slide mobile tablet" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3" ></li>
            {{-- <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li> --}}

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/new-website/banner_M-01.jpg" class="slide-pic w-100 mobile tablet" alt="Banner-1-mobile tablet" >
                <div class="slide-caption  mobile tablet">
                    <h5>Welcome to DATABAR</h5>
                    <p class="normal-mobile"> is Thai Value-added
                        Tier 1 and Worldwide product
                        specialty distributor of IT Security,
                        Information Management and Network Solutions.</p>
                    <p class="small-mobile" > is Thai Value-added
                        Tier 1 and Worldwide product.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/new-website/banner_M-02.jpg" class="slide-pic  w-100 mobile tablet" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/new-website/banner_M-03.jpg" class="slide-pic w-100 mobile tablet" alt="...">
            </div>
            <div class="carousel-item mobile tablet">
                <img src="/images/new-website/banner_M-04.jpg" class="slide-pic w-100 mobile tablet" alt="...">
            </div>
            {{-- <div class="carousel-item">
                <img src="/images/new-website/banner_phone-05.jpg" class="slide-pic w-100 mobile tablet" alt="...">
                <img src="/images/new-website/braner_1920x650px-05.png" class="slide-pic w-100  desktop" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="/images/new-website/banner_phone-06.jpg" class="slide-pic w-100 mobile tablet" alt="...">
                <img src="/images/new-website/braner_1920x650px-06.png" class="slide-pic w-100  desktop" alt="...">
            </div> --}}
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

        <div class="body">
            <div class="bg-main-1-1">
                <div  data-aos="fade-down"  class="icon-section-1" style="padding-top: 1%;">
                    <div class="icon-1">
                        <figure class="layout-col3">
                            <img src="/images/new-website/icon_newhome-01.png" class="icon-banner" alt="B2B">
                        </figure>
                        <div class="text-icon">
                            <h2>
                                B2B
                            </h2>
                            <p>
                                {{-- Distributor and Authorized <br>Services that sell --}}
                                Authorized B2B Distributor <br> and Managed Services
                            </p>
                        </div>
                    </div>
                    <div class="icon-2">
                        <figure class="layout-col3">
                            <img src="/images/new-website/icon_newhome-02.png" class="icon-banner" alt="Mobility">
                        </figure>
                        <div class="text-icon">
                            <h2>
                                Products
                            </h2>
                            <p>
                                {{-- We are authorized <br>distributors and resell  <br>them to clients --}}
                                Enterprise Mobility <br> Products and Accessories
                            </p>
                        </div>
                    </div>
                    <div class="icon-3">
                        <figure class="layout-col3">
                            <img src="/images/new-website/icon_newhome-03.png" class="icon-banner" alt="solution">
                        </figure>
                        <div class="text-icon">
                            <h2>
                                Software
                            </h2>
                            <p>
                                {{-- Which are supported by <br>professional teams --}}
                                Enterprise Mobility <br> Software and Security SaaS
                            </p>
                        </div>
                    </div>
                    <div class="icon-4">
                        <figure class="layout-col3">
                            <img src="/images/new-website/icon_newhome-04.png" class="icon-banner" alt="Service">
                        </figure>
                        <div class="text-icon">
                            <h2>
                                Service
                            </h2>
                            <p>
                                {{-- get the best quality <br>service they need. --}}
                                Professional Managed <br> Services and SLA
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
    <div class="body">
                {{-- Section 2 --}}
                <section class="section-2">
                    <div class=" bg-main-2">
                        <div data-aos="fade-down" class="block-video">
                            <video class="video-section" title="home-page video" autoplay muted loop>
                                <source src="/images/new-website/SamsungandCiscoJoinForcestoEnabletheFutureofWork.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div data-aos="fade-down"class="text-section-2">
                            <h2>
                                Our vision
                            </h2>
                            <p>
                                is to be the preferred
                                and best-of-breed
                                Value Added Distributor
                                for enterprise mobility business
                            </p>
                        </div>
                    {{-- mobile s & m --}}
                        <div class="flex-section-2 hidden-mobile-section2">
                            <div class="pic1-section-2">
                                <figure class="pic-aside" >
                                    <img src="/images/new-website/pic_mobile-01.png"  class="pic-1" alt="pic-1">
                                </figure>
                            </div>
                            <div class="pic2-section-2">
                                <figure class="">
                                    <img src="/images/new-website/pic_mobile-02.png" class="pic-2"  alt="pic-2">
                                </figure>
                                <figure class="">
                                    <img src="/images/new-website/pic_mobile-03.png" class="pic-3"  alt="pic-3">
                                </figure>
                            </div>
                        </div>
                    {{-- tablet&desktop --}}
                        <div class="flex-section-2 hidden-tablet-pc-section2">
                            <div class="pic1-section-2">
                                <figure class="pic-aside" >
                                    <img src="/images/new-website/pic_home-01.png"  class="pic-1" alt="pic-1">
                                </figure>
                                <figure class="pic-aside">
                                    <img src="/images/new-website/pic_home-02.png" class="pic-2"  alt="pic-2">
                                </figure>
                            </div>
                            <div class="pic2-section-2">
                                <figure class="pic-bside">
                                    <img src="/images/new-website/pic_home-03.png" class="pic-3"  alt="pic-3">
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>

        {{-- section 3 --}}
        <section class="section-3 ">
            <div  class="bg-main-3">
                <div class="text-section-3">
                    <h2>
                        Tailored for<br>your industry
                    </h2>
                    <p>
                        Althorized repair service and technical support professional Samsung , Non Samsung , onsite service.
                    </p>
                </div>
                <div class="icon-section-3">
                    <div class="column-50 column-60 hidden-mobile-section3">

                    </div>
                    <div class="column-50 column-40 section-icon hidden-mobile-section3">
                        <div class="column-4 leftside-icon">
                            <figure class="" >
                                <img src="/images/new-website/icon_home-01.png"  class="icon-footer" alt="Icon-1">
                            </figure>
                            <figure class="" >
                                <img src="/images/new-website/icon_home-02.png"  class="icon-footer" alt="Icon-2">
                            </figure>
                            <figure class="" >
                                <img src="/images/new-website/icon_home-03.png"  class="icon-footer" alt="Icon-3">
                            </figure>
                            <figure class="" >
                                <img src="/images/new-website/icon_home-04.png"  class="icon-footer" alt="Icon-4">
                            </figure>
                        </div>
                        <div class="column-4 rightside-icon">
                            <figure class="" >
                                <img src="/images/new-website/icon_home-05.png"  class="icon-footer" alt="Icon-5">
                            </figure>
                            <figure class="" >
                                <img src="/images/new-website/icon_home-06.png"  class="icon-footer" alt="Icon-6">
                            </figure>
                            <figure class="" >
                                <img src="/images/new-website/icon_home-07.png"  class="icon-footer" alt="Icon-7">
                            </figure>
                            <figure class="" >
                                <img src="/images/new-website/icon_home-08.png"  class="icon-footer" alt="Icon-8">
                            </figure>
                        </div>
                    </div>
                    <div class="column-40 hidden-tablet-pc-section3">

                    </div>
                    <div class="column-60 hidden-tablet-pc-section3" style="width: 190%" >
                        <div class="column-25" style=" float:right " >
                            <figure class="" >
                                <img src="/images/new-website/icon_home-01.png"  class="icon-footer" alt="Icon-1">
                            </figure>
                            <figure class="" >
                                <img src="/images/new-website/icon_home-02.png"  class="icon-footer" alt="Icon-2">
                            </figure>
                            <figure class="" >
                                <img src="/images/new-website/icon_home-03.png"  class="icon-footer" alt="Icon-3">
                            </figure>
                        </div>
                        <div class="column-25" style="margin: 0 20px;  float:right" >
                            <figure class="" >
                                <img src="/images/new-website/icon_home-04.png"  class="icon-footer" alt="Icon-4">
                            </figure>
                            <figure class="" >
                                <img src="/images/new-website/icon_home-05.png"  class="icon-footer" alt="Icon-5">
                            </figure>
                            <figure class="" >
                                <img src="/images/new-website/icon_home-06.png"  class="icon-footer" alt="Icon-6">
                            </figure>
                        </div>
                        <div class="column-25" style=" float:right " >
                            <figure class="" >
                                <img src="/images/new-website/icon_home-07.png"  class="icon-footer" alt="Icon-7">
                            </figure>
                            <figure class="" >
                                <img src="/images/new-website/icon_home-08.png"  class="icon-footer" alt="Icon-8">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{-- footer --}}
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
                        {{-- <a  href="/images/new-website/lineads.png"> --}}
                            <img src="/images/new-website/icon_footer-03.png" id="myline-home" alt="" class="ld ld-tick" style="width:8%; margin-left:10px; cursor:pointer;" >
                        {{-- </a> --}}
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
    </div>




    {{-- footer --}}
    <div class="footer-home mobile tablet">
        <div class="bg-footer ">
            <figure class="footer-section">
                <img src="images/new-website/icon_logo_-01.png" alt="DATABAR">
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

    <!-- Modal -->
    <div class="modal fade" id="myline-popup" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Line</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <img src="images/new-website/lineads.png" alt="barcode">
          </div>
          <div class="modal-footer">
              <p>Add line friend via QR code</p>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    @endsection




@section('script')
<script src="{{URL::to('/js/aos.min.js')}}"></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>

 {{-- <script>
//             // Get the modal
//         var modal = document.getElementById("popup-line");

//         // Get the button that opens the modal
//         var btn = document.getElementById("icon-line");

//         // Get the <span> element that closes the modal
//         var span = document.getElementsByClassName("close")[0];

//         // When the user clicks the button, open the modal
//         btn.onclick = function() {
//         modal.style.display = "block";
//         }

//         // When the user clicks on <span> (x), close the modal
//         span.onclick = function() {
//         modal.style.display = "none";
//         }

//         // When the user clicks anywhere outside of the modal, close it
//         window.onclick = function(event) {
//         if (event.target == modal) {
//             modal.style.display = "none";
//         }
//         }


// </script> --}}


<script>
    $(document).ready(function(){
    $("#myline-home").click(function(){
        $("#myline-popup").modal();
    });
    });
</script>


     {{-- <script>

//             document.getElementById("home").style.color = "#eee";
//     document.getElementById("products").style.color = "#eee";
//     document.getElementById("about-us").style.color = "#eee";
//     document.getElementById("services").style.color = "#eee";
//     document.getElementById("customers").style.color = "#eee";
//     document.getElementById("partners").style.color = "#eee";
//     document.getElementById("contact").style.color = "#3399ff";

//     window.onscroll = function() {scrollFunction()};
//     function scrollFunction() {
//         if (document.body.scrollTop > 450 || document.documentElement.scrollTop > 450) {
//             document.getElementById("nav-black-mobile").style.top = "0px";
//             document.getElementById("nav-white-mobile").style.top = "-150px";

//         } else {
//             document.getElementById("nav-black-mobile").style.top = "-150px";
//             document.getElementById("nav-white-mobile").style.top = "0px";

//         }
//         if (document.body.scrollTop > 450 || document.documentElement.scrollTop > 450) {
//                 document.getElementById("nav-black-tablet").style.top = "0px";
//                 document.getElementById("nav-white-tablet").style.top = "-50px";

//         } else {
//             document.getElementById("nav-black-tablet").style.top = "-50px";
//             document.getElementById("nav-white-tablet").style.top = "0px";

//         }
//         if (document.body.scrollTop > 550 || document.documentElement.scrollTop > 550) {
//             document.getElementById("navbar-black").style.top = "-50px";
//             document.getElementById("navbar-white").style.top = "0";
//             document.getElementById("home").style.color = "#000";
//             document.getElementById("products").style.color = "#000";
//             document.getElementById("about-us").style.color = "#000";
//             document.getElementById("services").style.color = "#000";
//             document.getElementById("customers").style.color = "#000";
//             document.getElementById("partners").style.color = "#000";
//             document.getElementById("contact").style.color = "#3399ff";

//         } else {
//             document.getElementById("navbar-black").style.top = "0";
//             document.getElementById("navbar-white").style.top = "-50px";
//             document.getElementById("home").style.color = "#eee";
//             document.getElementById("products").style.color = "#eee";
//             document.getElementById("about-us").style.color = "#eee";
//             document.getElementById("services").style.color = "#eee";
//             document.getElementById("customers").style.color = "#eee";
//             document.getElementById("partners").style.color = "#eee";
//             document.getElementById("contact").style.color = "#3399ff";

//         }
//     }


// </script> --}}


@endsection

