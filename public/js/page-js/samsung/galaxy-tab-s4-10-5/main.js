$(function(){

$($('.li-product')[0]).on('click',()=>{
    $("#tab-s4").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s4-10-5/tab-s4.jpg')
});
$($('.li-product')[1]).on('click',()=>{
    $("#tab-s4").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s4-10-5/tab-s4_2.jpg')
});
$($('.li-product')[2]).on('click',()=>{
    $("#tab-s4").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s4-10-5/tab-s4_3.jpg')
});
$($('.li-product')[3]).on('click',()=>{
    $("#tab-s4").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s4-10-5/tab-s4_4.jpg')
});
$($('.li-product')[4]).on('click',()=>{
    $("#tab-s4").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s4-10-5/tab-s4_5.jpg')
});
$($('.li-product')[5]).on('click',()=>{
    $("#tab-s4").removeAttr('src').attr('src','/images/samsung/galaxy-tab-s4-10-5/tab-s4_6.jpg')
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
