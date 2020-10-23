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


const observer = lozad('.lozad',{
    loaded: function(el){
        if($(".lozad").hasClass("active") === true){
            console.log("ss")
        }




    //   addClass
        // el.classList.add('loaded');

    }
}); // lazy loads elements with default selector as '.lozad'
observer.observe();


