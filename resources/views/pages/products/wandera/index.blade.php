@extends('layouts/main-products-jingjingna')

@section('title', 'DATABAR COMPANY LIMITED | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')



@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/wandera/style.css')}}">
@endsection




@section('content')
        <section class="section-1">
           <img src="/images/new-website/products/wandera/1920-01.jpg" width="100%" class="desktop-only" alt="bg-desktop">
           <img src="/images/new-website/products/wandera/bg1_750-01.jpg" width="100%" class="mobile-tab-only" alt="bg-tab-mobile">
        </section>
        <section class="section-2">
            <div class="bg-2">
                <div class="text-2">
                    <h2>
                        Why Wandera
                    </h2>
                    <p>
                        Unified real-time security for your remote users,
                        wherever they are and however they connect
                    </p>
                    <p>Unified </p>
                    <p2>
                        One single security solution for all your remote users, that spans
                        use cases from threat protection to content filtering and zero trust
                        network access, and covers smartphones, tablets and laptops.
                        One unified analytics and policy engine that lets you configure once
                        and apply everywhere.
                    </p2>
                    <p> Cloud-first</p>
                    <p2>
                        Your users have moved outside the perimeter, and your data has
                        moved to the cloud. Wandera’s cloud-first approach ensures
                        a consistent and seamless security and usability experienc
                        for all remote users, and doesn’t suffer from the challenges
                        of extending legacy architectures to today’s new way of working.
                    </p2>
                    <p>Secure</p>
                    <p2>
                        As threats constantly evolve, you need to ensure that your business
                        is protected. Wandera’s protection is powered by MI:RIAM,
                        the industry’s most advanced  threat intelligence engine.
                        MI:RIAM ingests information from 425 million mobile sensors daily to
                        protect against the broadest range of known and zero day threats.
                    </p2>
                    <p>Flexible</p>
                    <p2>
                        A range of deployment options can be combined for one enterprise
                        to ensure you have the right solution for each use case, while
                        catering for any ownership model. You can dial the security up
                        for corporate devices in a regulated environment, while maximizing
                        privacy and seamless connectivity for your BYOD users.
                    </p2>
                </div>
            </div>
        </section>
    <section class="section-3 bg-tablet-sec3">
            <div class="mobile tablet" style="text-align:right; ">
                <label class="section4_text_line1" style="color:#4d4d4d;font-size:30px;font-weight:bold;padding: 0 11% 0 16%;" for="">Knox mobile security <br> solution:
                    Protection from the chip up</label><br>
                <p class="section3_text_line2" ">Anchored in Samsung smartphone, tablet and
                    wearable hardware, the Samsung Knox enterprise mobile security solution is also integrated
                    throughout the software layers to separate data and constantly check the integrity of the
                    device. These defense layers detect any tampering and ensure data is secure. Explore the
                    layers below or download the whitepaper.</p>
            </div>
            <div class="text-section-3" style="padding-top: 5%">
                <h2>Knox security philosophy</h2>
            </div>
            <div class="mobile tablet">
                <div id="trust"class="flex-text">
                    <p class="show sup1 actived" >BUILD TRUST</p>
                    <p class="show sup2">MAINTAIN TRUST</p>
                    <p class="show sup3">PROVE TRUST</p>
                </div>
                <div class="sup-text">
                    <div id="sup1"class="build-trust">
                        <div class="flex-3 text-sup-3">
                            <h2>
                                Chipset
                            </h2>
                            <p>
                                The Knox platform ensures only approved versions of system-critical software are loaded. As the platform is built-in, the trust starts in the hardware, with unique certificates burnt into the chipset of each device.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-3">
                            <h2>
                                Knox warranty fuse
                            </h2>
                            <p>
                                With these unique certificates, the Knox mobile security platform can verify each piece of software that loads. If verification fails, Knox either records the tampering by flipping a one-time fuse called the Knox Warranty Bit, or prevents further booting. Devices with compromised Knox Warranty Bits cannot use certain Knox features or services, such as Knox Workspace or Samsung Pay.
                            </p>
                        </div>

                    </div>
                    <div id="sup2" class="maintain-trust">
                        <div class="flex-3 text-sup-3">
                            <h2>
                                Mobile security software
                            </h2>
                            <p>
                                Without Knox security loaded, verified software can still be modified by the user, either intentionally or unintentionally. For example, by downloading a malicious app or malware.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-3">
                            <h2>
                                Device monitoring
                            </h2>
                            <p>
                                The Knox advanced mobile security platform ensures that system-critical software is not modified once loaded. The enterprise mobile security platform uses a set of technologies to protect the device kernel - the core of the operating system. It also protects applications and their data during runtime to detect malicious attacks as well as monitoring policy settings to quickly isolate any threat.
                            </p>
                        </div>
                    </div>
                    <div id="sup3" class="prove-trust">
                        <div class="flex-3 text-sup-3">
                            <h2>
                                Device attestation
                            </h2>
                            <p>
                                For IT admins intending to manage mobile devices with an EMM (Enterprise Mobility Management) solution, Knox-enabled devices can provide you with an attestation, which lets you see if a device has been tampered with or not. Based on that, you can decide if the device can be trusted, and if it is allowed to receive sensitive corporate data.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-3">
                            <h2>
                                Software approval
                            </h2>
                            <p>
                                The Knox enterprise mobile security platform only loads and runs approved system-critical software on a device and can prove this to a third-party when requested.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desktop-none">
                <div id="trust" class="flex-text">
                    <p class="show sup1 actived" >Private Access</p>
                    <p class="show sup2">Threat Defense</p>
                    <p class="show sup3">Data Policy</p>
                </div>
                <div class="sup-text">
                    <div id="suptab1"class="build-trust">
                        <div class="flex-2 text-sup-3">
                            <h2>
                                Private Access
                            </h2>
                            <p>
                                Prevent non-business data use from impacting
                                productivity, causing bill shock and increasing
                                legal risk. Control how, when and where your data
                                is used. Enforce acceptable use, eliminate shadow
                                IT and optimize data utilization in the cloud. <br>
                                > Get a firm grip on data consumption with real-time
                                    analytics and detailed reporting. <br>

                                > Prevent data leaks and minimize legal liability with
                                acceptable use and content filtering rules. <br>

                                > Avoid bill shock by limiting non-business data usage
                                via capping and roaming policies.
                            </p>
                        </div>
                        <div class="flex-2 text-sup-3">
                            <img src="/images/new-website/products/wandera/1.jpg" width="100%" class="" alt="bg-desktop">
                        </div>

                    </div>
                    <div id="suptab2" class="maintain-trust">
                        <div class="flex-2 text-sup-3">
                            <h2>
                                Mobile security software
                            </h2>
                            <p>
                                Without Knox security loaded, verified software can still be modified by the user, either intentionally or unintentionally. For example, by downloading a malicious app or malware.
                            </p>
                        </div>
                        <div class="flex-2 text-sup-3">
                            <h2>
                                Device monitoring
                            </h2>
                            <p>
                                The Knox advanced mobile security platform ensures that system-critical software is not modified once loaded. The enterprise mobile security platform uses a set of technologies to protect the device kernel - the core of the operating system. It also protects applications and their data during runtime to detect malicious attacks as well as monitoring policy settings to quickly isolate any threat.
                            </p>
                        </div>

                    </div>
                    <div id="suptab3" class="prove-trust">
                        <div class="flex-2 text-sup-3">
                            <h2>
                                Device attestation
                            </h2>
                            <p>
                                For IT admins intending to manage mobile devices with an EMM (Enterprise Mobility Management) solution, Knox-enabled devices can provide you with an attestation, which lets you see if a device has been tampered with or not. Based on that, you can decide if the device can be trusted, and if it is allowed to receive sensitive corporate data.
                            </p>
                        </div>
                        <div class="flex-2 text-sup-3">
                            <h2>
                                Software approval
                            </h2>
                            <p>
                                The Knox enterprise mobile security platform only loads and runs approved system-critical software on a device and can prove this to a third-party when requested.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="section-5">
        <figure class="top-padding-sec5">
            <img src="/images/new-website/products/samsung/knox/pic-4.jpg" class=" tablet-none" width="100%"  alt="Banner-5">
            <img src="/images/new-website/products/samsung/knox/knox-3.png" class="mobile-none" width="100%"  alt="mobile-5">
            <h2>
                Knox certifications
            </h2>
            <p>
                The Samsung Knox mobile enterprise solution is trusted by governments around the world with some of the most stringent information and technology security requirements. We work closely with these organizations on a continuous basis to ensure that our products and solutions meet and exceed these requirements.
            </p>
        </figure>
        <div class="text-section-5">
            <h2>
                Built into Samsung mobile devices
            </h2>
            <p>
                The Knox security solution is embedded into Samsung phones, tablets and wearables, and runs on both Android and Tizen operating systems. Knox mobile security platform features are active in your device from the moment you turn it on.
            </p>
        </div>
    </section>

    <section class="section-6 bg-tablet-sec6"data-aos="fade-down">
        <div class="flex-3">
            <figure>
                <img src="/images/new-website/products/samsung/knox/Galaxy-S10-5G-256GB_6-1_THREE-COLUMN_M.png"width="100%"class="resolution" alt="mobile-section6">
            </figure>
            <div class="text-section-6">
                <h2>
                    Phone security
                </h2>
                <p>
                    Explore Samsung Knox-enabled business smartphones, offering everything from premium features to exceptional value.
                </p>
                <div class="box-border">
                <a href="#">SEE SECURE PHONES ></a>
                </div>
            </div>
        </div>
        <div class="flex-3 padding-section-6">
            <figure>
                <img src="/images/new-website/products/samsung/knox/Galaxy-Tab-A-10.1-64GB_6-1_THREE-COLUMN_M.png"width="100%" class="resolution" alt="tablet-section6">
            </figure>
            <div class="text-section-6">
                <h2>
                    Tablet security
                </h2>
                <p>
                    Explore Samsung Knox-enabled business tablets, built for everything from customer presentations to workplace efficiency.
                </p>
                <div class="box-border">
                    <a href="#">SEE SECURE TABLETS ></a>
                </div>
            </div>
        </div>
        <div class="flex-3">
            <figure>
                <img src="/images/new-website/products/samsung/knox/Galaxy-Watch-Active-40mm_6-1_THREE-COLUMN_M.png"width="100%"class="resolution" alt="watch-section6">
            </figure>
            <div class="text-section-6">
                <h2>
                    Wearable security
                </h2>
                <p>
                    Explore Samsung Knox-enabled enterprise wearables, helping businesses increase productivity and keep employees connected.
                </p>
            </div>
        </div>
    </section>
</div>

















<section>
    @include('includes/footer')
</section>

@endsection



@section('script')
<script src="{{URL::to('/js/aos.min.js')}}"></script>
{{--  --}}
<script>
    $(document).ready(function(){
    $("#myline-home").click(function(){
        $("#myline-popup").modal();
    });
    });
</script>
{{-- Knox layer --}}
<script>
    $(function(){

AOS.init();



$("#detail_layer4").on("click",function(){
        if($(".plus1").hasClass("fa-plus") == true){
      if($(".detail_layer1").hasClass("show") == true){
        $(".detail_layer1").slideUp("slow").removeClass("show");
        $(".plus4").removeClass("fa-minus").addClass("fa-plus");
      }
      else if($(".detail_layer2").hasClass("show") == true){
        $(".detail_layer2").slideUp("slow").removeClass("show");
        $(".plus3").removeClass("fa-minus").addClass("fa-plus");
      }
      else if($(".detail_layer3").hasClass("show") == true){
        $(".detail_layer3").slideUp("slow").removeClass("show");
        $(".plus2").removeClass("fa-minus").addClass("fa-plus");
      }
      $(".detail_layer4").slideDown("slow").addClass("show");
      $("#image_layer4").css("opacity","1");
      $("#image_layer3").css({
        "opacity":"0.2",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer2").css({
        "opacity":"0.2",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer1").css({
        "opacity":"0.2",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $(".plus1").removeClass("fa-plus").addClass("fa-minus");

    }
    else if($(".plus1").hasClass("fa-minus") == true){
      $(".detail_layer4").slideUp("slow");
      $("#image_layer3").css({
        "opacity":"1",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer2").css({
        "opacity":"1",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer1").css({
        "opacity":"1",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $(".plus1").removeClass("fa-minus").addClass("fa-plus");
      $(".detail_layer4").removeClass("show");
    }
  });

  $("#detail_layer3").on("click",function(){
    if($(".plus2").hasClass("fa-plus") == true){
      if($(".detail_layer4").hasClass("show") == true){
        $(".detail_layer4").slideUp("slow").removeClass("show");
        $(".plus1").removeClass("fa-minus").addClass("fa-plus");
      }
      else if($(".detail_layer2").hasClass("show") == true){
        $(".detail_layer2").slideUp("slow").removeClass("show");
        $(".plus3").removeClass("fa-minus").addClass("fa-plus");
      }
      else if($(".detail_layer1").hasClass("show") == true){
        $(".detail_layer1").slideUp("slow").removeClass("show");
        $(".plus4").removeClass("fa-minus").addClass("fa-plus");
      }
      $(".detail_layer3").slideDown("slow").addClass("show");
      $("#image_layer3").css("opacity","1");
      $("#image_layer4").css({
        "opacity":"0.2",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer2").css({
        "opacity":"0.2",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer1").css({
        "opacity":"0.2",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $(".plus2").removeClass("fa-plus").addClass("fa-minus");
    }
    else if($(".plus2").hasClass("fa-minus") == true){
      $(".detail_layer3").slideUp("slow");
      $("#image_layer4").css({
        "opacity":"1",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer2").css({
        "opacity":"1",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer1").css({
        "opacity":"1",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $(".plus2").removeClass("fa-minus").addClass("fa-plus");
      $(".detail_layer3").removeClass("show");
    }
  });

  $("#detail_layer2").on("click",function(){
    if($(".plus3").hasClass("fa-plus") == true){
      if($(".detail_layer4").hasClass("show") == true){
        $(".detail_layer4").slideUp("slow").removeClass("show");
        $(".plus1").removeClass("fa-minus").addClass("fa-plus");
      }
      else if($(".detail_layer3").hasClass("show") == true){
        $(".detail_layer3").slideUp("slow").removeClass("show");
        $(".plus2").removeClass("fa-minus").addClass("fa-plus");
      }
      else if($(".detail_layer1").hasClass("show") == true){
        $(".detail_layer1").slideUp("slow").removeClass("show");
        $(".plus4").removeClass("fa-minus").addClass("fa-plus");
      }
      $(".detail_layer2").slideDown("slow").addClass("show");
      $("#image_layer2").css("opacity","1");
      $("#image_layer4").css({
        "opacity":"0.2",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer3").css({
        "opacity":"0.2",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer1").css({
        "opacity":"0.2",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $(".plus3").removeClass("fa-plus").addClass("fa-minus");
    }
    else if($(".plus3").hasClass("fa-minus") == true){
      $(".detail_layer2").slideUp("slow").addClass("show");
      $("#image_layer4").css({
        "opacity":"1",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer3").css({
        "opacity":"1",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer1").css({
        "opacity":"1",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $(".plus3").removeClass("fa-minus").addClass("fa-plus");
      $(".detail_layer2").removeClass("show");
    }
  });

  $("#detail_layer1").on("click",function(){
    if($(".plus4").hasClass("fa-plus") == true){
      if($(".detail_layer4").hasClass("show") == true){
        $(".detail_layer4").slideUp("slow").removeClass("show");
        $(".plus1").removeClass("fa-minus").addClass("fa-plus");
      }
      else if($(".detail_layer3").hasClass("show") == true){
        $(".detail_layer3").slideUp("slow").removeClass("show");
        $(".plus2").removeClass("fa-minus").addClass("fa-plus");
      }
      else if($(".detail_layer2").hasClass("show") == true){
        $(".detail_layer2").slideUp("slow").removeClass("show");
        $(".plus3").removeClass("fa-minus").addClass("fa-plus");
      }
      $(".detail_layer1").slideDown("slow").addClass("show");
      $("#image_layer1").css("opacity","1");
      $("#image_layer4").css({
        "opacity":"0.2",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer3").css({
        "opacity":"0.2",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer2").css({
        "opacity":"0.2",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $(".plus4").removeClass("fa-plus").addClass("fa-minus");
    }
    else if($(".plus4").hasClass("fa-minus") == true){
      $(".detail_layer1").slideUp("slow");
      $("#image_layer4").css({
        "opacity":"1",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer3").css({
        "opacity":"1",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $("#image_layer2").css({
        "opacity":"1",
        "transition-timing-function": "ease-in-out",
        "transition-duration":" 0.6s",
      });
      $(".plus4").removeClass("fa-minus").addClass("fa-plus");
      $(".detail_layer1").removeClass("show");
    }
  });

  $("#menu1").css("opacity","1");

});
</script>
{{-- section4 --}}
<script>
    $(".sup1").click(function(){
        $(this).addClass("actived");
        $(".sup2").removeClass("actived");
        $(".sup3").removeClass("actived");
        $(".sup4").removeClass("actived");
            $("#sup1").addClass("show-flex");
            $("#sup2").addClass("none");
            $("#sup3").addClass("none");
            $("#sup4").addClass("none");
            $("#sup1").removeClass("none");
    });

    $(".sup2").click(function(){
        $(this).addClass("actived");
        $(".sup1").removeClass("actived");
        $(".sup3").removeClass("actived");
        $(".sup4").removeClass("actived");
            $("#sup2").addClass("show-flex");
            $("#sup2").removeClass("maintain-trust")
            $("#sup1").addClass("none");
            $("#sup3").addClass("none");
            $("#sup4").addClass("none");
            $("#sup2").removeClass("none");

    });

    $(".sup3").click(function(){
        $(this).addClass("actived");
        $(".sup1").removeClass("actived");
        $(".sup2").removeClass("actived");
        $(".sup4").removeClass("actived");
            $("#sup3").addClass("show-flex");
            $("#sup3").removeClass("prove-trust")
            $("#sup1").addClass("none");
            $("#sup2").addClass("none");
            $("#sup4").addClass("none");
            $("#sup3").removeClass("none");

    });

    $(".sup4").click(function(){
        $(this).addClass("actived");
        $(".sup1").removeClass("actived");
        $(".sup3").removeClass("actived");
        $(".sup2").removeClass("actived");
            $("#sup4").addClass("show-flex");
            $("#sup4").removeClass("make-trust")
            $("#sup1").addClass("none");
            $("#sup2").addClass("none");
            $("#sup3").addClass("none");
            $("#sup4").removeClass("none");

    });








// Hover
//  $("#1").on("mouseenter",function(e) {
//         if($("#1").hasClass("hover") != true){
//             $("#1").addClass("hover");
//         }
//         // else if (function(e).onClick){
//         //     $("#show").hasClass("")
//         // }
//         e.PrevenDefault();
//     }).on("mouseleave",function(e){
//         if($("#1").hasClass("hover") == true){
//             $("#1").removeClass("hover");
//         }
//         e.PrevenDefault();
//     });
//     // Hover
//  $("#2").on("mouseenter",function(e) {
//         if($("#2").hasClass("hover") != true){
//             $("#2").addClass("hover");
//         }
//         // else if (function(e).onClick){
//         //     $("#show").hasClass("")
//         // }
//         e.PrevenDefault();
//     }).on("mouseleave",function(e){
//         if($("#2").hasClass("hover") == true){
//             $("#2").removeClass("hover");
//         }
//         e.PrevenDefault();
//     });
//     // Hover
//  $("#3").on("mouseenter",function(e) {
//         if($("#3").hasClass("hover") != true){
//             $("#3").addClass("hover");
//         }
//         // else if (function(e).onClick){
//         //     $("#show").hasClass("")
//         // }
//         e.PrevenDefault();
//     }).on("mouseleave",function(e){
//         if($("#3").hasClass("hover") == true){
//             $("#3").removeClass("hover");
//         }
//         e.PrevenDefault();
//     });
//     // Hover
//  $("#4").on("mouseenter",function(e) {
//         if($("#4").hasClass("hover") != true){
//             $("#4").addClass("hover");
//         }
//         // else if (function(e).onClick){
//         //     $("#show").hasClass("")
//         // }
//         e.PrevenDefault();
//     }).on("mouseleave",function(e){
//         if($("#4").hasClass("hover") == true){
//             $("#4").removeClass("hover");
//         }
//         e.PrevenDefault();
//     });


</script>
{{-- script-tablet & mobile --}}
<script>
 $(".sup1").click(function(){
        $(this).addClass("actived");
        $(".sup2").removeClass("actived");
        $(".sup3").removeClass("actived");
        $(".sup4").removeClass("actived");
            $("#suptab1").addClass("show-flex");
            $("#suptab2").addClass("none");
            $("#suptab3").addClass("none");
            $("#suptab4").addClass("none");
            $("#suptab1").removeClass("none");
    });

    $(".sup2").click(function(){
        $(this).addClass("actived");
        $(".sup1").removeClass("actived");
        $(".sup3").removeClass("actived");
        $(".sup4").removeClass("actived");
            $("#suptab2").addClass("show-flex");
            $("#suptab2").removeClass("maintain-trust")
            $("#suptab1").addClass("none");
            $("#suptab3").addClass("none");
            $("#suptab4").addClass("none");
            $("#suptab2").removeClass("none");

    });

    $(".sup3").click(function(){
        $(this).addClass("actived");
        $(".sup1").removeClass("actived");
        $(".sup2").removeClass("actived");
        $(".sup4").removeClass("actived");
            $("#suptab3").addClass("show-flex");
            $("#suptab3").removeClass("prove-trust")
            $("#suptab1").addClass("none");
            $("#suptab2").addClass("none");
            $("#suptab4").addClass("none");
            $("#suptab3").removeClass("none");

    });

    $(".sup4").click(function(){
        $(this).addClass("actived");
        $(".sup1").removeClass("actived");
        $(".sup3").removeClass("actived");
        $(".sup2").removeClass("actived");
            $("#suptab4").addClass("show-flex");
            $("#suptab4").removeClass("make-trust")
            $("#suptab1").addClass("none");
            $("#suptab2").addClass("none");
            $("#suptab3").addClass("none");
            $("#suptab4").removeClass("none");

    });
</script>

@endsection
