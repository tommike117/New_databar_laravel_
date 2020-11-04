@extends('layouts/main-all-products')

@section('title', 'Ivy Mobility | DATABAR COMPANY LIMITED')


@section('link')
    <link rel="stylesheet" href="{{URL::asset('/css/new-website/products/ivymobility/style.css')}}">
    <link rel="stylesheet" href="{{ URL::to('css/new-website/partners/flickity-docs.css')}}">

@endsection




@section('content')





<section>
    @include('includes/footer')
</section>

@endsection





@section('script')

@endsection
