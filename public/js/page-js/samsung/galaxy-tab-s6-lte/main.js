$(function(){

    $($('.li-product_color1')[0]).on('click',()=>{
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/g_tab_s6_lte_1.webp')
    });
    $($('.li-product_color1')[1]).on('click',()=>{
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/g_tab_s6_lte_2.webp')
    });
    $($('.li-product_color1')[2]).on('click',()=>{
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/g_tab_s6_lte_3.webp')
    });
    $($('.li-product_color1')[3]).on('click',()=>{
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/g_tab_s6_lte_4.webp')
    });
    $($('.li-product_color1')[4]).on('click',()=>{
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/g_tab_s6_lte_5.webp')
    });
    $($('.li-product_color1')[5]).on('click',()=>{
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/g_tab_s6_lte_6.webp')
    });
    $($('.li-product_color2')[0]).on('click',()=>{
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/b_tab_s6_lte_1.webp')
    });
    $($('.li-product_color2')[1]).on('click',()=>{
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/b_tab_s6_lte_2.webp')
    });
    $($('.li-product_color2')[2]).on('click',()=>{
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/b_tab_s6_lte_3.webp')
    });
    $($('.li-product_color2')[3]).on('click',()=>{
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/b_tab_s6_lte_4.webp')
    });
    $($('.li-product_color2')[4]).on('click',()=>{
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/b_tab_s6_lte_5.webp')
    });
    $($('.li-product_color2')[5]).on('click',()=>{
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/b_tab_s6_lte_6.webp')
    });



    $(".color1").on("click",()=>{
        $(".li-product_color1").show();
        $(".li-product_color2").hide();
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/g_tab_s6_lte_1.webp')
    });
    $(".color2").on("click",()=>{
        $(".li-product_color2").show();
        $(".li-product_color1").hide();
        $("#a51").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s6-lte/b_tab_s6_lte_1.webp')
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
