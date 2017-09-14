$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        responsiveClass: true,
        responsive:{
            0:{
                items:1,
                nav: true
            },
            768:{
                items:1,
                nav: true
            },
            1000:{
                items:3,
                nav: false,
                loop: false
            }
        }
    });
});