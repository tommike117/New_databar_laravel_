$("#more").on("click",()=>{
    $("#row3").slideDown().addClass("show");
    if($("#row3").hasClass('show') == true){
        $('#more').on('click',()=>{
            $("#row4").slideDown().addClass("show");
        });
    }if($("#row4").hasClass('show') == true){
            $("#row5").slideDown().addClass("show");
    }
});
$(function(){
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
})