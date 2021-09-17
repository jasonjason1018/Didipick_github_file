$(function() {
    //

    function genHtml (ar) {
        var html = '',
            i = 0;
        ar.forEach(function (a) {
            i++;
            html += i > 16 ? '<li class="first_item z-second_row">' : '<li class="first_item">';
            html += '<a class="link_area" href="category.html?category=' + a["first_id"] + '">' + a["first_name"] + '</a>';
            html += '<div class="second_wrap">';
            html += '<div class="head">';
            html += '<div class="second_title">' + a["first_name"] + '</div>';
            html += '<div class="mid">';
            html += '<ul class="second_list">';

            var _second_index = 0;
            a['second_list'].forEach(function (b) {
                _second_index++;
                if(_second_index>18) {
                    html += '</ul>';
                    html += '<ul class="second_list">';
                    _second_index = 0;
                }
                html += '<li class="second_item">';
                html += '<a class="link_area" href="category.html?category=' + b["second_id"] + '">' + b["second_name"] + '</a>';
                html += '</li>';
            })
            html += '</ul>';
            html += '<div class="second_img" style="background: #fff url(' + a["first_img"] + ') center no-repeat;"></div>';
            html += '</div>'; // .mid
            html += '</div>'; // .second_wrap
            html += '</li>'; // .first_item
        }, this);

        return html;
    }

    // ---- 主商品分類選單
    $.getJSON('/json/primary_categ.json', function (data) {
        var categAr = data;

        // return htmlArr.join('\n');
        // return _html;
        $('#first_list').html( genHtml(categAr) );
        // $('#first_list .second_wrap').each(function(){
        //     $(this).css('width', $(this).find('.second_list').length*160 + 222 +'px');
        // })
        // console.log(_html);
    })

    // ---- 逛網站分類選單
    $.getJSON('/json/primary_categ.json', function (data) {
        var walkingAr = data;

        // return htmlArr.join('\n');
        // return _html;
        $('#walking_list').html( genHtml(walkingAr) );
        // $('#first_list .second_wrap').each(function(){
        //     $(this).css('width', $(this).find('.second_list').length*160 + 222 +'px');
        // })
        // console.log(_html);
    })
    
    $('.primary_categ_wrap').on('click', '.placehold', function() {
        var self = $(this),
            other = self.parent().siblings('.primary_categ');
        
        other.find('.placehold').removeClass('z-active');
        self.toggleClass('z-active');
        other.find('.first_wrap').removeClass('z-active');
        self.siblings('.first_wrap').toggleClass('z-active');

        if( $('.primary_categ_wrap .placehold').hasClass('z-active') ) {
            $('.primary_categ_wrap').addClass('z-active');
        }else{
            $('.primary_categ_wrap').removeClass('z-active');
        }
    })
    $('.primary_categ_wrap').on('mouseover', '.first_list', function() {
        $('.primary_categ_wrap').addClass('z-active');
        $(this).parent('.first_wrap').addClass('z-active');
        $(this).parent('.first_wrap').siblings('.placehold').addClass('z-active');
    })
    $('.primary_categ_wrap').on('mouseleave', '.second_wrap', function() {
        $('.primary_categ_wrap, .primary_categ_wrap .placehold').removeClass('z-active');
        $(this).parents('.first_wrap').removeClass('z-active');
    })

    //
})
