$(function ($) {
  "use strict";


      // heroarea-slider
      var $testimonialSlider = $('.heroarea-slider');
          $testimonialSlider.owlCarousel({
          loop: true,
          navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
          nav: true,
          nav: true,
          dots:false,
          autoplayTimeout: 6000,
          smartSpeed: 1200,
          animateOut: 'fadeOut',
          animateIn: 'fadeIn',
          responsive: {
              0: {
                  items: 1
              },
              576: {
                  items: 1
              },
              950: {
                  items: 1
              },
              960: {
                  items: 1
              },
              1200: {
                  items: 1
              }
          }
      });




});
