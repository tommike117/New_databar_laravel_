$(document).ready(function(){


    if ($(window).width() < 1024) {
        // change functionality for smaller screens
    } else {
        $('#fullpage').fullpage({
            controlArrows: true,
            dragAndMove: true,
        });
        
        $(".datalogic-button").on("mouseenter",function(){
            $(".learnmore").fadeOut();
        }).on("mouseleave",function(){
            $(".learnmore").fadeIn();
        });
    
    }

   
});