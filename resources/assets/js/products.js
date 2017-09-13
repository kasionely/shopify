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