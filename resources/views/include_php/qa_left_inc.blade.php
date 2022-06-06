<div class="widget widget_links product_lbox">
	<h4>{{$qa_type}}</h4>
	<ul>
		@if($qa_type == '常見問題')
			<li><a href="/didipick_qa" title="常見問題" class="active">常見問題</a></li>
		@else
			<li><a href="/didipick_qa" title="常見問題">常見問題</a></li>
		@endif
		@if($qa_type == '購物流程')
			<li><a href="/didipick_shoppingprocess" title="購物流程" class="active">購物流程</a></li>
		@else
			<li><a href="/didipick_shoppingprocess" title="購物流程">購物流程</a></li>
		@endif
		@if($qa_type == '關於直直買')
			<li><a href="/didipick_about" title="關於直直買" class="active">關於直直買</a></li>
		@else
			<li><a href="/didipick_about" title="關於直直買">關於直直買</a></li>
		@endif
	</ul>
</div>