@extends('layouts/new-main')



{{-- Title Website --}}
@section('title', 'CUSTOMERS | DATABAR COMPANY LIMITED | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')

{{-- Link CSS --}}
@section('link')

<link rel="stylesheet" media="screen and (min-width: 992px)" href="{{ URL::to('/css/new-website/customers/style_d.css')}}">
<link rel="stylesheet" media="(min-width: 768px) and (max-width: 991.98px)"  href="{{ URL::to('/css/new-website/customers/style_t.css')}}">
<link rel="stylesheet" media="screen and (max-width: 767.98px)" href="{{ URL::to('/css/new-website/customers/style_m.css')}}">

@endsection



{{-- Body HTML --}}
@section('content')

<section>
    <div style="position: relative;">
        <div class="img-banner"></div>
        <div class="text-banner">
            <h2>Our Corporate Customers</h2>
            <h3>See how businesses like yours</h3>
            <a href="/contact">
                <button class="btn btn-banner">Contact Now</button>
            </a>
        </div>
    </div>
    <div class="bg-cus">
        <div class="text-vertacal">
            <h2>Vertical enterprise <br>
            customers</h2>
            <p>We're the distributor simplifiles their process and offers <br>
            them a business that specializes in serving their specific need.</p>
        </div>
        <div class="flex-12">
            <div class="flex-3">
                <div class="icon-cus">
                    <img src="images/new-website/customers/icon-01.png" style="width: 100%" alt="">
                </div>
                <div class="text-cus">
                    <h3>Small Business</h3>
                    <p>help your business faster and smarter with the world's sales platform.</p>
                </div>
            </div>
            <div class="flex-3">
                <div class="icon-cus">
                    <img src="images/new-website/customers/icon-02.png" style="width: 100%" alt="">
                </div>
                <div class="text-cus">
                    <h3>Corporate</h3>
                    <p>Find, win, and keep more customers that grows with you.</p>
                </div>
            </div>
            <div class="flex-3">
                <div  class="icon-cus">
                    <img src="images/new-website/customers/icon-03.png" style="width: 100%" alt="">
                </div>
                <div class="text-cus">
                    <h3>Service</h3>
                    <p>Manage customer support accoss every channel with the service platform.</p>
                </div>
            </div>
            <div class="flex-3">
                <div class="icon-cus">
                    <img src="images/new-website/customers/icon-04.png" style="width: 100%" alt="">
                </div>
                <div class="text-cus">
                    <h3>Marketing</h3>
                    <p>Know your customer personalize using AI, and engage across every interaction.</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="header-brand">
        <h3>Brands Join The Comunity With DATABAR</h3>
    </div>
    <div class="section-img" style="margin-top: 5%;padding-left: 7%;">
        <div class="container">
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-md-2 col-4">
                        <div class="brand-img">
                            <img src="{{ URL::asset('/images/customer_page/customer-img/'.$item->Cus_Pic)}}" width="100%" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<a id="button">
    <img src="images/new-website/customers/arow-02.png" width="100%" alt="#">
</a>
<style>
    #button {
  display: inline-block;
  background-color: none;
  width: 40px;
  height: 40px;
  text-align: center;
  border-radius: 4px;
  position: fixed;
  bottom: 40px;
  right: 40px;
  transition: background-color .3s,
    opacity .5s, visibility .5s;
  opacity: 0;
  visibility: hidden;
  z-index: 1000;
}

#button:hover {
  cursor: pointer;
  background-color: none;
}
#button:active {
  background-color: none;
}
#button.show {
  opacity: 1;
  visibility: visible;
}
</style>



<section>
    <div class="copy-right">
        <p>Copyright © 2020 DATABAR - All Right Reserved</p>
    </div>
</section>
@endsection

@section('script')


<script>

    var btn = $('#button');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
    });


    </script>


@endsection
