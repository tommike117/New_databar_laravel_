$("#og").on("click", (e) => {
    e.preventDefault();
    $("#og").addClass("on-click");
    $("#blur").removeClass("on-click");
    $("#studio").removeClass("on-click");
    $("#himono").removeClass("on-click");
    $("#lowmono").removeClass("on-click");
    $("#backdrop").removeClass("on-click");
    $("#colorprint").removeClass("on-click");
    $("#s21").fadeOut(200, function () {
        $("#s21").attr('src', '/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_portrait_img_original.png');
    }).fadeIn(200);
    });

$("#blur").on("click", (e) => {
    e.preventDefault();
    $("#og").removeClass("on-click");
    $("#blur").addClass("on-click");
    $("#studio").removeClass("on-click");
    $("#himono").removeClass("on-click");
    $("#lowmono").removeClass("on-click");
    $("#backdrop").removeClass("on-click");
    $("#colorprint").removeClass("on-click");
    $("#s21").fadeOut(200, function () {
        $("#s21").attr('src', '/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_portrait_img_blur.png')
    }).fadeIn(200);
    });

$("#studio").on("click", (e) => {
    e.preventDefault();
    $("#og").removeClass("on-click");
    $("#blur").removeClass("on-click");
    $("#studio").addClass("on-click");
    $("#himono").removeClass("on-click");
    $("#lowmono").removeClass("on-click");
    $("#backdrop").removeClass("on-click");
    $("#colorprint").removeClass("on-click");
    $("#s21").fadeOut(200, function () {
        $("#s21").attr('src', '/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_portrait_img_studio.png')
    }).fadeIn(200);
    });

$("#himono").on("click", (e) => {
    e.preventDefault();
    $("#og").removeClass("on-click");
    $("#blur").removeClass("on-click");
    $("#studio").removeClass("on-click");
    $("#himono").addClass("on-click");
    $("#lowmono").removeClass("on-click");
    $("#backdrop").removeClass("on-click");
    $("#colorprint").removeClass("on-click");
    $("#s21").fadeOut(200, function () {
        $("#s21").attr('src', '/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_portrait_img_high_mono.png')
    }).fadeIn(200);
    });

$("#lowmono").on("click", (e) => {
    e.preventDefault();
    $("#og").removeClass("on-click");
    $("#blur").removeClass("on-click");
    $("#studio").removeClass("on-click");
    $("#himono").removeClass("on-click");
    $("#lowmono").addClass("on-click");
    $("#backdrop").removeClass("on-click");
    $("#colorprint").removeClass("on-click");
    $("#s21").fadeOut(200, function () {
        $("#s21").attr('src', '/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_portrait_img_low_mono.png')
    }).fadeIn(200);
    });

$("#backdrop").on("click", (e) => {
    e.preventDefault();
    $("#og").removeClass("on-click");
    $("#blur").removeClass("on-click");
    $("#studio").removeClass("on-click");
    $("#himono").removeClass("on-click");
    $("#lowmono").removeClass("on-click");
    $("#backdrop").addClass("on-click");
    $("#colorprint").removeClass("on-click");
    $("#s21").fadeOut(200, function () {
        $("#s21").attr('src', '/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_portrait_img_backdrop.png')
    }).fadeIn(200);
    });

$("#colorprint").on("click", (e) => {
    e.preventDefault();
    $("#og").removeClass("on-click");
    $("#blur").removeClass("on-click");
    $("#studio").removeClass("on-click");
    $("#himono").removeClass("on-click");
    $("#lowmono").removeClass("on-click");
    $("#backdrop").removeClass("on-click");
    $("#colorprint").addClass("on-click");
    $("#s21").fadeOut(200, function () {
        $("#s21").attr('src', '/images/samsung/galaxy-s21/galaxy-s21-5g_highlights_portrait_img_color_point.png')
    }).fadeIn(200);
    });




