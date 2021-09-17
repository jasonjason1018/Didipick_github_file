$(function() {
    //

    $('.js-advance_label').on('click', '.check__label', function() {
        if (document.getElementById($(this).attr('for') + '_wrap')) {
            var target = $('#' + $(this).attr('for') + '_wrap');
            target.show().siblings('.advance__content').hide();
            target.parent().css('max-height', target.outerHeight());
        } else {
            var target_parent = $('#' + $(this).parents('.js-advance_label').attr('id').replace('_label', ''));
            console.log('no target!')
            target_parent.css('max-height', 0);
        }


        // console.log('1')
    })



    //
})

function setScrollListener(x) {
    _scrollTop = $(window).scrollTop();
    // console.log(_scrollTop);
    if (_scrollTop >= x) {
        $('.adjust_top').animate({
            top: (_scrollTop - x) + "px"
        }, 0);
        console.log('a');
    } else {
        $('.adjust_top').animate({
            top: 0
        }, 0);
        console.log('b');
    }
}

$(function() {

    $('#js-form_label').on('click', '.check__label', function() {
        var _for = $(this).attr('for');
        $('.payway_form').hide();
        $('#' + $(this).attr('for') + '_form').show();

    })

    var _scrollCheckTimer = null,
        _scrollDelay = 200,
        _scrollTop = 0;


    $(window).scroll(function() {
        clearTimeout(_scrollCheckTimer);
        // do something while scrolling

        _scrollCheckTimer = setTimeout(function() {
            // do something when scrolling stopped

        }, _scrollDelay);
    });

})