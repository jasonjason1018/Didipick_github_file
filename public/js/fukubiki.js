$(document).ready(function() {
    // 點抽獎按鈕時執行以下
    $('.fukubtn').click(function(){
        // 在class fukubiki的div中加入shake樣式
        $('.fukubiki').addClass('shake-chunk');
        // 點擊按鈕2000毫秒後執行以下操作
        setTimeout(function(){
            // 在class fukubiki的div中刪除shake樣式
            $('.fukubiki').removeClass('shake-chunk');
            // 在class fukubiki的div中刪除shake樣式
            // $('.fukubiki').removeClass('shake-fuku');
            // fukubiki按鈕隱藏
            $('.fukubtn').css("display" , "none");
            // 
            $('#bac_img').attr('src', '../image/fuku-result.svg');
            // 
            $('.fuku-result').css("display" , "block");
        },2000);
    });

    // shake時抽獎按鈕隱藏
    var theButton = document.getElementById('fuku-button');

    function hideTheButton() {
        this.style.display = 'none';
    }

    function addEvent(target, type, handler) {
        if (target.addEventListener) {
            target.addEventListener(type, handler, false);
        } else if (target.attachEvent) {
            target.attachEvent('on' + type, function() {
                return handler.call(target, window.event);
            });
        } else {
            target['on' + type] = handler;
        }
    }

    addEvent(theButton, 'click', hideTheButton);
});