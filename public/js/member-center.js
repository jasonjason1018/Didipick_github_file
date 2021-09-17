$(function() {
    //

    var _scrollTop = 0,
        _headerHeight = $('.header_wrap').outerHeight(),
        $memberNav = $('.member_nav_wrap'),
        $memberListsWrap = $('.member__lists_wrap');
    console.log($memberListsWrap);
    $(window).scroll(function() {

        _scrollTop = $(window).scrollTop();
        if (_scrollTop > 0 && _scrollTop < _headerHeight) {
            $memberNav.css("height", "calc(100vh - " + (_headerHeight - _scrollTop) + "px");
            // $memberListsWrap.css("height", "calc(100% - " + (_headerHeight - _scrollTop + 20) + "px");

        } else if (_scrollTop == 0) {
            $memberNav.css("top", _headerHeight + "px");
            // $memberListsWrap.css("height", "100%");
        } else {
            $memberNav.css({ "top": _scrollTop + "px", "height": "100vh" });
            // $memberListsWrap.css("height", "calc(100% - 40px)");
        }

    }).scroll();

    // console.log(location.href.split('/').pop().split('.')[0]);


    //
})