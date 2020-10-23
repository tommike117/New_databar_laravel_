@extends('layouts/main-all-products')

@section('title', 'DATABAR COMPANY LIMITED | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')



@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/knox/style.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/aos.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/animate-icon.min.css')}}">
@endsection




@section('content')
<div class="bg-section-1 " >
    {{-- <div class="bg-section-1  " > --}}
        <div class="text-all-samsung tablet mobile">
            <a href="/products/samsung/smartphones">Smartphone</a>
            <a href="/products/samsung/tablets" style="margin: 0px 7%;">Tablet</a>
            <p>Samsung Knox</p>
        </div>
        <section class="section-1">
            <h2>Samsung Knox</h2>
            <figure class="banner-1">
                <img src="/images/new-website/products/samsung/knox/banner-1920x1080-03.jpg" alt="Banner-knox" width="100%">
            </figure>
            <div class="text-banner-1">
                <h2>
                    Samsung Knox
                </h2>
                <p>
                    Defence-grade security built from the chip up
                </p>
            </div>
            <div class="text-all-samsung desktop-none">
                <a href="/products/samsung/smartphones">Smartphone</a>
                <a href="/products/samsung/tablets" style="margin: 0px 7%;">Tablet</a>
                <p>Samsung Knox</p>
            </div>
        </section>
        <section class="section-2">
            <div class="flex-row-reverse reverse-block" >
                {{-- <div class="flex-6"> --}}
                {{-- </div> --}}
                {{-- <div class="flex-6"> --}}
                    <div class="text-section-2">
                        <h2>
                            Defense-grade security
                        </h2>
                        <p>
                            Get superior data protection on Samsung devices. Samsung Knox is a defense-grade enterprise mobile security platform that’s built from the chip up to enable easier management through advanced mobility software.
                        </p>
                        <p2 class="desktop-none">
                            Designed with the promise of security at heart, Samsung Knox empowers you to be open to new ideas and ways of doing business. We build the Knox mobile security platform into the hardware and software of our mobile devices, making Samsung smartphones, tablets and wearables among the most reliable mobile devices available. Multiple layers of security create opportunities for advanced management and control not possible without Knox. Enabling mobility software and business services  that are not only simple, flexible and friendly—but also open to customization and innovation—Knox inspires freedom grounded in peace of mind. No matter where your team goes or what they do, Knox keeps hackers out and your company’s data safe from the second it turns on.
                        </p2>
                    </div>
                {{-- </div> --}}
                    <div class="flex-6">
                    <figure>
                        <img src="/images/new-website/products/samsung/knox/knox-1.png" alt="Knox sec.2">
                    </figure>
                </div>
            </div>
        </section>
    {{-- </div> --}}

    <section class="section-3">
        <div class="bg-section-3">
            <div class="text-tablet-mobile">
                <p2 class=" mobile tablet ">
                    <span style="font-weight:600; color:#4d4d4d">Designed</span> with the promise of security at heart, Samsung Knox empowers you to be open to new ideas and ways of doing business. We build the Knox mobile security platform into the hardware and software of our mobile devices, making Samsung smartphones, tablets and wearables among the most reliable mobile devices available. Multiple layers of security create opportunities for advanced management and control not possible without Knox. Enabling mobility software and business services  that are not only simple, flexible and friendly—but also open to customization and innovation—Knox inspires freedom grounded in peace of mind. No matter where your team goes or what they do, Knox keeps hackers out and your company’s data safe from the second it turns on.
                </p2>
            </div>
            <div class="desktop-none" data-aos="fade-down" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                data-aos-anchor-placement="top-center" style="text-align:center;padding-top: 80px; ">
                <label class="section3_text_line1" style="color:#4d4d4d;font-size:40px;font-weight:bold;" for="">Knox mobile security</label><br>
                <label class="section3_text_line2" style="color:#4d4d4d;font-size:40px;font-weight:bold;" for="">solution:
                    Protection from the chip up</label><br>
                <p class="section3_text_line3">Anchored in Samsung smartphone, tablet and
                    wearable hardware, the Samsung Knox enterprise mobile security solution is also integrated
                    throughout the software layers to separate data and constantly check the integrity of the
                    device. These defense layers detect any tampering and ensure data is secure. Explore the
                    layers below or download the whitepaper.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 layer_height" data-aos="fade-up" data-aos-offset="0" data-aos-delay="0"
                    data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                    data-aos-anchor-placement="top-center" style="text-align:center;padding-top:1%;height:auto">
                    <div class="col-xs-12 col-sm-12 col-md-6 layout-layer">
                        <figure class="layer4" data-aos="layer4" data-aos-offset="0" data-aos-delay="550"
                        data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="true"
                        data-aos-once="false" >
                        <img id="image_layer4" src="{{URL::asset('/images/new-website/products/samsung/knox/layer-4.png')}}" style="width:100%" alt="knox layer4" title="samsung knox layer4">
                        </figure>
                        <figure class="layer3" data-aos="layer3" data-aos-offset="0" data-aos-delay="400"
                                data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="true"
                                data-aos-once="false" >
                            <img id="image_layer3" src="{{URL::asset('/images/new-website/products/samsung/knox/layer-3.png')}}" style="width:100%" alt="knox layer3" title="samsung knox layer3">
                        </figure>
                        <figure class="layer2" data-aos="layer2" data-aos-offset="0" data-aos-delay="250"
                                data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="true"
                                data-aos-once="false">
                            <img id="image_layer2" src="{{URL::asset('/images/new-website/products/samsung/knox/layer-2.png')}}" style="width:100%" alt="knox layer2" title="samsung knox layer2">
                        </figure>
                        <figure class="layer1" data-aos="layer1" data-aos-offset="0" data-aos-delay="0"
                                data-aos-duration="0" data-aos-easing="ease-in-out" data-aos-mirror="true"
                                data-aos-once="false">
                            <img id="image_layer1" src="{{URL::asset('/images/new-website/products/samsung/knox/layer-1.png')}}" style="width:100%" alt="knox layer1" title="samsung knox layer1">
                        </figure>
                    </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col_content_layer_knox" style="float:right;text-align:left;margin:50px auto;">
                    <div class="row m-auto">
                        <div class="col-xs-12 col-sm-12 col-md-12 d-flex flex-direction-row align-items-center" id="detail_layer4">
                            <span class="fa fa-plus plus1 icon-plus-solid"></span>
                            <label class="knox_layer_head" for=""
                                style="color: #3399ff;">ADVANCED
                                MOBILE
                                SECURITY FOR ANDROID</label>
                        </div>
                        <p class="detail_layer4">The Knox mobile security solution protects applications and
                            data by strictly defining
                            what each process is allowed to do and what data it can access. This allows Knox to
                            separate, encrypt, and protect enterprise data within a managed container.</p>
                        <div class="col-xs-12 col-sm-12 col-md-12 d-flex flex-direction-row align-items-center" id="detail_layer3">
                            <span class="fa fa-plus plus2 icon-plus-solid "></span>
                            <label class="knox_layer_head" for=""
                                style="color: #3399ff;">
                                PROTECTION ARCHITECTURE</label>
                        </div>
                        <p class="detail_layer3">Periodic Kernel Measurement & Real-time Kernel Protection work
                            to constantly inspect the core software of the OS, the kernel. These checks ensure
                            that requests to bypass device security are blocked and sensitive data is protected.
                        </p>
                        <div class="col-xs-12 col-sm-12 col-md-12 d-flex flex-direction-row align-items-center" id="detail_layer2">
                            <span class="fa fa-plus plus3 icon-plus-solid"></span>
                            <label class="knox_layer_head" for=""
                                style="color: #3399ff;">TRUSTZONE</label>
                        </div>
                        <p class="detail_layer2">The Knox enterprise security solution leverages a processor
                            architecture known as TrustZone, in which highly sensitive computations are isolated
                            from the rest of the device’s operations, protecting enterprise data.
                        </p>
                        <div class="col-xs-12 col-sm-12 col-md-12 d-flex flex-direction-row align-items-center" id="detail_layer1">
                            <span class="fa fa-plus plus4 icon-plus-solid "></span>
                            <label class="knox_layer_head" for=""
                                style="color: #3399ff;">
                                HARDWARE ROOT OF TRUST</label>
                        </div>
                        <p class="detail_layer1">To prevent security measures from being bypassed or
                            compromised, Knox uses Boot-time Protections backed by Hardware Root of Trust to
                            verify integrity of the device during the boot process.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-4 bg-tablet-sec4">
            <div class="mobile tablet" style="text-align:right; ">
                <label class="section4_text_line1" style="color:#4d4d4d;font-size:30px;font-weight:bold;padding: 0 11% 0 16%;" for="">Knox mobile security <br> solution:
                    Protection from the chip up</label><br>
                <p class="section4_text_line2" ">Anchored in Samsung smartphone, tablet and
                    wearable hardware, the Samsung Knox enterprise mobile security solution is also integrated
                    throughout the software layers to separate data and constantly check the integrity of the
                    device. These defense layers detect any tampering and ensure data is secure. Explore the
                    layers below or download the whitepaper.</p>
            </div>
            <div class="text-section-4" style="padding-top: 5%">
                <h2>Knox security philosophy</h2>
            </div>
            <div class="mobile tablet">
                <div id="trust"class="flex-text">
                    <p class="show sup1 actived" >BUILD TRUST</p>
                    <p class="show sup2">MAINTAIN TRUST</p>
                    <p class="show sup3">PROVE TRUST</p>
                    <p class="show sup4">MAKE READY</p>
                </div>
                <div class="sup-text">
                    <div id="sup1"class="build-trust">
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Chipset
                            </h2>
                            <p>
                                The Knox platform ensures only approved versions of system-critical software are loaded. As the platform is built-in, the trust starts in the hardware, with unique certificates burnt into the chipset of each device.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Knox warranty fuse
                            </h2>
                            <p>
                                With these unique certificates, the Knox mobile security platform can verify each piece of software that loads. If verification fails, Knox either records the tampering by flipping a one-time fuse called the Knox Warranty Bit, or prevents further booting. Devices with compromised Knox Warranty Bits cannot use certain Knox features or services, such as Knox Workspace or Samsung Pay.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Rollback prevention
                            </h2>
                            <p>
                                Rollback prevention ensures that a Samsung device is not downgraded to an earlier, vulnerable software version.
                            </p>
                        </div>
                    </div>
                    <div id="sup2" class="maintain-trust">
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Mobile security software
                            </h2>
                            <p>
                                Without Knox security loaded, verified software can still be modified by the user, either intentionally or unintentionally. For example, by downloading a malicious app or malware.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Device monitoring
                            </h2>
                            <p>
                                The Knox advanced mobile security platform ensures that system-critical software is not modified once loaded. The enterprise mobile security platform uses a set of technologies to protect the device kernel - the core of the operating system. It also protects applications and their data during runtime to detect malicious attacks as well as monitoring policy settings to quickly isolate any threat.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Rooting prevention
                            </h2>
                            <p>
                                The Samsung Knox mobile enterprise solution is designed to protect the kernel and prevent rooting. This keeps the system processes and resources protected from hostile access and malware attacks.
                            </p>
                        </div>
                    </div>
                    <div id="sup3" class="prove-trust">
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Device attestation
                            </h2>
                            <p>
                                For IT admins intending to manage mobile devices with an EMM (Enterprise Mobility Management) solution, Knox-enabled devices can provide you with an attestation, which lets you see if a device has been tampered with or not. Based on that, you can decide if the device can be trusted, and if it is allowed to receive sensitive corporate data.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Software approval
                            </h2>
                            <p>
                                The Knox enterprise mobile security platform only loads and runs approved system-critical software on a device and can prove this to a third-party when requested.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>

                            </h2>
                            <p>

                            </p>
                        </div>
                    </div>
                    <div id="sup4" class="make-trust">
                        <div class="flex-3 text-sup-4">
                            <h2>
                                EMM (Enterprise Mobility Management) integration
                            </h2>
                            <p>
                                The final step of the design philosophy is to make the trusted platform ready for enterprise use. This involves giving enterprises complete control and configurability over their data and applications using an EMM solution.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Security controls and utilities
                            </h2>
                            <p>
                                Knox supplies a collection of controls and utilities. Encryption keeps data secure and confidential. VPN allows data to be easily and securely sent and received when working out of office. SSO allows data to be easily accessed with consolidated authentication for apps and data.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>

                            </h2>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desktop-none">
                <div id="trust" class="flex-text">
                    <p class="show sup1 actived" >BUILD TRUST</p>
                    <p class="show sup2">MAINTAIN TRUST</p>
                    <p class="show sup3">PROVE TRUST</p>
                    <p class="show sup4">MAKE READY</p>
                </div>
                <div class="sup-text">
                    <div id="suptab1"class="build-trust">
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Chipset
                            </h2>
                            <p>
                                The Knox platform ensures only approved versions of system-critical software are loaded. As the platform is built-in, the trust starts in the hardware, with unique certificates burnt into the chipset of each device.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Knox warranty fuse
                            </h2>
                            <p>
                                With these unique certificates, the Knox mobile security platform can verify each piece of software that loads. If verification fails, Knox either records the tampering by flipping a one-time fuse called the Knox Warranty Bit, or prevents further booting. Devices with compromised Knox Warranty Bits cannot use certain Knox features or services, such as Knox Workspace or Samsung Pay.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Rollback prevention
                            </h2>
                            <p>
                                Rollback prevention ensures that a Samsung device is not downgraded to an earlier, vulnerable software version.
                            </p>
                        </div>
                    </div>
                    <div id="suptab2" class="maintain-trust">
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Mobile security software
                            </h2>
                            <p>
                                Without Knox security loaded, verified software can still be modified by the user, either intentionally or unintentionally. For example, by downloading a malicious app or malware.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Device monitoring
                            </h2>
                            <p>
                                The Knox advanced mobile security platform ensures that system-critical software is not modified once loaded. The enterprise mobile security platform uses a set of technologies to protect the device kernel - the core of the operating system. It also protects applications and their data during runtime to detect malicious attacks as well as monitoring policy settings to quickly isolate any threat.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Rooting prevention
                            </h2>
                            <p>
                                The Samsung Knox mobile enterprise solution is designed to protect the kernel and prevent rooting. This keeps the system processes and resources protected from hostile access and malware attacks.
                            </p>
                        </div>
                    </div>
                    <div id="suptab3" class="prove-trust">
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Device attestation
                            </h2>
                            <p>
                                For IT admins intending to manage mobile devices with an EMM (Enterprise Mobility Management) solution, Knox-enabled devices can provide you with an attestation, which lets you see if a device has been tampered with or not. Based on that, you can decide if the device can be trusted, and if it is allowed to receive sensitive corporate data.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Software approval
                            </h2>
                            <p>
                                The Knox enterprise mobile security platform only loads and runs approved system-critical software on a device and can prove this to a third-party when requested.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>

                            </h2>
                            <p>

                            </p>
                        </div>
                    </div>
                    <div id="suptab4" class="make-trust">
                        <div class="flex-3 text-sup-4">
                            <h2>
                                EMM (Enterprise Mobility Management) integration
                            </h2>
                            <p>
                                The final step of the design philosophy is to make the trusted platform ready for enterprise use. This involves giving enterprises complete control and configurability over their data and applications using an EMM solution.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>
                                Security controls and utilities
                            </h2>
                            <p>
                                Knox supplies a collection of controls and utilities. Encryption keeps data secure and confidential. VPN allows data to be easily and securely sent and received when working out of office. SSO allows data to be easily accessed with consolidated authentication for apps and data.
                            </p>
                        </div>
                        <div class="flex-3 text-sup-4">
                            <h2>

                            </h2>
                            <p>

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
<section style="position: relative">

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
{{-- footer --}}
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
        <img src="/images/new-website/lineads.png" alt="barcode">
      </div>
      <div class="modal-footer">
          <p>Add line friend via QR code</p>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


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
