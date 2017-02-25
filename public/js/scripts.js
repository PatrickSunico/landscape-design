// javascript here
// $(document).ready(function() {
// var s1 = $('#swiper-wrapper > .s1');
// var s2 = $('#swiper-wrapper > .s2');

var swiper = new Swiper('.s1', {
    simulateTouch: false,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    slidesPerView: 1,
    autoplay: 6000,
    autoplayDisableOnInteraction: false,
    direction: 'vertical'
});

var swiper2 = new Swiper('.s2', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    slidesPerView: 1,
    simulateTouch: false,
    autoplay: 6000,
    autoplayDisableOnInteraction: false,
    effect: 'fade',
    direction: 'horizontal'
});

$(document).ready(function() {
    // open overlay on click
    $('.hamburger').on('click', function() {
        $('.overlay').addClass('open');
    });

    // close overlay on click
    $('.close-menu').on('click', function() {
        $('.overlay').removeClass('open');
    });
});



// $(document).ready(function() {
//     // toggle overlay
//     $('.hamburger').on('click', function() {
//         $('.overlay').addClass('open');
//     });

//     $('.close-menu').on('click', function() {
//         $('.overlay').removeClass('open');
//     });
// });