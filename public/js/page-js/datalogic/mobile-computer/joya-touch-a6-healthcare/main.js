$($('.li-product')[0]).on('click',()=>{
    $("#Joya_Touch_A6_Healthcare").removeAttr('src').attr('src','/images/datalogic/mobile-computer/joya-touch-a6-healthcare/Joya Touch A6 Healthcare.png')
})
$($('.li-product')[1]).on('click',()=>{
    $("#Joya_Touch_A6_Healthcare").removeAttr('src').attr('src','/images/datalogic/mobile-computer/joya-touch-a6-healthcare/Joya Touch A6 Healthcare_2.jpg')
})
$($('.li-product')[2]).on('click',()=>{
    $("#Joya_Touch_A6_Healthcare").removeAttr('src').attr('src','/images/datalogic/mobile-computer/joya-touch-a6-healthcare/Joya Touch A6 Healthcare_3.jpg')
})
$($('.li-product')[3]).on('click',()=>{
    $("#Joya_Touch_A6_Healthcare").removeAttr('src').attr('src','/images/datalogic/mobile-computer/joya-touch-a6-healthcare/Joya Touch A6 Healthcare_4.jpg')
})
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
