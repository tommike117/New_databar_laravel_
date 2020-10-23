$(function(){

    $($('.li-product_color1')[0]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-s20/g_s20_1.png')
    });
    $($('.li-product_color1')[1]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-s20/g_s20_2.png')
    });
    $($('.li-product_color1')[2]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-s20/g_s20_3.png')
    });
    // $($('.li-product_color1')[3]).on('click',()=>{
    //     $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/B-M11_4.webp')
    // });
    // $($('.li-product_color1')[4]).on('click',()=>{
    //     $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/B-M11_5.webp')
    // });
    // $($('.li-product_color1')[5]).on('click',()=>{
    //     $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/B-M11_6.webp')
    // });
    $($('.li-product_color2')[0]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_1.webp')
    });
    $($('.li-product_color2')[1]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_2.webp')
    });
    $($('.li-product_color2')[2]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_3.webp')
    });
    // $($('.li-product_color2')[3]).on('click',()=>{
    //     $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_4.webp')
    // });
    // $($('.li-product_color2')[4]).on('click',()=>{
    //     $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_5.webp')
    // });
    // $($('.li-product_color2')[5]).on('click',()=>{
    //     $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_6.webp')
    // });
    $($('.li-product_color3')[0]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/v_m11_1.webp')
    });
    $($('.li-product_color3')[1]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/v_m11_2.webp')
    });
    $($('.li-product_color3')[2]).on('click',()=>{
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/v_m11_3.webp')
    });
    // $($('.li-product_color3')[3]).on('click',()=>{
    //     $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/v_m11_4.webp')
    // });
    // $($('.li-product_color3')[4]).on('click',()=>{
    //     $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/v_m11_5.webp')
    // });
    // $($('.li-product_color3')[5]).on('click',()=>{
    //     $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/v_m11_6.webp')
    // });


    $(".color1-s20").on("click",()=>{
        $(".li-product_color1").show();
        $(".li-product_color2").hide();
        $(".li-product_color3").hide();
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-s20/g_s20_1.png')
    });
    $(".color2-s20").on("click",()=>{
        $(".li-product_color2").show();
        $(".li-product_color1").hide();
        $(".li-product_color3").hide();
        $("#m11").removeAttr('src').attr('src','/images/samsung/galaxy-m11/mb_m11_1.webp')
    });
    $(".color3-s20").on("click",()=>{
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

    // $('li a').click(function(e) {
    //     e.preventDefault();
    //     $('a').removeClass('active');
    //     $(this).addClass('active');
    // });


