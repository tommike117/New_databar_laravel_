$(document).ready(function(){
    $('#videolink1').magnificPopup({
        type: 'inline',
        midClick: true
    });
    $('#videolink2').magnificPopup({
        type: 'inline',
        midClick: true
    });
    $('#videolink3').magnificPopup({
        type: 'inline',
        midClick: true
    });


    const videoperformance = lozad('.video-lozad-1', {
        loaded: function(el) {
            el.classList.add('loaded');
            var video = $(".video-lozad-1");
            for (let i = 0; i < video.length; i++) {
                video.get(i).play();
            }
        }
    });



    videoperformance.observe();

});
