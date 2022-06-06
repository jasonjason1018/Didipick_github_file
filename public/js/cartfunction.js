		function plus(no, id){
			if($("#item_checkbox"+no).prop("checked")==true){
				$.ajax({
					type:"GET",
					url:"/cartplus",
					data:{no:no, id:id},
				});
				num = $("#num"+no).text();
				price = $("#price"+no).text();
				total = $("#total").text();
				totalweight = $("#totalweight").text();
				weight = $("#weight"+no).text();
				num = parseInt(price)+parseInt(num);
				totalnum = parseInt(price)+parseInt(total);
				math.config({
	            	number: 'BigNumber'
	        	});
				weightnum = math.parser().eval(totalweight + "+" + weight);
				$("#num"+no).text(num);
				$("#total").text(totalnum);
				$("#totalweight").text(weightnum);
				if(weightnum > 30){
					$("#totalweight").css('color', 'red');
				}else{
					$("#totalweight").css('color', '#7b872e');
				}
			}else{
				quantity = $("#quantity"+no).val();
				$("#quantity"+no).val(parseInt(quantity)-1);
			}
		}

		function minus(no, id){
			if($("#item_checkbox"+no).prop("checked")==true){
				if($("#quantity"+no).val() > '1'){
					$.ajax({
						type:"GET",
						url:"/cartminus",
						data:{no:no, id:id},
					});
					total = $("#total").text();
					num = $("#num"+no).text();
					price = $("#price"+no).text();
					totalweight = $("#totalweight").text();
					weight = $("#weight"+no).text();
					num = parseInt(num)-parseInt(price);
					totalnum = parseInt(total)-parseInt(price);
					math.config({
	            		number: 'BigNumber'
	        		});
					weightnum = math.parser().eval(totalweight + "-" + weight);
					$("#num"+no).text(num);
					$("#total").text(totalnum);
					$("#totalweight").text(weightnum);
					if(weightnum > 30){
						$("#totalweight").css('color', 'red');
					}else{
						$("#totalweight").css('color', '#7b872e');
					}
					
				}
			}else{
				quantity = $("#quantity"+no).val();
				$("#quantity"+no).val(parseInt(quantity)+1);
			}
		}

		function input_quantity(no, id, size){
			if($("#item_checkbox"+no).prop("checked")==true){
				quantity = $("#quantity"+no).val();
				$.ajax({
					type:"GET",
					url:"/cart_input_quantity",
					data:{no:no, id:id, quantity:quantity},
					success:function(resp){
						//console.log(resp);
					}
				});
				price = $("#price"+no).text();
				math.config({
	            		number: 'BigNumber'
	        		});
				pricenum = math.parser().eval(price + "*" + quantity);
				$("#num"+no).text(pricenum);
				var total = 0;
		     	for(var i=0;i<size;i++){
			    	tt = $("#num"+i).text();
		     		total = parseInt(total)+parseInt(tt);
			    }
			    math.config({
            		number: 'BigNumber'
        		});
        		var tt_wf = 0;
        		for(var i =0;i<size;i++){
        			weight = $("#weight"+i).text();
        			quantity = $("#quantity"+i).val();
        			tt_w = math.parser().eval(weight + "*" + quantity);
        			tt_wf = math.parser().eval(tt_wf + "+" + tt_w);
        		}
				$("#total").text(total);
				$("#totalweight").text(tt_wf);
				if(tt_wf > 30){
					$("#totalweight").css('color', 'red');
				}else{
					$("#totalweight").css('color', '#7b872e');
				}
			}
		}

		function countprice(no, size){//ok
			if($("#item_checkbox"+no).prop("checked")==true){
				if($('input[name="user_active_col"]:checked')){
					$("#check_all").prop("checked", true);
					num = $("#num"+no).text();
					total = $("#total").text();
					math.config({
	            		number: 'BigNumber'
	        		});
					totalnum = math.parser().eval(total + "+" + num);
					$("#total").text(totalnum);
					quantity = $("#quantity"+no).val();
					weight = $("#weight"+no).text();
					totalweight = $("#totalweight").text();
					weight = math.parser().eval(weight + "*" + quantity);
					totalweight = math.parser().eval(totalweight + "+" + weight);
					$("#totalweight").text(totalweight);
					if(totalweight > 30){
						$("#totalweight").css('color', 'red');
					}else{
						$("#totalweight").css('color', '#7b872e');
					}
					$("#quantity"+no).prop('disabled', false);
				}
			}else{
				$("#check_all").prop("checked", false);
				num = $("#num"+no).text();
				total = $("#total").text();
				math.config({
            		number: 'BigNumber'
        		});
				totalnum = math.parser().eval(total + "-" + num);
				$("#total").text(totalnum);
				quantity = $("#quantity"+no).val();
				weight = $("#weight"+no).text();
				totalweight = $("#totalweight").text();
				weight = math.parser().eval(weight + "*" + quantity);
				totalweight = math.parser().eval(totalweight + "-" + weight);
				$("#totalweight").text(totalweight);
				if(totalweight > 30){
					$("#totalweight").css('color', 'red');
				}else{
					$("#totalweight").css('color', '#7b872e');
				}
				$("#quantity"+no).prop('disabled', true);
			}
		}

		function check_all(size){//ok
			if($("#check_all").prop("checked")==true){
				$("input[name='user_active_col[]']").each(function() {
		         	$(this).prop("checked", true);
		     	});
		     	var total = 0;
		     	for(var i=0;i<size;i++){
			    	tt = $("#num"+i).text();
		     		total = parseInt(total)+parseInt(tt);
			    }
			    math.config({
            		number: 'BigNumber'
        		});
        		var tt_wf = 0;
        		for(var i =0;i<size;i++){
        			weight = $("#weight"+i).text();
        			quantity = $("#quantity"+i).val();
        			tt_w = math.parser().eval(weight + "*" + quantity)
        			tt_wf = math.parser().eval(tt_wf + "+" + tt_w)
        		}
				$("#total").text(total);
				$("#totalweight").text(tt_wf);
				for(var i=0;i<size;i++){
			     	$("#quantity"+i).prop('disabled', false);
			     }
			     totalweight = $("#totalweight").text();
			     if(totalweight > 30){
					$("#totalweight").css('color', 'red');
				 }else{
					$("#totalweight").css('color', '#7b872e');
				 }
		   	}else{
			     $("input[name='user_active_col[]']").each(function() {
			         $(this).prop("checked", false);
			     });
			     $("#total").text("0");
			     $("#totalweight").text("0");
			     for(var i=0;i<size;i++){
			     	$("#quantity"+i).prop('disabled', true);
			     }
			     totalweight = $("#totalweight").text();
			     if(totalweight > 30){
					$("#totalweight").css('color', 'red');
				 }else{
					$("#totalweight").css('color', '#7b872e');
				 }
		   	}
		}
		
		function check_out(size){
			weight = $("#totalweight").text();
			if(weight>30){
				alert('訂單重量超過三十公斤，請拆分成兩筆訂單');
			}else{
				var data = "";
				weight = $("#totalweight").text();
				tt = $("#total").text();
				if(tt <= 0){
					alert("請選擇要結帳的商品");
				}else{
					for(var i =0;i<size;i++){
						if($("#item_checkbox"+i).prop("checked")==true){
							var name = $("#product_name"+i).text();
							data += name+',';
						}
					}
					couponname = $("#couponnum").val();
					couponprice = $("#coupon").text();
					$.ajax({
						type:"GET",
						url:"/checkoutsetsession",
						data:{data:data, total:tt, weight:weight},
						success:function(resp){
							//alert(resp);
							window.location = "/didipick_checkout";
						}
					});
				}
			}
		}

		function favoryaddtocart(no, No){
			quantity = $("#quantity_f"+no).val();
			$.ajax({
				type:"GET",
				url:"/addtocart",
				data:{quantity:quantity, No:No},
				success:function(resp){
					location.reload();
				}
			});
			
		}

		function coupon(){
			/*code = $("#couponcode").val();
			if(code ==''){
				alert('請輸入優惠碼');
			}else{
				$("#couponnum").val(code);
				$.ajax({
					type:"POST",
					url:"cart_plus_minus_delete.php",
					data:{type:'coupon', code:code},
					success:function(resp){
						//alert(resp);
						
						if(resp == '優惠券已過期或優惠碼錯誤'){
							alert(resp);
						}else if(resp == '該優惠券已使用'){
							alert(resp);
						}else{
							$("#couponcode").prop('disabled', true);
							$("#couponbtn").hide();
							total = $("#total").text();
							$("#coupon").text(resp);
							tt = math.parser().eval(total + "+" + resp)
							$("#total").text(tt);
							//window.location = "checkout.php";
						}
					}
				});
			}*/
		}