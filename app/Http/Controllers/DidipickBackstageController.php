<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\didipick_member;
use App\didipick_admin_account;
use App\didipick_product;
use App\didipick_category;
use App\didipick_brand;

class DidipickBackstageController extends Controller
{
	//加密function
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

	private function backstagedata($username, $pwd){
		$db = new didipick_admin_account;
		$data = $db->all()
    		->where('user_account', '=', $username)
    		->where('user_password', '=', $pwd);
    	foreach($data as $v){
    		$name = $v->user_name;
    	}
    	return $name;

	}
    public function checklogin(request $request){
    	/*$db = new didipick_member;
    	$db = $db->all();
    	foreach($db as $v){
    		echo $this->encryptdecode($v->password, 'decryption');
    	}*/
    	$db = new didipick_admin_account;
    	$pwd = $request->password;
    	$num = $db->all()
    	->where('user_account', '=', $request->username)
    	->where('user_password', '=', $pwd)
    	->where('user_status', '=', '1')
    	->count();
    	if($num!=1){
    		return redirect('/backstage');
    	}else{
    		$request->session()->put('username', $request->username);
    		$request->session()->put('pwd', $pwd);
    		$request->session()->put('user', '1');
    		$name = $this->backstagedata($request->username, $pwd);
    		return view('Admin.index', ['name'=>$name]);
    	}
    }

    public function bc_index(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	return view('Admin.index', ['name'=>$name]);
    }
    
    public function system(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$db = new didipick_admin_account;
    	$data = $db->all();
    	return view('Admin.system', ['name'=>$name, 'data'=>$data]);
    }

    public function product(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$db = new didipick_product;
    	$data = $db->all();
    	$cdb = new didipick_category;
    	$cdata = $cdb->all();
    	return view('Admin.product', ['name'=>$name, 'data'=>$data, 'cdata'=>$cdata]);
    }

    public function product_new(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$db = new didipick_product;
    	$num = $db->all()->count();
    	if($num == 0){
    		$No = '123456';
    	}
    	$data = $db->orderBy('No', 'desc')->get();
    	foreach($data as $k=>$v){
    		if($k == '0'){
    			$No = $v->No+1;
    		}
    	}
    	$cdata = didipick_category::where('status', '1')->get();
    	$bdb = new didipick_brand;
    	$bdata = $bdb->all();
    	return view('Admin.product_new', ['name'=>$name, 'No'=>$No, 'cdata'=>$cdata, 'bdata'=>$bdata]);
    }

    public function product_edit(request $request, $sno){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$db = new didipick_product;
    	$data = $db->all()
    	->where('sno', '=', $sno);
    	$cdata = didipick_category::where('status', '1')->get();
    	$bdb = new didipick_brand;
    	$bdata = $bdb->all();
    	return view('Admin.product_edit', ['name'=>$name, 'data'=>$data, 'cdata'=>$cdata, 'bdata'=>$bdata, 'sno'=>$sno]);
    }

    public function logout(request $request){
    	$request->session()->forget('user');
    	$request->session()->forget('username');
    	$request->session()->forget('userpwd');
    	return redirect('/backstage');
    }

    public function category(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$db = new didipick_category;
    	$db = $db->all();
    	return view('Admin.category', ['name'=>$name, 'data'=>$db]);
    }

    public function category_new(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	return view('Admin.category_new', ['name'=>$name]);
    }

    public function category_edit(request $request, $sno){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$data = didipick_category::where('sno', $sno)->get();
    	return view('Admin.category_edit', ['name'=>$name, 'data'=>$data, 'sno'=>$sno]);
    }

    public function brand(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$db = new didipick_brand;
    	$db = $db->all();
    	return view('Admin.brand', ['name'=>$name, 'data'=>$db]);
    }

    public function brand_new(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$db = didipick_category::where('status', '1')->get();
    	return view('Admin.brand_new', ['name'=>$name, 'data'=>$db]);
    }
}
