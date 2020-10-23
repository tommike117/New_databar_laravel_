
@extends('layouts/main')



{{-- Title Website --}}
@section('title', 'DATABAR COMPANY LIMITED | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')

@section('canonical')
<link rel="canonical" href="https://www.databar.co.th/">
@endsection


{{-- Link CSS --}}
@section('link')


<link rel="stylesheet" href="/css/animate.css">
<link rel="stylesheet" href="css/index.min.css">

{{-- Popup Images --}}
<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/magnific-popup.css')}}">
<script src="{{URL::asset('/js/jquery.magnific-popup.min.js')}}"></script>


@endsection

{{-- Body HTML --}}
@section('content')


<div class="hero-contain">

    {{-- <section>

        <div id="loader" class="la-line-scale la-dark la-2x">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

    </section> --}}


    <section>
        <div class="block-stick">
            <div class="stick2 pt-6">
                <img class="databar-logo" src="{{URL::asset('images/newlogo-white.png')}}" alt="">

            </div>

            <div class="stick1">
                <img class="databar-logo" src="{{URL::asset('images/newlogo-white.png')}}" alt="">
            </div>
           
          
        </div>

    </section>

    <section class="sect" id="aa1">
        <div id="pin" class="bb">
            <p>D A T A B A  R</p>
        </div>
    </section>
    
    <section id="aa2">
        <div id="pin2" class="new-bg">
            <p style="font-size:80px">D A T A B A R</p>
        </div>
    </section>
    
    <section id="aa3">
        <div class="fixed-bg">
            <div id="fixed" class="fixed-box">
                <p style="font-size: 80px;">D A T A B A R</p>

            </div>
        </div>
    </section>
    
    <section>
        <div class="block-stick">
            <div class="stick2 pt-6">
                <img class="databar-logo" src="{{URL::asset('images/newlogo-white.png')}}" alt="">
            </div>
            <div class="stick3 pt-6">
                <img class="databar-logo" src="{{URL::asset('images/newlogo-white.png')}}" alt="">
            </div>
        </div>
        <div id="aa4" class="parallaxParent">
            <div class="parallax-bg"></div>
        </div>
       <img width="100%" src="images/cdc.jpg" alt="">
    </section>
</div>

    
<style>
    .hero-contain{
        background-color: #f2f2f2;
    }
    .invis{
        opacity: 1 !important;
    }
    .bb{
        color: white;
        width: 120px;
        height: 100px;
        margin:auto;
        border-radius: 10px;
        background-color: #2f478c;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.2s ease-in-out;
    }
    .new-bg{
        color: white;
        width: 100%;
        height: 100vh;
        margin:auto;
        background-color: #2f478c;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 25px;
        transition: opacity 0.2s ease-in-out;
    }
    .parallax-bg{
        background-image: url("images/about3.jpg");
        width: 100%;
        height: 100vh;
        overflow: hidden;
        opacity: 0.5;
    }
    .fixed-bg{
        background-image: url("images/about1.jpg");
        height: 100vh;
        width: 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        display: flex;
        justify-content: center;

    }
    .sect{
        background-color: white;
        margin: 30px;
    }
    .fixed-box{
        position:absolute;
        color: white;
        text-align: center;

    }
    .blue-outside{
        position: relative;
    }
    .block-stick{
        height: 250vh;
        width: 100%;
    }
    .stick1{
        background-image: url("images/about1.jpg");
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
    }
    .stick1 p{
        font-size: 50px;
        color: white;
        text-align: center;
        font-weight: bold;
    }

    .stick2{
        background-image: url("images/cdc.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
        position: -webkit-sticky;
        position: sticky;
        top: 0;
    }
    .stick3{
        background-image: url("images/about1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
        position: -webkit-sticky;
        position: sticky;
        top: 0;
    }
    .stick2 p{
        font-size: 50px;
        color: white;
        text-align: center;
        font-weight: bold;
    }


    .pt-6{
    padding-top: 4rem!important;
    }
    .databar-logo{
        width: 100%;
        position: absolute;
        padding: 4rem;
    }

    .parallaxParent {
		height: 100vh;
		overflow: hidden;
	}
	.parallaxParent > * {
		height: 200%;
		position: relative;
		top: -100%;
	}
  
</style>

@endsection

{{-- Script Java --}}
@section('script')

<script src="js/scrollmagic/minified/gsap.min.js"></script>
<script src="js/scrollmagic/minified/jquery.min.js"></script>
<script src="js/scrollmagic/minified/ScrollMagic.min.js"></script>
<script src="js/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
<script src="js/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>





<script>
    
    var controller = new ScrollMagic.Controller();
    var tween = TweenMax.to("#pin", 0.5, {scale: 2, ease: Linear.easeNone});
    var tween_h = TweenMax.to("#pin2", 1, {scale: 0.3, ease: Linear.easeNone});
    var controller_h = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});

    $(function () { 
        var pinPage = '.bb';
        var pinPage2 = '.new-bg';

        // 1
		new ScrollMagic.Scene({triggerElement: "#aa1", duration: 500, offset: 100})
                    .setPin(pinPage)
                    .setClassToggle(pinPage, "invis") 
                    .addIndicators()
                    .addTo(controller);
        
        //2
        new ScrollMagic.Scene({triggerElement: "#aa1", duration: 500, offset: 600})
                    .setTween(tween)
                    .setPin(pinPage)
                    .setClassToggle(pinPage, "invis") 
                    .addIndicators() 
                    .addTo(controller);
        
        //3
        new ScrollMagic.Scene({triggerElement: "#aa1",  duration: 500, offset:1100 })
                    .setPin(pinPage)
                    // .setClassToggle(pinPage, "invis") 
                    .addIndicators()
                    .addTo(controller);
        
        //4
        new ScrollMagic.Scene({triggerElement: "#aa2", duration: 1000, offset: 300})
                    .setPin(pinPage2)
                    .setTween(tween_h)
                    .addIndicators()
                    .addTo(controller);


        //5
        new ScrollMagic.Scene({triggerElement: "#aa3", duration: 500, offset: 100})
                    .setPin("#fixed")
                    .addIndicators()
                    .addTo(controller);

        //6
        new ScrollMagic.Scene({triggerElement: "#aa4"})
					.setTween("#aa4 > div", {y: "80%", ease: Linear.easeNone})
					.addIndicators()
					.addTo(controller_h);

        
    });

    // $('#loader').addClass("hide-loader");
</script>






@endsection
