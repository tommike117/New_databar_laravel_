@extends('layouts/main-products')



{{-- Title Website --}}
@section('title', 'Products & Solutions | DATABAR COMPANY LIMITED | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" media="screen and (min-width: 992px)" href="{{ URL::to('/css/new-website/products/style_d.css')}}">
<link rel="stylesheet" media="(min-width: 768px) and (max-width: 991.98px)"  href="{{ URL::to('/css/new-website/products/style_t.css')}}">
<link rel="stylesheet" media="screen and (max-width: 767.98px)" href="{{ URL::to('/css/new-website/products/style_m.css')}}">

@endsection



{{-- Body HTML --}}
@section('content')

<section class="section-1 img-bg" style="overflow: hidden">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10 col-sm-12 bg-section-banner">
                <div class="container-fluid row set-m">
                    <div class="col-md-2 col-sm-4 section-brand ">
                        <div class="catagories">Hardwares</div>
                            <a class="brand" href="/products/samsung" >Samsung</a>
                            <a class="brand" href="/products/bixolon">Bixolon</a>
                            <a class="brand" href="/products/caterpillar">Caterpillar</a>
                            <a class="brand" href="/products/datalogic">Datalogic</a>
                            <a class="brand" href="/products/ecom-ex">Ecom-ex</a>
                            <a class="brand" href="/products/koamtac">Koamtac</a>
                            <a class="brand" href="/products/sam4s">Sam4s</a>
                            <a class="brand" href="/products/toshiba-tec">Toshiba TEC</a>
                            <a class="brand" href="/products/unitech">Unitech</a>
                            <a class="brand" href="/products/xciel">Xciel</a>
                        <div class="catagories">Software</div>
                            <a class="brand" href="/products/ivymobility">Ivy Mobility</a>
                            <a class="brand" href="/products/samsung/knox">Samsung Knox</a>
                            <a class="brand" href="/products/star2star">Star2Star</a>
                            <a class="brand" href="/products/wandera">Wandera</a>
                            <a class="brand" href="#">WeGuard</a>
                            <a class="brand" href="#">42Gears</a>
                        <div class="catagories">Accessories</div>
                            <a class="brand" href="/products/armor-x">Armor-x</a>
                            <a class="brand" href="/products/gamber-johnson">Gamber Johnson</a>
                            <a class="brand" href="#">iKey</a>
                            <a class="brand" href="/products/ram-mounts">Ram Mounts</a>

                    </div>
                    <div class="col-md-10 col-sm-8 pr-0" >
                        <div class="banner-brand">
                            <div class="middle" style="font-family: quicksand">
                                <h1>COMING SOON</h1>
                                <hr>
                                <p id="countdown" style="font-size:24px"></p>
                            </div>
                        </div>


                        <div  class="carousel slide-carou ddd" data-flickity='{ "groupCells": 2, "autoPlay": 3000,  "pageDots": false, "pauseAutoPlayOnHover": true, "contain": true, "prevNextButtons": true }'>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand1.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand1_2.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand2.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand2_2-02.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand3.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand3_2.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand4.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand4_2.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand5.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand5_2.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand6.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand6_2.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand7.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand7_2.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand8.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand8_2.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand9.png" alt="">
                                </a>
                            </div>
                            <div class="carousel-cell image-img">
                                <a href="#">
                                    <img src="images/new-website/products/brand9_2.png" alt="">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
                <div  class="carousel slide-carou dd" data-flickity='{ "groupCells": 1, "autoPlay": 2000,  "pageDots": false, "pauseAutoPlayOnHover": true, "contain": true, "prevNextButtons": true }'>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand1.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand1_2.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand2.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand2_2-02.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand3.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand3_2.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand4.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand4_2.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand5.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand5_2.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand6.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand6_2.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand7.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand7_2.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand8.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand8_2.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand9.png" alt="">
                        </a>
                    </div>
                    <div class="carousel-cell image-img">
                        <a href="#">
                            <img src="images/new-website/products/brand9_2.png" alt="">
                        </a>
                    </div>
                </div>
    </div>
</section>


<style>

@media (min-width: 768px) and (max-width: 991.98px) {
    .ddd{
        display: none;
    }
}
@media (min-width: 992px){
    .dd{
        display: none;
    }
}

@media (max-width: 767.98px){
    .ddd{
        display: none;
    }
}
</style>

@endsection



<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
    var countDownDate = new Date("Jan 1, 2021 00:00:00").getTime();
    var countdownfunction = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";

      // If the count down is over, write some text
      if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("countdown").innerHTML = "EXPIRED";
      }
    }, 1000);
</script>
