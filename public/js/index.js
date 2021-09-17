$(function() {
    //

    if ($('#slide').length != 0) {

        var $slide = $('#slide-items'),
            $slide_item = $('.slide__item'),
            $slide_dots = $('#slide-dots'),
            _length = $slide_item.length,
            max = _length - 1,
            index = 0,
            intervalTime = 6000,
            animateTime = 700,
            animateBezier = 'easeOutQuad';

        function setSlick() {

            if (index > max) {
                $slide.stop().animate({ left: '-' + (max + 1) * 100 + '%' }, animateTime, animateBezier, function() {
                    $slide.animate({ left: 0 }, 0);
                });
                index = 0;
            } else {
                $slide.stop().animate({ left: '-' + index * 100 + '%' }, animateTime, animateBezier);
            }
            // console.log('set Slick to '+index);
            $slide_dots.find('.z-active').removeClass('z-active');
            $slide_dots.find('.dot:eq(' + index + ')').addClass('z-active');


            // console.log( index );
        }

        (function() {

            for (var i = 0; i < _length; i++) {
                $slide_dots.append(i === 0 ? '<div class="dot z-active"></div>' : '<div class="dot"></div>');
            }
            $slide.append($('.slide__item').first().clone());

        })();

        var autoPlay;

        function setAutoPlay() {
            autoPlay = setInterval(function() {
                index += 1;
                // console.log( index );
                setSlick(index);
            }, intervalTime);
        }
        setAutoPlay();

        $('#slide').on('click', '.slide__dots .dot', function() {
            index = $(this).index();
            setSlick();
            clearInterval(autoPlay);
            setAutoPlay();
        });

    }

    if( $('.row_good').length!=0 ) {
        $('.row_good').on('click', '.good__tabs .item', function(){
            var vTarget = $(this).data('tab');
            $(this).addClass('is-active').siblings().removeClass('is-active')
            $('.row_good .midd__block').hide();
            $('.row_good #'+vTarget).show();
        })
    }

    //
})