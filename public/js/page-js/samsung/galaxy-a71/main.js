$(function(){

    $($('.li-product_color1')[0]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/b_a71_1.webp')
    });
    $($('.li-product_color1')[1]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/b_a71_2.webp')
    });
    $($('.li-product_color1')[2]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/b_a71_3.webp')
    });
    $($('.li-product_color1')[3]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/b_a71_4.webp')
    });
    $($('.li-product_color1')[4]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/b_a71_5.webp')
    });
    $($('.li-product_color1')[5]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/b_a71_6.webp')
    });
    $($('.li-product_color2')[0]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/bl_a71_1.webp')
    });
    $($('.li-product_color2')[1]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/bl_a71_2.webp')
    });
    $($('.li-product_color2')[2]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/bl_a71_3.webp')
    });
    $($('.li-product_color2')[3]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/bl_a71_4.webp')
    });
    $($('.li-product_color2')[4]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/bl_a71_5.webp')
    });
    $($('.li-product_color2')[5]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/bl_a71_6.webp')
    });
    $($('.li-product_color3')[0]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/w_a71_1.webp')
    });
    $($('.li-product_color3')[1]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/w_a71_2.webp')
    });
    $($('.li-product_color3')[2]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/w_a71_3.webp')
    });
    $($('.li-product_color3')[3]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/w_a71_4.webp')
    });
    $($('.li-product_color3')[4]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/w_a71_5.webp')
    });
    $($('.li-product_color3')[5]).on('click',()=>{
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/w_a71_6.webp')
    });


    $(".color1").on("click",()=>{
        $(".li-product_color1").show();
        $(".li-product_color2").hide();
        $(".li-product_color3").hide();
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/b_a71_1.webp')
    });
    $(".color2").on("click",()=>{
        $(".li-product_color2").show();
        $(".li-product_color1").hide();
        $(".li-product_color3").hide();
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/bl_a71_1.webp')
    });
    $(".color3").on("click",()=>{
        $(".li-product_color3").show();
        $(".li-product_color1").hide();
        $(".li-product_color2").hide();
        $("#a71").removeAttr('src').attr('src','/images/samsung/galaxy-a71/w_a71_1.webp')
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
        $(".wide >img").attr('src', '/images/samsung/galaxy-a71/81-on.svg').fadeIn(400);
        $(".ultrawide >img").attr('src', '/images/samsung/galaxy-a71/123-off.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-a71/pk-feature---206983895.webp');
        }).fadeIn(200);
        });
        $(".ultrawide").on("click", (e) => {
        e.preventDefault();
        $(".ultrawide >img").attr('src', '/images/samsung/galaxy-a71/123-on.svg').fadeIn(400);
        $(".wide >img").attr('src', '/images/samsung/galaxy-a71/81-off.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-a71/pk-feature---206983898.webp')
        }).fadeIn(200);
        });

    $(".front").on("click", (e) => {
        e.preventDefault();
        $(".front >img").attr('src', '/images/samsung/galaxy-a71/front-on.png').fadeIn(400);
        $(".rear >img").attr('src', '/images/samsung/galaxy-a71/rear-off.png');
        $("#changecamera").fadeOut(200, function () {
            $("#changecamera").attr('src', '/images/samsung/galaxy-a71/pk-feature---206983861.webp');
        }).fadeIn(200);
        });
        $(".rear").on("click", (e) => {
        e.preventDefault();
        $(".rear >img").attr('src', '/images/samsung/galaxy-a71/rear-on.png').fadeIn(400);
        $(".front >img").attr('src', '/images/samsung/galaxy-a71/front-off.png');
        $("#changecamera").fadeOut(200, function () {
            $("#changecamera").attr('src', '/images/samsung/galaxy-a71/pk-feature---206983864.webp');
        }).fadeIn(200);
        });

    $("#finger").on("click", (e) => {
        e.preventDefault();
        $("#finger").addClass("select");
        $("#face").removeClass("select");
        $("#changepic").fadeOut(200, function () {
            $("#changepic").attr('src', '/images/samsung/galaxy-a71/th-feature-fingerprint-sensor-219992654.webp');
        }).fadeIn(200);
        });
    $("#face").on("click", (e) => {
        e.preventDefault();
        $("#face").addClass("select");
        $("#finger").removeClass("select");
        $("#changepic").fadeOut(200, function () {
            $("#changepic").attr('src', '/images/samsung/galaxy-a71/th-feature-face-recognition-219992660.webp')
        }).fadeIn(200);
        });
