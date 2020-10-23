$(function(){

    $($('.li-product_color1')[0]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/b_a01_1.jpg')
    });
    $($('.li-product_color1')[1]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/b_a01_2.webp')
    });
    $($('.li-product_color1')[2]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/b_a01_3.webp')
    });
    $($('.li-product_color1')[3]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/b_a01_4.webp')
    });
    $($('.li-product_color1')[4]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/b_a01_5.webp')
    });
    $($('.li-product_color1')[5]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/b_a01_6.webp')
    });
    $($('.li-product_color2')[0]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/bl_a01_1.webp')
    });
    $($('.li-product_color2')[1]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/bl_a01_2.webp')
    });
    $($('.li-product_color2')[2]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/bl_a01_3.webp')
    });
    $($('.li-product_color2')[3]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/bl_a01_4.webp')
    });
    $($('.li-product_color2')[4]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/bl_a01_5.webp')
    });
    $($('.li-product_color2')[5]).on('click',()=>{
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/bl_a01_6.webp')
    });



    $(".color1").on("click",()=>{
        $(".li-product_color1").show();
        $(".li-product_color2").hide();
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/b_a01_1.jpg')
    });
    $(".color2").on("click",()=>{
        $(".li-product_color2").show();
        $(".li-product_color1").hide();
        $("#a01").removeAttr('src').attr('src','/images/samsung/galaxy-a01/bl_a01_1.webp')
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
