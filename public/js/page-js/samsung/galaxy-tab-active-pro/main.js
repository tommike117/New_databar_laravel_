$(function(){

$($('.li-product')[0]).on('click',()=>{
    $("#GTA2").removeAttr('src').attr('src','/images/samsung/galaxy-tab-active-pro/GTApro_1.png')
});
$($('.li-product')[1]).on('click',()=>{
    $("#GTA2").removeAttr('src').attr('src','/images/samsung/galaxy-tab-active-pro/GTApro_2.png')
});
$($('.li-product')[2]).on('click',()=>{
    $("#GTA2").removeAttr('src').attr('src','/images/samsung/galaxy-tab-active-pro/GTApro_3.png')
});
$($('.li-product')[3]).on('click',()=>{
    $("#GTA2").removeAttr('src').attr('src','/images/samsung/galaxy-tab-active-pro/GTApro_4.png')
});
// $($('.li-product')[4]).on('click',()=>{
//     $("#GTA2").removeAttr('src').attr('src','/images/samsung/galaxy-tab-active-pro/GTApro_5.png')
// });
$($('.li-product')[4]).on('click',()=>{
    $("#GTA2").removeAttr('src').attr('src','/images/samsung/galaxy-tab-active-pro/GTApro_6.png')
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