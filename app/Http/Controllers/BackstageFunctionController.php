<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\didipick_product;
use App\didipick_category;
use App\didipick_brand;
use App\didipick_member;
use App\didipick_adver;
use App\didipick_banner;
use App\didipick_help;
use App\didipick_qa;
use App\didipick_label;
use App\didipick_master;
use Illuminate\Support\Facades\Storage;

class BackstageFunctionController extends Controller
{
	private function encryptdecode($var="",$types="",$key="aAabBbcCcdDdeEef"){
		//加密
		if($types=="encrypt"){
		$id=serialize($var);//加密資料
		$data['iv']=base64_encode(substr('fdakinel;injajdji',0,16));
		$data['value']=openssl_encrypt($id, 'AES-256-CBC',$key,0,base64_decode($data['iv']));
		$encrypt=base64_encode(json_encode($data));
		$returnvar=$encrypt;
		}
		//解密
		if($types=="decryption"){
			$encrypt=$var; //解密資料
			$encrypt = json_decode(base64_decode($encrypt), true);
			$iv = base64_decode($encrypt['iv']);
			$decrypt = openssl_decrypt($encrypt['value'], 'AES-256-CBC', $key, 0, $iv);
			$id = unserialize($decrypt);
			if($id){
				return $id;
			}else{
				return 0;
			}
		}
		return $returnvar;
	}

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
        $db->views = $request->views;
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
			'star'=>$star_str,
            'views'=>$request->views
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
    	$data = didipick_brand::where('sno', $sno)->get();
    	foreach($data as $v){
    		$icon = 'public/'.$v->icon;
    		$icon2 = 'public/'.$v->icon2;
    	}
    	if (Storage::exists($icon)) {
            Storage::delete($icon);
        }
        if (Storage::exists($icon2)) {
            Storage::delete($icon2);
        }
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
    	$db->view = $request->view;
    	$db->save();
    	return redirect('/brand');
    }

    public function view_brand_img($img){
    	//echo '<img src="/storage/category/'.$img.'" border="0" height="100">';
    	return view('Admin.view_brand_img', ['img'=>$img]);
    }

    public function brand_edit_img_delete($img, $sno, $no){
    	if($no == 1){
    		didipick_brand::where('sno', $sno)->update(['icon'=>'']);
    	}else if($no == 2){
    		didipick_brand::where('sno', $sno)->update(['icon2'=>'']);
    	}
    	$path = 'public/brand/'.$img;
    	if (Storage::exists($path)) {
            Storage::delete($path);
        }
        return redirect()->back();
    }

    public function brand_edit_update(request $request){
    	if($request->pic1 == NULL){
			//echo '沒圖片2<br>';
			$picture1 = '';
    	}else{
    		$path1 = "public/".$request->pic1;
    		if(Storage::exists($path1)){
    			$picture1 = $request->pic1;
    		}else{
    			$imagePath = request('pic1')->store("brand", "public");
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
    			$imagePath = request('pic2')->store("brand", "public");
	    		$picture2 = $imagePath;
    		}
    	}
    	$sno = $request->sno;
    	didipick_brand::where('sno', $sno)->update([
    		'name'=>$request->name,
    		'icon'=>$picture1,
    		'icon2'=>$picture2,
    		'view'=>$request->view,
    		'category'=>$request->category
    	]);
    	return redirect('/brand');
    }

    public function member_open($sno){
    	didipick_member::where('id', $sno)->update(['publish'=>'Y']);
    	return redirect('/member');
    }

    public function member_off($sno){
    	didipick_member::where('id', $sno)->update(['publish'=>'O']);
    	return redirect('/member');
    }

    public function member_delete($sno){
    	didipick_member::where('sno', $sno)->delete();
    	return redirect()->back();
    }

    public function member_edit_update(request $request){
    	$name = $this->encryptdecode($request->name, 'encrypt');
    	$password = $this->encryptdecode($request->password, 'encrypt');
    	didipick_member::where('id', $request->sno)->update([
    		'password'=>$password,
    		'name'=>$name,
    		'mobile'=>$request->mobile,
    		'email'=>$request->email,
    		'tel'=>$request->tel,
    		'zipcode'=>$request->zipcode,
    		'area'=>$request->area,
    		'address'=>$request->address,
    		'publish'=>$request->publish
    	]);
    	return redirect('/member');

    }

    public function adver_open($sno){
    	didipick_adver::where('sno', $sno)->update(['status'=>'1']);
    	return redirect('/adver');
    }

    public function adver_off($sno){
    	didipick_adver::where('sno', $sno)->update(['status'=>'0']);
    	return redirect('/adver');
    }

    public function adver_delete($sno){
    	$data = didipick_adver::where('sno', $sno)->get();
    	foreach($data as $v){
    		$banner = 'public/'.$v->banner;
    	}
    	if (Storage::exists($banner)) {
            Storage::delete($banner);
        }
    	didipick_adver::where('sno', $sno)->delete();
    	return redirect()->back();
    }

    public function adver_new(request $request){
    	$count = didipick_adver::count();
    	if($count == 0){
    		$sort = 1;
    	}else{
    		$data = didipick_adver::orderBy('sort', 'desc')->get();
    		foreach($data as $k=>$v){
    			if($k == 0){
    				$sort = $v->sort+1;
    			}
    		}
    	}
 		if($request->pic == NULL){
			//echo '沒圖片1<br>';
			$picture1 = '';
    	}else{
    		$imagePath = request('pic')->store("adver", "public");
	    	$picture1 = $imagePath;
    	}
    	$db = new didipick_adver;
    	$db->title = $request->title;
    	$db->status = '1';
    	$db->banner = $picture1;
    	$db->sort = $sort;
    	$db->url = $request->url;
    	$db->save();
    	return redirect('/adver');
    }

    public function view_adver_img($img){
    	//echo '<img src="/storage/category/'.$img.'" border="0" height="100">';
    	return view('Admin.view_adver_img', ['img'=>$img]);
    }

    public function adver_edit_img_delete($img, $sno){
        didipick_adver::where('sno', $sno)->update(['banner'=>'']);
        $path = 'public/adver/'.$img;
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
        return redirect()->back();
    }

    public function adver_edit_update(request $request){
        if($request->pic == NULL){
            //echo '沒圖片2<br>';
            $picture1 = '';
        }else{
            $path1 = "public/".$request->pic;
            if(Storage::exists($path1)){
                $picture1 = $request->pic;
            }else{
                $imagePath = request('pic')->store("adver", "public");
                $picture1 = $imagePath;
            }
        }
        
        $sno = $request->sno;
        didipick_adver::where('sno', $sno)->update([
            'title'=>$request->title,
            'banner'=>$picture1,
            'url'=>$request->url,
        ]);
        return redirect('/adver');
    }

    public function adver_sort($sort, $type){
        if($type == 'down'){
            for($i=1;$i<=2;$i++){
                if($i==1){
                    $sortd = $sort+1;
                    $data = didipick_adver::where('sort', $sortd)->get();
                    foreach($data as $v){
                        $sno = $v->sno;
                    }
                    didipick_adver::where('sort', $sort)->update([
                        'sort'=>$sortd,
                    ]);
                }else{
                    didipick_adver::where('sno', $sno)->update([
                        'sort'=>$sort,
                    ]);
                }
            }
        }else{
            for($i=1;$i<=2;$i++){
                if($i==1){
                    $sortd = $sort-1;
                    $data = didipick_adver::where('sort', $sortd)->get();
                    foreach($data as $v){
                        $sno = $v->sno;
                    }
                    didipick_adver::where('sort', $sort)->update([
                        'sort'=>$sortd,
                    ]);
                }else{
                    didipick_adver::where('sno', $sno)->update([
                        'sort'=>$sort,
                    ]);
                }
            }
        }
        return redirect()->back();
    }

    public function banner_open($sno){
        didipick_banner::where('sno', $sno)->update(['status'=>'1']);
        return redirect('/banner');
    }

    public function banner_off($sno){
        didipick_banner::where('sno', $sno)->update(['status'=>'0']);
        return redirect('/banner');
    }

    public function banner_delete($sno){
        $data = didipick_banner::where('sno', $sno)->get();
        foreach($data as $v){
            $banner = 'public/'.$v->banner;
        }
        if (Storage::exists($banner)) {
            Storage::delete($banner);
        }
        didipick_banner::where('sno', $sno)->delete();
        return redirect()->back();
    }

    public function banner_new(request $request){
        $count = didipick_banner::count();
        if($count == 0){
            $sort = 1;
        }else{
            $data = didipick_banner::orderBy('sort', 'desc')->get();
            foreach($data as $k=>$v){
                if($k == 0){
                    $sort = $v->sort+1;
                }
            }
        }
        if($request->pic == NULL){
            //echo '沒圖片1<br>';
            $picture1 = '';
        }else{
            $imagePath = request('pic')->store("banner", "public");
            $picture1 = $imagePath;
        }
        $db = new didipick_banner;
        $db->title = $request->title;
        $db->status = '1';
        $db->banner = $picture1;
        $db->sort = $sort;
        $db->url = $request->url;
        $db->save();
        return redirect('/banner');
    }

    public function view_banner_img($img){
        //echo '<img src="/storage/category/'.$img.'" border="0" height="100">';
        return view('Admin.view_banner_img', ['img'=>$img]);
    }

    public function banner_edit_img_delete($img, $sno){
        didipick_banner::where('sno', $sno)->update(['banner'=>'']);
        $path = 'public/banner/'.$img;
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
        return redirect()->back();
    }

    public function banner_edit_update(request $request){
        if($request->pic == NULL){
            //echo '沒圖片2<br>';
            $picture1 = '';
        }else{
            $path1 = "public/".$request->pic;
            if(Storage::exists($path1)){
                $picture1 = $request->pic;
            }else{
                $imagePath = request('pic')->store("banner", "public");
                $picture1 = $imagePath;
            }
        }
        
        $sno = $request->sno;
        didipick_banner::where('sno', $sno)->update([
            'title'=>$request->title,
            'banner'=>$picture1,
            'url'=>$request->url,
        ]);
        return redirect('/banner');
    }

    public function banner_sort($sort, $type){
        if($type == 'down'){
            for($i=1;$i<=2;$i++){
                if($i==1){
                    $sortd = $sort+1;
                    $data = didipick_banner::where('sort', $sortd)->get();
                    foreach($data as $v){
                        $sno = $v->sno;
                    }
                    didipick_banner::where('sort', $sort)->update([
                        'sort'=>$sortd,
                    ]);
                }else{
                    didipick_banner::where('sno', $sno)->update([
                        'sort'=>$sort,
                    ]);
                }
            }
        }else{
            for($i=1;$i<=2;$i++){
                if($i==1){
                    $sortd = $sort-1;
                    $data = didipick_banner::where('sort', $sortd)->get();
                    foreach($data as $v){
                        $sno = $v->sno;
                    }
                    didipick_banner::where('sort', $sort)->update([
                        'sort'=>$sortd,
                    ]);
                }else{
                    didipick_banner::where('sno', $sno)->update([
                        'sort'=>$sort,
                    ]);
                }
            }
        }
        return redirect()->back();
    }

    public function help_new(request $request){
        date_default_timezone_set("Asia/Taipei");
        $today = date("Y-m-d H:i:s");
        $db = new didipick_help;
        $db->title = $request->title;
        $db->status = '1';
        $db->content = $request->content;
        $db->insert_time = $today;
        $db->save();
        return redirect('/help');
    }

    public function help_open($sno){
        didipick_help::where('id', $sno)->update(['status'=>'1']);
        return redirect('/help');
    }

    public function help_off($sno){
        didipick_help::where('id', $sno)->update(['status'=>'0']);
        return redirect('/help');
    }

    public function help_edit_update(request $request){
        $sno = $request->sno;
        didipick_help::where('id', $sno)->update([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        return redirect('/help');
    }

    public function help_delete($sno){
        didipick_help::where('id', $sno)->delete();
        return redirect()->back();
    }

    public function qa_new(request $request){
        date_default_timezone_set("Asia/Taipei");
        $today = date("Y-m-d H:i:s");
        $db = new didipick_qa;
        $db->title = $request->title;
        $db->status = '1';
        $db->content = $request->content;
        $db->insert_time = $today;
        $db->type = $request->type;
        $db->save();
        if($request->type == '1'){
            return redirect('/qa');
        }else if($request->type == '2'){
            return redirect('/shoppingprocess');
        }else{
            return redirect('/about');
        }
    }

    public function qa_open($sno){
        didipick_qa::where('id', $sno)->update(['status'=>'1']);
        return redirect()->back();
    }

    public function qa_off($sno){
        didipick_qa::where('id', $sno)->update(['status'=>'0']);
        return redirect()->back();
    }

    public function qa_edit_update(request $request){
        $sno = $request->sno;
        didipick_qa::where('id', $sno)->update([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        $data = didipick_qa::where('id', $sno)->get();
        foreach($data as $v){
            $type = $v->type;
        }
        if($type == '1'){
            return redirect('/qa');
        }else if($type == '2'){
            return redirect('/shoppingprocess');
        }else{
            return redirect('/about');
        }
    }

    public function qa_delete($sno){
        didipick_qa::where('id', $sno)->delete();
        return redirect()->back();
    }

    public function label_new(request $request){
        date_default_timezone_set("Asia/Taipei");
        $today = date("Y-m-d H:i:s");
        $db = new didipick_label;
        $db->name = $request->label;
        $db->views = $request->views;
        $db->status = '1';
        $db->insert_time = $today;
        $db->save();
        return redirect('/label');
    }

    public function label_open($sno){
        didipick_label::where('id', $sno)->update(['status'=>'1']);
        return redirect()->back();
    }

    public function label_off($sno){
        didipick_label::where('id', $sno)->update(['status'=>'0']);
        return redirect()->back();
    }

    public function label_edit_update(request $request){
        $sno = $request->sno;
        didipick_label::where('id', $sno)->update([
            'name'=>$request->label,
            'views'=>$request->views,
        ]);
        return redirect('/label');
    }

    public function label_delete($sno){
        didipick_label::where('id', $sno)->delete();
        return redirect()->back();
    }

    public function master_open($sno){
        didipick_master::where('id', $sno)->update(['status'=>'1']);
        return redirect('/master');
    }

    public function master_off($sno){
        didipick_master::where('id', $sno)->update(['status'=>'0']);
        return redirect('/master');
    }

    public function master_delete($sno){
        $data = didipick_master::where('id', $sno)->get();
        foreach($data as $v){
            $img = "public/".$v->img;
        }
        if (Storage::exists($img)) {
            Storage::delete($img);
        }
        didipick_master::where('id', $sno)->delete();
        return redirect()->back();
    }

    public function master_new(request $request){
        date_default_timezone_set("Asia/Taipei");
        $today = date("Y-m-d H:i:s");
        if($request->pic == NULL){
            //echo '沒圖片1<br>';
            $picture1 = '';
        }else{
            $imagePath = request('pic')->store("master", "public");
            $picture1 = $imagePath;
        }
        $p_size = didipick_product::count();
        $l_size = didipick_label::count();
        $ary1 = array();
        for($i=0;$i<$l_size;$i++){
            if(isset($_POST['label'.$i])){
                $ary1[$i] = $_POST['label_name'.$i];
            }
        }
        $label = implode(',', $ary1);
        $ary = array();
        for($i=0;$i<$p_size;$i++){
            if(isset($_POST['recommend_item'.$i])){
                $ary[$i] = $_POST['pno'.$i];
            }
        }
        $recommend_item = implode(',', $ary);
        $db = new didipick_master;
        $db->img = $picture1;
        $db->title = $request->title;
        $db->label = $label;
        $db->insert_time = $today;
        $db->author = $request->author;
        $db->outline = $request->outline;
        $db->views = $request->views;
        $db->status = '1';
        $db->text = $request->content;
        $db->recommend_item = $recommend_item;
        $db->type = '1';
        $db->save();
        return redirect('/master');
    }

    public function view_master_img($img){
        //echo '<img src="/storage/master/'.$img.'" border="0" height="100">';
        return view('Admin.view_master_img', ['img'=>$img]);
    }

    public function master_edit_img_delete($img, $sno){
        $path = 'public/master/'.$img;
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
        didipick_master::where('id', $sno)->update(['img'=> '']);
        return redirect()->back();
    }


    public function master_edit_update(request $request){
        if($request->pic == NULL){
            //echo '沒圖片2<br>';
            $picture = '';
        }else{
            $path2 = "public/".$request->pic;
            if(Storage::exists($path2)){
                $picture = $request->pic;
            }else{
                $imagePath = request('pic')->store("master", "public");
                $picture = $imagePath;
            }
        }
        $p_size = didipick_product::count();
        $l_size = didipick_label::count();
        $ary1 = array();
        for($i=0;$i<$l_size;$i++){
            if(isset($_POST['label'.$i])){
                $ary1[$i] = $_POST['label_name'.$i];
            }
        }
        $label = implode(',', $ary1);
        $ary = array();
        for($i=0;$i<$p_size;$i++){
            if(isset($_POST['recommend_item'.$i])){
                $ary[$i] = $_POST['pno'.$i];
            }
        }
        $recommend_item = implode(',', $ary);
        $sno = $request->sno;
        didipick_master::where('id', $sno)->update([
            'img' => $picture,
            'title' => $request->title,
            'label' => $label,
            'author' => $request->author,
            'outline' => $request->outline,
            'views' => $request->views,
            'text' => $request->content,
            'recommend_item' => $recommend_item,
        ]);
        return redirect('/master');
    }

    public function feedback_open($sno){
        didipick_master::where('id', $sno)->update(['status'=>'1']);
        return redirect('/feedback');
    }

    public function feedback_off($sno){
        didipick_master::where('id', $sno)->update(['status'=>'0']);
        return redirect('/feedback');
    }

    public function feedback_delete($sno){
        $data = didipick_master::where('id', $sno)->get();
        foreach($data as $v){
            $img = "public/".$v->img;
        }
        if (Storage::exists($img)) {
            Storage::delete($img);
        }
        didipick_master::where('id', $sno)->delete();
        return redirect()->back();
    }

    public function feedback_new(request $request){
        date_default_timezone_set("Asia/Taipei");
        $today = date("Y-m-d H:i:s");
        if($request->pic == NULL){
            //echo '沒圖片1<br>';
            $picture1 = '';
        }else{
            $imagePath = request('pic')->store("master", "public");
            $picture1 = $imagePath;
        }
        $p_size = didipick_product::count();
        $l_size = didipick_label::count();
        $ary1 = array();
        for($i=0;$i<$l_size;$i++){
            if(isset($_POST['label'.$i])){
                $ary1[$i] = $_POST['label_name'.$i];
            }
        }
        $label = implode(',', $ary1);
        $ary = array();
        for($i=0;$i<$p_size;$i++){
            if(isset($_POST['recommend_item'.$i])){
                $ary[$i] = $_POST['pno'.$i];
            }
        }
        $recommend_item = implode(',', $ary);
        $db = new didipick_master;
        $db->img = $picture1;
        $db->title = $request->title;
        $db->label = $label;
        $db->insert_time = $today;
        $db->author = $request->author;
        $db->outline = $request->outline;
        $db->views = $request->views;
        $db->status = '1';
        $db->text = $request->content;
        $db->recommend_item = $recommend_item;
        $db->type = '2';
        $db->save();
        return redirect('/feedback');
    }

    public function feedback_edit_img_delete($img, $sno){
        $path = 'public/master/'.$img;
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
        didipick_master::where('id', $sno)->update(['img'=> '']);
        return redirect()->back();
    }


    public function feedback_edit_update(request $request){
        if($request->pic == NULL){
            //echo '沒圖片2<br>';
            $picture = '';
        }else{
            $path2 = "public/".$request->pic;
            if(Storage::exists($path2)){
                $picture = $request->pic;
            }else{
                $imagePath = request('pic')->store("master", "public");
                $picture = $imagePath;
            }
        }
        $p_size = didipick_product::count();
        $l_size = didipick_label::count();
        $ary1 = array();
        for($i=0;$i<$l_size;$i++){
            if(isset($_POST['label'.$i])){
                $ary1[$i] = $_POST['label_name'.$i];
            }
        }
        $label = implode(',', $ary1);
        $ary = array();
        for($i=0;$i<$p_size;$i++){
            if(isset($_POST['recommend_item'.$i])){
                $ary[$i] = $_POST['pno'.$i];
            }
        }
        $recommend_item = implode(',', $ary);
        $sno = $request->sno;
        didipick_master::where('id', $sno)->update([
            'img' => $picture,
            'title' => $request->title,
            'label' => $label,
            'author' => $request->author,
            'outline' => $request->outline,
            'views' => $request->views,
            'text' => $request->content,
            'recommend_item' => $recommend_item,
        ]);
        return redirect('/feedback');
    }
}
