AOS.init({
  disable: false,
  startEvent: 'DOMContentLoaded',
  initClassName: 'aos-init',
  animatedClassName: 'aos-animate',
  useClassNames: false,
  disableMutationObserver: false,
  debounceDelay: 50,
  throttleDelay: 99,
  offset: 120,
  delay: 0,
  duration: 600,
  easing: 'ease-in-out',
  once: false,
  mirror: false,
  anchorPlacement: 'top-bottom',
});

$($('.li-product')[0]).on('click', () => {
  $("#S48C").removeAttr('src').attr('src', '/images/Caterpillar/cat-s48c/S48C.png')
});
$($('.li-product')[1]).on('click', () => {
  $("#S48C").removeAttr('src').attr('src', '/images/Caterpillar/cat-s48c/S48C_2.png')
});
$($('.li-product')[2]).on('click', () => {
  $("#S48C").removeAttr('src').attr('src', '/images/Caterpillar/cat-s48c/S48C_3.png')
});
$($('.li-product')[3]).on('click', () => {
  $("#S48C").removeAttr('src').attr('src', '/images/Caterpillar/cat-s48c/S48C_4.png')
});
$($('.li-product')[4]).on('click', () => {
  $("#S48C").removeAttr('src').attr('src', '/images/Caterpillar/cat-s48c/S48C_5.png')
});