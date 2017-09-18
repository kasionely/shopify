(function($)
{
    var wrap   = $('.carousel-wrap');

    if( $(wrap).length <= 0 )
    {
        return;
    }

    var slider = $(wrap).find('.main-carousel');

    $(slider)
        .slick({
            slidesToShow: 3,
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 6000,
            adaptiveHeight: true
        });
})(jQuery);