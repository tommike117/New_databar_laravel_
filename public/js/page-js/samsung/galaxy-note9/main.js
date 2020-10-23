$(function () {
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

  var position = $(window).scrollTop();

  // should start at 0

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > position) {
      console.log('scrollDown');
      $('body').css('background', 'black');
    } else if ($(window).scrollTop() == "0") {
      $('body').css('background', 'rgb(53, 84, 172)');
    }
    position = scroll;
  });

  const observer = lozad(
    '.lozad', {
      loaded: function (el) {
        $('.count').each(function () {
          $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
          }, {
            duration: 1600,
            easing: 'swing',
            step: function (now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      }
    } 
  );
  observer.observe();


  const battery = lozad(
    '.battery2', {
      loaded: function (el) {
        $(".battery2").css({
          "width":"0",
          "transition":"2.1s",
          "transition-timing-function":"ease",
          "transition-delay":"0.5s",
        });
      }
    } 
  );
  battery.observe();
});