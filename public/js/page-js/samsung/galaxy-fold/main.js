function Utils() {

}

Utils.prototype = {
    constructor: Utils,
    isElementInView: function (element, fullyInView) {
        var pageTop = $(window).scrollTop();
        var pageBottom = pageTop + $(window).height();
        var elementTop = $(element).offset().top;
        var elementBottom = elementTop + $(element).height();

        if (fullyInView === true) {
            return ((pageTop < elementTop) && (pageBottom > elementBottom));
        } else {
            return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
        }
    }
};

var Utils = new Utils();

$(document).ready(function () {
    $('#videolink').magnificPopup({
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
    $('#videolink-section8').magnificPopup({
        type: 'inline',
        midClick: true
    });

    const observer = lozad('.lozad', {
        loaded: function (el) {
            el.classList.add('load');
            if ($("#display-play").attr("data-loaded") === "true") {
                $(this).addClass('load');
                if ($("#display-play").hasClass('load') == true) {
                    $("#display-play").get(0).play();
                }
            }
        }
    }); // lazy loads elements with default selector as '.lozad'
    observer.observe();


    const video2 = lozad('.lozad2', {
        loaded: function (el) {
            el.classList.add('load');
            if ($("#animation-fold").attr("data-loaded") === "true") {
                $(this).addClass('load');
                if ($("#animation-fold").hasClass('load') == true) {
                    $("#animation-fold").get(0).play();
                }
            }
        }
    }); // lazy loads elements with default selector as '.lozad'
    video2.observe();

    const video3 = lozad('.lozad3', {
        loaded: function (el) {
            el.classList.add('load');
            if ($("#experiencevideo").attr("data-loaded") === "true") {
                $(this).addClass('load');
                if ($("#experiencevideo").hasClass('load') == true) {
                    $("#experiencevideo").get(0).play();
                }
            }
        }
    }); // lazy loads elements with default selector as '.lozad'
    video3.observe();

    const video4 = lozad('.lozad4', {
        loaded: function (el) {
            el.classList.add('load');
            if ($("#multitaskingvideo").attr("data-loaded") === "true") {
                $(this).addClass('load');
                if ($("#multitaskingvideo").hasClass('load') == true) {
                    $("#multitaskingvideo").get(0).play();
                }
            }
        }
    }); // lazy loads elements with default selector as '.lozad'
    video4.observe();

    const video5 = lozad('.lozad5', {
        loaded: function (el) {
            el.classList.add('load');
            if ($("#batteryvideo").attr("data-loaded") === "true") {
                $(this).addClass('load');
                if ($("#batteryvideo").hasClass('load') == true) {
                    $("#batteryvideo").get(0).play();
                }
            }
        }
    }); // lazy loads elements with default selector as '.lozad'
    video5.observe();

    if ($(window).width() < 1024) {
        // change functionality for smaller screens
    } else {
        const foldpreview = lozad('.flex-box-fold-preview-show', {
            loaded: function (el) {
    
                var preview = $(".flex-box-fold-preview-show");
    
                el.classList.add('load');
                if (preview.hasClass("load") == true) {
                    var lastScrollTop = 0;
                    $(window).scroll(function (event) {
                        var isElementInView = Utils.isElementInView($(".flex-box-fold-preview-show"), false);
                        var st = $(this).scrollTop();
                        if (st > lastScrollTop) {
                            // scroll down
    
                            if (isElementInView) {
                                $(".flex-box-fold-preview-show > li:nth-child(2n+1) > figure").css('margin-top', '+=20px');
                                $(".flex-box-fold-preview-show > li:nth-child(2n+2) > figure").css('bottom', '+=20px');
                            } else {
                                $(".flex-box-fold-preview-show > li:nth-child(2n+1) > figure").css('margin-top', '0');
                                $(".flex-box-fold-preview-show > li:nth-child(2n+2) > figure").css('margin-bottom', '0');
                                // parseInt($(".flex-box-fold-preview-show > li:nth-child(2n+1) > figure").css("marginTop"))
                            }
    
                        } else {
    
                            // scroll up
                            if (isElementInView) {
                                $(".flex-box-fold-preview-show > li:nth-child(2n+1) > figure").css('margin-top', '-=20px');
                                $(".flex-box-fold-preview-show > li:nth-child(2n+2) > figure").css('bottom', '-=20px');
                            } else {
                                $(".flex-box-fold-preview-show > li:nth-child(2n+1) > figure").css('margin-top', '0');
                                $(".flex-box-fold-preview-show > li:nth-child(2n+2) > figure").css('margin-bottom', '0');
                            }
                        }
                        lastScrollTop = st;
                    });
                }
            }
        });
        foldpreview.observe();

//         const spenanimation = lozad('.spen', {
//             loaded: function (el) {
    
//                 var spen = $(".spen");
    
//                 el.classList.add('load');
//                 if (spen.hasClass("load") == true) {
//                     var lastscroll = 0;
//                     $(window).scroll(function (event) {
//                         var isElementInView = Utils.isElementInView($(".spen"), false);
//                         var scrolltop = $(this).scrollTop();

//                         if (scrolltop > lastscroll) {
//                             // scroll down
    
//                             if (isElementInView) {
                               
//                                 $(".sec-11").css("height","2000px");
                                
//                                  if($(".sec-11").height() == 2000){
//                                     $(".spen").css({
//                                         "position":"fixed",
//                                         "bottom":"0",
//                                         "top":"50%",
//                                         "margin-left": "-=500px",
//                                     });
//                                     console.log('left');
//                                 }
// // 
//                             } else {
//                                 $(".spen").css("margin-left","1400px")
//                             }
    
//                         } else {
    
//                             // scroll up
//                             if (isElementInView) {
//                                 console.log('right');
//                                 $(".spen").css({
//                                         "position":"fixed",
//                                         "bottom":"0",
//                                         "top":"50%",
//                                         "margin-left": "+=500px",
//                                     });
//                             } else {
//                                 $(".spen").css("margin-left","1400px")
//                             }
//                         }
//                         lastscroll = scrolltop;
//                     });
//                 }
//             }
//         });
//         spenanimation.observe();

    }
});