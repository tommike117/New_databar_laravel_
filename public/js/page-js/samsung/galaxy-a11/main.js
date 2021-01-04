$(function(){

    $($('.li-product_color1')[0]).on('click',()=>{
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/b_a11_1.webp')
    });
    $($('.li-product_color1')[1]).on('click',()=>{
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/b_a11_2.webp')
    });
    $($('.li-product_color1')[2]).on('click',()=>{
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/b_a11_3.webp')
    });
    $($('.li-product_color1')[3]).on('click',()=>{
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/b_a11_4.webp')
    });
    $($('.li-product_color1')[4]).on('click',()=>{
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/b_a11_5.webp')
    });
    $($('.li-product_color1')[5]).on('click',()=>{
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/b_a11_6.webp')
    });
    $($('.li-product_color2')[0]).on('click',()=>{
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/bl_a11_1.webp')
    });
    $($('.li-product_color2')[1]).on('click',()=>{
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/bl_a11_2.webp')
    });
    $($('.li-product_color2')[2]).on('click',()=>{
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/bl_a11_3.webp')
    });
    $($('.li-product_color2')[3]).on('click',()=>{
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/bl_a11_4.webp')
    });
    $($('.li-product_color2')[4]).on('click',()=>{
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/bl_a11_5.webp')
    });
    $($('.li-product_color2')[5]).on('click',()=>{
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/bl_a11_6.webp')
    });



    $(".color1").on("click",()=>{
        $(".li-product_color1").show();
        $(".li-product_color2").hide();
        $(".li-product_color3").hide();
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/b_a11_1.webp')
    });
    $(".color2").on("click",()=>{
        $(".li-product_color2").show();
        $(".li-product_color1").hide();
        $(".li-product_color3").hide();
        $("#a11").removeAttr('src').attr('src','/images/samsung/galaxy-a11/bl_a11_1.webp')
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
        $(".wide >img").attr('src', '/images/samsung/galaxy-a11/77-on.svg').fadeIn(400);
        $(".ultrawide >img").attr('src', '/images/samsung/galaxy-a11/115-off.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-a11/africa_en-feature---242556560.webp');
        }).fadeIn(200);
        });
        $(".ultrawide").on("click", (e) => {
        e.preventDefault();
        $(".ultrawide >img").attr('src', '/images/samsung/galaxy-a11/115-on.svg').fadeIn(400);
        $(".wide >img").attr('src', '/images/samsung/galaxy-a11/77-off.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-a11/africa_en-feature---242556557.webp')
        }).fadeIn(200);
        });

    $(".front").on("click", (e) => {
        e.preventDefault();
        $(".front >img").attr('src', '/images/samsung/galaxy-a11/front-on.png').fadeIn(400);
        $(".rear >img").attr('src', '/images/samsung/galaxy-a11/rear-off.png');
        $("#changecamera").fadeOut(200, function () {
            $("#changecamera").attr('src', '/images/samsung/galaxy-a11/africa_en-feature---242556571.jpg');
        }).fadeIn(200);
        });
        $(".rear").on("click", (e) => {
        e.preventDefault();
        $(".rear >img").attr('src', '/images/samsung/galaxy-a11/rear-on.png').fadeIn(400);
        $(".front >img").attr('src', '/images/samsung/galaxy-a11/front-off.png');
        $("#changecamera").fadeOut(200, function () {
            $("#changecamera").attr('src', '/images/samsung/galaxy-a11/africa_en-feature---242556574.webp');
        }).fadeIn(200);
        });

    $("#finger").on("click", (e) => {
        e.preventDefault();
        $("#finger").addClass("select");
        $("#face").removeClass("select");
        $("#changepic").fadeOut(200, function () {
            $("#changepic").attr('src', '/images/samsung/galaxy-a11/africa_en-feature-fingerprint-sensor-242556577.webp');
        }).fadeIn(200);
        });
    $("#face").on("click", (e) => {
        e.preventDefault();
        $("#face").addClass("select");
        $("#finger").removeClass("select");
        $("#changepic").fadeOut(200, function () {
            $("#changepic").attr('src', '/images/samsung/galaxy-a11/africa_en-feature-face-recognition-242556581.webp')
        }).fadeIn(200);
        });

