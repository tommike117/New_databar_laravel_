@extends('layouts/main')

@section('title', 'Discover And Learn More All Smartphone Product | DATABAR COMPANY LIMITED')

@section('link')
<link rel="stylesheet" href="{{ URL::asset('css/page-style/samsung/see-all-smartphone/main.css')}}">
{{-- <link rel="stylesheet" href="{{URL::asset('css/product-list.css')}}"> --}}

@endsection


<!-- Grid -->

@section('content')
<div class="container-fluid">
    <!-- section one -->
    <div class="row smartphone_banner"></div>
</div>
<div class="container-fluid p-lg-5">
    <div class="row">
      <nav aria-label="breadcrumb" id="breadcrumb">
          <ol class="breadcrumb" style="background:transparent;">
              <li class="breadcrumb-item"><a href="{{ route('samsung.smartphone')}}">Samsung Smartphone</a></li>
              <li class="breadcrumb-item active d-flex" aria-current="page">
                  <h1 class="m-auto">All Smartphone</h1>
              </li>
          </ol>
      </nav>
    </div>
    <div class="row">
      @foreach ($data as $item)
        @if ($item->Plist_Status == "1")

            <div class="col-xs-12 col-sm-12 col-md-4 p-4 product_row1">
                <figure class="block_product_images">
                    <img src="{{URL::asset('images/database/samsung/mobile/'.$item->Plist_Image)}}"
                    alt="{{$item->Plist_Name}}" title="{{$item->Plist_Name}}" style="width:100%;">
                </figure>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h3 class="mt-4" style="color:#6b6b6b;margin: 12px auto;font-size: 13px;font-weight: 400;">
                        {{$item->Plist_Subtitle}}
                    </h3>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" >
                        <h2 class="product_name mb-2" for="" style="margin:5px auto;">
                            {{$item->Plist_Name}}
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="{{URL::to('products/samsung/mobile/smartphone/'.encode_url($item->Plist_Url))}}">
                            <button type="button" class="btn btn-outline-databar-blue border-radius-25 mt-0 learnmore" style="width:180px;">
                                <p class="text-learnmore">Learn&nbspMore</p>
                            </button>
                        </a>
                    </div>
                </div>
            </div>

        @endif
      @endforeach
    </div>
  </div>




@endsection




@section('script')
<script src="{{ URL::asset('/js/zoom-slider/modernizr.custom.js')}}"></script>
<script src="{{ URL::asset('/js/zoom-slider/dynamics.min.js')}}"></script>
<script src="{{ URL::asset('/js/zoom-slider/classie.js')}}"></script>
<script src="{{ URL::asset('/js/zoom-slider/main.js')}}"></script>
@endsection
