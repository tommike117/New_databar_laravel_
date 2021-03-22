@extends('layouts/main-all-products')

@section('title', 'CATERPILLAR® T20 TABLET | CATERPILLAR | DATABAR COMPANY LIMITED')


@section('link')
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/caterpillar/products/t20/main.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/new-website/products/caterpillar/products/t20/style.css')}}">

<link rel="stylesheet" href="/css/animate.css">
@endsection


@section('content')

        <div class="bg-body">
            <div class="body-standard">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 firstrow" style="overflow:hidden;">
                        <div>
                            <nav aria-label="breadcrumb" id="breadcrumb">
                                <ol itemscope itemtype="http://schema.org/Product" class="breadcrumb mt-lg-5" style="background:transparent;margin-top: 60px !important; ">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a itemprop="brand" itemscope itemtype="http://schema.org/Brand" href="/products/caterpillar"><span itemprop="name">Caterpillar</span></a></li>
                                    <li class="breadcrumb-item d-flex active" aria-current="page">
                                        <h1 itemprop="name" class="m-auto" style="font-size: 14px;">CATERPILLAR® T20</h1>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <figure class="pic-thumbnail" style=" text-align: center; padding-left: 150px; margin-top:50px">
                            <img id="a01" src="{{URL::asset('/images/new-website/products/caterpillar/products/t20/T20-0.png')}}" style="width:100%;" alt="Cat T20" title="Cat T20">
                        </figure>
                        <div class="thumbnails">
                            <ul class="ul-product">
                                <li class="li-product_color1">
                                    <img src="/images/new-website/products/caterpillar/products/t20/T20-0.png" alt="Cat T20 preview1">
                                </li>
                                <li class="li-product_color1">
                                    <img src="/images/new-website/products/caterpillar/products/t20/T20-1.png" alt="Cat T20 preview2">
                                </li>
                                <li class="li-product_color1">
                                    <img src="/images/new-website/products/caterpillar/products/t20/T20-2.png" alt="Cat T20 preview3">
                                </li>
                                <li class="li-product_color1">
                                    <img src="/images/new-website/products/caterpillar/products/t20/T20-3.png" alt="Cat T20 preview3">
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="row box-spec">
                            <div class="col-xs-12 col-sm-12 col-md-12" style="background: rgba(0,0,0,0.1);margin-top:70px;padding:20px !important; border-radius: 15px;">
                                <h2 style="font-size:17px;color:grey;text-align: center;font-weight: 200;">Tablet</h2>
                                <h1 class="product_name" style="color:#4a4a4a;">CATERPILLAR® T20 TABLET</h1>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12" style="padding: 15px 30px 0 30px !important;">
                                        <h3 for="" style="font-size:20px;color:#4a4a4a;font-weight:600">Specification</h3><br>
                                        <ul class="text-ul" style="line-height: 1.2vw;font-weight:200;">
                                            <li>
                                                <p>Display : IPS LCD 8” 800 x 1280 IPS LCD</p>
                                            </li>
                                            <li>
                                                <p>Main Camera : 5MP</p>
                                            </li>
                                            <li>
                                                <p>Front Camera : 2MP</p>
                                            </li>
                                            <li>
                                                <p>ROM : 64GB</p>
                                            </li>
                                            <li>
                                                <p>RAM : 2GB</p>
                                            </li>
                                            <li>
                                                <p>Display Cover : Gorilla® Glass Screen</p>
                                            </li>
                                        </ul>
                                        <figure style="text-align: center;">
                                            <img src="/images/new-website/products/caterpillar/products/icon/Icon_Tab.png" width="100%" alt="Icon">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body-standard">
                <section class="section-1">
                    <figure style="text-align: center">
                        <img src="/images/new-website/products/caterpillar/products/t20/cat-t20-rugged-1920x480px.jpg" width="90%" style="border-radius: 20px" alt="Cat s62">
                    </figure>
                    <div class="position-absolute">
                        <h2>
                            RUGGED
                        </h2>
                        <p>
                            Waterproof to 1m for 30minutes Gorilla® Glass screen IP67 certified
                        </p>
                    </div>
                </section>
                <section class="section-3">
                    <div class=" w-100 d-flex d-bl">
                        <div class="col-12 flex-row-reverse d-flex d-bl">
                            <div class="col-sm-12 col-md-7 col-lg-6">
                                <figure>
                                    <img src="/images/new-website/products/caterpillar/products/t20/cat-t20-drop-proof-600x450px_1.png" width="100%" alt="Cat t20">
                                </figure>
                            </div>
                            <div class="col-sm-12 col-md-5 col-lg-6 text-3">
                                <h2>
                                    DROP PROOF TO 1.8M
                                </h2>
                                <p>
                                    Save money, save productivity levels, and save your data by choosing a drop proof rugged tablet that is extensively drop tested from 6ft (1.8m*) onto hard surfaces.
                                </p>
                                <p>
                                    * with factory fitted screen protector
                                </p>
                                <figure style="text-align: center;">
                                    <img src="/images/new-website/products/caterpillar/products/icon/Icon_Tab2.png" width="70%" alt="Icon">
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
<section>
    @include('includes/arrow-top')
</section>
<section>
    @include('includes/footer')
</section>
@endsection



@section('script')
    <script src="{{ URL::asset('/js/page-js/caterpillar/t20/main.js')}}"></script>
@endsection
