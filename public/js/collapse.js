$(function() {
    //

    // $('.collapse:eq(0)').addClass('is-unfolded').find('.collapse__show').css('height', $('.collapse:eq(0) .collapse__content').outerHeight());

    // $(window).load(function() {

    //     $('.collapse__show').each(function() {
    //         var self = $(this),
    //             content = self.find('.collapse__content');
    //         self.attr('data-height', content.outerHeight());
    //         // console.log( self.find('.collapse__content').height() );
    //     })
    //     $('.collapse').on('click', '.collapse__tri', function() {
    //         var self = $(this),
    //             collapse = self.parent(),
    //             content = self.siblings('.collapse__show');
    //         collapse.toggleClass('is-unfolded');
    //         content.animate({ 'height': collapse.hasClass('is-unfolded') ? content.data('height') : 0 }, 300);

    //     })

    // })
    $('.collapse').on('click', '.collapse__tri', function() {
        $(this).siblings('.collapse__show').slideToggle(500);
    })


    //
})