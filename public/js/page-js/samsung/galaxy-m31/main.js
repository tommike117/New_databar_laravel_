$(function(){

    $($('.li-product_color1')[0]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/B_M31_1.webp')
    });
    $($('.li-product_color1')[1]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/B_M31_2.webp')
    });
    $($('.li-product_color1')[2]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/B_M31_3.webp')
    });
    $($('.li-product_color1')[3]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/B_M31_4.webp')
    });
    $($('.li-product_color1')[4]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/B_M31_5.webp')
    });
    $($('.li-product_color1')[5]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/B_M31_6.webp')
    });
    $($('.li-product_color2')[0]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/Bl_M31_1.webp')
    });
    $($('.li-product_color2')[1]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/Bl_M31_2.webp')
    });
    $($('.li-product_color2')[2]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/Bl_M31_3.webp')
    });
    $($('.li-product_color2')[3]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/Bl_M31_4.webp')
    });
    $($('.li-product_color2')[4]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/Bl_M31_5.webp')
    });
    $($('.li-product_color2')[5]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/Bl_M31_6.webp')
    });
    $($('.li-product_color3')[0]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/R_M31_1.webp')
    });
    $($('.li-product_color3')[1]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/R_M31_2.webp')
    });
    $($('.li-product_color3')[2]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/R_M31_3.webp')
    });
    $($('.li-product_color3')[3]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/R_M31_4.webp')
    });
    $($('.li-product_color3')[4]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/R_M31_5.webp')
    });
    $($('.li-product_color3')[5]).on('click',()=>{
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/R_M31_6.webp')
    });


    $(".color1").on("click",()=>{
        $(".li-product_color1").show();
        $(".li-product_color2").hide();
        $(".li-product_color3").hide();
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/B_M31_1.webp')
    });
    $(".color2").on("click",()=>{
        $(".li-product_color2").show();
        $(".li-product_color1").hide();
        $(".li-product_color3").hide();
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/Bl_M31_1.webp')
    });
    $(".color3").on("click",()=>{
        $(".li-product_color3").show();
        $(".li-product_color1").hide();
        $(".li-product_color2").hide();
        $("#m31").removeAttr('src').attr('src','/images/samsung/galaxy-m31/R_M31_1.webp')
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
    $(".wide").on("click", (e) => {
        e.preventDefault();
        $(".wide >img").attr('src', '/images/samsung/galaxy-m31/81-on.svg').fadeIn(400);
        $(".ultrawide >img").attr('src', '/images/samsung/galaxy-m31/123-off.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-m31/th-feature---219992638.webp');
        }).fadeIn(200);
        });
        $(".ultrawide").on("click", (e) => {
        e.preventDefault();
        $(".ultrawide >img").attr('src', '/images/samsung/galaxy-m31/123-on.svg').fadeIn(400);
        $(".wide >img").attr('src', '/images/samsung/galaxy-m31/81-off.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-m31/th-feature---219992641.webp')
        }).fadeIn(200);
        });

    $(".front").on("click", (e) => {
        e.preventDefault();
        $(".front >img").attr('src', '/images/samsung/galaxy-m31/front-on.png').fadeIn(400);
        $(".rear >img").attr('src', '/images/samsung/galaxy-m31/rear-off.png');
        $("#changecamera").fadeOut(200, function () {
            $("#changecamera").attr('src', '/images/samsung/galaxy-m31/th-feature---219992631.webp');
        }).fadeIn(200);
        });
        $(".rear").on("click", (e) => {
        e.preventDefault();
        $(".rear >img").attr('src', '/images/samsung/galaxy-m31/rear-on.png').fadeIn(400);
        $(".front >img").attr('src', '/images/samsung/galaxy-m31/front-off.png');
        $("#changecamera").fadeOut(200, function () {
            $("#changecamera").attr('src', '/images/samsung/galaxy-m31/th-feature---219992628.webp');
        }).fadeIn(200);
        });

    $("#finger").on("click", (e) => {
        e.preventDefault();
        $("#finger").addClass("select");
        $("#face").removeClass("select");
        $("#changepic").fadeOut(200, function () {
            $("#changepic").attr('src', '/images/samsung/galaxy-m31/th-feature-fingerprint-sensor-219992654.webp');
        }).fadeIn(200);
        });
    $("#face").on("click", (e) => {
        e.preventDefault();
        $("#face").addClass("select");
        $("#finger").removeClass("select");
        $("#changepic").fadeOut(200, function () {
            $("#changepic").attr('src', '/images/samsung/galaxy-m31/th-feature-face-recognition-219992660.webp')
        }).fadeIn(200);
        });
