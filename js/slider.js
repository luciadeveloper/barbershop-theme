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
	dotsEach:true,
    autoplayTimeout:2000,
    animateIn:true,
    nav : true, // show next and previous buttons
    addClassActive : true, // visible items have class active
    onInitialized: addDotButtonText,
    onInitialized: function (event) {
        jQuery('#owl-carousel').find('.owl-item').attr('aria-selected','false');
        jQuery('#owl-carousel').find('.owl-item.active').attr('aria-selected','true'); // let screen readers know an item is active

        // apply meta info to next and previous buttons and make them focusable
        jQuery('#owl-carousel').find('.owl-prev').attr('role','button').attr('title','Previous');
        jQuery('#owl-carousel').find('.owl-next').attr('role','button').attr('title','Next');
        jQuery('#owl-carousel, .owl-prev, .owl-next').attr('tabindex','0');

       // $('.owl-dots').attr('aria-hidden', 'true');
    },
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

function addDotButtonText() {
    console.log('buttons accessible')
    // loop through each dot element
    jQuery('.owl-dot').each(function() {
    
        // grab its (zero-based) order in the series
        let idx = $(this).index() + 1;

        // append a span to the button containing descriptive text
        jQuery(this).append('<span class="offscreen">Go to slide ' + idx + '</span>');
    });
}