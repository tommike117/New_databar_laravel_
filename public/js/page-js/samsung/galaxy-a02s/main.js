$(function(){
    $($('.product-color1')[0]).on('click',()=>{
        $("#a02s").removeAttr('src').attr('src','/images/samsung/galaxy-a02s/uk-galaxy-a02s-a025-sm-a025gzkeeua-384115393.webp')
    });
    $($('.product-color1')[1]).on('click',()=>{
        $("#a02s").removeAttr('src').attr('src','/images/samsung/galaxy-a02s/uk-galaxy-a02s-a025-sm-a025gzkeeua-384115378.webp')
    });
    $($('.product-color1')[2]).on('click',()=>{
        $("#a02s").removeAttr('src').attr('src','/images/samsung/galaxy-a02s/uk-galaxy-a02s-a025-sm-a025gzkeeua-384115379.webp')
    });
    $($('.product-color1')[3]).on('click',()=>{
        $("#a02s").removeAttr('src').attr('src','/images/samsung/galaxy-a02s/uk-galaxy-a02s-a025-sm-a025gzkeeua-384115380.webp')
    });
    $($('.product-color2')[0]).on('click',()=>{
        $("#a02s").removeAttr('src').attr('src','/images/samsung/galaxy-a02s/uk-galaxy-a02s-a025-sm-a025gzweeua-384115410.webp')
    });
    $($('.product-color2')[1]).on('click',()=>{
        $("#a02s").removeAttr('src').attr('src','/images/samsung/galaxy-a02s/uk-galaxy-a02s-a025-sm-a025gzweeua-384115395.webp')
    });
    $($('.product-color2')[2]).on('click',()=>{
        $("#a02s").removeAttr('src').attr('src','/images/samsung/galaxy-a02s/uk-galaxy-a02s-a025-sm-a025gzweeua-384115396.webp')
    });
    $($('.product-color2')[3]).on('click',()=>{
        $("#a02s").removeAttr('src').attr('src','/images/samsung/galaxy-a02s/uk-galaxy-a02s-a025-sm-a025gzweeua-384115397.webp')
    });


    $(".color1").on("click",()=>{
        $(".product-color1").show();
        $(".product-color2").hide();
        $("#a02s").removeAttr('src').attr('src','/images/samsung/galaxy-a02s/uk-galaxy-a02s-a025-sm-a025gzkeeua-384115393.webp')
    });
    $(".color2").on("click",()=>{
        $(".product-color2").show();
        $(".product-color1").hide();
        $("#a02s").removeAttr('src').attr('src','/images/samsung/galaxy-a02s/uk-galaxy-a02s-a025-sm-a025gzweeua-384115410.webp')
    });
});
    $(".front").on("click", (e) => {
        e.preventDefault();
        $(".front >img").attr('src','/images/samsung/galaxy-a20s/front-on.png').fadeIn(400);
        $(".rear >img").attr('src','/images/samsung/galaxy-a20s/rear-off.png').fadeIn(400);
        $("#changecamera").fadeOut(200,function (){
            $("#changecamera").attr('src','/images/samsung/galaxy-a02s/uk-feature---384115422.webp');
        }).fadeIn(200);
    })
    $(".rear").on("click",(e) => {
        e.preventDefault();
        $(".rear >img").attr('src','/images/samsung/galaxy-a20s/rear-on.png').fadeIn(400);
        $(".front >img").attr('src','/images/samsung/galaxy-a20s/front-off.png').fadeIn(400);
        $("#changecamera").fadeOut(200,function(){
            $("#changecamera").attr('src','/images/samsung/galaxy-a02s/uk-feature---384115425.webp');
        }).fadeIn(200);
    })

    // $(".front").on("click", (e) => {
    //     e.preventDefault();
    //     $(".front >img").attr('src', '/images/samsung/galaxy-a20s/front-on.png').fadeIn(400);
    //     $(".rear >img").attr('src', '/images/samsung/galaxy-a20s/rear-off.png').fadeIn(400);
    //     $("#changecamera").fadeOut(200,function (){
    //       $("#changecamera").attr('src', '/images/samsung/galaxy-a20s/th-feature---183991642.jfif');
    //     }).fadeIn(200);
    //   });
