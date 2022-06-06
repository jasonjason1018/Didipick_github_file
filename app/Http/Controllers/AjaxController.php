<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\didipick_favory_article;
use App\didipick_favory_product;
use App\didipick_cart;
use App\didipick_product;
use App\streetname;
use App\didipick_member_common_address;
use App\didipick_order;
use App\didipick_order_item;
use App\didipick_member_account;
use App\rate;

class AjaxController extends Controller
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

    public function add_favory_master(request $request){
    	date_default_timezone_set("Asia/Taipei");
		$today = date("Y-m-d H:i:s");
    	$identity = $request->session()->get('identity');
    	$db = new didipick_favory_article;
    	$db->identity = $identity;
    	$db->ar_id = $request->no;
    	$db->insert_time = $today;
    	$db->save();
    }

    public function cancel_favory_master(request $request){
    	$identity = $request->session()->get('identity');
    	didipick_favory_article::where('ar_id', $request->no)->where('identity', $identity)->delete();
    }

    public function add_favory_product(request $request){
    	date_default_timezone_set("Asia/Taipei");
		$today = date("Y-m-d H:i:s");
    	$identity = $request->session()->get('identity');
    	$db = new didipick_favory_product;
    	$db->identity = $identity;
    	$db->pno = $request->no;
    	$db->insert_time = $today;
    	$db->save();
    }

    public function cancel_favory_product(request $request){
    	$identity = $request->session()->get('identity');
    	didipick_favory_product::where('pno', $request->no)->where('identity', $identity)->delete();
    }

    public function addtocart(request $request){
        $no = $request->No;
        $quantity = $request->quantity;
        $identity = $request->session()->get('identity');
        $checkcart = didipick_cart::where('identity', $identity)->where('product_No', $no)->where('status', '1')->count();
        if($checkcart<1){
            date_default_timezone_set("Asia/Taipei");
            $today = date("Y-m-d H:i:s");
            $db = new didipick_cart;
            $db->identity = $identity;
            $db->product_No = $no;
            $db->quantity = $quantity;
            $db->status = '1';
            $db->insert_time = $today;
            $db->save();
            $request->session()->put('addtocart', '1');
            return '已加入購物車';
        }else{
            return '該商品已在購物車內';
        }
    }

    public function cartplus(request $request){
        $id = $request->id;
        $cart = didipick_cart::where('id', $id)->first();
        $quantity = $cart->quantity+1;
        didipick_cart::where('id', $id)->update([
            'quantity'=>$quantity
        ]);
    }

    public function cartminus(request $request){
        $id = $request->id;
        $cart = didipick_cart::where('id', $id)->first();
        $quantity = $cart->quantity-1;
        didipick_cart::where('id', $id)->update([
            'quantity'=>$quantity
        ]);
    }

    public function cart_input_quantity(request $request){
        $id = $request->id;
        didipick_cart::where('id', $id)->update([
            'quantity'=>$request->quantity
        ]);
    }

    public function checkoutsetsession(request $request){
        $request->session()->put('checkoutdata', $request->query());

    }

    public function common_address(request $request){
        switch($request->type){
            case 'name':   
                $data = didipick_member_common_address::where('id', $request->data)->first();
                return $this->encryptdecode($data['name'], 'decryption');
            break;
            case 'zipcode':
                $data = didipick_member_common_address::where('id', $request->data)->first();
                return $data['zipcode'];
            break;
            case 'city':
                $data = didipick_member_common_address::where('id', $request->data)->first();
                $usercity = $data['area1'];
                $city = streetname::get();
                $cityary = array();
                $a = '';
                foreach($city as $k=>$v){
                    if(in_array($v->city, $cityary)){
                    }else{
                        $cityary[$k] = $v->city;
                        if($v->city == $usercity){
                            $a = $a.'<option selected>'.$v->city.'</option>';
                        }else{
                            $a = $a.'<option>'.$v->city.'</option>';
                        }
                    }
                }
                return $a;
            break;
            case 'area2':
                $data = didipick_member_common_address::where('id', $request->data)->first();
                $usercountry = $data['area2'];
                $usercity = $data['area1'];
                $country = streetname::where('city', $usercity)->get();
                $countryary = array();
                $a = '';
                foreach($country as $k=>$v){
                    if(in_array($v->country, $countryary)){
                    }else{
                        $countryary[$k] = $v->country;
                        if($v->country == $usercountry){
                            $a = $a.'<option selected>'.$v->country.'</option>';
                        }else{
                            $a = $a.'<option>'.$v->country.'</option>';
                        }
                    }
                }
                return $a;
            break;
            case 'address':
                $data = didipick_member_common_address::where('id', $request->data)->first();
                return $data['address'];
            break;
            case 'mob':
                $data = didipick_member_common_address::where('id', $request->data)->first();
                return $data['phone'];
            break;
        }
    }

    public function select_area(request $request){
        $type = $request->type;
        $cityary = array();
        $country='';
        if($type == 'area'){
            $street = streetname::where('city', $request->area)->get();
            foreach($street as $k=>$v){
                if(in_array($v->country, $cityary)){
                }else{
                    $cityary[$k] = $v->country;
                    $country = $country.'<option>'.$v->country.'</option>';
                }
            }
            return $country;
        }else if($type == 'zipcode'){
            $street = streetname::where('city', $request->area)->where('country', $request->area2)->first();
            return $street['mailcode'];
        }else{
            $street = streetname::where('city', $request->area)->first();
            return $street['mailcode'];
        }
    }

    public function add_common_address(request $request){
        $type = $request->type;
        $name = $this->encryptdecode($request->name, 'encrypt');
        $zipcode = $request->zipcode;
        $area1 = $request->area1;
        $area2 = $request->area2;
        $address = $request->address;
        $mob = $request->mob;
        $size = didipick_member_common_address::where('name', $name)
        ->where('zipcode', $zipcode)
        ->where('area1', $area1)
        ->where('area2', $area2)
        ->where('address', $address)
        ->where('phone', $mob)
        ->count();
        if($size != 0){
            return '已有該地址資料';
        }else{
            return 'ok';
        }
    }

    private function randString($len = 4){
        $chars = str_repeat('0123456789', 3);
        // 位數過長重複字串一定次數
        $chars = str_shuffle($chars);
        $str = substr($chars, 0, $len);
        return $str;
    }

    public function order_action(request $request){
        $identity = $request->session()->get('identity');
        $member_account = didipick_member_account::select('balance')->where('identity', $identity)->first();
        $checkoutdata = $request->session()->get('checkoutdata');
        $total = $checkoutdata['total'];
        $ems = $request->ems;
        $Total = $total+$ems;
        $BalAnce = $member_account->balance;
        if($Total >= $BalAnce){
            return '儲值金餘額不足';
        }else{

            date_default_timezone_set("Asia/Taipei");
            //print_r($request->query());
            $today = date('Y-m-d H:i:s');
            $pdata = explode(',', $checkoutdata['data']);
            $ono = date('ymd').$this->randString();
            $name = $request->name;
            $zipcode = $request->zipcode;
            $cityarea = $request->city.$request->area;
            $address = $request->address;
            $mob = $request->mob;
            $addaddress = $request->addaddress;
            //儲值金扣款
            $RemainPrice = $BalAnce-$Total;
            didipick_member_account::where('identity', $identity)->update([
                'balance'=>$RemainPrice
            ]);
            //判定是否加入常用地址
            if($addaddress == 'true'){
                $encrypt_name = $this->encryptdecode($name, 'encrypt');
                $db = new didipick_member_common_address;
                $db->identity = $identity;
                $db->zipcode = $zipcode;
                $db->area1 = $request->city;
                $db->area2 = $request->area;
                $db->address = $address;
                $db->name = $encrypt_name;
                $db->phone = $mob;
                $db->save();
            }
            //成立訂單
            foreach($pdata as $k=>$v){
                if($v != ''){
                    $ProDuct = didipick_product::where('name', $v)->first();
                    $ProDuctNo[$k] = $ProDuct->No;
                }
            }
            foreach($ProDuctNo as $k=>$v){
                $pquantity = didipick_product::where('No', $v)->first();
                $cquantity = didipick_cart::where('product_No', $v)->where('identity', $identity)->where('status', '1')->first();
                if($cquantity->quantity > $pquantity->quantity){
                    //$quantity = '商品剩餘數量不足';
                    return '商品剩餘數量不足';
                }else{
                    $quantity = 'ok';
                }
            }
            foreach($ProDuctNo as $k=>$v){
                $pquantity = didipick_product::where('No', $v)->first();
                $cquantity = didipick_cart::where('product_No', $v)->where('identity', $identity)->where('status', '1')->first();
                $balance_quantity = $pquantity->quantity - $cquantity->quantity;
                didipick_product::where('No', $v)->update([
                    'quantity' => $balance_quantity
                ]);
            }
            $result = rate::orderBy('insert_date', 'desc')->get();
            $rate = $result[0]->rate;
            //print_r($ProDuctNo);
            $CartData = didipick_cart::where('identity', $identity)->whereIn('product_No', $ProDuctNo)->where('status', '1')->get();
            $db = new didipick_order;
            $db->identity = $identity;
            $db->name = $name;
            $db->total = $Total;
            $db->insert_time = $today;
            $db->order_No = $ono;
            $db->phone = $mob;
            $db->zipcode = $zipcode;
            $db->area = $cityarea;
            $db->address = $address;
            $db->rate = $rate;
            $db->process = '2';
            $db->freight = $ems;
            $db->save();
            $data = didipick_order::where('order_No', $ono)->first();
            $oid = $data->id;
            foreach($ProDuctNo as $k=>$v){
                $pd = didipick_product::where('No', $v)->first();
                $ca = didipick_cart::where('product_No', $v)->where('identity', $identity)->where('status', '1')->first();
                didipick_cart::where('product_No', $v)->where('identity', $identity)->update([
                    'status' => '0'
                ]);
                $price = ceil($pd->s_price*$ca->quantity*$rate);
                //echo $v.'<br>';
                $db = new didipick_order_item;
                $db->id = $oid;
                $db->identity = $identity;
                $db->p_name = $pd->name;
                $db->quantity = $ca->quantity;
                $db->price = $price;
                $db->rate = $rate;
                $db->insert_time = $today;
                $db->save();
            }
            return $ono;
        }
        
    }

    public function cartnum(request $request){
        $identity = $request->session()->get('identity');
        $addtocart = $request->session()->get('addtocart');
        $request->session()->forget('addtocart');
        if($addtocart == '1'){
            $num = didipick_cart::where('identity', $identity)->where('status', '1')->count();
            return $num;
            //return $addtocart;
        }else{
            return 'nosession';
        }
    }

    public function checkquantitycredit(request $request){
        $identity = $request->session()->get('identity');
        $checkoutdata = $request->session()->get('checkoutdata');
        $pdata = explode(',', $checkoutdata['data']);
        foreach($pdata as $k=>$v){
            if($v != ''){
                $ProDuct = didipick_product::where('name', $v)->first();
                $ProDuctNo[$k] = $ProDuct->No;
            }
        }
        foreach($ProDuctNo as $k=>$v){
            $pquantity = didipick_product::where('No', $v)->first();
            $cquantity = didipick_cart::where('product_No', $v)->where('identity', $identity)->where('status', '1')->first();
            if($cquantity->quantity > $pquantity->quantity){
                //$quantity = '商品剩餘數量不足';
                return '商品剩餘數量不足';
            }else{
                return 'ok';
                //$quantity = 'ok';
            }
        }

    }
}
