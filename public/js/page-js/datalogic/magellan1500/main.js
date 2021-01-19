$(function(){

    $($('.li-product_color1')[0]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/new-website/products/datalogic/barcode/Magellan 1500i-882x882.png')
    });
    $($('.li-product_color1')[1]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/new-website/products/datalogic/barcode/PLX-90ACC0400-MG1500i-ROUNDTILTSTAND-BLACK_BLACK.png')
    });
    $($('.li-product_color1')[2]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/new-website/products/datalogic/barcode/PLX-90ACC0401-MG1500i-ROUNDTILTSTAND-SILVER_BLACK.png')
    });
    $($('.li-product_color1')[3]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/new-website/products/datalogic/barcode/PLX-90ACC0402-MG1500i-ROUNDTILTSTAND-SILVER_WHITE.png')
    });






    AOS.init({
        disable: false,
        startEvent: 'DOMContentLoaded',
        initClassName: 'aos-init',
        animatedClassName: 'aos-animate',
        useClassNames: false,
        disableMutationObserver: false,
        debounceDelay: 50,
        throttleDelay: 99,
        offset: 120,
        delay: 0,
        duration: 600,
        easing: 'ease-in-out',
        once: false,
        mirror: false,
        anchorPlacement: 'top-bottom',
      });
});
    $(".front").on("click", (e) => {
        e.preventDefault();
        $(".front >img").attr('src', '/images/samsung/galaxy-a01/front-on.png').fadeIn(400);
        $(".rear >img").attr('src', '/images/samsung/galaxy-a01/rear-off.png');
        $("#changecamera").fadeOut(200, function () {
          $("#changecamera").attr('src', '/images/samsung/galaxy-a01/th-feature----177208957.webp');
        }).fadeIn(200);
      });
      $(".rear").on("click", (e) => {
        e.preventDefault();
        $(".rear >img").attr('src', '/images/samsung/galaxy-a01/rear-on.png').fadeIn(400);
        $(".front >img").attr('src', '/images/samsung/galaxy-a01/front-off.png');
        $("#changecamera").fadeOut(200, function () {
          $("#changecamera").attr('src', '/images/samsung/galaxy-a01/th-feature----177208952.webp');
        }).fadeIn(200);
      });
        $(".wide").on("click", (e) => {
        e.preventDefault();
        $(".wide >img").attr('src', '/images/samsung/galaxy-a01/77active.svg').fadeIn(400);
        $(".ultrawide >img").attr('src', '/images/samsung/galaxy-a01/120.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-a01/th-feature---183991675.webp');
        }).fadeIn(200);
        });
        $(".ultrawide").on("click", (e) => {
        e.preventDefault();
        $(".ultrawide >img").attr('src', '/images/samsung/galaxy-a01/120active.svg').fadeIn(400);
        $(".wide >img").attr('src', '/images/samsung/galaxy-a01/77.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-a01/my-feature---184419988.webp')
        }).fadeIn(200);
        });
