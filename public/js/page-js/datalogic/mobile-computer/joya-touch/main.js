$($('.li-product')[0]).on('click',()=>{
    $("#Joya_Touch").removeAttr('src').attr('src','/images/datalogic/mobile-computer/joya-touch/Joya Touch.png')
})
$($('.li-product')[1]).on('click',()=>{
    $("#Joya_Touch").removeAttr('src').attr('src','/images/datalogic/mobile-computer/joya-touch/Joya Touch_2.jpg')
})
$($('.li-product')[2]).on('click',()=>{
    $("#Joya_Touch").removeAttr('src').attr('src','/images/datalogic/mobile-computer/joya-touch/Joya Touch_3.jpg')
})
$($('.li-product')[3]).on('click',()=>{
    $("#Joya_Touch").removeAttr('src').attr('src','/images/datalogic/mobile-computer/joya-touch/Joya Touch_4.jpg')
})
$($('.li-product')[4]).on('click',()=>{
    $("#Joya_Touch").removeAttr('src').attr('src','/images/datalogic/mobile-computer/joya-touch/Joya Touch_5.jpg')
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
