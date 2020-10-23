$(function(){

$($('.li-product')[0]).on('click',()=>{
    $("#GTA2").removeAttr('src').attr('src','/images/samsung/galaxy-xcover-pro/xcoverpro_1.webp')
});
$($('.li-product')[1]).on('click',()=>{
    $("#GTA2").removeAttr('src').attr('src','/images/samsung/galaxy-xcover-pro/xcoverpro_2.webp')
});
$($('.li-product')[2]).on('click',()=>{
    $("#GTA2").removeAttr('src').attr('src','/images/samsung/galaxy-xcover-pro/xcoverpro_3.webp')
});
$($('.li-product')[3]).on('click',()=>{
    $("#GTA2").removeAttr('src').attr('src','/images/samsung/galaxy-xcover-pro/xcoverpro_4.webp')
});
$($('.li-product')[4]).on('click',()=>{
    $("#GTA2").removeAttr('src').attr('src','/images/samsung/galaxy-xcover-pro/xcoverpro_5.webp')
});
$($('.li-product')[5]).on('click',()=>{
    $("#GTA2").removeAttr('src').attr('src','/images/samsung/galaxy-xcover-pro/xcoverpro_6.webp')
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