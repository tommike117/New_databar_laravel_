

$(document).ready(function(){

 
const observer = lozad(
  '.lozad', {
    loaded: function(el) {
      $('.count').each(function () {
        $(this).prop('Counter',5).animate({
            Counter: $(this).text()
        }, {
            duration: 1600,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
      $('.count_2').each(function () {
        $(this).prop('Counter',5).animate({
            Counter: $(this).text()
        }, {
            duration: 1800,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    }
  }
); // lazy loads elements with default selector as '.lozad'
observer.observe();

AOS.init();
});