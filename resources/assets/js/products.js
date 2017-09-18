(function($)
{
    var wrap = $('.product-page');

    if( $(wrap).length <= 0 )
    {
        return;
    }

    var tabs = $(wrap).find('.tabs-list li'),
        cnts = $(wrap).find('.tabs-block-content');

    $(tabs)
        .on('click', function(e)
        {
            e.preventDefault();

            if( $(this).hasClass('active') )
            {
                return;
            }

            var target = $(this).data('target');
            target = $('.product-tab-' + target);

            if( $(target).length <= 0 )
            {
                return;
            }

            $(cnts).removeClass('active');
            $(target).addClass('active');

            $(tabs).removeClass('active');
            $(this).addClass('active');
        });

})(jQuery);

(function($)
{
    var wrap = $('.product-page .product-view');

    if( $(wrap).length <= 0 )
    {
        return;
    }

    var image   = $(wrap).find('.product-image img'),
        gallery = $(wrap).find('.product-carousel');

    var view    = $(wrap).find('.product-image');

    var items   = $(gallery).find('.carousel-image');

    $(items)
        .on('click', function(e)
        {
            e.preventDefault();

            var src = $(this).find('img').data('image');

            $(image).attr('src', src);

            $(items).removeClass('active');
            $(this).addClass('active');

            $(image).attr('src', $(this).data('image'));
            $(image).data(image, $(this).data('zoom-image'));

        });

    $(gallery)
        .on('afterChange', function(event, slick, current)
        {
            $(items)
                .eq(current)
                .trigger('click');
        })
        .slick({
            slidesToShow: 3,
            vertical: true,
            dots: false,
            arrows: true,
            centerMode: false,
            responsive: [
                {
                    breakpoint: 990,
                    settings: {
                        slidesToShow: 2,
                        dots: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        dots: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1,
                        dots: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 1,
                        dots: true,
                        arrows: false
                    }
                }
            ]
        });
})(jQuery);