$(function(){

    $($('.li-product_color1')[0]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/new-website/products/ikey/highlight/ikey_tab active2-2.png')
    });
    $($('.li-product_color1')[1]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/new-website/products/ikey/highlight/ikey_tab active2-1.png')
    });
    $($('.li-product_color1')[2]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/new-website/products/ikey/highlight/ikey_tab active2-3.png')
    });
    $($('.li-product_color1')[3]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/new-website/products/ikey/highlight/ikey_tab active2-4.png')
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
