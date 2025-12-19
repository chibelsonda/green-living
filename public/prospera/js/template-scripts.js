jQuery(document).ready(function ($) {
  // Owl Carousel 
  $(".carousel-default").owlCarousel({
    navigation: true,
    slideSpeed: 300,
    paginationSpeed: 400,
    autoPlay: true,
    addClassActive: true,
    navigationText: ["&#xf007", "&#xf006"],
    singleItem: true
  });

  $(".carousel-fade-transition").owlCarousel({
    navigation: true,
    slideSpeed: 300,
    paginationSpeed: 400,
    autoPlay: true,
    addClassActive: true,
    navigationText: ["&#xf007", "&#xf006"],
    singleItem: true,
    transitionStyle: "fade"
  });

  // Sticky Nav Bar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 20) {
      $('.sticky').addClass("fixed");
    } else {
      $('.sticky').removeClass("fixed");
    }
  });

});

$(document).ready(function () {
  $('.animate').animate({
    'opacity': 0
  }, 1000, function () {}).animate({
    'opacity': 1
  }, 1000);
  
});

