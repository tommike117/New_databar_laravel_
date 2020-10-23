const observer = lozad('.lozad', {
  loaded: function(el) {
    el.classList.add('loaded');
    if($("#videoslow").hasClass('loaded') == true){
      $("#videoslow").get(0).play();
      $($("#videoslow").get(0)).prop("loop","true")
    }
  }
});
observer.observe();

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
 