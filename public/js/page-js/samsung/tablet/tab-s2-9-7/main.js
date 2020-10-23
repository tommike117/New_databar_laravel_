$(function(){

$($('.li-product_color1')[0]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2.jpg')
});
$($('.li-product_color1')[1]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_2.jpg')
});
$($('.li-product_color1')[2]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_3.jpg')
});
$($('.li-product_color1')[3]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_4.jpg')
});
$($('.li-product_color1')[4]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_5.jpg')
});
$($('.li-product_color1')[5]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_6.jpg')
});
$($('.li-product_color2')[0]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2-color2.jpg')
});
$($('.li-product_color2')[1]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_2-color2.jpg')
});
$($('.li-product_color2')[2]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_3-color2.jpg')
});
$($('.li-product_color2')[3]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_4-color2.jpg')
});
$($('.li-product_color2')[4]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_5-color2.jpg')
});
$($('.li-product_color2')[5]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_6-color2.jpg')
});
$($('.li-product_color3')[0]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2-color3.jpg')
});
$($('.li-product_color3')[1]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_2-color3.jpg')
});
$($('.li-product_color3')[2]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_3-color3.jpg')
});
$($('.li-product_color3')[3]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_4-color3.jpg')
});
$($('.li-product_color3')[4]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_5-color3.jpg')
});
$($('.li-product_color3')[5]).on('click',()=>{
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2_6-color3.jpg')
});

$(".color1").on("click",()=>{
    $(".li-product_color1").show();
    $(".li-product_color2").hide();
    $(".li-product_color3").hide();
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2.jpg')
});
$(".color2").on("click",()=>{
    $(".li-product_color2").show();
    $(".li-product_color1").hide();
    $(".li-product_color3").hide();
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2-color2.jpg')
});
$(".color3").on("click",()=>{
    $(".li-product_color3").show();
    $(".li-product_color1").hide();
    $(".li-product_color2").hide();
    $("#tab-s2").removeAttr('src').attr('src','/images/samsung/tablet/tab-s2-9-7/tab-s2-color3.jpg')
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