$(".front").on("click", (e) => {
  e.preventDefault();
  $(".front >img").attr('src', '/images/samsung/galaxy-a80/front_active.svg').fadeIn(400);
  $(".rear >img").attr('src', '/images/samsung/galaxy-a80/rear.svg');
  $("#changecamera").fadeOut(200, function () {
    $("#changecamera").attr('src', '/images/samsung/galaxy-a80/banner_4_front.webp');
  }).fadeIn(200);
});
$(".rear").on("click", (e) => {
  e.preventDefault();
  $(".rear >img").attr('src', '/images/samsung/galaxy-a80/rear_active.svg').fadeIn(400);
  $(".front >img").attr('src', '/images/samsung/galaxy-a80/front.svg');
  $("#changecamera").fadeOut(200, function () {
    $("#changecamera").attr('src', '/images/samsung/galaxy-a80/banner_4_rear.webp')
  }).fadeIn(200);
});

$(".wide").on("click", (e) => {
  e.preventDefault();
  $(".wide >img").attr('src', '/images/samsung/galaxy-a80/wide_active.svg').fadeIn(400);
  $(".ultrawide >img").attr('src', '/images/samsung/galaxy-a80/ultra wide.svg');
  $("#changecamerawide").fadeOut(200, function () {
    $("#changecamerawide").attr('src', '/images/samsung/galaxy-a80/banner_5_wide.webp');
  }).fadeIn(200);
});
$(".ultrawide").on("click", (e) => {
  e.preventDefault();
  $(".ultrawide >img").attr('src', '/images/samsung/galaxy-a80/ultra wide_active.svg').fadeIn(400);
  $(".wide >img").attr('src', '/images/samsung/galaxy-a80/wide.svg');
  $("#changecamerawide").fadeOut(200, function () {
    $("#changecamerawide").attr('src', '/images/samsung/galaxy-a80/banner_5_ultrawide.webp')
  }).fadeIn(200);
});


$('.main-carousel').flickity({
  // options
  cellAlign: 'left',
  contain: true
});