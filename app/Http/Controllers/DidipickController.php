<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\didipick_member;

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

    public function checklogin(request $request){
    	$db = new didipick_member;
    	$pwd = $this->encryptdecode($request->password, 'encrypt');
    	$num = $db->all()
    	->where('mobile', '=', $request->username)
    	->where('password', '=', $pwd)
    	->count();
    	if($num!=1){
    		return redirect('/backstage');
    	}else{
    		return view('Admin/index');
    	}
    }



}
