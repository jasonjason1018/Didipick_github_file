function mfavory(no){
    	name = $("#m_ar_id"+no).val();
    	$.ajax({
			type:"GET",
			url:"/add_favory_master",
			data:{no:no},
			success:function(resp){
				$("#m_star"+no).removeAttr("onclick");
				$("#m_star"+no).attr("onclick", "mcancelfavory("+no+")");
			}
		});
    }
    function mcancelfavory(no){
    	name = $("#m_ar_id"+no).val();
    	$.ajax({
			type:"GET",
			url:"/cancel_favory_master",
			data:{no:no},
			success:function(resp){
				$("#m_star"+no).removeAttr("onclick");
				$("#m_star"+no).attr("onclick", "mfavory("+no+")");
			}
		});
    }
    function pfavory(no){
    	name = $("#m_ar_id"+no).val();
    	$.ajax({
			type:"GET",
			url:"/add_favory_product",
			data:{no:no},
			success:function(resp){
				$("#p_star"+no).removeAttr("onclick");
				$("#p_star"+no).attr("onclick", "pcancelfavory("+no+")");
			}
		});
    }
    function pcancelfavory(no){
    	name = $("#m_ar_id"+no).val();
    	$.ajax({
			type:"GET",
			url:"/cancel_favory_product",
			data:{no:no},
			success:function(resp){
				$("#p_star"+no).removeAttr("onclick");
				$("#p_star"+no).attr("onclick", "pfavory("+no+")");
			}
		});
    }
    function addtocart(){
    	quantity = $("#product_quantity").val();
    	No = $("#product_No").val();
    	$.ajax({
			type:"GET",
			url:"/addtocart",
			data:{No:No, quantity:quantity},
			success:function(resp){
				alert(resp);
				if(resp != '該商品已在購物車內'){
					a = $("#cartquantity").text();
					if(a == ''){
						a = 0;
					}
					$("#cartquantity").text(parseInt(a)+parseInt(1));
				}
			}
		});
    }