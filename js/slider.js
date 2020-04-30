/**
 * File slider.js.
 *
 * 
 *
 * 
 */

console.log ('slider js loaded');

jQuery(document).ready(function(){
  jQuery(".owl-carousel").owlCarousel();
});

jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
 //   autoplay:true,
	dotsEach:true,
    autoplayTimeout:2000,
    animateIn:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})