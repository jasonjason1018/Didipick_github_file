$(function() {
    //

    //---- 主商品分類選單
    $.getJSON('/json/primary_categ2.php', function(data) {
        var categAr = data,
            _html = '',
            _containerHeight = 430,
            _secondItemHeight = 30,
            _thirdItemHeight = 24,
            _remainingHeight = _containerHeight;

        categAr.forEach(function(a) {
            _html += '<li class="first_item">';
            _html += '<a class="link_area" href="http://tokukai.com/yahoo_mall/category.php?category=' + a["first_id"] + '">' + a["first_name"] + '</a>';
            _html += '<div class="second_wrap">';
            _html += '<div class="second_img"><img src="http://fakeimg.pl/200x460"></div>'
            _html += '<ul class="second_list">';
            a['second_list'].forEach(function(b, i) {
                if (_remainingHeight - (i == 0 ? _secondItemHeight : _secondItemHeight + 10) < 0) {
                    _remainingHeight = _containerHeight;
                    _html += '</ul>';
                    _html += '<ul class="second_list">';
                }
                _html += '<li class="second_item">';
                _html += '<a class="link_area" href="http://tokukai.com/yahoo_mall/category.php?category=' + b["second_id"] + '">' + b["second_name"] + '</a>';
                _html += '</li>';
                _remainingHeight = _remainingHeight - (i == 0 ? _secondItemHeight : _secondItemHeight + 10);
                console.log(i == 0, b["second_name"], _remainingHeight);
                b['third_list'].forEach(function(c) {
                    if (_remainingHeight - _thirdItemHeight < 0) {
                        _remainingHeight = _containerHeight;
                        _html += '</ul>';
                        _html += '<ul class="second_list">';
                    }
                    _html += '<li class="third_item">';
                    _html += '<a class="link_area" href="http://tokukai.com/yahoo_mall/category.php?category=' + c["third_id"] + '">' + c["third_name"] + '</a>';
                    _html += '</li>';
                    _remainingHeight = _remainingHeight - _thirdItemHeight;
                    console.log(c["third_name"], _remainingHeight);
                }, this)
            })
            _html += '</ul>';
            _html += '</div>';
            _html += '</li>';
            _remainingHeight = _containerHeight;
        }, this);
        // return htmlArr.join('\n');
        // return _html;
        $('#first_list').html(_html);
        // $('#first_list .second_wrap').each(function(){
        //     $(this).css('width', $(this).find('.second_list').length*160 + 222 +'px');
        // })
        // console.log(_html);
    })

    $('.primary_categ_wrap').on('click', '.placehold', function() {
        $('.primary_categ_wrap .first_wrap').toggleClass('--active');
    })
    $('.primary_categ_wrap').on('mouseover', '.first_list', function() {
        $('.primary_categ_wrap .first_wrap').addClass('--active');
    })
    $('.primary_categ_wrap').on('mouseleave', '.second_wrap', function() {
            $('.primary_categ_wrap .first_wrap').removeClass('--active');
        })
        //
})

// $(window).ready(function() {
//     //---- LINE 分享
//     LineIt.loadButton();
// })