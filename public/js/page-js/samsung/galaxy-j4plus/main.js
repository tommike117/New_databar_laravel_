$(function(){

$($('.li-product_color1')[0]).on('click',()=>{
    $("#a10s").removeAttr('src').attr('src','/images/samsung/Galaxy A10s 2-32GB/A10s.jpg')
});
$($('.li-product_color1')[1]).on('click',()=>{
    $("#a10s").removeAttr('src').attr('src','/images/samsung/Galaxy A10s 2-32GB/A10s-2.jpg')
});
$($('.li-product_color1')[2]).on('click',()=>{
    $("#a10s").removeAttr('src').attr('src','/images/samsung/Galaxy A10s 2-32GB/A10s-3.jpg')
});
$($('.li-product_color1')[3]).on('click',()=>{
    $("#a10s").removeAttr('src').attr('src','/images/samsung/Galaxy A10s 2-32GB/A10s-4.jpg')
});
$($('.li-product_color1')[4]).on('click',()=>{
    $("#a10s").removeAttr('src').attr('src','/images/samsung/Galaxy A10s 2-32GB/A10s-5.jpg')
});
$($('.li-product_color1')[5]).on('click',()=>{
    $("#a10s").removeAttr('src').attr('src','/images/samsung/Galaxy A10s 2-32GB/A10s-6.jpg')
});
// $($('.li-product_color1')[6]).on('click',()=>{
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4_7.jpg')
// });
// $($('.li-product_color2')[0]).on('click',()=>{
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4-color2.jpg')
// });
// $($('.li-product_color2')[1]).on('click',()=>{
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4_2-color2.jpg')
// });
// $($('.li-product_color2')[2]).on('click',()=>{
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4_3-color2.jpg')
// });
// $($('.li-product_color2')[3]).on('click',()=>{
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4_4-color2.jpg')
// });
// $($('.li-product_color2')[4]).on('click',()=>{
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4_5-color2.jpg')
// });
// $($('.li-product_color2')[5]).on('click',()=>{
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4_6-color2.jpg')
// });
// $($('.li-product_color3')[0]).on('click',()=>{
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4-color3.jpg')
// });
// $($('.li-product_color3')[1]).on('click',()=>{
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4_2-color3.jpg')
// });
// $($('.li-product_color3')[2]).on('click',()=>{
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4_3-color3.jpg')
// });
// $($('.li-product_color3')[3]).on('click',()=>{
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4_4-color3.jpg')
// });
// $($('.li-product_color3')[4]).on('click',()=>{
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4_5-color3.jpg')
// });
// $($('.li-product_color3')[5]).on('click',()=>{
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4_6-color3.jpg')
// });

$(".color1").on("click",()=>{
    $(".li-product_color1").show();
    $(".li-product_color2").hide();
    $(".li-product_color3").hide();
    $("#j4").removeAttr('src').attr('src','/images/samsung/Galaxy A10s 2-32GB/A10s.jpg')
});
// $(".color2").on("click",()=>{
//     $(".li-product_color2").show();
//     $(".li-product_color1").hide();
//     $(".li-product_color3").hide();
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4-color2.jpg')
// });
// $(".color3").on("click",()=>{
//     $(".li-product_color3").show();
//     $(".li-product_color1").hide();
//     $(".li-product_color2").hide();
//     $("#j4").removeAttr('src').attr('src','/images/samsung/galaxy-j4plus/j4-color3.jpg')
// });

$("#face").on("click",(e)=>{
    e.preventDefault();
    $("#scan").fadeOut(400, function() {
        $("#scan").attr('src','../samsung-galaxy-j4//images/samsung/galaxy-j4plus/face.png');
    }).fadeIn(400);
     $(".row.face").css("color","rgb(30, 34, 134)");
     $(".row.finger").css("color","black");
     $(".row.hidden").css("color","black");
});
$("#finger").on("click",(e)=>{
    e.preventDefault();
    $("#scan").fadeOut(400, function() {
        $("#scan").attr('src','../samsung-galaxy-j4//images/samsung/galaxy-j4plus/finger.png');
    }).fadeIn(400);
     $(".row.face").css("color","black");
     $(".row.hidden").css("color","black");
     $(".row.finger").css("color","rgb(30, 34, 134)");
});
$("#hidden").on("click",(e)=>{
    e.preventDefault();
    $("#scan").fadeOut(400, function() {
        $("#scan").attr('src','../samsung-galaxy-j4//images/samsung/galaxy-j4plus/hidden.png');
    }).fadeIn(400);
     $(".row.face").css("color","black");
     $(".row.finger").css("color","black");
     $(".row.hidden").css("color","rgb(30, 34, 134)");
});

aos.init({
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
