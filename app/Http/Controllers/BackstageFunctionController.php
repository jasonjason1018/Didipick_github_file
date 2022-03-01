<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\didipick_product;
use App\didipick_category;
use App\didipick_brand;
use Illuminate\Support\Facades\Storage;

class BackstageFunctionController extends Controller
{

    public function product_open($sno){
    	didipick_product::where('sno', $sno)->update(['status'=>'1']);
    	return redirect('/product');
    }

    public function product_off($sno){
    	didipick_product::where('sno', $sno)->update(['status'=>'0']);
    	return redirect('/product');
    }

    public function product_delete($sno){
    	$db = new didipick_product;
    	$data = $db->all()->where('sno', '=', $sno);
    	foreach($data as $v){
    		if($v->img1 != ''){
    			$img1 = "public/".$v->img1;
    			if(Storage::exists($img1)){
    				Storage::delete($img1);
    			}else{
    				echo '沒有';
    			}
    		}
    		if($v->img2 != ''){
    			$img2 = "public/".$v->img2;
    			if(Storage::exists($img2)){
    				Storage::delete($img2);
    			}else{
    				echo '沒有';
    			}
    		}
    		if($v->img3 != ''){
    			$img3 = "public/".$v->img3;
    			if(Storage::exists($img3)){
    				Storage::delete($img3);
    			}else{
    				echo '沒有';
    			}
    		}
    		if($v->img4 != ''){
    			$img4 = "public/".$v->img4;
    			if(Storage::exists($img4)){
    				Storage::delete($img4);
    			}else{
    				echo '沒有';
    			}
    		}
    		if($v->img5 != ''){
    			$img5 = "public/".$v->img5;
    			if(Storage::exists($img5)){
    				Storage::delete($img5);
    			}else{
    				echo '沒有';
    			}
    		}
    		if($v->img6 != ''){
    			$img6 = "public/".$v->img6;
    			if(Storage::exists($img6)){
    				Storage::delete($img6);
    			}else{
    				echo '沒有';
    			}
    		}
    	}
    	didipick_product::where('sno', $sno)->delete();
    	return redirect('/product');
    }

    public function product_new(request $request){
    	if($request->pic1 == NULL){
			//echo '沒圖片1<br>';
			$picture1 = '';
    	}else{
    		$imagePath = request('pic1')->store("test", "public");
	    	$picture1 = $imagePath;
    	}
    	if($request->pic2 == NULL){
			//echo '沒圖片2<br>';
			$picture2 = '';
    	}else{
    		$imagePath = request('pic2')->store("test", "public");
	    	$picture2 = $imagePath;
    	}
    	if($request->pic3 == NULL){
    		//echo '沒圖片3<br>';
    		$picture3 = '';
    	}else{
    		$imagePath = request('pic3')->store("test", "public");
	    	$picture3 = $imagePath;
    	}
    	if($request->pic4 == NULL){
    		//echo '沒圖片4<br>';
    		$picture4 = '';
    	}else{
    		$imagePath = request('pic4')->store("test", "public");
	    	$picture4 = $imagePath;
    	}
    	if($request->pic5 == NULL){
    		//echo '沒圖片5<br>';
    		$picture5 = '';
    	}else{
    		$imagePath = request('pic5')->store("test", "public");
	    	$picture5 = $imagePath;
    	}
    	if($request->pic6 == NULL){
    		//echo '沒圖片6<br>';
    		$picture6 = '';
    	}else{
    		$imagePath = request('pic6')->store("test", "public");
	    	$picture6 = $imagePath;
    	}

    	$db = new didipick_product;
    	$db->No = $request->number;
		$db->name =  $request->name;
		$db->brand =  $request->brand;
		$db->category =  $request->category;
		$db->sku =  $request->spec;
		$db->keyword =  $request->keyword;
		$db->label =  $request->label;
		$db->brief =  $request->brief;
		$db->description =  $request->description;
		$db->quantity =  $request->quantity;
		$db->weight =  $request->weight;
		$db->img1 = $picture1;
		$db->img2 = $picture2;
		$db->img3 = $picture3;
		$db->img4 = $picture4;
		$db->img5 = $picture5;
		$db->img6 = $picture6;
		$db->shelf_on =  $request->begin_date;
		$db->shelf_off =  $request->end_date;
		$db->original_url =  $request->url;
		$db->o_price =  $request->didiprice_jp;
		$db->s_price =  $request->didiprice_tw;
		$star = $request->star;
		$nullstar = 5-round($star);//空星數量
    	if(round($star) == $star){//判斷需不需要半星
    	  $allstar = $star;//完整星星數量
    	  $halfstar = 0;//半星數量
    	}else{
    	  $a = explode('.', $star);//取得完整星星數量
    	  $allstar = $a[0];//完整星星數量
    	  $halfstar = 1;//半星數量
    	}
    	$star_str = $allstar.','.$halfstar.','.$nullstar;
    	$db->star = $star_str;
    	$db->save();
    	return redirect('/product');
    }

    public function product_edit_img_delete($img, $no, $sno){
    	if($no == 1){
    		didipick_product::where('sno', $sno)->update(['img1'=>'']);
    	}else if($no == 2){
    		didipick_product::where('sno', $sno)->update(['img2'=>'']);
    	}else if($no == 3){
    		didipick_product::where('sno', $sno)->update(['img3'=>'']);
    	}else if($no == 4){
    		didipick_product::where('sno', $sno)->update(['img4'=>'']);
    	}else if($no == 5){
    		didipick_product::where('sno', $sno)->update(['img5'=>'']);
    	}else if($no == 6){
    		didipick_product::where('sno', $sno)->update(['img6'=>'']);
    	}
    	$path = 'public/test/'.$img;
    	if (Storage::exists($path)) {
            Storage::delete($path);
        }
        return redirect()->back();
    }

    public function product_img_view($img){
    	//echo '<img src="/storage/test/'.$img.'">';
    	$img = "/storage/test/".$img;
    	return view('Admin.view_img', ['img'=>$img]);
    }

    public function product_edit_update(request $request){
    	if($request->pic1 == NULL){
			//echo '沒圖片1<br>';
			$picture1 = '';
    	}else{
    		$path1 = "public/".$request->pic1;
    		if(Storage::exists($path1)){
    			$picture1 = $request->pic1;
    		}else{
    			$imagePath = request('pic1')->store("test", "public");
	    		$picture1 = $imagePath;
    		}
    	}
    	if($request->pic2 == NULL){
			//echo '沒圖片2<br>';
			$picture2 = '';
    	}else{
    		$path2 = "public/".$request->pic2;
    		if(Storage::exists($path2)){
    			$picture2 = $request->pic2;
    		}else{
    			$imagePath = request('pic2')->store("test", "public");
	    		$picture2 = $imagePath;
    		}
    	}
    	if($request->pic3 == NULL){
    		//echo '沒圖片3<br>';
    		$picture3 = '';
    	}else{
    		$path3 = "public/".$request->pic3;
    		if(Storage::exists($path3)){
    			$picture3 = $request->pic3;
    		}else{
    			$imagePath = request('pic3')->store("test", "public");
	    		$picture3 = $imagePath;
    		}
    	}
    	if($request->pic4 == NULL){
    		//echo '沒圖片4<br>';
    		$picture4 = '';
    	}else{
    		$path4 = "public/".$request->pic4;
    		if(Storage::exists($path4)){
    			$picture4 = $request->pic4;
    		}else{
    			$imagePath = request('pic4')->store("test", "public");
	    		$picture4 = $imagePath;
    		}
    	}
    	if($request->pic5 == NULL){
    		//echo '沒圖片5<br>';
    		$picture5 = '';
    	}else{
    		$path5 = "public/".$request->pic5;
    		if(Storage::exists($path5)){
    			$picture5 = $request->pic5;
    		}else{
    			$imagePath = request('pic5')->store("test", "public");
	    		$picture5 = $imagePath;
    		}
    	}
    	if($request->pic6 == NULL){
    		//echo '沒圖片6<br>';
    		$picture6 = '';
    	}else{
    		$path6 = "public/".$request->pic6;
    		if(Storage::exists($path6)){
    			$picture6 = $request->pic6;
    		}else{
    			$imagePath = request('pic6')->store("test", "public");
	    		$picture6 = $imagePath;
    		}
    	}
    	$sno = $request->sno;
    	$star = $request->star;
		$nullstar = 5-round($star);//空星數量
    	if(round($star) == $star){//判斷需不需要半星
    	  $allstar = $star;//完整星星數量
    	  $halfstar = 0;//半星數量
    	}else{
    	  $a = explode('.', $star);//取得完整星星數量
    	  $allstar = $a[0];//完整星星數量
    	  $halfstar = 1;//半星數量
    	}
    	$star_str = $allstar.','.$halfstar.','.$nullstar;
    	didipick_product::where('sno', $sno)->update([
			'No'=>$request->number,
			'name'=>$request->name,
			'brand'=>$request->brand,
			'category'=>$request->category,
			'sku'=>$request->spec,
			'keyword'=>$request->keyword,
			'label'=>$request->label,
			'brief'=>$request->brief,
			'description'=>$request->description,
			'quantity'=>$request->quantity,
			'weight'=>$request->weight,
			'img1'=>$picture1,
			'img2'=>$picture2,
			'img3'=>$picture3,
			'img4'=>$picture4,
			'img5'=>$picture5,
			'img6'=>$picture6,
			'shelf_on'=>$request->begin_date,
			'shelf_off'=>$request->end_date,
			'original_url'=>$request->url,
			'o_price'=>$request->didiprice_jp,
			's_price'=>$request->didiprice_tw,
			'star'=>$star_str
		]);
		return redirect('/product');
    }

    public function category_open($sno){
    	didipick_category::where('sno', $sno)->update(['status'=>'1']);
    	return redirect('/category');
    }

    public function category_off($sno){
    	didipick_category::where('sno', $sno)->update(['status'=>'0']);
    	return redirect('/category');
    }

    public function category_delete($sno){
    	$data = didipick_category::where('sno', $sno)->get();
    	foreach($data as $v){
    		$img = "public/".$v->icon;
    	}
    	if (Storage::exists($img)) {
            Storage::delete($img);
        }
    	didipick_category::where('sno', $sno)->delete();
    	return redirect()->back();
    }

    public function category_new(request $request){
    	if($request->pic == NULL){
			//echo '沒圖片1<br>';
			$picture1 = '';
    	}else{
    		$imagePath = request('pic')->store("category", "public");
	    	$picture1 = $imagePath;
    	}
    	$db = new didipick_category;
    	$db->name = $request->name;
    	$db->status = '1';
    	$db->icon = $picture1;
    	$db->save();
    	return redirect('/category');
    }

    public function view_category_img($img){
    	//echo '<img src="/storage/category/'.$img.'" border="0" height="100">';
    	return view('Admin.view_category_img', ['img'=>$img]);
    }

    public function category_edit_img_delete($img, $sno){
    	$path = 'public/category/'.$img;
    	if (Storage::exists($path)) {
            Storage::delete($path);
        }
        didipick_category::where('sno', $sno)->update(['icon'=> '']);
        return redirect()->back();
    }


    public function category_edit_update(request $request){
    	if($request->pic == NULL){
			//echo '沒圖片2<br>';
			$picture = '';
    	}else{
    		$path2 = "public/".$request->pic;
    		if(Storage::exists($path2)){
    			$picture = $request->pic;
    		}else{
    			$imagePath = request('pic')->store("category", "public");
	    		$picture = $imagePath;
    		}
    	}
    	$sno = $request->sno;
    	$name = $request->name;
    	didipick_category::where('sno', $sno)->update([
    		'name'=>$request->name,
    		'icon'=>$picture
    	]);
    	return redirect('/category');
    }

    public function brand_open($sno){
    	didipick_brand::where('sno', $sno)->update(['status'=>'1']);
    	return redirect('/brand');
    }

    public function brand_off($sno){
    	didipick_brand::where('sno', $sno)->update(['status'=>'0']);
    	return redirect('/brand');
    }

    public function brand_delete($sno){
    	didipick_brand::where('sno', $sno)->delete();
    	return redirect()->back();
    }

    public function brand_new(request $request){
    	if($request->pic1 == NULL){
			//echo '沒圖片1<br>';
			$picture1 = '';
    	}else{
    		$imagePath = request('pic1')->store("brand", "public");
	    	$picture1 = $imagePath;
    	}
    	if($request->pic2 == NULL){
			//echo '沒圖片1<br>';
			$picture2 = '';
    	}else{
    		$imagePath = request('pic2')->store("brand", "public");
	    	$picture2 = $imagePath;
    	}
    	$db = new didipick_brand;
    	$db->name = $request->name;
    	$db->status = '1';
    	$db->icon = $picture1;
    	$db->icon2 = $picture2;
    	$db->category = $request->category;
    	$db->save();
    	return redirect('/brand');
    }
}
