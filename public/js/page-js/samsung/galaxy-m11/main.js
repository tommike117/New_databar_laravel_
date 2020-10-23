$(function(){

    $($('.li-product_color1')[0]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/B-M11_1.webp')
    });
    $($('.li-product_color1')[1]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/B-M11_2.webp')
    });
    $($('.li-product_color1')[2]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/B-M11_3.webp')
    });
    $($('.li-product_color1')[3]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/B-M11_4.webp')
    });
    $($('.li-product_color1')[4]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/B-M11_5.webp')
    });
    $($('.li-product_color1')[5]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/B-M11_6.webp')
    });
    $($('.li-product_color2')[0]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_1.webp')
    });
    $($('.li-product_color2')[1]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_2.webp')
    });
    $($('.li-product_color2')[2]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_3.webp')
    });
    $($('.li-product_color2')[3]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_4.webp')
    });
    $($('.li-product_color2')[4]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_5.webp')
    });
    $($('.li-product_color2')[5]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_6.webp')
    });
    $($('.li-product_color3')[0]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/v_m11_1.webp')
    });
    $($('.li-product_color3')[1]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/v_m11_2.webp')
    });
    $($('.li-product_color3')[2]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/v_m11_3.webp')
    });
    $($('.li-product_color3')[3]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/v_m11_4.webp')
    });
    $($('.li-product_color3')[4]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/v_m11_5.webp')
    });
    $($('.li-product_color3')[5]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/v_m11_6.webp')
    });


    $(".color1").on("click",()=>{
        $(".li-product_color1").show();
        $(".li-product_color2").hide();
        $(".li-product_color3").hide();
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/B-M11_1.webp')
    });
    $(".color2").on("click",()=>{
        $(".li-product_color2").show();
        $(".li-product_color1").hide();
        $(".li-product_color3").hide();
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_1.webp')
    });
    $(".color3").on("click",()=>{
        $(".li-product_color3").show();
        $(".li-product_color1").hide();
        $(".li-product_color2").hide();
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/v_m11_1.webp')
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
        $(".front >img").attr('src', '/images/samsung/galaxy-m11/front-on.png').fadeIn(400);
        $(".rear >img").attr('src', '/images/samsung/galaxy-m11/rear-off.png');
        $("#changecamera").fadeOut(200, function () {
          $("#changecamera").attr('src', '/images/samsung/galaxy-m11/th-feature-galaxy-m11-m115-223814399.webp');
        }).fadeIn(200);
      });
      $(".rear").on("click", (e) => {
        e.preventDefault();
        $(".rear >img").attr('src', '/images/samsung/galaxy-m11/rear-on.png').fadeIn(400);
        $(".front >img").attr('src', '/images/samsung/galaxy-m11/front-off.png');
        $("#changecamera").fadeOut(200, function () {
          $("#changecamera").attr('src', '/images/samsung/galaxy-m11/th-feature-galaxy-m11-m115-223814398.webp');
        }).fadeIn(200);
      });
        $(".wide").on("click", (e) => {
        e.preventDefault();
        $(".wide >img").attr('src', '/images/samsung/galaxy-m11/77-on.svg').fadeIn(400);
        $(".ultrawide >img").attr('src', '/images/samsung/galaxy-m11/115-off.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-m11/th-feature-galaxy-m11-m115-223814394.webp');
        }).fadeIn(200);
        });
        $(".ultrawide").on("click", (e) => {
        e.preventDefault();
        $(".ultrawide >img").attr('src', '/images/samsung/galaxy-m11/115-on.svg').fadeIn(400);
        $(".wide >img").attr('src', '/images/samsung/galaxy-m11/77-off.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-m11/th-feature-galaxy-m11-m115-223814395.webp')
        }).fadeIn(200);
        });
