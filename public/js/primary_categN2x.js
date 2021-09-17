$(function() {
    //

    // ---- 主商品分類選單
    $.getJSON('/json/primary_categNT2x.php', function(data) {
        var categAr = data,
            _html = '',
            _first_index = 0;

        categAr.forEach(function(a)
        {
            _first_index++;
            _html += _first_index > 16 ? '<li class="first_item z-second_row">' : '<li class="first_item">';
            _html += '<a class="link_area" href="categoryN.php?category=' + a["first_id"] + '">' + a["first_name"] + '</a>';
            _html += '<div class="second_wrap">';
            _html += '<div class="head">';
            _html += '<div class="second_title">' + a["first_name"] + '</div>';
            _html += '<div class="mid">';
            _html += '<ul class="second_list">';

            var _second_index = 0;
            a['second_list'].forEach(function(b) {
                _second_index++;
                if(_second_index>18) {
                    _html += '</ul>';
                    _html += '<ul class="second_list">';
                    _second_index = 0;
                }
                _html += '<li class="second_item">';
                _html += '<a class="link_area" href="categoryN.php?category=' + b["second_id"] + '">' + b["second_name"] + '</a>';
                _html += '</li>';
            })
            _html += '</ul>';
            _html += '<div class="second_img" style="background: #fff url(' + a["first_img"] + ') center no-repeat;"></div>';
            _html += '</div>'; // .mid
            _html += '</div>'; // .second_wrap
            _html += '</li>'; // .first_item
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
        $('.primary_categ_wrap .first_wrap').toggleClass('z-active');
    })
    $('.primary_categ_wrap').on('mouseover', '.first_list', function() {
        $('.primary_categ_wrap .first_wrap').addClass('z-active');
    })
    $('.primary_categ_wrap').on('mouseleave', '.second_wrap', function() {
        $('.primary_categ_wrap .first_wrap').removeClass('z-active');
    })

    //
})
