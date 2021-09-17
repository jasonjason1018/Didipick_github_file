var color_brand = '#20dca2',
    color_second = '#adadac',
    $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');


$(function() {
    //


    //-------- 表單驗證規則
    $.validator.setDefaults({
        debug: true,
        focusCleanup: true,
        onkeyup: false,
        onclick: false,
        // unhighlight: true,
        rules: {
            id: {
                required: true,
                email: true
            },
            pwd: {
                required: true,
                rangelength: [6, 20]
            },
            email: {
                required: true,
                email: true
            },
            realname: {
                required: true
            }
        },
        messages: {
            id: {
                required: "請輸入帳號",
                email: "不符合帳號格式規定"
            },
            pwd: {
                required: "請輸入密碼",
                rangelength: "密碼格式須為：6-20位字元，不含特殊符號"
            },
            email: {
                required: "請輸入電子信箱",
                email: "錯誤的電子信箱格式"
            },
            realname: {
                required: "請輸入姓名"
            }
        },
        errorElement: "span",
        errorClass: "is-error",
        errorPlacement: function(error, element) {
            $(element).parent().siblings(".input_tip").append(error);
        },
        submitHandler: function(form) {
            form.submit();
        }

    });

    $("#login_valiForm").validate();
    $("#signup1_valiForm").validate();

    var $body = $('body'),
        $lb = $('#lb');

    // swal({
    // 	title: 'Error!',
    // 	text: 'Do you want to continue',
    // 	type: 'error',
    // 	confirmButtonText: 'Cool'
    // })

    //-------- sweet alert 設定
    // $(document).on('click', '.js-addtocart', function() {
    //     swal({
    //         text: '已加入購物車',
    //         type: 'success',
    //         confirmButtonText: '確定',
    //         timer: '3000',
    //         confirmButtonColor: color_second
    //     })
    // })
    // $(document).on('click', '.js-liked', function() {
    //     swal({
    //         text: '關注成功',
    //         type: 'success',
    //         confirmButtonText: '確定',
    //         timer: '3000',
    //         confirmButtonColor: color_second
    //     })
    // })

    //-------- Search Bar 的搜尋分類選擇後的顯示文字
    $(document).on('click', '.dropdown_wrap.z-click', function(e) {
        e.stopPropagation();
        var self = $(this);
        self.toggleClass('is-show');
    })
    $('.dropdown_wrap.js-replace').on('click', '.dropdown_content .dropdown__area', function() {
        var self = $(this),
            $ddWrap = self.parents('.dropdown_wrap');
        $ddWrap.removeClass('is-show').find('.selected-text').text(self.find('.word').text());
    })
    $(document).on('click', function() {
        $('.dropdown_wrap.z-click').removeClass('is-show');
    })

    //-------- Ellipsis block
    $('.js-ellip-wrap').each(function() {
        if ($(this).find('.goods_name_wrap').height() <= 75) {
            $(this).find('.overflow_hidden').remove();
            console.log('remove');
        }
    })
    $('.js-ellip-wrap').on('click', '.js-ellip-showAll', function() {
        var self = $(this);
        self.parents('.js-ellip-wrap').toggleClass('is-showAll');
    })

    //-------- Advanced search trigger
    $('.product_list__sorting_wrap').on('click', '.advanced_trigger', function() {
        $('.advanced_sorting_wrap').toggleClass('is-show');
    })

    //-------- Tab switch
    $('.tab_module .tabs').on('click', '.tab', function() {
        $('.tab').removeClass('is-active');
        $(this).addClass('is-active');
        console.log('tri')
    })

    //-------- 開、關 Light Box function 設定
    function turnLb(a) {
        if (a) {
            $body.addClass('is-lbOn');
            $lb.addClass('is-on');
        } else {
            $body.removeClass('is-lbOn');
            $lb.removeClass('is-on');
        }
    }
    var turnOnLb = turnLb.bind(this, true),
        turnOffLb = turnLb.bind(this, false);

    //-------- .js-turnOnLb 被 click ，開啟 Light Box
    $(document).on('click', '.js-turnOnLb', function(e) {
        e.preventDefault();
        turnOnLb();
        $('#lb .content').hide()
        switch ($(this).data('lb')) {
            case 'sign':
                $('.sign_wrap').show();
                break;
            case 'auction-pop1':
                $('#overflow').show();
                break;
            case 'auction-pop2':
                $('#moneytoolow').show();
                break;
            case 'auction-pop3':
                $('#afterconfrim').show();
                break;
        }
    })

    //-------- Light Box 陰影處被 click ，關閉 Light Box
    $lb.on('click', '.js-turnOffLb', function() {
        // $('.sign_wrap').removeClass('show--signup');
        turnOffLb();
    })

    //-------- 切換 登入 & 註冊
    $('.sign_switch').on('click', '.js-signTrigger', function() {
        var self = $(this),
            _tar = self.data('tri');
        if (_tar === 'signIn') {
            $('.sign_wrap').removeClass('show--signup');
        } else {
            $('.sign_wrap').addClass('show--signup');
        }
    })

    //-------- 登入 pop 切換內容（spec_page）
    $(document).on('click', '.js-call_spec', function() {
        var self = $(this);
        $('#' + self.data('spec')).addClass('is-active');
    })

    $(document).on('click', '.js-back', function() {
        $('.spec_page').removeClass('is-active');
    })


    //---- 回頂端
    $('#totop').click(function() {
        $body.animate({ scrollTop: 0 }, 600);
    })


    //
})

// $(window).ready(function() {
//     //---- LINE 分享
//     LineIt.loadButton();
// })