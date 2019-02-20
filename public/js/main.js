console.log('hello');

(function ($) {
    "use strict";

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots: false,
        autoplay:true,
        autoplayTimeout:8000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
})(jQuery);