$($('.li-product')[0]).on('click',()=>{
    $("#SHMP-300").removeAttr('src').attr('src','../SHMP-300/_assets/images/SHMP-300.jpg')
})
$($('.li-product')[1]).on('click',()=>{
    $("#SHMP-300").removeAttr('src').attr('src','../SHMP-300/_assets/images/SHMP-300_2.jpg')
})
$($('.li-product')[2]).on('click',()=>{
    $("#SHMP-300").removeAttr('src').attr('src','../SHMP-300/_assets/images/SHMP-300_3.jpg')
})
$($('.li-product')[3]).on('click',()=>{
    $("#SHMP-300").removeAttr('src').attr('src','../SHMP-300/_assets/images/SHMP-300_4.jpg')
})
$($('.li-product')[4]).on('click',()=>{
    $("#SHMP-300").removeAttr('src').attr('src','../SHMP-300/_assets/images/SHMP-300_5.jpg')
})
$($('.li-product')[5]).on('click',()=>{
    $("#SHMP-300").removeAttr('src').attr('src','../SHMP-300/_assets/images/SHMP-300_6.jpg')
})
$($('.li-product')[6]).on('click',()=>{
    $("#SHMP-300").removeAttr('src').attr('src','../SHMP-300/_assets/images/SHMP-300_7.jpg')
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