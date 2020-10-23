// $(function () {
//     var $win = $(window);
//     var previousScroll = 0;

//     $(".backdrop").fadeIn();

//     $win.scroll(function () {
//         var currentScroll = $(this).scrollTop();
//         if ($win.scrollTop() == 0)
//         console.log("s")
//         else if (currentScroll > previousScroll){
//             $(".backdrop").fadeOut(function(e){
//                 $(".backdrop").preventDefault(e);
//             });
//         }

//         previousScroll = currentScroll;
//     });
// });

AOS.init();