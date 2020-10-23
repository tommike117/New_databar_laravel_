@extends('layouts/main')

@section('title', 'Samsung Knox | DATABAR COMPANY LIMITED')

@section('link')

<link rel="stylesheet" href="{{ URL::to('/css/page-style/samsung/samsung-knox/main.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/aos.css')}}">

@endsection


<!-- Grid -->

@section('content')
<h2 style="color:white;position:absolute;visibility: hidden;">Knox</h2>
<h2 style="color:white;position:absolute;visibility: hidden;">EMM</h2>
<h2 style="color:white;position:absolute;visibility: hidden;">Enterprise Mobility Management</h2>

<section class="section-features-blocks position-relative overflow-hidden">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="back-img"></div>
        </div>
    </div>
    <div class="knox_block">
        <h1 class="section1_text_line1 m-auto" style="font-size:40px;font-weight:bold;">Samsung Knox</h1><br>
        <label class="section1_text_line2" style="font-size:30px;font-weight:bold;">Defence-grade security built from</label><br>
        <label class="section1_text_line3" style="font-size:30px;font-weight:bold;">the chip up</label>
    </div>
</section>
<div class="container-fluid">
    <section>
        <div class="row background-black">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div data-aos="fade-down" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                    data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                    data-aos-anchor-placement="top-center" style="text-align:center;">
                    <label class="section2_text_line1" style="color:white;font-size:40px;font-weight:bold;" for="">Meet Samsung Knox</label><br>
                    <p class="section2_text_line2" style="color:white;font-size:15px;padding:0 20%;">Knox is Samsung’s guarantee of security,
                        and a secure device gives you the freedom to work
                        and play how, where, and when you want. Samsung Knox consists of a highly
                        secure platform built into Samsung devices and a set of solutions that leverage this
                        platform.</p><br>
                    <p class="section2_text_line3" style="color:white;font-size:15px;padding:0 20%;">Whether you’d like to keep your personal
                        photos private, or remotely manage a batch of
                        business smartphones, Knox has you covered.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" data-aos="fade-down" data-aos-offset="0" data-aos-delay="0"
                data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                data-aos-anchor-placement="top-center" style="text-align:center;">
                <ul class="ul_spen" style="padding:0;">
                    <li style="list-style:none;display:inline-table;margin:40px;">
                        <figure>
                            <img class="s_pen_icon" src="{{URL::asset('images/samsung/samsung-knox/platform.png')}}" style="width:60px;" alt="platform" title="samsung knox platform">
                            <figcaption class="figcapture_spen" style="color:white;font-size:20px;font-weight:bold">
                                Platform</figcaption>
                        </figure>
                    </li>
                    <li style="list-style:none;display:inline-table;margin:40px;">
                        <figure>
                            <img class="s_pen_icon" src="{{URL::asset('images/samsung/samsung-knox/solution.png')}}" style="width:60px;" alt="solution" title="samsung knox solution">
                            <figcaption class="figcapture_spen" style="color:white;font-size:20px;font-weight:bold">
                                Solution</figcaption>
                        </figure>
                    </li>
                    <li style="list-style:none;display:inline-table;margin:40px;">
                        <figure>
                            <img class="s_pen_icon" src="{{URL::asset('images/samsung/samsung-knox/device.png')}}" style="width:60px;" alt="device" title="samsung knox device">
                            <figcaption class="figcapture_spen" style="color:white;font-size:20px;font-weight:bold">
                                Device</figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>
<div class="container-fluid">
    <section>
        <div class="row" style="background:black;overflow:hidden;">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div data-aos="fade-down" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                    data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                    data-aos-anchor-placement="top-center" style="text-align:center;">
                    <label class="section3_text_line1" style="color:white;font-size:40px;font-weight:bold;" for="">Samsung Knox</label><br>
                    <label class="section3_text_line2" style="color:white;font-size:40px;font-weight:bold;" for="">Protection from the chip
                        up</label><br>
                    <p class="section3_text_line3" style="color:white;font-size:15px;padding:0 20%;">Anchored in Samsung smartphone, tablet and
                        wearable hardware, the Samsung Knox enterprise mobile security solution is also integrated
                        throughout the software layers to separate data and constantly check the integrity of the
                        device. These defense layers detect any tampering and ensure data is secure. Explore the
                        layers below or download the whitepaper.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 layer_height" data-aos="fade-up" data-aos-offset="0" data-aos-delay="0"
                data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                data-aos-anchor-placement="top-center" style="text-align:center;margin-top:10%;height:700px">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <figure class="layer4" data-aos="layer4" data-aos-offset="-100" data-aos-delay="500"
                        data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="true"
                        data-aos-once="false" data-aos-anchor-placement="top-center">
                        <img id="image_layer4" src="{{URL::asset('images/samsung/samsung-knox/layer4.png')}}" style="width:400px" alt="knox layer4" title="samsung knox layer4">
                    </figure>
                    <figure class="layer3" data-aos="layer3" data-aos-offset="-100" data-aos-delay="400"
                        data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="true"
                        data-aos-once="false" data-aos-anchor-placement="top-center">
                        <img id="image_layer3" src="{{URL::asset('images/samsung/samsung-knox/layer3.png')}}" style="width:400px" alt="knox layer3" title="samsung knox layer3">
                    </figure>
                    <figure class="layer2" data-aos="layer2" data-aos-offset="-100" data-aos-delay="300"
                        data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="true"
                        data-aos-once="false" data-aos-anchor-placement="top-center">
                        <img id="image_layer2" src="{{URL::asset('images/samsung/samsung-knox/layer2.png')}}" style="width:400px" alt="knox layer2" title="samsung knox layer2">
                    </figure>
                    <figure class="layer1" data-aos="layer1" data-aos-offset="-100" data-aos-delay="0"
                        data-aos-duration="0" data-aos-easing="ease-in-out" data-aos-mirror="true"
                        data-aos-once="false" data-aos-anchor-placement="top-center">
                        <img id="image_layer1" src="{{URL::asset('images/samsung/samsung-knox/layer1.png')}}" style="width:400px" alt="knox layer1" title="samsung knox layer1">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col_content_layer_knox" style="float:right;text-align:left;margin:50px auto;">
                    <div class="row m-auto">
                        <div class="col-xs-12 col-sm-12 col-md-12 d-flex flex-direction-row align-items-center" id="detail_layer4">
                            <span class="fa fa-plus plus1 icon-plus-solid"></span>
                            <label class="knox_layer_head" for=""
                                style="color:white;font-size:15px;font-weight:bold;">ADVANCED
                                MOBILE
                                SECURITY FOR ANDROID</label>
                        </div>
                        <p class="detail_layer4">The Knox mobile security solution protects applications and
                            data by strictly defining
                            what each process is allowed to do and what data it can access. This allows Knox to
                            separate, encrypt, and protect enterprise data within a managed container.</p>
                        <div class="col-xs-12 col-sm-12 col-md-12 d-flex flex-direction-row align-items-center" id="detail_layer3">
                            <span class="fa fa-plus plus2 icon-plus-solid"></span>
                            <label class="knox_layer_head" for=""
                                style="color:white;font-size:15px;font-weight:bold;">
                                PROTECTION ARCHITECTURE</label>
                        </div>
                        <p class="detail_layer3">Periodic Kernel Measurement & Real-time Kernel Protection work
                            to constantly inspect the core software of the OS, the kernel. These checks ensure
                            that requests to bypass device security are blocked and sensitive data is protected.
                        </p>
                        <div class="col-xs-12 col-sm-12 col-md-12 d-flex flex-direction-row align-items-center" id="detail_layer2">
                            <span class="fa fa-plus plus3 icon-plus-solid"></span>
                            <label class="knox_layer_head" for=""
                                style="color:white;font-size:15px;font-weight:bold;">TRUSTZONE</label>
                        </div>
                        <p class="detail_layer2">The Knox enterprise security solution leverages a processor
                            architecture known as TrustZone, in which highly sensitive computations are isolated
                            from the rest of the device’s operations, protecting enterprise data.
                        </p>
                        <div class="col-xs-12 col-sm-12 col-md-12 d-flex flex-direction-row align-items-center" id="detail_layer1">
                            <span class="fa fa-plus plus4 icon-plus-solid"></span>
                            <label class="knox_layer_head" for=""
                                style="color:white;font-size:15px;font-weight:bold;">
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
    <section style="margin-top:10%;">
        <div class="row m-auto">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div data-aos="fade-down" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                    data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                    data-aos-anchor-placement="top-center" style="text-align:center;">
                    <label class="knox_navs_head" for="" style="font-size:50px;font-weight:bold">Knox security philosophy</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div data-aos="fade-down" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                    data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                    data-aos-anchor-placement="top-center" style="text-align:center;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                            <ul class="nav nav-tabs justify-content-center">
                                <li class="active tab_content">
                                    <a class="a_tab active" data-toggle="tab" href="#menu1">BUILD TRUST</a>
                                </li>
                                <li class="tab_content">
                                    <a class="a_tab" data-toggle="tab" href="#menu2">MAINTAIN TRUST</a>
                                </li>
                                <li class="tab_content">
                                    <a class="a_tab" data-toggle="tab" href="#menu3">PROVE TRUST</a>
                                </li>
                                <li class="tab_content">
                                    <a class="a_tab" data-toggle="tab" href="#menu4">MAKE READY</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content">

                        <!-- tab1 -->
                        <div id="menu1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4"
                                    style="text-align:left;margin: 20px auto;">
                                    <label for="" style="font-size:30px;font-weight:bold;">Chipset</label><br>
                                    <p style="font-size:16px;">The Knox platform ensures only approved versions of
                                        system-critical software
                                        are loaded. As the platform is built-in, the trust starts in the hardware,
                                        with unique certificates burnt into the chipset of each device.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4"
                                    style="text-align:left;margin: 20px auto;">
                                    <label for="" style="font-size:30px;font-weight:bold;">Knox warranty
                                        fuse</label><br>
                                    <p style="font-size:16px;">With these unique certificates, the Knox mobile
                                        security platform can verify each piece of software that loads. If
                                        verification fails, Knox either records the tampering by flipping a one-time
                                        fuse called the Knox Warranty Bit, or prevents further booting. Devices with
                                        compromised Knox Warranty Bits cannot use certain Knox features or services,
                                        such as Knox Workspace or Samsung Pay.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4"
                                    style="text-align:left;margin: 20px auto;">
                                    <label for="" style="font-size:30px;font-weight:bold;">Rollback
                                        prevention</label><br>
                                    <p style="font-size:16px;">Rollback prevention ensures that a Samsung device is
                                        not downgraded to an earlier, vulnerable software version.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end tab1 -->

                        <!-- tab2 -->
                        <div id="menu2" class="tab-pane fade">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4"
                                    style="text-align:left;margin: 20px auto;">
                                    <label for="" style="font-size:30px;font-weight:bold;">Mobile security
                                        software</label><br>
                                    <p style="font-size:16px;">Without Knox security loaded, verified software can
                                        still be modified by the user, either intentionally or unintentionally. For
                                        example, by downloading a malicious app or malware.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4"
                                    style="text-align:left;margin: 20px auto;">
                                    <label for="" style="font-size:30px;font-weight:bold;">Device
                                        monitoring</label><br>
                                    <p style="font-size:16px;">The Knox advanced mobile security platform ensures
                                        that system-critical software is not modified once loaded. The enterprise
                                        mobile security platform uses a set of technologies to protect the device
                                        kernel - the core of the operating system. It also protects applications and
                                        their data during runtime to detect malicious attacks as well as monitoring
                                        policy settings to quickly isolate any threat.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4"
                                    style="text-align:left;margin: 20px auto;">
                                    <label for="" style="font-size:30px;font-weight:bold;">Rooting
                                        prevention</label><br>
                                    <p style="font-size:16px;">The Samsung Knox mobile enterprise solution is
                                        designed to protect the kernel and prevent rooting. This keeps the system
                                        processes and resources protected from hostile access and malware attacks.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end tab2 -->

                        <!-- tab3 -->
                        <div id="menu3" class="tab-pane fade">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4"
                                    style="text-align:left;margin: 20px auto;">
                                    <label for="" style="font-size:30px;font-weight:bold;">Device
                                        attestation</label><br>
                                    <p style="font-size:16px;">For IT admins intending to manage mobile devices with
                                        an <strong>EMM (Enterprise Mobility Management)</strong> solution,
                                        Knox-enabled devices can
                                        provide you with an attestation, which lets you see if a device has been
                                        tampered with or not. Based on that, you can decide if the device can be
                                        trusted, and if it is allowed to receive sensitive corporate data.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4"
                                    style="text-align:left;margin: 20px auto;">
                                    <label for="" style="font-size:30px;font-weight:bold;">Software
                                        approval</label><br>
                                    <p style="font-size:16px;">The Knox enterprise mobile security platform only
                                        loads and runs approved system-critical software on a device and can prove
                                        this to a third-party when requested.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4"></div>
                            </div>
                        </div>
                        <!-- end tab3 -->

                        <!-- tab4 -->
                        <div id="menu4" class="tab-pane fade">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4"
                                    style="text-align:left;margin: 20px auto;">
                                    <label for="" style="font-size:30px;font-weight:bold;">EMM (Enterprise Mobility
                                        Management) integration</label><br>
                                    <p style="font-size:16px;">The final step of the design philosophy is to make
                                        the trusted platform ready for enterprise use. This involves giving
                                        enterprises complete control and configurability over their data and
                                        applications using an EMM solution.</p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4"
                                    style="text-align:left;margin: 20px auto;">
                                    <label for="" style="font-size:30px;font-weight:bold;">Security controls and
                                        utilities</label><br>
                                    <p style="font-size:16px;">Knox supplies a collection of controls and utilities.
                                        Encryption keeps data secure and confidential. VPN allows data to be easily
                                        and securely sent and received when working out of office. SSO allows data
                                        to be easily accessed with consolidated authentication for apps and data.
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4"></div>
                            </div>
                        </div>
                        <!-- end tab4 -->


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_4" style="margin-top:15%;height:1200px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos="fade-down" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                    data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                    data-aos-anchor-placement="top-center">
                    <label class="section4_text_line1" for="" style="font-size:40px;font-weight:bold;">Knox Platform</label><br>
                    <label class="section4_text_line2" for="" style="font-size:17px;font-weight:bold;margin-top:20px;">A secure device is a
                        reliable
                        device</label><br>
                    <p class="section4_text_line3" style="padding:0 10%;font-size:17px;margin-top:20px;">The Samsung Knox platform is built into
                        Samsung smartphones, tablets, and wearables at the
                        manufacturing stage, so you have it the moment you unpack your device. The Knox platform
                        consists of overlapping defense and
                        security mechanisms that protect against intrusion, malware, and more malicious threats.</p>
                    <br>

                    <p class="section4_text_line4" style="padding:0 10%;font-size:17px;">To further protect these devices for high security use
                        cases, Samsung developed resilient and
                        user-friendly Knox solutions.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">

                <figure class="knox_2">
                    <div data-aos="knox-2" data-aos-offset="0" data-aos-delay="500" data-aos-duration="300"
                        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                        data-aos-anchor-placement="top-center">
                        <img src="{{URL::asset('images/samsung/samsung-knox/knox_banner_3.png')}}" alt="Samsung knox" title="Samsung knox">
                    </div>
                </figure>
                <figure class="knox_1">
                    <div data-aos="knox-1" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                        data-aos-anchor-placement="top-center">
                        <img src="{{URL::asset('images/samsung/samsung-knox/knox_banner_2.jpg')}}" alt="samsung device" title="samsung device">
                    </div>
                </figure>


            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <div data-aos="fade-down" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                    data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                    data-aos-anchor-placement="top-center">
                    <label class="section5_text_line1" for="" style="font-size:40px;font-weight:bold;">Knox Solutions</label><br>
                    <label class="section5_text_line2" for="" style="font-size:17px;font-weight:bold;margin-top:20px;">Covered every step of the
                        way</label><br>
                    <p class="section5_text_line3" style="padding:0 10%;font-size:17px;margin-top:20px;">Whether you manage a small business or
                        a large government organization, Samsung Knox can help make you save time and headaches</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col_icon_knox_platform" style="display:inline-flex;margin-top:10%;padding:0 250px;">
                <figure class="icon_knox_platform">
                    <div data-aos="fade" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                        data-aos-anchor-placement="top-center">
                        <img src="{{URL::asset('images/samsung/samsung-knox/knox-configure.png')}}" alt="knox-configure" title="knox-configure">
                    </div>
                    <div class="knox_content">
                        <div data-aos="fade" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                            data-aos-anchor-placement="top-center" style="text-align:center;">
                            <label for="" style="font-weight:bold;">Configure</label><br>
                            <p style="font-size:13px;">Remotely configure a large number of Samsung devices and
                                tailor them to specific needs</p>
                        </div>
                    </div>
                </figure>
                <figure class="icon_knox_platform">
                    <div data-aos="fade" data-aos-offset="0" data-aos-delay="200" data-aos-duration="300"
                        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                        data-aos-anchor-placement="top-center">
                        <img src="{{URL::asset('images/samsung/samsung-knox/knox-enroll.png')}}" alt="knox-enroll" title="knox-enroll">
                    </div>
                    <div class="knox_content">
                        <div data-aos="fade" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                            data-aos-anchor-placement="top-center" style="text-align:center;">
                            <label for="" style="font-weight:bold;">Enroll</label><br>
                            <p style="font-size:13px;">Add thousands of devices to your EMM at once, without having
                                to manually enroll each one</p>
                        </div>
                    </div>
                </figure>
                <figure class="icon_knox_platform">
                    <div data-aos="fade" data-aos-offset="0" data-aos-delay="400" data-aos-duration="300"
                        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                        data-aos-anchor-placement="top-center">
                        <img src="{{URL::asset('images/samsung/samsung-knox/knox-manage.png')}}" alt="knox-manage" title="knox-manage">
                    </div>
                    <div class="knox_content">
                        <div data-aos="fade" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                            data-aos-anchor-placement="top-center" style="text-align:center;">
                            <label for="" style="font-weight:bold;">Manage</label><br>
                            <p style="font-size:13px;">Easily manage a fleet of devices with a cloud-based EMM
                                solution</p>
                        </div>
                    </div>
                </figure>
                <figure class="icon_knox_platform">
                    <div data-aos="fade" data-aos-offset="0" data-aos-delay="600" data-aos-duration="300"
                        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                        data-aos-anchor-placement="top-center">
                        <img src="{{URL::asset('images/samsung/samsung-knox/knox-secure.png')}}" alt="knox-secure" title="knox-secure">
                    </div>
                    <div class="knox_content">
                        <div data-aos="fade" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                            data-aos-anchor-placement="top-center" style="text-align:center;">
                            <label for="" style="font-weight:bold;">Secure</label><br>
                            <p style="font-size:13px;">Apply comprehensive security and management features to the
                                corporate devices</p>
                        </div>
                    </div>
                </figure>
                <figure class="icon_knox_platform">
                    <div data-aos="fade" data-aos-offset="0" data-aos-delay="800" data-aos-duration="300"
                        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                        data-aos-anchor-placement="top-center">
                        <img src="{{URL::asset('images/samsung/samsung-knox/knox-maintain.png')}}" alt="knox-maintain" title="knox-maintain">
                    </div>
                    <div class="knox_content">
                        <div data-aos="fade" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                            data-aos-anchor-placement="top-center" style="text-align:center;">
                            <label for="" style="font-weight:bold;">Maintain</label><br>
                            <p style="font-size:13px;">Control OS versions on Samsung mobile devices to maximize
                                cost efficiency</p>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </section>
    <section style="margin-top:10%;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div data-aos="fade-down" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                    data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                    data-aos-anchor-placement="top-center" style="margin:100px auto;">
                    <label class="section6_text_line1" style="font-size:50px;font-weight:bold;padding:0 10%;" for="">Get started using Knox at
                        your small or
                        medium business with Secure Folder</label><br>
                    <p class="section6_text_line2" style="font-size:18px;padding:0 10%;">Using Samsung Knox technology, Secure Folder is a FREE
                        Samsung
                        security app for Android that
                        provides protection for personal apps and data on Samsung devices with authentication
                        methods
                        like pin, pattern or biometric verification.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div data-aos="fade" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                    data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                    data-aos-anchor-placement="top-center">
                    <img class="knox_banner_4" src="{{URL::asset('images/samsung/samsung-knox/knox_banner_4.webp')}}" alt="Get started using Knox with Secure Folder" title="Get started using Knox with Secure Folder">
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top:5%;">
        <div class="row row_reverse">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div data-aos="fade" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                    data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                    data-aos-anchor-placement="top-center">
                    <img class="knox_banner_5" src="{{URL::asset('images/samsung/samsung-knox/knox_banner_5.webp')}}" alt="Advanced mobile security and management"
                    title="Advanced mobile security and management">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div data-aos="fade-down" data-aos-offset="0" data-aos-delay="0" data-aos-duration="300"
                    data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                    data-aos-anchor-placement="top-center" style="margin:100px auto;">
                    <label class="section7_text_line1" style="font-size:50px;font-weight:bold;padding:0 10%;" for="">Advanced mobile security
                        and management</label><br>
                    <p class="section7_text_line2" style="font-size:18px;padding:0 10%;">Featuring advanced configuration and management
                        options, robust VPN connectivity and comprehensive data usage analytics, Knox Platform for
                        Enterprise should be the cornerstone of your mobile security strategy.</p>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('script')
<script src="{{URL::asset('js/aos.js')}}"></script>
<script src="{{ URL::asset('/js/page-js/samsung/samsung-knox/main.min.js')}}"></script>
@endsection
