$(".front").on("click", (e) => {
  e.preventDefault();
  $(".front >img").attr('src', '_assets/images/front_active.svg').fadeIn(400);
  $(".rear >img").attr('src', '_assets/images/rear.svg');
  $("#changecamera").fadeOut(200, function () {
    $("#changecamera").attr('src', '_assets/images/banner_4_front.webp');
  }).fadeIn(200);
});
$(".rear").on("click", (e) => {
  e.preventDefault();
  $(".rear >img").attr('src', '_assets/images/rear_active.svg').fadeIn(400);
  $(".front >img").attr('src', '_assets/images/front.svg');
  $("#changecamera").fadeOut(200, function () {
    $("#changecamera").attr('src', '_assets/images/banner_4_rear.webp')
  }).fadeIn(200);
});

$(".wide").on("click", (e) => {
  e.preventDefault();
  $(".wide >img").attr('src', '_assets/images/wide_active.svg').fadeIn(400);
  $(".ultrawide >img").attr('src', '_assets/images/ultra wide.svg');
  $("#changecamerawide").fadeOut(200, function () {
    $("#changecamerawide").attr('src', '_assets/images/banner_5_wide.webp');
  }).fadeIn(200);
});
$(".ultrawide").on("click", (e) => {
  e.preventDefault();
  $(".ultrawide >img").attr('src', '_assets/images/ultra wide_active.svg').fadeIn(400);
  $(".wide >img").attr('src', '_assets/images/wide.svg');
  $("#changecamerawide").fadeOut(200, function () {
    $("#changecamerawide").attr('src', '_assets/images/banner_5_ultrawide.webp')
  }).fadeIn(200);
});


$('.main-carousel').flickity({
  // options
  cellAlign: 'left',
  contain: true
});