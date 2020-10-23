$(function(){

    $($('.li-product_color1')[0]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/b_a10s_1.webp')
    });
    $($('.li-product_color1')[1]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/b_a10s_2.webp')
    });
    $($('.li-product_color1')[2]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/b_a10s_3.webp')
    });
    $($('.li-product_color1')[3]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/b_a10s_4.webp')
    });
    $($('.li-product_color1')[4]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/b_a10s_5.webp')
    });
    $($('.li-product_color1')[5]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/b_a10s_6.webp')
    });
    $($('.li-product_color2')[0]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/g_a10s_1.webp')
    });
    $($('.li-product_color2')[1]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/g_a10s_2.webp')
    });
    $($('.li-product_color2')[2]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/g_a10s_3.webp')
    });
    $($('.li-product_color2')[3]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/g_a10s_4.webp')
    });
    $($('.li-product_color2')[4]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/g_a10s_5.webp')
    });
    $($('.li-product_color2')[5]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/g_a10s_6.webp')
    });
    $($('.li-product_color3')[0]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/r_a10s_1.webp')
    });
    $($('.li-product_color3')[1]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/r_a10s_2.webp')
    });
    $($('.li-product_color3')[2]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/r_a10s_3.webp')
    });
    $($('.li-product_color3')[3]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/r_a10s_4.webp')
    });
    $($('.li-product_color3')[4]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/r_a10s_5.webp')
    });
    $($('.li-product_color3')[5]).on('click',()=>{
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/r_a10s_6.webp')
    });


    $(".color1").on("click",()=>{
        $(".li-product_color1").show();
        $(".li-product_color2").hide();
        $(".li-product_color3").hide();
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/b_a10s_1.webp')
    });
    $(".color2").on("click",()=>{
        $(".li-product_color2").show();
        $(".li-product_color1").hide();
        $(".li-product_color3").hide();
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/g_a10s_1.webp')
    });
    $(".color3").on("click",()=>{
        $(".li-product_color3").show();
        $(".li-product_color1").hide();
        $(".li-product_color2").hide();
        $("#a10s").removeAttr('src').attr('src','/images/samsung/galaxy-a10s/r_a10s_1.webp')
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
        $(".front >img").attr('src', '/images/samsung/galaxy-a10s/front-on.png').fadeIn(400);
        $(".rear >img").attr('src', '/images/samsung/galaxy-a10s/rear-off.png');
        $("#changecamera").fadeOut(200, function () {
          $("#changecamera").attr('src', '/images/samsung/galaxy-a10s/th-feature----177208957.webp');
        }).fadeIn(200);
      });
      $(".rear").on("click", (e) => {
        e.preventDefault();
        $(".rear >img").attr('src', '/images/samsung/galaxy-a10s/rear-on.png').fadeIn(400);
        $(".front >img").attr('src', '/images/samsung/galaxy-a10s/front-off.png');
        $("#changecamera").fadeOut(200, function () {
          $("#changecamera").attr('src', '/images/samsung/galaxy-a10s/th-feature----177208952.webp');
        }).fadeIn(200);
      });
        $(".wide").on("click", (e) => {
        e.preventDefault();
        $(".wide >img").attr('src', '/images/samsung/galaxy-a10s/77active.svg').fadeIn(400);
        $(".ultrawide >img").attr('src', '/images/samsung/galaxy-a10s/120.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-a10s/th-feature---183991675.webp');
        }).fadeIn(200);
        });
        $(".ultrawide").on("click", (e) => {
        e.preventDefault();
        $(".ultrawide >img").attr('src', '/images/samsung/galaxy-a10s/120active.svg').fadeIn(400);
        $(".wide >img").attr('src', '/images/samsung/galaxy-a10s/77.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-a10s/my-feature---184419988.webp')
        }).fadeIn(200);
        });
