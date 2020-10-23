$(function(){

    $($('.li-product_color1')[0]).on('click',()=>{
        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/g_tab_a_2019_plus_1.webp')
    });
    $($('.li-product_color1')[1]).on('click',()=>{
        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/g_tab_a_2019_plus_2.webp')
    });
    $($('.li-product_color1')[2]).on('click',()=>{
        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/g_tab_a_2019_plus_3.webp')
    });
    $($('.li-product_color1')[3]).on('click',()=>{
        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/g_tab_a_2019_plus_4.webp')
    });
    $($('.li-product_color1')[4]).on('click',()=>{
        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/g_tab_a_2019_plus_5.webp')
    });
    $($('.li-product_color1')[5]).on('click',()=>{
        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/g_tab_a_2019_plus_6.webp')
    });
    $($('.li-product_color2')[0]).on('click',()=>{
        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/b_tab_a_2019_plus_1.webp')
    });
    $($('.li-product_color2')[1]).on('click',()=>{
        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/b_tab_a_2019_plus_2.webp')
    });
    $($('.li-product_color2')[2]).on('click',()=>{
        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/b_tab_a_2019_plus_3.webp')
    });
    $($('.li-product_color2')[3]).on('click',()=>{
        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/b_tab_a_2019_plus_4.webp')
    });
    $($('.li-product_color2')[4]).on('click',()=>{
        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/b_tab_a_2019_plus_5.webp')
    });
    $($('.li-product_color2')[5]).on('click',()=>{
        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/b_tab_a_2019_plus_6.webp')
    });




    $(".color1").on("click",()=>{
        $(".li-product_color1").show();
        $(".li-product_color2").hide();
        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/g_tab_a_2019_plus_1.webp')
    });
    $(".color2").on("click",()=>{
        $(".li-product_color2").show();
        $(".li-product_color1").hide();

        $("#tab-a-2019-plus").removeAttr('src').attr('src','/images/samsung/galaxy-tab-a-2019-plus/b_tab_a_2019_plus_1.webp')
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
