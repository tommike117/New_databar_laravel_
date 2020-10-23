{{-- Include  --}}
@extends('layouts/main')



{{-- Title Website --}}
@section('title', 'Fleet Rugged Keyboard | Databar Distributor')

{{-- Link CSS --}}
@section('link')
{{-- <link rel="stylesheet" href="{{URL::asset('css/page-style/ikey/fleet/main.css')}}"> --}}
<link rel="stylesheet" href="{{URL::asset('css/product-list.css')}}">

@endsection

{{-- Body HTML --}}

@section('content')
<div class="container-fluid" style="padding:0;">
        <div class="image_banner"></div>
    </div>
  <div class="container">
    <div class="row">
      <nav aria-label="breadcrumb" id="breadcrumb">
          <ol class="breadcrumb" style="background:transparent;">
              <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{URL::to('products/non-samsung/ikey/rugged_keyboard')}}">Rugged
                      Keyboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Fleet</li>
          </ol>
      </nav>
    </div>
  </div>
  
  @include('includes/product-list')

@endsection
