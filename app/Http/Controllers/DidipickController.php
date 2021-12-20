<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\didipick_cart;
use App\didipick_member;
use App\didipick_master;
use App\didipick_category;

class DidipickController extends Controller
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

	private function headerfunction(){
		$db_member = new didipick_member;
		$member = $db_member->all()->where('mobile', '=', '0988567927');
		$identity = $member[0]->identity;
		$db_cart = new didipick_cart;
		$cart = $db_cart->all()->where('identity', '=', $identity)->where('product_No', '=', '12351');
		return $cart;
		/*$db_category = new didipick_category;
		$db_master = new didipick_master;
		$data = $db_cart->all()->where('userid', '=', $identity);
		return $data;*/
	}

	public function index(request $request){
		$data = $this->headerfunction();
		foreach($data as $k=>$v){
			echo $v->status.'<br>';
		}
	}

}
