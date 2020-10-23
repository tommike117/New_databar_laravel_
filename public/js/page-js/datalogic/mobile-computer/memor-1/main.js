$($('.li-product')[0]).on('click',()=>{
    $("#Memor_1").removeAttr('src').attr('src','/images/datalogic/mobile-computer/memor-1/Memor 1.png')
})
$($('.li-product')[1]).on('click',()=>{
    $("#Memor_1").removeAttr('src').attr('src','/images/datalogic/mobile-computer/memor-1/Memor 1_2.jpg')
})
$($('.li-product')[2]).on('click',()=>{
    $("#Memor_1").removeAttr('src').attr('src','/images/datalogic/mobile-computer/memor-1/Memor 1_4.jpg')
})
$($('.li-product')[3]).on('click',()=>{
    $("#Memor_1").removeAttr('src').attr('src','/images/datalogic/mobile-computer/memor-1/Memor 1_5.jpg')
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
