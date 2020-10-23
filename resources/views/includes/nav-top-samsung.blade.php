
<link rel="stylesheet" href="/css/new-website/nav-top-all-products/style_d.css">
<link rel="stylesheet" href="/css/new-website/nav-top-all-products/style_t.css">
<link rel="stylesheet" href="/css/new-website/nav-top-all-products/style_m.css">
<link rel="stylesheet" href="<?= url('/css/navbar.css')?>?ver=1.0.0">



<div class="nav-desktop nav-top2" id="navbar2">

    <div id="navbar-white" class="col-3">
        <figure class="img-databar-d" style="margin: -5px 0px 0px;">
            <a href="/home">
                <img class="databar-logo" src="/images/new-website/icon_logo_-03.png" alt="logo DATABAR">
            </a>
        </figure>
    </div>

    <div class="col-9">
        <ul id="menu" style="display: flex;">

            <li class="ml-mr-4 nav logo">
                <a id="products" href="/products">Products & Solutions</a>
            </li>
            <li class="ml-mr-4 nav logo">
                <a id="about-us" href="/about-us">About us</a>
            </li>
            <li class="ml-mr-4 nav logo">
                <a id="brands" href="/brands">Brands</a>
            </li>
            <li class="ml-mr-4 nav logo">
                <a id="services" href="/services">Services</a>
            </li>
            <li class="ml-mr-4 nav logo">
                <a id="customers" href="/customers">Customers</a>
            </li>
            <li class="ml-mr-4 nav logo">
                <a href="/become-a-reseller">Become a reseller</a>
            </li>
            <li class="ml-mr-4 nav logo">
                <a id="contact" style="font-weight: 700 !important; color:#3399ff;" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
</div>


<div style="position: sticky;top:0;z-index:99999">
    <a href="/home">

        {{-- <div  id="nav-black-mobile" class="col-3" style="position: absolute">
            <figure class="img-databar-m" style="margin: -5px 0px 0px;">
                <img src="/images/new-website/icon_logo_แนวตั้ง-01-02.png" alt="logo DATABAR">
            </figure>
        </div> --}}
        <div  id="nav-mobile" class="col-3" style="position: absolute">
            <figure class="img-databar-m" style="margin: -5px 0px 0px;">
                <img src="/images/new-website/icon_logo_-03.png" alt="logo DATABAR">
            </figure>
        </div>

        {{-- <div  id="nav-black-tablet" class="col-3" style="position: absolute">
            <figure class="img-databar-t" style="margin: -5px 0px 0px;">
                <img src="/images/new-website/icon_logo_-03.png" alt="logo DATABAR">
            </figure>
        </div> --}}
        <div  id="nav-tablet" class="col-3" style="position: absolute">
            <figure class="img-databar-t" style="margin: -5px 0px 0px;">
                <img src="/images/new-website/icon_logo_แนวนอน-01.png" alt="logo DATABAR">
            </figure>
        </div>

    </a>
</div>

<div class="nav-mobile">
    <div id="myNav" class="nav-slide-down">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="nav-slide-down-content">
            {{-- <a href="/home">Home</a> --}}
            <a href="/products">Products & Solutions</a>
            <a href="/about-us">About Us</a>
            <a href="/brands">Brands</a>
            <a href="/services">Services</a>
            <a href="/customers">Customers</a>
            <a href="/partners">Partners</a>
            <a href="/contact">Contact</a>
        </div>
    </div>

    <span class="nav-span" onclick="openNav()"><div class="icon icon-menu"></div></span>
</div>


<script>
    function openNav() {
      document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.height = "0%";
    }

    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("nav-mobile").style.top = "-65px";
        document.getElementById("nav-tablet").style.top = "-65px";
      } else {
        document.getElementById("nav-mobile").style.top = "0";
        document.getElementById("nav-tablet").style.top = "0";
      }

    }


</script>

<script>


</script>



<script src="{{URL::asset('js/navbar.js')}}"></script>

