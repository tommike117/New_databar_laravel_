@extends('layouts/main-all-products')

@section('title', 'Galaxy S21 | S21 Ultra | Samsung Smartphone | DATABAR COMPANY LIMITED')


@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-s21/main.css')}}">

@endsection


@section('content')
    <section class="section-1">
        <div class="text">
            <h1>
                Galaxy S21 5G | S21+ 5G
            </h1>
            <p>
                Everyday just got epic.
            </p>
        </div>
        <picture>
            <source media="(max-width: 850px)" srcset="{{URL::to('/images/samsung/galaxy-s21/Untitled-1.jpg')}}">
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_kv.png')}}" width="100%" alt="S21" >
        </picture>
        <div class="text text-1">
            <h2>
                Everyday epic
            </h2>
            <p>
                Introducing Galaxy S21 5G and S21+ 5G.1
                <br>
                Super high-resolution camera and 8K video.
                Galaxy's fastest processor yet.
                All-day intelligent battery.2
                A striking new design.
            </p>
        </div>
    </section>
    <section class="section-2">
        <div class="text text-2">
            <p>
                DESIGN AND DISPLAY

            </p>
            <h2>
                MADE TO <br>
                TURN HEAD
            </h2>
        </div>
        <picture>
            <source  media="(max-width: 850px)" srcset="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_display_start_mobile.jpg')}}">
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_display_start.jpg')}}" width="90%" alt="S21" >
        </picture>
    </section>
    <section class="section-3">
        <img src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_display.jpg" width="100%" alt="S21">
    </section>
    <section class="section-4 d-flex w-100">
        <div class="text text-3">
            <p>
                COLORS
            </p>
            <h2>
                PHANTOM VIOLET
            </h2>
            <h2>
                PHANTOM SILVER
            </h2>
            <h2>
                PHANTOM BLACK
            </h2>
        </div>
        <picture>
            <img src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_colors_3.png" width="100%" alt="">
        </picture>
    </section>
    <section class="section-5">
        <picture>
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_glass.png')}}" width="100%" alt="S21" >
        </picture>
        <div class="text text-5">
            <h2>
                Total eye candy
            </h2>
            <p>
                Brilliant and protected in every way.
            </p>
        </div>
        <div class="text text-5-1">
            <p>
                DURABLE DISPLAY
            </p>
            <h2>
                The toughest Gorilla Glass yet
            </h2>
            <p>
                Built for those "oh no!" moments, Corning® Gorilla® Glass Victus™ delivers scratch and damage protection that makes it the toughest glass on a Samsung smartphone.7
            </p>
        </div>
    </section>
    <section class="section-6">
        <picture>
            <source  media="(max-width: 850px)" srcset="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_summary-video_mobile.jpg.png')}}">
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_summary-video_.png')}}" width="100%" alt="S21" >
        </picture>
        <div class="text text-6">
            <h2>
                Video does't get <br>
                any better than this
            </h2>
        </div>
    </section>
    <section class="section-7">
        <picture class="pic-none" style="filter: brightness(0.5);">
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_8k_end_mobile.jpg')}}" width="100%" alt="S21" >
        </picture>
        <video autoplay muted loop style="width: 100%;" class="video-7">
            <source src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_8k.mp4" type="video/mp4">
        </video>
        <div class="text text-7">
            <h2>Everyday moments that outshine the cinema</h2>
        </div>
    </section>
    <section class="section-8">
        <div class="d-flex ">
            <div class="text text-8">
                <p>
                    SINGLE TAKE
                </p>
                <h2>
                    One take
                    and that's a wrap
                </h2>
            </div>
            <video autoplay muted loop class="video-8" style="width: 500px">
                <source src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_single-take.mp4" type="video/mp4">
            </video>
            <picture class="pic-none">
                <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_single-take_end.jpg')}}" width="100%" alt="S21" >
            </picture>
        </div>
    </section>
    <section class="section-9">
        <div class="text">
            <h2>
                Super Steady. On.
            </h2>
        </div>
        <video autoplay muted loop class="video-9">
            <source src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_super-steady.mp4" type="video/mp4">
        </video>
        <picture class="pic-none"  style="padding:5% 10%">
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_super-steady_start.jpg')}}" width="100%" alt="S21" >
        </picture>
    </section>
    <section class="section-10 d-flex">
        <div class="text text-10">
            <h2>
                12MP
            </h2>
            <p>
                ULTRA WIDE CAMERA
            </p>
            <h2>
                12MP
            </h2>
            <p>
                WIDE-ANGLE CAMERA
            </p>
            <h2>
                64MP
            </h2>
            <p>
                TELEPHOTO CAMERA
            </p>
        </div>
        <picture>
            <source  media="(max-width: 850px)" srcset="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_pro-grade_device_mobile.png')}}">
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_pro-grade_device.png')}}" width="100%" alt="S21" >
        </picture>
    </section>
    <section class="section-11">
        <div class="text text-11">
            <p>
                64MP CAMERA
            </p>
            <h2>
                The beauty is in the details
            </h2>
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_camera_crop_visual.png')}}" width="100%" style="padding: 10% 10% 5% 10%" alt="S21" >
            <p>
                Shoot photos with massive 64MP resolution, so you can pinch way in and find new, shockingly clear masterpieces.8
            </p>
        </div>
    </section>
    <section class="section-12">
        <div class="text">
            <p>
                PORTRAIT
            </p>
            <h2>
                Instantly Insta-ready
            </h2>
        </div>
        <div class="d-flex" style="margin-top: 5%">
            <picture class="pic-click">
                <img id="s21" src="{{URL::asset('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_portrait_img_original.png')}}" width="100%">
            </picture>
            <div class="click">
                <h2>
                    Portraits have never looked better. Capture social feed-ready photos without all the editing.
                </h2>
                <a id="og" class="on-click">ORIGINAL</a>
                <a id="blur" >BLUR</a>
                <a id="studio" >STUDIO</a>
                <a id="himono" >HIGH-KEY MONO</a>
                <a id="lowmono" >LOW-KEY MONO</a>
                <a id="backdrop" >BACKDROP</a>
                <a id="colorprint" >COLOR POINT</a>
            </div>
        </div>
    </section>
    <section class="section-13">
        <picture class="pic-13">
            <img src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_portrait-item2.jpg" width="100%" alt="s21">
        </picture>
        <div class="text text-13">
            <p>
                AI analyzes faces and natural lighting, angles and directions, making sure your subject is the focus and always stunning.
            </p>
        </div>
    </section>
    <section class="section-7 section-14">
        <picture class="pic-14">
            <img src="/images/samsung/galaxy-s21/nightMode.png" width="100%" alt="">
        </picture>
        <div class="text text-14">
            <p>
                NIGHT MODE
            </p>
            <h2>
                The night is yours
            </h2>
        </div>
        <div class="text-14-1">
            <p>
                No lighting crew or fancy equipment? It's all good. Now you can light up the night and capture it in vivid color, even in low light.
            </p>
        </div>
    </section>
    <secttion class="section-15">
        <div class="text text-15">
            <p>
                30X SPACE ZOOM
            </p>
            <h2>
                Say farewell to "too far away"
            </h2>
        </div>
        <div class="media-15">
            <picture class="pic-none">
                <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_space-zoom_end.jpg')}}" width="100%" alt="S21" >
            </picture>
            <video autoplay muted loop style="width: 100%;" class="video-15">
                <source src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_space-zoom.mp4" type="video/mp4">
            </video>
        </div>
        <div class="text text-15-1">
            <p>
                Leave "too far away" in the rearview with 30x digital zoom that captures distant details with stunning clarity9 while Zoom Lock helps keep your subject centered.
            </p>
        </div>
    </secttion>
    <section class="section-16">
        <div class="text text-16">
            <p>
                SELFIE MODE
            </p>
            <h2>
                Puts your best face forward
            </h2>
        </div>
        <picture style=" display:block; padding:0 10%; margin-top:7%; ">
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_selfie-item1.png')}}" width="100%" alt="S21" >
        </picture>
        <div class="text-16">
            <p>
                <span style="color: #4d4d4d"> Selfie Mode </span> is enhanced by AI to bring out your features in realistic, true-to-life color.
            </p>
        </div>
    </section>
    <section class="section-17">
        <div class="text text-17">
            <p>
                INTELLIGENT BATTERY
            </p>
            <h2>
                Epic battery power
            </h2>
            <p>
                Our All-Day Intelligent Battery harnesses power well beyond the 24-hour mark, even on 5G1, with up to 4800mAh2, new power-efficient display and processor that lasts as long as you do.
            </p>
        </div>
        <picture style=" display:block;">
            <img src="{{URL::to('/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_battery_end.jpg')}}" width="100%" alt="S21" >
        </picture>
    </section>
    <section class="section-18">
        <picture>
            <img src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_processor.png" width="100%" alt="">
        </picture>
        <div class="text text-18">
            <p>
                5NM PROCESSOR
            </p>
            <h2>
                The fastest Galaxy processor ever
            </h2>
            <p>
                Packing more speed, power and intelligence than ever, the 5nm processor processor is fast enough to keep up with the action, so you can do more even faster.5
            </p>
            <i class="icon-img">
                <svg width="78px" height="78px" viewBox="0 0 78 78" version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" role="presentation" aria-hidden="true" tabindex="-1" disabled="disabled" clickable="false"> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="@BASE_1440" transform="translate(-1303.000000, -11216.000000)" fill="#000" fill-rule="nonzero"> <path d="M1370,11286.5 L1314,11286.5 C1312.1,11286.5 1310.5,11284.9 1310.5,11283 L1310.5,11227 C1310.5,11225.1 1312.1,11223.5 1314,11223.5 L1370,11223.5 C1371.9,11223.5 1373.5,11225.1 1373.5,11227 L1373.5,11283 C1373.5,11284.9 1371.9,11286.5 1370,11286.5 Z M1315.5,11281.5 L1368.5,11281.5 L1368.5,11228.5 L1315.5,11228.5 L1315.5,11281.5 Z" id="Shape"></path> <g id="" transform="translate(1320.000000, 11216.000000)"> <g id=""> <rect id="Rectangle" x="0" y="0" width="5" height="8"></rect> </g> <g id="" transform="translate(13.000000, 0.000000)"> <rect id="Rectangle" x="0" y="0" width="5" height="8"></rect> </g> <g id="" transform="translate(26.000000, 0.000000)"> <rect id="Rectangle" x="0" y="0" width="5" height="8"></rect> </g> <g id="" transform="translate(39.000000, 0.000000)"> <rect id="Rectangle" x="0" y="0" width="5" height="8"></rect> </g> </g> <g transform="translate(1377.000000, 11235.500000) rotate(90.000000) translate(-1377.000000, -11235.500000) translate(1374.500000, 11231.500000)"> <rect id="Rectangle" transform="translate(2.499972, 3.999953) rotate(89.999855) translate(-2.499972, -3.999953) " x="-1.50002775" y="1.49995324" width="8" height="5"></rect> </g> <g transform="translate(1377.000000, 11248.500000) rotate(90.000000) translate(-1377.000000, -11248.500000) translate(1374.500000, 11244.500000)"> <rect id="Rectangle" transform="translate(2.500005, 3.999953) rotate(89.999855) translate(-2.500005, -3.999953) " x="-1.49999479" y="1.49995324" width="8" height="5"></rect> </g> <g transform="translate(1377.000000, 11261.500000) rotate(90.000000) translate(-1377.000000, -11261.500000) translate(1374.500000, 11257.500000)"> <rect id="Rectangle" transform="translate(2.500038, 3.999953) rotate(89.999855) translate(-2.500038, -3.999953) " x="-1.49996183" y="1.49995324" width="8" height="5"></rect> </g> <g transform="translate(1377.000000, 11274.500000) rotate(90.000000) translate(-1377.000000, -11274.500000) translate(1374.500000, 11270.500000)"> <rect id="Rectangle" transform="translate(2.499971, 3.999953) rotate(89.999855) translate(-2.499971, -3.999953) " x="-1.50002888" y="1.49995324" width="8" height="5"></rect> </g> <g transform="translate(1307.000000, 11235.500000) rotate(90.000000) translate(-1307.000000, -11235.500000) translate(1304.500000, 11231.500000)"> <rect id="Rectangle" transform="translate(2.499972, 3.999953) rotate(89.999855) translate(-2.499972, -3.999953) " x="-1.50002775" y="1.49995324" width="8" height="5"></rect> </g> <g transform="translate(1307.000000, 11248.500000) rotate(90.000000) translate(-1307.000000, -11248.500000) translate(1304.500000, 11244.500000)"> <rect id="Rectangle" transform="translate(2.500005, 3.999953) rotate(89.999855) translate(-2.500005, -3.999953) " x="-1.49999479" y="1.49995324" width="8" height="5"></rect> </g> <g transform="translate(1307.000000, 11261.500000) rotate(90.000000) translate(-1307.000000, -11261.500000) translate(1304.500000, 11257.500000)"> <rect id="Rectangle" transform="translate(2.500038, 3.999953) rotate(89.999855) translate(-2.500038, -3.999953) " x="-1.49996183" y="1.49995324" width="8" height="5"></rect> </g> <g transform="translate(1307.000000, 11274.500000) rotate(90.000000) translate(-1307.000000, -11274.500000) translate(1304.500000, 11270.500000)"> <rect id="Rectangle" transform="translate(2.499971, 3.999953) rotate(89.999855) translate(-2.499971, -3.999953) " x="-1.50002888" y="1.49995324" width="8" height="5"></rect> </g> <g transform="translate(1320.000000, 11286.000000)"> <rect id="Rectangle" x="0" y="0" width="5" height="8"></rect> </g> <g transform="translate(1333.000000, 11286.000000)"> <rect id="Rectangle" x="0" y="0" width="5" height="8"></rect> </g> <g transform="translate(1346.000000, 11286.000000)"> <rect id="Rectangle" x="0" y="0" width="5" height="8"></rect> </g> <g transform="translate(1359.000000, 11286.000000)"> <rect id="Rectangle" x="0" y="0" width="5" height="8"></rect> </g> <path d="M1323.5,11262 L1323.5,11248.5 L1327.8,11248.5 C1328.5,11248.5 1329.2,11248.6 1329.9,11248.8 C1330.5,11249 1331,11249.3 1331.5,11249.8 C1331.9,11250.2 1332.3,11250.7 1332.5,11251.3 C1332.7,11251.9 1332.9,11252.6 1332.8,11253.2 C1332.8,11254 1332.6,11254.8 1332.2,11255.5 C1331.8,11256.2 1331.2,11256.8 1330.5,11257.2 L1333.2,11262.1 L1330.3,11262.1 L1328.1,11258 L1326,11258 L1326,11262 L1323.5,11262 Z M1327.6,11255.6 C1328,11255.6 1328.5,11255.5 1328.9,11255.4 C1329.2,11255.3 1329.5,11255.1 1329.8,11254.9 C1330,11254.7 1330.2,11254.4 1330.3,11254.1 C1330.4,11253.8 1330.4,11253.5 1330.4,11253.2 C1330.4,11252.6 1330.2,11252 1329.7,11251.6 C1329.1,11251.1 1328.4,11250.9 1327.6,11251 L1326,11251 L1326,11255.7 L1327.6,11255.6 Z M1338.9,11248.5 L1341.4,11248.5 L1346.3,11262 L1343.7,11262 L1342.9,11259.6 L1337.7,11259.6 L1336.8,11262 L1334.2,11262 L1338.9,11248.5 Z M1338.4,11257.2 L1342,11257.2 L1340.2,11252.1 L1338.4,11257.2 Z M1347.7,11248.5 L1350.2,11248.5 L1354.3,11254.2 L1358.5,11248.5 L1360.9,11248.5 L1360.9,11262 L1358.4,11262 L1358.4,11252.5 L1354.3,11258.1 L1350.3,11252.6 L1350.3,11262 L1347.8,11262 L1347.8,11248.5 L1347.7,11248.5 Z" id="Shape"></path> <path d="M1361,11262.2 L1358.2,11262.2 L1358.2,11253 L1354.2,11258.4 L1354.1,11258.2 L1350.3,11253.1 L1350.3,11262.2 L1347.5,11262.2 L1347.5,11248.4 L1350.2,11248.4 L1354.2,11254 L1358.4,11248.4 L1361,11248.4 L1361,11262.2 Z M1358.5,11261.8 L1360.7,11261.8 L1360.7,11248.6 L1358.5,11248.6 L1354.2,11254.4 L1350,11248.6 L1347.7,11248.6 L1347.7,11261.8 L1350,11261.8 L1350,11252.1 L1354.2,11257.8 L1358.5,11252 L1358.5,11261.8 Z M1346.5,11262.2 L1343.6,11262.2 L1342.8,11259.8 L1337.8,11259.8 L1337,11262.2 L1334.1,11262.2 L1339,11248.4 L1341.7,11248.4 L1341.7,11248.5 L1346.5,11262.2 Z M1343.8,11261.8 L1346.1,11261.8 L1341.4,11248.6 L1339,11248.6 L1334.3,11261.8 L1336.6,11261.8 L1337.4,11259.4 L1342.9,11259.4 L1343.8,11261.8 Z M1333.6,11262.2 L1330.4,11262.2 L1330.4,11262.1 L1328.3,11258.1 L1326.3,11258.1 L1326.3,11262.2 L1323.5,11262.2 L1323.5,11248.4 L1328,11248.4 C1328.7,11248.4 1329.5,11248.5 1330.2,11248.8 C1330.8,11249 1331.4,11249.4 1331.8,11249.8 C1332.2,11250.2 1332.6,11250.8 1332.8,11251.3 C1333,11251.9 1333.2,11252.6 1333.2,11253.3 C1333.2,11254.1 1333,11254.9 1332.6,11255.7 C1332.2,11256.4 1331.7,11257 1331,11257.3 L1333.6,11262.2 Z M1330.5,11261.8 L1333,11261.8 L1330.3,11257 L1330.4,11256.9 C1331.1,11256.5 1331.7,11256 1332,11255.3 C1332.4,11254.6 1332.6,11253.9 1332.6,11253.1 C1332.6,11252.5 1332.5,11251.8 1332.3,11251.2 C1332.1,11250.7 1331.8,11250.2 1331.3,11249.8 C1330.9,11249.4 1330.3,11249.1 1329.8,11248.9 C1329.1,11248.7 1328.4,11248.6 1327.7,11248.6 L1323.5,11248.6 L1323.5,11261.8 L1325.7,11261.8 L1325.7,11257.7 L1328.2,11257.7 L1328.2,11257.8 L1330.5,11261.8 Z M1342.2,11257.3 L1338.2,11257.3 L1340.2,11251.6 L1342.2,11257.3 Z M1338.7,11257 L1341.8,11257 L1340.2,11252.5 L1338.7,11257 Z M1327.7,11255.7 C1327.7,11255.7 1327.6,11255.7 1327.6,11255.7 L1325.9,11255.7 L1325.9,11250.7 L1327.6,11250.7 C1328.4,11250.6 1329.2,11250.9 1329.8,11251.3 C1330.3,11251.8 1330.5,11252.4 1330.5,11253.1 C1330.5,11253.4 1330.5,11253.8 1330.4,11254.1 C1330.3,11254.4 1330.1,11254.7 1329.9,11254.9 C1329.6,11255.2 1329.3,11255.4 1329,11255.5 C1328.5,11255.6 1328.1,11255.7 1327.7,11255.7 Z M1326.2,11255.4 L1327.6,11255.4 C1328,11255.4 1328.4,11255.3 1328.8,11255.2 C1329.1,11255.1 1329.4,11254.9 1329.6,11254.7 C1329.8,11254.5 1329.9,11254.2 1330,11254 C1330.1,11253.7 1330.1,11253.4 1330.1,11253.1 C1330.1,11252.5 1329.9,11252 1329.5,11251.6 C1328.9,11251.2 1328.2,11251 1327.5,11251 L1326,11251 L1326,11255.4 L1326.2,11255.4 Z" id="Shape"></path> </g> </g> </svg>
            </i>
            <p>
                8GB of RAM
            </p>
        </div>
    </section>
    <section class="section-19">
        <div class="text text-19">
            <p>
                SECURITY
            </p>
            <h2>
                Share only what you want
            </h2>
            <p>
                The Knox security platform delivers a high level of security, protecting your phone from the chip up and giving you more confidence in your data and app permissions. It also features Samsung Knox Vault to keep your biometric authentication data under wraps. And with a larger, lower latency Ultrasonic Fingerprint sensor, you can unlock even faster — even if your finger's dry.
            </p>
        </div>
        <picture class="pic-19">
            <img src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_security.png" width="100%" alt="">
        </picture>
    </section>
    <section class="section-20">
        <picture class="pic-20">
            <img src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_storage.png" width="100%" alt="">
        </picture>
        <div class="text text-20">
            <p>
                STORAGE
            </p>
            <h2>
                Keep memories close at hand
            </h2>
            <p>
                With up to 256GB of built-in memory, you can store thousands of high-res pics and videos.13 Need a backup plan? Microsoft OneDrive has you covered with automatic file syncing straight to the cloud.14
            </p>
        </div>
    </section>
    <section class="section-21">
        <picture>
            <img src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_gaming.png" width="100%" alt="">
        </picture>
        <div class="text-21 ">
            <h2>
                GAMING
            </h2>
            <h3>
                Performance that's got game
            </h3>
            <p>
                Own the leaderboard with our ultra-responsive 120Hz display and hyperfast 5G1 and Wi-Fi 6 connectivity. Plus, with Priority Mode blocking calls and optimizing gameplay, you've got the edge to stay on top.
            </p>
        </div>
    </section>
    <section class="section-22">
        <div class="text text-22">
            <p>
                WHAT'S IN THE BOX
            </p>
            <h2>
                All you need to make every day epic
            </h2>
            <p>
                Galaxy S21 5G and S21+ 5G include exactly what you need—and nothing to clutter up your drawers.
            </p>
        </div>
        <picture>
            <img src="/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_box.png" width="100%" alt="">
        </picture>
    </section>
    <section class="section-23">
        <picture>
            <img src="/images/samsung/galaxy-s21/OT_accessories_D.png" width="100%" alt="">
        </picture>
        <div class="text-23">
            <p>
                ACCESSORIES
            </p>
            <h2>
                Oh, it gets even better
            </h2>
        </div>
    </section>






@endsection



@section('script')
<script src="{{ URL::asset('/js/page-js/samsung/galaxy-s21/main.js')}}"></script>
@endsection
