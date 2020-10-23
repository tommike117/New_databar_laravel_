$(function(){

$($('.li-product_color1')[0]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5.jpg')
});
$($('.li-product_color1')[1]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_2.jpg')
});
$($('.li-product_color1')[2]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_3.jpg')
});
$($('.li-product_color1')[3]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_4.jpg')
});
$($('.li-product_color1')[4]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_5.jpg')
});
$($('.li-product_color1')[5]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_6.jpg')
});
$($('.li-product_color1')[6]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_7.jpg')
});
$($('.li-product_color2')[0]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5-color2.jpg')
});
$($('.li-product_color2')[1]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_2-color2.jpg')
});
$($('.li-product_color2')[2]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_3-color2.jpg')
});
$($('.li-product_color2')[3]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_4-color2.jpg')
});
$($('.li-product_color2')[4]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_5-color2.jpg')
});
$($('.li-product_color2')[5]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_6-color2.jpg')
});
$($('.li-product_color3')[0]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5-color3.jpg')
});
$($('.li-product_color3')[1]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_2-color3.jpg')
});
$($('.li-product_color3')[2]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_3-color3.jpg')
});
$($('.li-product_color3')[3]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_4-color3.jpg')
});
$($('.li-product_color3')[4]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_5-color3.jpg')
});
$($('.li-product_color3')[5]).on('click',()=>{
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5_6-color3.jpg')
});

$(".color1").on("click",()=>{
    $(".li-product_color1").show();
    $(".li-product_color2").hide();
    $(".li-product_color3").hide();
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5.jpg')
});
$(".color2").on("click",()=>{
    $(".li-product_color2").show();
    $(".li-product_color1").hide();
    $(".li-product_color3").hide();
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5-color2.jpg')
});
$(".color3").on("click",()=>{
    $(".li-product_color3").show();
    $(".li-product_color1").hide();
    $(".li-product_color2").hide();
    $("#a5").removeAttr('src').attr('src','/images/samsung/galaxy-a5/a5-color3.jpg')
});

$("#face").on("click",(e)=>{
    e.preventDefault();
    $("#scan").fadeOut(400, function() {
        $("#scan").attr('src','/images/samsung/galaxy-a5/a5_banner_10.jpg');
    }).fadeIn(400);
     $(".row.face").css("color","rgb(30, 34, 134)");
     $(".row.finger").css("color","black");
});
$("#finger").on("click",(e)=>{
    e.preventDefault();
    $("#scan").fadeOut(400, function() {
        $("#scan").attr('src','/images/samsung/galaxy-a5/a5_banner_11.jpg');
    }).fadeIn(400);
     $(".row.face").css("color","black");
     $(".row.finger").css("color","rgb(30, 34, 134)");
});

$("#filter1").on("click",(e)=>{
    e.preventDefault();
    $("#filter").fadeOut(400, function() {
        $("#filter").attr('src','../samsung-galaxy-a5//images/samsung/galaxy-a5/filter_1.jpg');
    }).fadeIn(400);
});
$("#filter2").on("click",(e)=>{
    e.preventDefault();
    $("#filter").fadeOut(400, function() {
        $("#filter").attr('src','../samsung-galaxy-a5//images/samsung/galaxy-a5/filter_2.jpg');
    }).fadeIn(400);
});
$("#filter3").on("click",(e)=>{
    e.preventDefault();
    $("#filter").fadeOut(400, function() {
        $("#filter").attr('src','../samsung-galaxy-a5//images/samsung/galaxy-a5/filter_3.jpg');
    }).fadeIn(400);
});
$("#filter4").on("click",(e)=>{
    e.preventDefault();
    $("#filter").fadeOut(400, function() {
        $("#filter").attr('src','../samsung-galaxy-a5//images/samsung/galaxy-a5/filter_4.jpg');
    }).fadeIn(400);
});
$("#filter5").on("click",(e)=>{
    e.preventDefault();
    $("#filter").fadeOut(400, function() {
        $("#filter").attr('src','../samsung-galaxy-a5//images/samsung/galaxy-a5/filter_5.jpg');
    }).fadeIn(400);
});
$("#filter6").on("click",(e)=>{
    e.preventDefault();
    $("#filter").fadeOut(400, function() {
        $("#filter").attr('src','../samsung-galaxy-a5//images/samsung/galaxy-a5/filter_6.jpg');
    }).fadeIn(400);
});
$("#filter7").on("click",(e)=>{
    e.preventDefault();
    $("#filter").fadeOut(400, function() {
        $("#filter").attr('src','../samsung-galaxy-a5//images/samsung/galaxy-a5/filter_7.jpg');
    }).fadeIn(400);
});
$("#filter8").on("click",(e)=>{
    e.preventDefault();
    $("#filter").fadeOut(400, function() {
        $("#filter").attr('src','../samsung-galaxy-a5//images/samsung/galaxy-a5/filter_8.jpg');
    }).fadeIn(400);
});
$("#filter9").on("click",(e)=>{
    e.preventDefault();
    $("#filter").fadeOut(400, function() {
        $("#filter").attr('src','../samsung-galaxy-a5//images/samsung/galaxy-a5/filter_9.jpg');
    }).fadeIn(400);
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