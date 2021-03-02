$(function(){

    $($('.li-product_color1')[0]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/b-1.webp')
    });
    $($('.li-product_color1')[1]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/b-2.webp')
    });
    $($('.li-product_color1')[2]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/b-3.webp')
    });
    $($('.li-product_color1')[3]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/b-4.webp')
    });
    $($('.li-product_color1')[4]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/b-5.webp')
    });
    $($('.li-product_color1')[5]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/b-6.webp')
    });

    $($('.li-product_color2')[0]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/bu-1.webp')
    });
    $($('.li-product_color2')[1]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/bu-2.webp')
    });
    $($('.li-product_color2')[2]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/bu-3.webp')
    });
    $($('.li-product_color2')[3]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/bu-4.webp')
    });
    $($('.li-product_color2')[4]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/bu-5.webp')
    });
    $($('.li-product_color2')[5]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/bu-6.webp')
    });

    $($('.li-product_color3')[0]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/p-1.webp')
    });
    $($('.li-product_color3')[1]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/p-2.webp')
    });
    $($('.li-product_color3')[2]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/p-3.webp')
    });
    $($('.li-product_color3')[3]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/p-4.webp')
    });
    $($('.li-product_color3')[4]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/p-5.webp')
    });
    $($('.li-product_color3')[5]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/p-6.webp')
    });

    $($('.li-product_color4')[0]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/w-1.webp')
    });
    $($('.li-product_color4')[1]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/w-2.webp')
    });
    $($('.li-product_color4')[2]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/w-3.webp')
    });
    $($('.li-product_color4')[3]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/w-4.webp')
    });
    $($('.li-product_color4')[4]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/w-5.webp')
    });
    $($('.li-product_color4')[5]).on('click',()=>{
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/w-6.webp')
    });



    $(".color1").on("click",()=>{
        $(".li-product_color1").show();
        $(".li-product_color2").hide();
        $(".li-product_color3").hide();
        $(".li-product_color4").hide();
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/b-1.webp')
    });
    $(".color2").on("click",()=>{
        $(".li-product_color2").show();
        $(".li-product_color1").hide();
        $(".li-product_color3").hide();
        $(".li-product_color4").hide();
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/bu-1.webp')
    });
    $(".color3").on("click",()=>{
        $(".li-product_color3").show();
        $(".li-product_color1").hide();
        $(".li-product_color2").hide();
        $(".li-product_color4").hide();
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/p-1.webp')
    });
    $(".color4").on("click",()=>{
        $(".li-product_color4").show();
        $(".li-product_color1").hide();
        $(".li-product_color2").hide();
        $(".li-product_color3").hide();
        $("#a32").removeAttr('src').attr('src','/images/samsung/galaxy-a32/w-1.webp')
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
        $(".wide > img").attr('src', '/images/samsung/galaxy-a12/80-b.svg').fadeIn(400);
        $(".ultrawide > img").attr('src', '/images/samsung/galaxy-m31/123-off.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-a32/s-5-1.jfif');
        }).fadeIn(200);
        });
        $(".ultrawide").on("click", (e) => {
        e.preventDefault();
        $(".ultrawide > img").attr('src', '/images/samsung/galaxy-m31/123-on.svg').fadeIn(400);
        $(".wide > img").attr('src', '/images/samsung/galaxy-a12/80-w.svg');
        $("#changecamerawide").fadeOut(200, function () {
            $("#changecamerawide").attr('src', '/images/samsung/galaxy-a32/s-5-2.webp')
        }).fadeIn(200);
        });

    $(".front").on("click", (e) => {
        e.preventDefault();
        $(".front >img").attr('src', '/images/samsung/galaxy-m31/rear-on.png').fadeIn(400);
        $(".rear >img").attr('src', '/images/samsung/galaxy-m31/front-off.png');
        $("#changecamera").fadeOut(200, function () {
            $("#changecamera").attr('src', '/images/samsung/galaxy-a32/s-7-1.webp');
        }).fadeIn(200);
        });
        $(".rear").on("click", (e) => {
        e.preventDefault();
        $(".rear >img").attr('src', '/images/samsung/galaxy-m31/front-on.png').fadeIn(400);
        $(".front >img").attr('src', '/images/samsung/galaxy-m31/rear-off.png');
        $("#changecamera").fadeOut(200, function () {
            $("#changecamera").attr('src', '/images/samsung/galaxy-a32/s-7-2.webp');
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
