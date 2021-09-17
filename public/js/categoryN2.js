$(function()
{
	function checkHash()
	{
		$('.slide_btn').removeClass('is-active');
		if(location.hash=="#row") {
			$('#pictureList').hide();
			$('#rowList').show();
			$('.slide_btn.z-row').addClass('is-active');
		}else{
			$('#pictureList').show();
			$('#rowList').hide();
			$('.slide_btn.z-picture').addClass('is-active');
		}

	}
	$('.slide_btns').on('click', '.slide_btn', function(){
		var _hash = $(this).data('hash');
		location.hash = _hash;
	})
	$(window).on('hashchange', function(){
		checkHash();
	})
	checkHash();
	$.getJSON('/json/primary_categN2.php'+location.search, function(data) {
		var categAr = data,
			_html = '',
			_first_index = 0;

		categAr.forEach(function(a)
		{
			_first_index++;
			_html += _first_index > 16 ? '<li class="item z-first z-second_row">' : '<li class="item z-first">';
			_html += '<a href="category.php?category=' + a["first_id"] + '">' + a["first_name"] + '</a>';
			_html += '<div class="second_cata__list">';
			_html += '<ul class="items">';

			var _second_index = 0;
			a['second_list'].forEach(function(b) {
				_second_index++;
				if(_second_index>18) {
					_html += '</ul>';
					_html += '<ul class="items">';
					_second_index = 0;
				}
				_html += '<li class="item">';
				_html += '<a href="category.php?category=' + b["second_id"] + '">' + b["second_name"] + '</a>';
				_html += '</li>';
			})
			_html += '</ul>';
			_html += '</div>'; // .second_wrap
			_html += '</li>'; // .first_item
		}, this);

		$('#cata').html(_html);

	})
})
