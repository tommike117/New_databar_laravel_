$(".wide").on("click", (e) => {
    e.preventDefault();
    $(".wide >img").attr('src', '/images/samsung/galaxy-a51/80-on.svg').fadeIn(400);
    $(".ultrawide >img").attr('src', '/images/samsung/galaxy-a51/123-off.svg');
    $("#changecamerawide").fadeOut(200, function () {
        $("#changecamerawide").attr('src', '/images/samsung/galaxy-a42/th-feature-331228065.jpg');
    }).fadeIn(200);
    });
    $(".ultrawide").on("click", (e) => {
    e.preventDefault();
    $(".ultrawide >img").attr('src', '/images/samsung/galaxy-a51/123-on.svg').fadeIn(400);
    $(".wide >img").attr('src', '/images/samsung/galaxy-a51/80-off.svg');
    $("#changecamerawide").fadeOut(200, function () {
        $("#changecamerawide").attr('src', '/images/samsung/galaxy-a42/uk-feature---331322301.jpg')
    }).fadeIn(200);
    });

$(".front").on("click", (e) => {
    e.preventDefault();
    $(".front >img").attr('src', '/images/samsung/galaxy-a51/front-on.png').fadeIn(400);
    $(".rear >img").attr('src', '/images/samsung/galaxy-a51/rear-off.png');
    $("#changecamera").fadeOut(200, function () {
        $("#changecamera").attr('src', '/images/samsung/galaxy-a51/au-feature---223338711.webp');
    }).fadeIn(200);
    });
    $(".rear").on("click", (e) => {
    e.preventDefault();
    $(".rear >img").attr('src', '/images/samsung/galaxy-a51/rear-on.png').fadeIn(400);
    $(".front >img").attr('src', '/images/samsung/galaxy-a51/front-off.png');
    $("#changecamera").fadeOut(200, function () {
        $("#changecamera").attr('src', '/images/samsung/galaxy-a51/au-feature---223338708.webp');
    }).fadeIn(200);
    });
