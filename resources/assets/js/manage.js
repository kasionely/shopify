// (function($, qq)
// {
//     $(document)
//         .on('fineuploader-initialize', function() {
//             $('.upload-view-btn')
//                 .not('.initialized')
//                 .each(function() {
//                     var btn = $(this);
//
//                     var action  = $(this).data('action'),
//                         name    = $(this).data('input'),
//                         image   = $($(this).data('image')),
//                         input   = $('input[name="' + $(this).data('input') + '"]');
//
//                     var remove = $(this).find('.upload-item-remove');
//
//                     $(remove)
//                         .on('click', function(e) {
//                             e.preventDefault();
//
//                             $(image).css('background-image', 'url()');
//                             $(input).val(null);
//                         });
//
//                     new qq.FineUploaderBasic({
//                         multiple: false,
//                         button: $(this)[0],
//                         request: {
//                             inputName: 'image_uploader',
//                             endpoint: action
//                         },
//                         callbacks: {
//                             onSubmit: function(id, filename) {
//                                 $(btn).addClass('proccessing');
//                             },
//                             onComplete: function(id, filename, response) {
//                                 $(btn)
//                                     .removeClass('proccessing');
//
//                                 if (response.result == 0) {
//                                     if (typeof response.message !== 'undefined') {
//                                         alert(response.message);
//                                     }
//                                 } else {
//                                     if ($(image)[0].tagName.toLowerCase() == 'img') {
//                                         $(image).attr('src', response.images.small);
//                                     } else {
//                                         $(image).css('background-image', 'url("' + response.images.small + '")');
//                                     }
//
//                                     $(input).val(response.src);
//                                 }
//                             }
//                         }
//                     });
//
//                     /* */
//                     $(btn).addClass('initialized');
//                 });
//         });
//     $(document)
//         .trigger('fineuploader-initialize');
//
// })(jQuery, qq);
//Input focus function
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