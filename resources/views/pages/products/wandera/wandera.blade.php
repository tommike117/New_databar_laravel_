@extends('layouts/main')

@section('title','Wandera | Mobile Threat Defense | DATABAR COMPANY LIMITED')


@section('link')
    <link rel="stylesheet" href="{{ URL::asset('/css/page-style/wandera/style.css')}}">

@endsection



@section('content')

<div class="container-fluid">
    <div class="row" style="height:400px;">
        <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
            <div class="logo_wandera">
                <img src="{{ URL::asset('/images/wandera//Wandera.png')}}" style="width:60%;" alt="Wandera logo" title="Wandera logo">
            </div>
        </div>
    </div>
    <section style="margin-top:15%;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 position-relative" style="padding:0;">
                <div class="banner_background"></div>
                <div class="overlay"></div>
                <div class="banner_2">
                    <img src="{{ URL::asset('/images/wandera//banner_2.png')}}" style="width:90%;" alt="">
                </div>
                <div class="banner_2_content">
                    <h2 class="label_banner2_content" >Multi-level protection for mobile users, endpoints
                        and corporate applications</h2><br>
                    <p style="font-size:20px;color:white;margin-top:15px;">Security teams
                        worldwide rely on us to eliminate threats, control unwanted access and prevent
                        data breaches.

                    </p><br>
                    <p style="font-size:20px;color:white;margin-top:15px;">Free your employees
                        from cyber threats.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row" style="margin:100px auto;">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;text-align:center;">
                    <h2 class="section3_text_line1">Two levels of protection</h2>
                    <p class="section3_text_line2">Complementary and working in tandem.</p><br>
                    <p class="section3_text_line3">Mobile is the new frontier for cyber threats. Gartner forecasts a
                        third of all malware will be
                        mobile by 2020. Cloud and mobility have completely changed the way employees work, providing
                        speed and flexibility in accessing information, but also exposing the enterprise to new
                        threat
                        vectors. As your employees go mobile, so does your data.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6" style="text-align:center;">
                <figure>
                    <img class="icon_wandera1" src="{{ URL::asset('/images/wandera/icon2.png')}}" alt="">
                </figure>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h3 class="section4_text_line1">1. Highly effective endpoint security</h3>
                        <p class="section4_text_line2">Protect against all endpoint threat vectors from device
                            vulnerabilities, to malicious or
                            risky apps, as well as detect MITM attacks. Deploy seamlessly and enforce conditional
                            access to corporate applications through UEM integration.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6" style="text-align:center;">
                <figure>
                    <img class="icon_wandera2" src="{{ URL::asset('/images/wandera/icon1.png')}}" alt="">
                </figure>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h3 class="section5_text_line1">2. Real-time prevention of network
                            attacks</h3>
                        <p class="section5_text_line2">Prevent threats from reaching the endpoint in the first
                            place. Our Secure Access Layer
                            goes beyond endpoint detection to safeguard user privacy, protect against phishing and
                            other risks, and initiate a secure tunnel when under attack.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top:15%;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col_design" style="margin:40px auto;">
                <label class="section6_text_line1" for="">Designed equally for security teams and
                    employees</label><br>
                <p class="section6_text_line2">User privacy is paramount, even more so when it comes to BYOD. Your
                    users will embrace Wandera because it safeguards their online privacy with encryption, and
                    ensures they don’t fall prey to phishing theft of their own personal credentials.</p><br>
                <p class="section6_text_line3">Privacy in-built: No private data decryption or monitoring of
                    personal applications on the device such as text messaging, email or photos.</p><br>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6" style="text-align:center;">
                <figure>
                    <img src="{{ URL::asset('/images/wandera/banner_3.png')}}" style="width:80%;" alt="">
                </figure>
            </div>
        </div>
    </section>
    <section style="margin-top:10%;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                <h1 class="section7_text_line1">The most comprehensive Mobile Threat Defense</label>
            </div>
        </div>
        <div class="row row_col_icon" style="margin: 100px 0 0 150px;">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <figure>
                            <img src="{{ URL::asset('/images/wandera/layers.png')}}" class="icon_mtd" alt="">
                        </figure>
                        <div class="row row_icon">
                            <label class="icon_content_line1" for="">Advanced machine learning</label><br>
                            <p class="icon_content_line2">We lead the industry in applying data science to the
                                challenges of mobile security. MI:IRAM, our advanced machine learning and threat
                                intelligence engine, identifies and eliminates the industry’s broadest range of
                                known and unknown zero-day threats.</p>
                        </div>
                    </div>
                </div>
                <div class="row row_icon">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <figure>
                            <img src="{{ URL::asset('/images/wandera/devices.png')}}" class="icon_mtd" alt="">
                        </figure>
                        <div class="row">
                            <label class="icon_content_line1" for="">Unrivalled integrations</label><br>
                            <p class="icon_content_line2">With more UEM and SIEM partnerships than any other mobile
                                security vendor, we provide a seamless integration with painless deployment in
                                minutes.</p>
                        </div>
                    </div>
                </div>
                <div class="row row_icon">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <figure>
                            <img src="{{ URL::asset('/images/wandera/list.png')}}" class="icon_mtd" alt="">
                        </figure>
                        <div class="row">
                            <label class="icon_content_line1" for="">Real-time insights</label><br>
                            <p class="icon_content_line2">Wandera’s management portal, RADAR, gives admins real-time
                                insights and granular control over the threat status of endpoints, allowing you to
                                configure and enrol devices, receive instant alerts, customize notifications and
                                manage integrations.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <figure>
                            <img src="{{ URL::asset('/images/wandera/settings.png')}}" class="icon_mtd" alt="">
                        </figure>
                        <div class="row row_icon">
                            <label class="icon_content_line1" for="">Secure Access Layer (SAL)</label><br>
                            <p class="icon_content_line2">By operating at the network level, Wandera offers
                                real-time security by blocking
                                zero-day threats like phishing sites and malicious domains. In addition, MITM
                                attacks can be neutralized by initiating a secure VPN tunnel, keeping your users and
                                corporate application data safe.</p>
                        </div>
                    </div>
                </div>
                <div class="row row_icon">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <figure>
                            <img src="{{ URL::asset('/images/wandera/integrations.png')}}" class="icon_mtd" alt="">
                        </figure>
                        <div class="row">
                            <label class="icon_content_line1" for="">Any mobile device. Any ownership
                                model</label><br>
                            <p class="icon_content_line2">We accommodate all devices and ownership models, whether
                                BYOD, COPE or COBO, allowing you to work with your preferred model in a way that is
                                best for your business.</p>
                        </div>
                    </div>
                </div>
                <div class="row row_icon">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <figure>
                            <img src="{{ URL::asset('/images/wandera/donut-chart.png')}}" class="icon_mtd" alt="">
                        </figure>
                        <div class="row">
                            <label class="icon_content_line1" for="">Continuous conditional access</label><br>
                            <p class="icon_content_line2">Corporate applications and data are protected against
                                unauthorized rogue access with the benefit of our UEM integrations. Continuous
                                Conditional Access ensures corporate data remains safe by controlling access, in
                                real time, based on device, user and app risk.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top:10%;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                <div class="banner_4"></div>
                <div class="col-xs-12 col-sm-12 col-md-12 range_threat">
                    <label class="range_threat_line1" for="">Protect against the broadest range of threats</label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 range_threat">
                    <ul class="ul_range_threat">
                        <li>
                            <figure>
                                <img src="{{ URL::asset('/images/wandera/malware.png')}}" alt="">
                            </figure>
                            <figcaption class="figcaption_line1">Malware</figcaption><br>
                            <figcaption class="figcaption_line2">With a database of over 42 million scanned apps
                                alongside our vetting
                                technology, malicious apps can be identified and blocked keeping your sensitive data
                                safe.</figcaption><br>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ URL::asset('/images/wandera/phishing.png')}}" alt="">
                            </figure>
                            <figcaption class="figcaption_line1">Phishing</figcaption><br>
                            <figcaption class="figcaption_line2">A new phishing site is created every 20 seconds. We
                                work in real time to detect and block zero-day phishing attacks and malicious
                                domains.</figcaption><br>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ URL::asset('/images/wandera/mitm-2.png')}}" alt="">
                            </figure>
                            <figcaption class="figcaption_line1">Man-in-the-middle attacks</figcaption><br>
                            <figcaption class="figcaption_line2">When the Secure Access Layer identifies a risky
                                network connection, it encrypts all data flowing to and from the device so it can’t
                                be intercepted by an attacker.</figcaption><br>
                        </li>
                    </ul>
                    <ul class="ul_range_threat_line2">
                        <li>
                            <figure>
                                <img src="{{ URL::asset('/images/wandera/crypto.png')}}" alt="">
                            </figure>
                            <figcaption class="figcaption_section2_line1">Cryptojacking</figcaption><br>
                            <figcaption class="figcaption_section2_line2">We prevent cryptominers from hijacking user CPUs,
                                which degrades endpoint performance and user productivity.</figcaption><br>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ URL::asset('/images/wandera/leak.png')}}" alt="">
                            </figure>
                            <figcaption class="figcaption_section2_line1">App and data leaks</figcaption><br>
                            <figcaption class="figcaption_section2_line2">We detect insecure data transmissions, ensuring
                                malicious actors can’t exploit poorly designed apps to compromise your sensitive
                                data.</figcaption><br>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection




@section('script')

@endsection
