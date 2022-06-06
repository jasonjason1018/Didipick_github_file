<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\didipick_member;
use App\didipick_member_account;
use App\didipick_admin_account;
use App\didipick_product;
use App\didipick_category;
use App\didipick_brand;
use App\didipick_adver;
use App\didipick_banner;
use App\didipick_help;
use App\didipick_qa;
use App\didipick_master;
use App\didipick_label;
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
    		return redirect()->back();
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

    public function category_search(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $cdb = new didipick_category;
        $cdata = $cdb->all();
        $kind = $request->kind;
        if($kind == 'all'){
            $data = didipick_product::get();
            $c = 'all';
        }else{
            $data = didipick_product::where('category', $kind)->get();
            $c = $kind;
        }
        return view('Admin.product', ['name'=>$name, 'data'=>$data, 'cdata'=>$cdata, 'c'=>$c]);
    }

    public function product(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$db = new didipick_product;
    	$data = $db->all();
    	$cdb = new didipick_category;
    	$cdata = $cdb->all();
        $c = 'all';
    	return view('Admin.product', ['name'=>$name, 'data'=>$data, 'cdata'=>$cdata, 'c'=>$c]);
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

    public function brand_edit(request $request, $sno){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$data = didipick_brand::where('sno', $sno)->get();
    	$cdata = didipick_category::where('status', '1')->get();
    	return view('Admin.brand_edit', ['name'=>$name, 'data'=>$data, 'sno'=>$sno, 'cdata'=>$cdata]);
    }

    public function member(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$db = new didipick_member;
    	$db = $db->all();
    	foreach($db as $k=>$v){
    		$name1 = $v->name;
    		$nameary[$k] = $this->encryptdecode($name1, 'decryption');
    	}
    	return view('Admin.member', ['name'=>$name, 'data'=>$db, 'nameary'=>$nameary]);
    }

    public function member_edit(request $request, $sno){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$data = didipick_member::where('id', $sno)->get();
    	foreach($data as $k=>$v){
    		$identity = $v->identity;
    		$password = $v->password;
    		$passport = $v->passport;
    		$name1 = $v->name;
    		$passportary[$k] = $this->encryptdecode($passport, 'decryption');
    		$passwordary[$k] = $this->encryptdecode($password, 'decryption');
    		$nameary[$k] = $this->encryptdecode($name1, 'decryption');
    	}
    	$account = didipick_member_account::where('identity', $identity)->get();
    	return view('Admin.member_edit', ['name'=>$name, 'data'=>$data, 'sno'=>$sno, 'passportary'=>$passportary, 'passwordary'=>$passwordary, 'nameary'=>$nameary, 'account'=>$account]);
    }

    public function adver(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$data = didipick_adver::orderBy('sort')->get();
    	$count = didipick_adver::count()-1;
    	return view('Admin.adver', ['name'=>$name, 'data'=>$data, 'count'=>$count]);
    }

    public function adver_new(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	return view('Admin.adver_new', ['name'=>$name]);
    }

    public function adver_edit(request $request, $sno){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$data = didipick_adver::where('sno', $sno)->get();
    	
    	return view('Admin.adver_edit', ['name'=>$name, 'data'=>$data, 'sno'=>$sno]);
    }

    public function banner(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$data = didipick_banner::orderBy('sort')->get();
    	$count = didipick_banner::count()-1;
    	return view('Admin.banner', ['name'=>$name, 'data'=>$data, 'count'=>$count]);
    }

    public function banner_new(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	return view('Admin.banner_new', ['name'=>$name]);
    }

    public function banner_edit(request $request, $sno){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
    	$data = didipick_banner::where('sno', $sno)->get();
    	
    	return view('Admin.banner_edit', ['name'=>$name, 'data'=>$data, 'sno'=>$sno]);
    }

    public function help(request $request){
    	$username = $request->session()->get('username');
    	$pwd = $request->session()->get('pwd');
    	$name = $this->backstagedata($username, $pwd);
        $data = didipick_help::get();
    	//$data = didipick_help::orderBy('sort')->get();
    	//$count = didipick_help::count()-1;
    	return view('Admin.help', ['name'=>$name, 'data'=>$data]);
    }

    public function help_new(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        return view('Admin.help_new', ['name'=>$name]);
    }

    public function help_edit(request $request, $sno){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $data = didipick_help::where('id', $sno)->get();
        
        return view('Admin.help_edit', ['name'=>$name, 'data'=>$data, 'sno'=>$sno]);
    }

    public function qa(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $data = didipick_qa::where('type', '1')->get();
        //$data = didipick_qa::orderBy('sort')->get();
        //$count = didipick_qa::count()-1;
        return view('Admin.qa', ['name'=>$name, 'data'=>$data]);
    }

    public function qa_new(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        return view('Admin.qa_new', ['name'=>$name]);
    }

    public function qa_edit(request $request, $sno){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $data = didipick_qa::where('id', $sno)->get();
        
        return view('Admin.qa_edit', ['name'=>$name, 'data'=>$data, 'sno'=>$sno]);
    }

    public function shoppingprocess(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $data = didipick_qa::where('type', '2')->get();
        //$data = didipick_qa::orderBy('sort')->get();
        //$count = didipick_qa::count()-1;
        return view('Admin.shoppingprocess', ['name'=>$name, 'data'=>$data]);
    }

    public function shoppingprocess_new(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        return view('Admin.shoppingprocess_new', ['name'=>$name]);
    }

    public function about(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $data = didipick_qa::where('type', '3')->get();
        //$data = didipick_qa::orderBy('sort')->get();
        //$count = didipick_qa::count()-1;
        return view('Admin.about', ['name'=>$name, 'data'=>$data]);
    }

    public function about_new(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        return view('Admin.about_new', ['name'=>$name]);
    }

    public function label(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $data = didipick_label::get();
        //$data = didipick_qa::orderBy('sort')->get();
        //$count = didipick_qa::count()-1;
        return view('Admin.label', ['name'=>$name, 'data'=>$data]);
    }

    public function label_new(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        //$data = didipick_qa::orderBy('sort')->get();
        //$count = didipick_qa::count()-1;
        return view('Admin.label_new', ['name'=>$name]);
    }

    public function label_edit(request $request, $sno){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $data = didipick_label::where('id', $sno)->get();
        
        return view('Admin.label_edit', ['name'=>$name, 'data'=>$data, 'sno'=>$sno]);
    }

    public function master(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $data = didipick_master::where('type', '1')->get();
        //$data = didipick_qa::orderBy('sort')->get();
        //$count = didipick_qa::count()-1;
        return view('Admin.master', ['name'=>$name, 'data'=>$data]);
    }

    public function master_new(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $product = didipick_product::get();
        $p_size =   count($product);
        $label = didipick_label::where('status', '1')->get();
        $l_size = count($label);
        return view('Admin.master_new', ['name'=>$name, 'product'=>$product, 'label'=>$label, 'l_size'=>$l_size, 'p_size'=>$p_size]);
    }

    public function master_edit(request $request, $sno){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $product = didipick_product::get();
        $p_size =   count($product);
        $label = didipick_label::where('status', '1')->get();
        $l_size = count($label);
        $data = didipick_master::where('id', $sno)->get();
        return view('Admin.master_edit', ['name'=>$name, 'product'=>$product, 'label'=>$label, 'l_size'=>$l_size, 'p_size'=>$p_size, 'data'=>$data, 'sno'=>$sno]);
    }   

    public function feedback(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $data = didipick_master::where('type', '2')->get();
        //$data = didipick_qa::orderBy('sort')->get();
        //$count = didipick_qa::count()-1;
        return view('Admin.feedback', ['name'=>$name, 'data'=>$data]);
    }

    public function feedback_new(request $request){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $product = didipick_product::get();
        $p_size =   count($product);
        $l_size = count($label);
        $label = didipick_label::where('status', '1')->get();
        $p_size =   count($product);
        $l_size = count($label);
        return view('Admin.feedback_new', ['name'=>$name, 'product'=>$product, 'label'=>$label, 'l_size'=>$l_size, 'p_size'=>$p_size]);
    }

    public function feedback_edit(request $request, $sno){
        $username = $request->session()->get('username');
        $pwd = $request->session()->get('pwd');
        $name = $this->backstagedata($username, $pwd);
        $product = didipick_product::get();
        $label = didipick_label::where('status', '1')->get();
        $p_size =   count($product);
        $l_size = count($label);
        $label = didipick_label::where('status', '1')->get();
        $p_size =   count($product);
        $l_size = count($label);
        $data = didipick_master::where('id', $sno)->get();
        return view('Admin.feedback_edit', ['name'=>$name, 'product'=>$product, 'label'=>$label, 'l_size'=>$l_size, 'p_size'=>$p_size, 'data'=>$data, 'sno'=>$sno]);
    }   
}
