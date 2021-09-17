$(function() {
    //


    if ($('#recommend-box').length != 0) {

        var items = $('#merch-items'),
            item = items.find('.merch_item'),
            item_length = item.length,
            item_width = item.outerWidth(true),
            item_limit = 6 - 1, // 讓列表會出現一個空白
            index = 0;
        items.css({
            'height': item.height() + 'px',
            'width': item_length * item_width
        });

        function recomScroll() {
            if (index < 0) {
                index = 0;
            } else if (index > item_length - item_limit) {
                index = item_length - item_limit;
            }
            items.animate({
                left: item_width * index * -1,
            }, 400);
        }
        $('#prev').click(function() {
            index--;
            recomScroll();
        })
        $('#next').click(function() {
            index++;
            recomScroll();
        })

    }

    // 規格選擇
    var $speci_btn = $('.js-specification'),
        $speci_lb = $('#lb_speci'),
        $hidden_input = $('#specifictation_id');
    $speci_btn.click(function() {
        $speci_lb.addClass('is-on');
        $('body').addClass('hide_scroll');
    })
    $(document).on('click', '.js-confirm_speci', function() {
        if ($speci_lb.find('input:checked').length !== 0) {
            $hidden_input.attr('value', $speci_lb.find('input:checked').val());
            $hidden_input.parent().addClass('z-get_value');
            // console.log($hidden_input.val());
        } else {
            // console.log('未選擇規格');
        }
        $speci_lb.removeClass('is-on');
        $('body').removeClass('hide_scroll');
    })
    $(document).on('click', '.js-cancel_speci', function() {
        $speci_lb.removeClass('is-on');
        $('body').removeClass('hide_scroll');
    })

    // 運費試算
    var $estimate = $('#estimateBOX');
    $(document).on('click', '.js-estimate', function() {
        $estimate.addClass('z-show');
    })
    $(document).on('click', '.js-estimate-out', function() {
        $estimate.removeClass('z-show');
    })



    //


})


$(window).load(function() {
    // 商品圖 Lightbox
    var lb_html = "<div id='lb_photo'>\
                        <div class='lb_mask lb_photoClose'></div>\
                        <div class='lb_content' style='%style1'>\
                            <div class='lb_photoContainer'>\
                                <img class='lb_img' src='%1'>\
                            </div>\
                            <div class='lb_control'>\
                                <div class='lb_prev' data-variable='-1'></div>\
                                <div class='lb_next' data-variable='1'></div>\
                            </div>\
                            <div class='lb_dataContainer'>\
                                <div class='lb_data'>\
                                    <div class='lb_detail'>\
                                        <span class='lb_number'>第&ensp;%2&ensp;張圖片，共&ensp;%3&ensp;張。</span>\
                                    </div>\
                                    <div class='lb_timesIcon lb_photoClose'></div>\
                                </div>\
                            </div>\
                        </div>\
                    </div>",
        $module = $('#photo-module');

    if ($module.length !== 0) {

        var imgSrcAr = [],
            imgWidthAr = [],
            imgHeightAr = [],
            $group = $module.find('.photo__item'),
            $primary = $('#primary-photo'),
            $primaryImg = $primary.find('img'),
            _maxmium = $group.length,
            _nowIndex = 0,
            _windowWidth = $(window).width(),
            _windowHeight = $(window).height();

        function renderLb() {

            console.log(_nowIndex);
            var output = lb_html;

            output = output.replace('%1', imgSrcAr[_nowIndex]);
            output = output.replace('%2', (_nowIndex + 1));
            output = output.replace('%3', _maxmium);
            // output = output.replace('%style1', 'width: ' + (imgWidthAr[_nowIndex] < _windowWidth * 0.9 ? imgWidthAr[_nowIndex] : _windowWidth * 0.9) + 'px;\
                                                // height: ' + (imgHeightAr[_nowIndex] < _windowHeight - 100 ? 'auto' : _windowHeight - 100 + 'px;'));
            output = output.replace('%style1', 'width: ' + (_windowWidth * 0.9) + 'px;\
                                                height: ' + (imgHeightAr[_nowIndex] < _windowHeight - 100 ? 'auto' : _windowHeight - 100 + 'px;'));

            $(output).appendTo('body');
            $('#lb_photo').fadeIn('slow');
        }

        function toggleLb() {

            $('.lb_img').attr('src', imgSrcAr[_nowIndex]);
            $('.lb_number').html('第&ensp;' + (Number(_nowIndex) + 1) + '&ensp;張圖片，共&ensp;' + _maxmium + '&ensp;張。');
            $('.lb_content').css({
                'width': (_windowWidth * 0.9) + 'px',
                'height': imgHeightAr[_nowIndex] < _windowHeight - 100 ? 'auto' : (_windowHeight - 100 + 'px')
            });

        }


        // 偵測圖片全部的張數
        // console.log(_maxmium);
        $module.find('.photo__item img').each(function() {
            imgSrcAr.push($(this).attr('src'));
            imgWidthAr.push($(this)[0].naturalWidth);
            imgHeightAr.push($(this)[0].naturalHeight);
        })

        // 圖片網址的陣列
        // console.log(imgSrcAr);

        $primary.click(function() {
            _nowIndex = imgSrcAr.indexOf($(this).find('img').attr('src'));
            renderLb();
        })

        $group.click(function() {
            _nowIndex = $(this).index();
            renderLb();
        })

        $group.on('mouseenter', function() {
            $primaryImg.attr('src', $(this).find('img').attr('src'));
        })

        $(document).on('click', '.lb_photoClose', function() {
            $('#lb_photo').fadeOut('slow', function() {
                $('#lb_photo').remove();
            })
        })
        $(document).on('click', '.lb_prev, .lb_next', function() {
            if ($(this).data('variable') == '1') {
                if (_nowIndex >= _maxmium - 1) {
                    return
                }
            } else {
                if (_nowIndex <= 0) {
                    return
                }
            }
            _nowIndex = _nowIndex + Number($(this).data('variable'));
            toggleLb(_nowIndex);
        })

        var KEYCODE_ESC = 27;
        var KEYCODE_LEFTARROW = 37;
        var KEYCODE_RIGHTARROW = 39;
        $(document).keydown(function(event) {
            // console.log(event)
        });

    }
})

// function setHeight() {
//     var $iframe = document.getElementById("iframe");
//     if (document.getElementById) {
//         if ($iframe && !window.opera) {
//             if ($iframe.contentDocument && $iframe.contentDocument.body.offsetHeight) {
//                 $iframe.height = $iframe.contentDocument.body.offsetHeight;
//             } else if ($iframe.Document && $iframe.Document.body.scrollHeight) {
//                 $iframe.height = $iframe.Document.body.scrollHeight;
//             }
//         }
//     }
// }
