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
  $("#S41").removeAttr('src').attr('src', '/images/Caterpillar/Cat-S41/S41.png')
});
$($('.li-product')[1]).on('click', () => {
  $("#S41").removeAttr('src').attr('src', '/images/Caterpillar/Cat-S41/S41_2.png')
});
$($('.li-product')[2]).on('click', () => {
  $("#S41").removeAttr('src').attr('src', '/images/Caterpillar/Cat-S41/S41_3.png')
});
$($('.li-product')[3]).on('click', () => {
  $("#S41").removeAttr('src').attr('src', '/images/Caterpillar/Cat-S41/S41_4.png')
});
$($('.li-product')[4]).on('click', () => {
  $("#S41").removeAttr('src').attr('src', '/images/Caterpillar/Cat-S41/S41_5.png')
});
$($('.li-product')[5]).on('click', () => {
  $("#S41").removeAttr('src').attr('src', '/images/Caterpillar/Cat-S41/S41_6.png')
});