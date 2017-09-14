var qq = require('fine-uploader');
var Sortable = require('sortablejs');
var Select2  = require('select2');

(function ($)
{
    var wrapper  = ('.site-header-search');
    var stylized = $(wrapper).find('.next-input-stylized');
    var wrap     = ('.navigation-search-wrap');
    var input    = $(wrap).find('input');

        $(input).focus(function () {
            $(stylized).addClass('input-focused');
        });

        $(input).focusout(function () {
            $(stylized).removeClass('input-focused');
        });
})(jQuery);

//Popover function

(function ($) {
    var wrap    = ('.site-header-profile');
    var btn     = $(wrap).find('.top-bar-profile-btn');
    var popover = $(wrap).find('.popover');

        $(btn).click(function () {
            $(popover).toggleClass('popover-block');
        });
})(jQuery);

(function($, qq)
{
    var wrap = $('.manage-page');

    if( $(wrap).length <= 0 )
    {
        return;
    }

    var form    = $('.add-form'),
        container = $('.product-gallery');

    var btn     = $('.upload-view-btn');

    var action  = $(btn).data('action'),
        name    = $(btn).data('name'),
        input   = $(btn).data('input');

    new qq.FineUploaderBasic({
        multiple: true,
        button: $(btn)[0],
        request: {
            inputName: 'image_uploader',
            endpoint: action
        },
        callbacks: {
            onSubmit: function(id, filename) {
                $('<div id="product_gallery_'+ id +'" class="item-view proccessing"></div>')
                    .insertBefore(btn);
            },
            onComplete: function(id, filename, response) {
                var item = $('#product_gallery_' + id);

                $(item).removeClass('proccessing');

                if( response.result == 0 ) {
                    $(item).remove();

                    if( typeof response.message !== 'undefined' ) {
                        alert(response.message);
                    }

                    return false;
                }

                $(item)
                    .css({'background-image': 'url('+ response.images +')'})
                    .html(
                        '<input type="hidden" name="'+ input +'" value="'+ response.src +'">' +
                        '<a href="#" class="gallery-item-remove"><i class="fa fa-close"></i></a>'
                    );
            }
        }
    });

    /* events */
    $(container)
        .on('click', '.gallery-item-remove', function(e)
        {
            e.preventDefault();

            /* remove */
            $(this).parent().remove();
        });

    /* make sortable list */
    Sortable.create($(container)[0], {
        sort: true,
        delay: 0,
        animation: 150,
        draggable: '.product-gallery-item',
        onStart: function(e) {
            $(e.item).addClass('draggable');
        },
        onEnd: function(e) {
            $(e.item).removeClass('draggable');
        }
    });

})(jQuery, qq);