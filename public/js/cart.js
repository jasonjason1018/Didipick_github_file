
function in_cart(src,store,item,links,flag){
	if(links == 0){
		var spec = document.buyAction.specifictation_id.value;
		var num = document.buyAction.num.options[document.buyAction.num.selectedIndex].value;
		var jprice = document.buyAction.jp_price.value;
		var tprice = document.buyAction.tw_price.value;
		if(spec != ""){
			location = '../incart.php?src='+src+'&store='+encodeURIComponent(store)+'&item='+encodeURIComponent(item)+'&spec='+encodeURIComponent(spec)+'&num='+encodeURIComponent(num)+'&jprice='+encodeURIComponent(jprice)+'&tprice='+encodeURIComponent(tprice)+'&links='+encodeURIComponent(links)+'&flag='+encodeURIComponent(flag);
		}else{
			alert("請選擇規格");
		}
	}else{
		var spec = document.buyAction.specifictation_id.value;
		var num = document.buyAction.num.options[document.buyAction.num.selectedIndex].value;
		var jprice = document.buyAction.jp_price.value;
		var tprice = document.buyAction.tw_price.value;
		if(spec != ""){
			getData('../incart.php?src='+src+'&store='+encodeURIComponent(store)+'&item='+encodeURIComponent(item)+'&spec='+encodeURIComponent(spec)+'&num='+encodeURIComponent(num)+'&jprice='+encodeURIComponent(jprice)+'&tprice='+encodeURIComponent(tprice)+'&links='+encodeURIComponent(links)+'&flag='+encodeURIComponent(flag),'cartNum');
			alert('已加入購物車');
		}else{
			alert("請選擇規格");
		}
	}
}