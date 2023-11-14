/**
 * WordPress Theme www2-dw2023: js/common.js
 *
 * @author akaru inc.
 */
(function($) {

/* spmenu
---------------------------------------------------------------------------- */
$(function() {
    var $spnav = $('.group');
    var $spnavarea = $('.spnav');

    // Nav Toggle Button
    $('.nav-toggle').click(function(){
        $spnav.toggleClass('is-open');
        $spnavarea.toggleClass('is-open');
    });

    // megamenu tablet
    let $megaMenu = $('.gnav-toggle');
    const fadeOutMenu = () => {
        $megaMenu.removeClass('is-open');
    }

    $megaMenu.on('touchend', function(e) {
        let $self = $(e.target);
        if (!$self.hasClass('is-open')) {
            fadeOutMenu();
        }
        $self.toggleClass('is-open');
    });

    $(document).on('click touchend', function (e) {
        if (!$(e.target).closest($megaMenu).length) {
            fadeOutMenu();
        }
    });

    // megamenu tab
    $('.is-tab').on("keydown", function(e) {
        if (e.which == 13) {
            var s = $(this).text();
            $('.is-tab').each(function(i, elem) {
                if ($(elem).text() != s) {
                    $('.gnav-mega').removeClass('focused');
                }
            });
            if ($(this).hasClass('focused')) {
                $(this).siblings('.gnav-mega').removeClass('focused');
                $(this).removeClass('focused');
            } else {
                $(this).siblings('.gnav-mega').addClass('focused');
                $(this).addClass('focused');
            }
        }
    });

    // megamenu pc
    $(".gnav-toggle")
    .mouseover(function(){
        $("> .gnav-mega",this).addClass('focused');
    })
    .mouseout(function(){
        $("> .gnav-mega",this).removeClass('focused');
    });
});


// accordion
$(function () {
    $('.list-mh:first').addClass('is-open');
    $('.sya_container ul:first').addClass('is-open');
    $('.list-mh').click(function() {
        $(this).toggleClass('is-open');
        $(this).next('.sya_container ul').slideToggle();
    });
});

// accordion tag
$(function () {
    $('.list-mh-tag').click(function() {
        $(this).toggleClass('is-open');
        $(this).next('.posts-by-tag-list').slideToggle();
    });
});

/* 
---------------------------------------------------------------------------- */

})(jQuery);