@extends('layouts/main')

@section('title', 'Unitech | Barcode Scanners | DATABAR COMPANY LIMITED')


@section('link')
<link rel="stylesheet" href="{{ URL::asset('/css/page-style/unitech/barcode-scanners/main.css')}}">

@endsection

@section('content')


<div class="container-fluid">
    <div class="row mt-nav">
    <img src="{{URL::asset('images/unitech/barcode-scanners/201003160832042755.jpg')}}" style="width:100%;" alt="Barcode Scanner Banner"
            title="Unitech Barcode Scanner Banner">
    </div>
</div>

<div class="container-fluid p-lg-5">

    <div class="row justify-content-center align-items-center text-center mt-2 mb-5 flex-column">
        <h1 class="mb-3">Barcode Scanners</h1>
        <p class="h1-content text-grey mt-1">unitech barcode scanners are ergonomically designed to increase
            productivity and reduce fatigue. They feature easy configuration, auto-discrimination, multiple interface
            options, and data editing. Unitech continues to satisfy customer needs with new wireless and image scanning
            technologies.</p>
    </div>

    <div class="row justify-content-center mt-3 mb-5 choosetype-row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center pl-md-5 pr-md-5 pt-0">
            <h2 id="tab-smartphone">Pocket Scanner</h2>
        </div>
    </div>
    <!-- section two product -->
    <section id="smartphone">
        <div class="row">
            @foreach ($data as $item)
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
                    <a href="{{URL::to('products/non-samsung/unitech/barcode-scanners/'.$item->Plist_Name)}}">
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

@endsection
