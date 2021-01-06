
@extends('layouts/main')

@section('title','Samsung Galaxy A40 | Samsung Smartphone | DATABAR COMPANY LIMITED')

@section('link')

<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/samsung/galaxy-a40/main.css')}}">

@endsection




@section('content')

<div class="container-fluid">

    <section class="first_show" data-aos="fade" style="position:relative;height:700px;top:350px;left:0;right:0;margin:auto;">
        <div class="row justify-content-center">
            <h1 class="font-80">Samsung Galaxy A40</h1>
        </div>
    </section>

    <!-- section 1 -->
    <section style="margin-top:5px;">
        <div class="row margin-from-nav">
        <img src="{{URL::asset('images/samsung/galaxy-a40/banner_1.webp')}}" style="width:100%;" alt="">
        </div>
        <div class="row pl-3 pr-3 pb-0 mb-xs-5">
            <div class="col-xs-12 col-sm-6 col-md-6 border-right border-gray-100">
                <div class="row flex-column align-items-center justify-content-center">
                    <figure class="svg_block_image">
                        <img src="{{URL::asset('images/samsung/galaxy-a40/svg_1.svg')}}" alt="">
                    </figure>
                    <figcaption>Ultra wide angle</figcaption>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="row flex-column align-items-center justify-content-center">
                    <figure class="svg_block_image">
                        <img src="{{URL::asset('images/samsung/galaxy-a40/svg_2.svg')}}" alt="">
                    </figure>
                    <figcaption>Battery</figcaption>
                </div>
            </div>
        </div>
    </section>
    <!-- end section1 -->
    <!-- section2 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-5-auto text-center">See the world on your screen​</h1>
                <div class="block-p">
                    <p class="font text-center">The Galaxy A40’s 5.9” Infinity-U display lets you see the details in everything you watch. From music videos to the latest boxset, FHD+ and Super AMOLED makes everything leap from the edge to edge screen.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a40/banner_2.jpg')}}" style="width:100%;" alt="">
            </div>

            <p class="remark text-black pr-20p pl-20p text-center mt-5-auto">​*images simulated for illustrative purposes.**Infinity Display: a near bezel-less, full-frontal glass, edge-to-edge screen.***Screen measured diagonally as a full rectangle without accounting for rounded corners.</p>

        </div>
    </section>
    <!-- section3 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-3-auto text-center">Crafted in beautiful colours</h1>
                <div class="block-p">
                    <p class="text-center">The sleek, slim and beautiful Galaxy A40 is designed to stand out. The minimalist 3D Glasstic back rests easily in a single hand, featuring stunning curves at every corner. Choose from black, white, coral or blue shades and express yourself.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a40/banner_3.webp')}}" style="width:100%;" alt="">
            </div>
        </div>
    </section>
    <!-- end section3 -->
    <!-- section4 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-3-auto text-center">Capture every moment that matters</h1>
                <div class="block-p">
                    <p class="text-center">The Galaxy A40’s stunning Dual camera consists of a 16MP (F1.7) camera and a 5MP Ultra Wide Camera with a 123-degree field of view. It’s able to see every scene just like the human eye and capture every single memory.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a40/banner_4.webp')}}" style="width:100%;" alt="">
            </div>
            <p class="remark text-black pr-20p pl-20p text-center mt-5-auto">​*Images simulated for illustrative purposes.</p>
        </div>
    </section>
    <!-- end section4 -->
    <!-- section5 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-5-auto text-center">Widen your world</h1>
                <div class="block-p">
                    <p class="font text-center">From epic landscapes to group photos, the Ultra Wide Camera fits everything in. And with a 16MP main camera, you can dive into each detail whether it's day or night. Everything you capture will come out clear, bright and lifelike.</p>
                </div>
            </div>
            <div class="main-carousel js-flickity" style="width:100%;">
                <figure class="slide-img-size">
                    <img src="{{URL::asset('images/samsung/galaxy-a40/slide1-1.jpg')}}" alt="">
                </figure>
                <figure class="slide-img-size">
                    <img src="{{URL::asset('images/samsung/galaxy-a40/slide1-2.jpg')}}" alt="">
                </figure>
                <figure class="slide-img-size">
                    <img src="{{URL::asset('images/samsung/galaxy-a40/slide1-3.jpg')}}" alt="">
                </figure>
            </div>
        </div>
    </section>
    <!-- end section5 -->
    <!-- section6 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-5-auto text-center">Optimise your photos with 19 modes</h1>
                <div class="block-p">
                    <p class="font text-center">The Galaxy A40 is clever enough to know what you’re taking a photo of. And whether it’s a stunning sunset or a delicious plate of food, it’ll instantly give you the optimum levels of brightness and saturation.</p>
                </div>
            </div>
            <div class="main-carousel js-flickity" style="width:100%;">
                <figure class="slide-img-size">
                    <img src="{{URL::asset('images/samsung/galaxy-a40/slide2-1.webp')}}" alt="">
                </figure>
                <figure class="slide-img-size">
                    <img src="{{URL::asset('images/samsung/galaxy-a40/slide2-2.webp')}}" alt="">
                </figure>
            </div>
        </div>
    </section>
    <!-- end section6 -->
    <!-- section7 -->
    <section>
    <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-5-auto text-center">Get your good side</h1>
                <div class="block-p">
                    <p class="font text-center">Every selfie should show your good side. With a 25MP front camera, you can get vivid selfies with every shot. Selfie focus blends the background and puts your features centre stage. And with Smart Beauty mode, you’ll always look picture perfect.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a40/banner_5.webp')}}" style="width:100%;" alt="">
            </div>
            <p class="remark text-black pr-20p pl-20p text-center mt-5-auto">​*Images simulated for illustrative purposes.</p>
        </div>
    </section>
    <!-- end section7 -->
    <!-- section8 -->
    <section class="mt-xs-5">
    <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-3-auto text-center">Show who you are with AR</h1>
                <div class="block-p">
                    <p class="text-center">The Galaxy A40 gives you more ways to show off your creative side. Make your own AR emoji to send to friends. Add stickers to every single shot you take. And add fun to every photo with a range of filters and stamps.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a40/banner_6.webp')}}" style="width:100%;" alt="">
            </div>
            <p class="remark text-black text-center mt-5">*Images simulated for illustrative purposes. **Some movements and expressions may not be recognized.</p>
        </div>
    </section>
    <!-- end section8 -->
    <!-- section9 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-3-auto text-center">Be in charge with real staying power</h1>
                <div class="block-p">
                    <p class="text-center">The Galaxy A40 will be there when you need it most. With a 3,100mAh (typical)* battery, you’ll be able to go all day, streaming movies and making calls. And when you’re low on power, 15W Fast Charging will get you quickly powered up.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a40/banner_7.webp')}}" style="width:100%;" alt="">
            </div>
            <p class="remark pl-20p pr-20p text-black mt-5 mb-5 text-center">​*Typical value tested under third-party laboratory condition. Typical value is the estimated average value considering the deviation in battery capacity among the battery samples tested under IEC 61960 standard. Rated (minimum) capacity is 3,020 mAh. Actual battery life may vary depending on network environment, usage patterns and other factors.</p>
        </div>
    </section>
    <!-- end section9 -->

    <!-- section10 -->
    <section>
        <div class="row justify-content-center">
            <div class="block-h1 flex-column pl-xs-1 pr-xs-1">
                <h1 class="m-xs-3-auto text-center">Fast enough to keep up with you</h1>
                <div class="block-p">
                    <p class="text-center">Open apps in an instant and play graphics-heavy games. The Galaxy A40 has got the power and performance to make things run smoothly. With 4GB of RAM and 64GB of ROM, you can store more and enjoy less lag.</p>
                </div>
            </div>
            <div class="flex-banner">
                <img src="{{URL::asset('images/samsung/galaxy-a40/banner_8.webp')}}" style="width:100%;" alt="">
            </div>
        </div>
    </section>
    <!-- end section10 -->
</div>

@endsection


@section('script')

@endsection
