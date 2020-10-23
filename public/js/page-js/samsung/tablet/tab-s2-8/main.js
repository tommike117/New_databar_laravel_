$(function(){

$($('.li-product_color1')[0]).on('click',()=>{
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8.jpg')
});
$($('.li-product_color1')[1]).on('click',()=>{
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8_2.jpg')
});
$($('.li-product_color1')[2]).on('click',()=>{
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8_3.jpg')
});
$($('.li-product_color1')[3]).on('click',()=>{
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8_4.jpg')
});
$($('.li-product_color1')[4]).on('click',()=>{
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8_5.jpg')
});
$($('.li-product_color1')[5]).on('click',()=>{
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8_6.jpg')
});
$($('.li-product_color2')[0]).on('click',()=>{
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8-color2.jpg')
});
$($('.li-product_color2')[1]).on('click',()=>{
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8_2-color2.jpg')
});
$($('.li-product_color2')[2]).on('click',()=>{
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8_3-color2.jpg')
});
$($('.li-product_color2')[3]).on('click',()=>{
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8_4-color2.jpg')
});
$($('.li-product_color2')[4]).on('click',()=>{
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8_5-color2.jpg')
});
$($('.li-product_color2')[5]).on('click',()=>{
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8_6-color2.jpg')
});

$(".color1").on("click",()=>{
    $(".li-product_color1").show();
    $(".li-product_color2").hide();
    $(".li-product_color3").hide();
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8.jpg')
});
$(".color2").on("click",()=>{
    $(".li-product_color2").show();
    $(".li-product_color1").hide();
    $(".li-product_color3").hide();
    $("#tab-s2-8").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-8/tab-s2-8-color2.jpg')
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