@extends('layouts/main-brands')



{{-- Title Website --}}
@section('title', 'CUSTOMERS | DATABAR COMPANY LIMITED | DATABAR Business-To-Business (B2B) distributor and samsung authorized
services')

{{-- Link CSS --}}
@section('link')
    <link rel="stylesheet" href="{{ URL::to('/css/new-website/brands/style.css')}}">
@endsection

{{-- Body HTML --}}
@section('content')

    <div class="header-brand">
        <h2 style="font-family: quicksand;font-weight: 400;font-size: 2.5rem;">Brands</h2>
    </div>

    <div class="container button-group filters-button-group text-center">

      <button class="button is-checked" data-filter="*">All</button>
      <button class="button" data-filter=".accessories">Accessories</button>
      <button class="button" data-filter=".automation">Automation</button>
      <button class="button" data-filter=".barcode-solutions">Barcode Solutions</button>
      <button class="button" data-filter=".cloud">Cloud / SaaS</button>
      <button class="button" data-filter=".cases">Cases</button>
      <button class="button" data-filter=".explosion-proof">Explosion Proof</button>
      <button class="button" data-filter=".intrinsically-safe">Intrinsically Safe</button>
      <button class="button" data-filter=".PDA">Mobile Computers (PDA)</button>
      <button class="button" data-filter=".MDM">Mobile Device Management (MDM)</button>
      <button class="button" data-filter=".MTD">Mobile Threat Defense</button>
      <button class="button" data-filter=".printers">Printers</button>
      <button class="button" data-filter=".rugged-keyboard">Rugged Keyboard</button>
      <button class="button" data-filter=".rugged-mounting">Rugged Mounting</button>
      <button class="button" data-filter=".rugged-smartphones">Rugged Smartphones</button>
      <button class="button" data-filter=".rugged-tablets">Rugged Tablets</button>
      <button class="button" data-filter=".SFA">Sale Force Automation</button>
      <button class="button" data-filter=".scanning">Scanning</button>
      <button class="button" data-filter=".security">Security</button>
      <button class="button" data-filter=".smartphones">Smartphones</button>
      <button class="button" data-filter=".tablets">Tablets</button>
      <button class="button" data-filter=".UCaaS">Unified Communication (UC) / UCaaS</button>


    </div>

    <div class="grid container">
      <div class="element-item rugged-smartphones rugged-tablets smartphones tablets cloud MDM">
        <img class="card-img-top" src="/images/logo/brand_samsung.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Samsung</h3> --}}
            <p>Galaxy Note20 | 20 Ultra 5G</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>
        </div>
      </div>
      <div class="element-item accessories rugged-mounting cases">
        <img class="card-img-top" src="/images/logo/brand1.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Armor-X</h3> --}}
            <p>Patented design with more than 40 different mounts for your selection.</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item barcode-solutions printers">
        <img class="card-img-top" src="/images/logo/brand1_2.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Bixolon</h3> --}}
            <p>EXPLORE LINERLESS PRINTING SOLUTION RECEIPT MOBILE PRINTING MANUFACTURER</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item PDA rugged-smartphones rugged-tablets">
        <img class="card-img-top" src="/images/logo/brand2.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Catphone</h3> --}}
            <p>See our full range of Caterpillar Phones and choose the best rugged phone for your needs.</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item automation PDA scanning barcode-solutions">
        <img class="card-img-top" src="/images/logo/brand2_2-02.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Datalogic</h3> --}}
            <p>Tethered or cordless, Laser linear or area imaging technology, With standard, rugged or antimicrobial enclosure.</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item explosion-proof intrinsically-safe">
        <img class="card-img-top" src="/images/logo/brand3.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Ecom-EX</h3> --}}
            <p>Choosing and implementing the right solution can enable significant increases in workforce productivity, effectiveness and profitability.</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item rugged-mounting">
        <img class="card-img-top" src="/images/logo/brand3_2.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Gamber-Johnson</h3> --}}
            <p>Gamber Johnson has the right solution for you and your fleet, no matter what device you are trying to mount. </p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item rugged-keyboard">
        <img class="card-img-top" src="/images/logo/brand4.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Ikey</h3> --}}
            <p>As the industry leader in rugged peripherals, iKey constantly develops cutting-edge products that allow customers to maximize productivity with current technology.</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item SFA cloud">
        <img class="card-img-top" src="/images/logo/brand4_2.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Ivy Mobility</h3> --}}
            <p>Cloud solutions built for consumer goods organizations to simplify retail execution, selling and distributing products</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item accessories scanning barcode-solutions">
        <img class="card-img-top" src="/images/logo/brand5.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Koamtac</h3> --}}
            <p>The Bluetooth Barcode Scanner collection by KOAMTAC features the brand-new </p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item rugged-mounting">
        <img class="card-img-top" src="/images/logo/brand5_2.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Ram Mounts</h3> --}}
            <p>Ram Mounts is a leading manufacturer of rugged and versatile mounting systems, protective cases, and docking solutions for phones, tablets, GPS units, cameras, laptops.</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item barcode-solutions PDA">
        <img class="card-img-top" src="/images/logo/brand6.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Sam4s</h3> --}}
            <p>30% domestic market share, Reliable receipt printer Our receipt printers offer an outstanding value and speed for the retail and hospitality</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item cloud UCaaS">
        <img class="card-img-top" src="/images/logo/brand6_2.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Star2star</h3> --}}
            <p>Our Full Spectrum Communications Solution has you covered. See why this is the last solution you will ever need.</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item printers barcode-solutions">
        <img class="card-img-top" src="/images/logo/brand7.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Toshiba TEC</h3> --}}
            <p>Toshiba Tec Thailand, is a leading provider of technology system and solutions in Thailand. Toshiba delivers technology and products remarkable for their innovation and artistry</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item PDA rugged-tablets barcode-solutions">
        <img class="card-img-top" src="/images/logo/brand7_2.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Unitech</h3> --}}
            <p>The Rugged Mobile Computer product line is defined by ergonomic design, versatility, and durability, for use in enterprise, industrial and harsh environments.</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item MTD security cloud">
        <img class="card-img-top" src="/images/logo/brand8.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Wandera</h3> --}}
            <p>Security teams worldwide rely on us to eliminate threats, control unwanted access and prevent data breaches.</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item MDM cloud ">
        <img class="card-img-top" src="/images/logo/brand8_2.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Weguard</h3> --}}
            <p>WeGuard Platform is your one-stop solution for all of your Mobile Device Management needs.</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item explosion-proof intrinsically-safe">
        <img class="card-img-top" src="/images/logo/brand9.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">Xciel</h3> --}}
            <p>Explosion-proof,Non-Incentive, Intrinsically Safe Smartphones and Tablets</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>
      <div class="element-item MDM cloud">
        <img class="card-img-top" src="/images/logo/brand9_2.png" width="100px" alt="Card image cap">
        <div class="card-body">
            {{-- <h3 class="card-title text-center">42Gears</h3> --}}
            <p>Choose the best Unified Endpoint Management with our solutions</p>
            <a href="#" style="margin-top: 10px" class="button-viewmore">Learn more</a>

        </div>
      </div>


</div>



<section>
    @include('includes/footer')
</section>

@endsection





@section('script')


<script src="{{URL::asset('js/filter-grid/isotop.js')}}"></script>
<script>
// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows'
});
// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};
// bind filter button click
$('.filters-button-group').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});

</script>
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
