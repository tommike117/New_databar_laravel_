@extends('layouts/main')


@section('title', 'Unitech | Mobile Computers (PDA) | DATABAR COMPANY LIMITED')


@section('link')
    <link rel="stylesheet" href="{{ URL::asset('/css/page-style/unitech/mobile-computers/main.css')}}">

@endsection


@section('content')

<div class="container-fluid">
        <div class="row banner"></div>
    </div>

    <div class="container-fluid p-lg-5">

        <div class="row justify-content-center align-items-center text-center mt-2 mb-5 flex-column">
            <h1 class="mb-3">Mobile Computer</h1>
            <p class="h1-content text-grey mt-1">The Rugged Mobile Computer product line is defined by ergonomic design,
                versatility, and durability, for use in enterprise, industrial and harsh environments. Our Windows-based
                and Android-based handheld devices feature a wide range of connectivity options, development software
                and strong database integration. We develop mobile computers that provide our customers with
                value-driven solutions that meet their business needs.</p>
        </div>

        <div class="row justify-content-center mt-3 mb-5 choosetype-row">
            <div class="col-xs-6 col-sm-6 col-md-6 text-right pl-md-5 pr-md-5 pt-0 h2-border">
                <h2 id="tab-smartphone" class="m-0">Smartphone</h2>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 text-left pl-md-5 pr-md-5 pt-0">
                <h2 id="tab-tablet" class="m-0">Tablet</h2>
            </div>
        </div>
        <!-- section two product -->
        <section id="smartphone">
            <div class="row">
                @foreach ($data_smartphone as $item)
                <div class="col-xs-12 col-sm-12 col-md-4 product_row1">
                    <img src="{{URL::asset('images/database/'.$item->Plist_Image)}}" alt="{{$item->Pline_Name.' '.$item->Plist_Name}}" title="{{$item->Brand_Name.' '.$item->Pline_Name.' '.$item->Plist_Name}}"
                        style="width:60%;margin-bottom:10px;margin-top:50px;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="block-product">
                            <h3 class="product_name">{{$item->Plist_Name}}</h3>
                                <h4 class="product-type">{{$item->Plist_Description}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:9px;">
                            <a
                                href="{{URL::to('products/non-samsung/unitech/mobile-computers/'.$item->Plist_Name)}}">
                                <button type="button" class="btn btn-outline-databar-blue learnmore">Learn&nbspMore</button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <section id="tablet">
            <div class="row">
                @foreach ($data_tablet as $item)
                    <div class="col-xs-12 col-sm-12 col-md-4 product_row1">
                        <img src="{{URL::asset('images/database/'.$item->Plist_Image)}}" alt="{{$item->Pline_Name.' '.$item->Plist_Name}}" title="{{$item->Brand_Name.' '.$item->Pline_Name.' '.$item->Plist_Name}}"
                            style="width:60%;margin-bottom:10px;margin-top:50px;">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="block-product">
                                    <h3 class="product_name">{{$item->Plist_Name}}</h3>
                                    <h4 class="product-type">{{$item->Plist_Description}}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:9px;">
                                <a
                            href="{{URL::to('products/non-samsung/unitech/mobile-computers/'.$item->Plist_Name)}}">
                                    <button type="button" class="btn btn-outline-databar-blue learnmore">Learn&nbspMore</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </div>
@endsection




@section('script')
    <script src="{{URL::asset('/js/page-js/unitech/mobile-computers/main.js')}}"></script>

@endsection
