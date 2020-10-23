$(function(){

$($('.li-product')[0]).on('click',()=>{
    $("#tab-s3").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s3/tab-s3.jpg')
});
$($('.li-product')[1]).on('click',()=>{
    $("#tab-s3").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s3/tab-s3_2.jpg')
});
$($('.li-product')[2]).on('click',()=>{
    $("#tab-s3").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s3/tab-s3_3.jpg')
});
$($('.li-product')[3]).on('click',()=>{
    $("#tab-s3").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s3/tab-s3_4.jpg')
});
$($('.li-product')[4]).on('click',()=>{
    $("#tab-s3").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s3/tab-s3_5.jpg')
});
$($('.li-product')[5]).on('click',()=>{
    $("#tab-s3").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s3/tab-s3_6.jpg')
});
$("#camera").on("click",(e)=>{
    e.preventDefault();
    $("#changeimage").fadeOut(400, function() {
        $("#changeimage").attr('src','/images/samsung/galaxy-tab-s3/camera.jpg');
    }).fadeIn(400);
     $(".row.camera").css("color","white");
     $(".row.memory").css("color","#676767");
     $(".row.processor").css("color","#676767");
     $(".row.flow").css("color","#676767");
     $(".iconcamera").css("opacity","1");
     $(".iconmemory").css("opacity","0.5");
     $(".iconprocessor").css("opacity","0.5");
     $(".iconflow").css("opacity","0.5");
});
$("#memory").on("click",(e)=>{
    e.preventDefault();
    $("#changeimage").fadeOut(400, function() {
        $("#changeimage").attr('src','/images/samsung/galaxy-tab-s3/storage.jpg');
    }).fadeIn(400);
    $(".row.camera").css("color","#676767");
    $(".row.memory").css("color","white");
    $(".row.processor").css("color","#676767");
    $(".row.flow").css("color","#676767");
    $(".iconcamera").css("opacity","0.5");
     $(".iconmemory").css("opacity","1");
     $(".iconprocessor").css("opacity","0.5");
     $(".iconflow").css("opacity","0.5");
});
$("#processor").on("click",(e)=>{
    e.preventDefault();
    $("#changeimage").fadeOut(400, function() {
        $("#changeimage").attr('src','/images/samsung/galaxy-tab-s3/processor.jpg');
    }).fadeIn(400);
    $(".row.camera").css("color","#676767");
    $(".row.memory").css("color","#676767");
    $(".row.processor").css("color","white");
    $(".row.flow").css("color","#676767");
    $(".iconcamera").css("opacity","0.5");
    $(".iconmemory").css("opacity","0.5");
    $(".iconprocessor").css("opacity","1");
    $(".iconflow").css("opacity","0.5");
});
$("#flow").on("click",(e)=>{
    e.preventDefault();
    $("#changeimage").fadeOut(400, function() {
        $("#changeimage").attr('src','/images/samsung/galaxy-tab-s3/flow.jpg');
    }).fadeIn(400);
    $(".row.camera").css("color","#676767");
    $(".row.memory").css("color","#676767");
    $(".row.processor").css("color","#676767");
    $(".row.flow").css("color","white");
    $(".iconcamera").css("opacity","0.5");
    $(".iconmemory").css("opacity","0.5");
    $(".iconprocessor").css("opacity","0.5");
    $(".iconflow").css("opacity","1");
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
