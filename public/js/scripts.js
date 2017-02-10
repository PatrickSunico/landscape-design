// javascript here
// $(document).ready(function() {
  // var s1 = $('#swiper-wrapper > .s1');
  // var s2 = $('#swiper-wrapper > .s2');

  var swiper = new Swiper('.s1', {
      loop: true,
      simulateTouch: false,
      pagination: '.swiper-pagination',
      paginationClickable: true,
      direction: 'vertical'
  });

  var swiper2 = new Swiper('.s2', {
    loop: true,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    simulateTouch: false,
    direction: 'horizontal'
  });
// });
