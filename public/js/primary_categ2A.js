$(function() {
    //

    //---- 主商品分類選單
    $.getJSON('/json/primary_categ2A.php', function(data) {
        var categAr = data,
            _html = '',
            _containerHeight = 430,
            _secondItemHeight = 30,
            _thirdItemHeight = 24,
            _remainingHeight = _containerHeight,
            _first_index = 0;

        categAr.forEach(function(a) {
            _first_index++;
            _html += _first_index > 16 ? '<li class="first_item --second_row">' : '<li class="first_item">';
            _html += '<a class="link_area" href="http://tokukai.com/yahoo_mall/categoryA.php?category=' + a["first_id"] + '">' + a["first_name"] + '</a>';
            _html += '<div class="second_wrap">';
            _html += '<div class="second_img" style="background: #fff url(' + a["first_img"] + ') center no-repeat;"></div>';
            _html += '<ul class="second_list">';
            a['second_list'].forEach(function(b) {
                _html += '<li class="second_item">';
                _html += '<a class="link_area" href="http://tokukai.com/yahoo_mall/categoryA.php?category=' + b["second_id"] + '">' + b["second_name"] + '</a>';
                _html += '<div class="third_wrap">';
                _html += '<ul class="third_list">';
                // console.log(i == 0, b["second_name"], _remainingHeight);
                b['third_list'].forEach(function(c) {
                    _html += '<li class="third_item">';
                    _html += '<a class="link_area" href="http://tokukai.com/yahoo_mall/categoryA.php?category=' + c["third_id"] + '">' + c["third_name"] + '</a>';
                    _html += '</li>';
                }, this)
                _html += '</ul>';
                _html += '</div>';
                _html += '</li>';
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