<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use URL;
use App\didipick_cart;
use App\didipick_member;
use App\didipick_member_account;
use App\didipick_master;
use App\didipick_category;
use App\didipick_brand;
use App\didipick_product;
use App\didipick_banner;
use App\didipick_adver;
use App\didipick_qa;
use App\didipick_label;
use App\didipick_favory_article;
use App\didipick_favory_product;
use App\rate;
use App\didipick_member_common_address;
use App\streetname;
use Ecpay\Sdk\Factories\Factory;
use Ecpay\Sdk\Services\UrlService;
use Ecpay\Sdk\Exceptions\RtnException;

class DidipickController extends Controller
{

	private function emscount($weightE, $rate){
		if($weightE <= 0.5){
			return $rate*1450;
		}elseif($weightE > 0.5 && $weightE <= 0.6){
			return $rate*1600;
		}elseif($weightE > 0.6 && $weightE <= 0.7){
			return $rate*1750;
		}elseif($weightE > 0.7 && $weightE <= 0.8){
			return $rate*1900;
		}elseif($weightE > 0.8 && $weightE <= 0.9){
			return $rate*2050;
		}elseif($weightE > 0.9 && $weightE <= 1.0){
			return $rate*2200;
		}elseif($weightE > 1.0 && $weightE <= 1.25){
			return $rate*2500;
		}elseif($weightE > 1.25 && $weightE <= 1.5){
			return $rate*2800;
		}elseif($weightE > 1.5 && $weightE <= 1.75){
			return $rate*3100;
		}elseif($weightE > 1.75 && $weightE <= 2.0){
			return $rate*3400;
		}elseif($weightE > 2.0 && $weightE <= 2.5){
			return $rate*3900;
		}elseif($weightE > 2.5 && $weightE <= 3.0){
			return $rate*4400;
		}elseif($weightE > 3.0 && $weightE <= 3.5){
			return $rate*4900;
		}elseif($weightE > 3.5 && $weightE <= 4.0){
			return $rate*5400;
		}elseif($weightE > 4.0 && $weightE <= 4.5){
			return $rate*5900;
		}elseif($weightE > 4.5 && $weightE <= 5.0){
			return $rate*6400;
		}elseif($weightE > 5.0 && $weightE <= 5.5){
			return $rate*6900;
		}elseif($weightE > 5.5 && $weightE <= 6.0){
			return $rate*7400;
		}elseif($weightE > 6.0 && $weightE <= 7.0){
			return $rate*8200;
		}elseif($weightE > 7.0 && $weightE <= 8.0){
			return $rate*9000;
		}elseif($weightE > 8.0 && $weightE <= 9.0){
			return $rate*9800;
		}elseif($weightE > 9.0 && $weightE <= 10.0){
			return $rate*10600;
		}elseif($weightE > 10.0 && $weightE <= 11.0){
			return $rate*11400;
		}elseif($weightE > 11.0 && $weightE <= 12.0){
			return $rate*12200;
		}elseif($weightE > 12.0 && $weightE <= 13.0){
			return $rate*13000;
		}elseif($weightE > 13.0 && $weightE <= 14.0){
			return $rate*13800;
		}elseif($weightE > 14.0 && $weightE <= 15.0){
			return $rate*14600;
		}elseif($weightE > 15.0 && $weightE <= 16.0){
			return $rate*15400;
		}elseif($weightE > 16.0 && $weightE <= 17.0){
			return $rate*16200;
		}elseif($weightE > 17.0 && $weightE <= 18.0){
			return $rate*17000;
		}elseif($weightE > 18.0 && $weightE <= 19.0){
			return $rate*17800;
		}elseif($weightE > 19.0 && $weightE <= 20.0){
			return $rate*18600;
		}elseif($weightE > 20.0 && $weightE <= 21.0){
			return $rate*19400;
		}elseif($weightE > 21.0 && $weightE <= 22.0){
			return $rate*20200;
		}elseif($weightE > 22.0 && $weightE <= 23.0){
			return $rate*21000;
		}elseif($weightE > 23.0 && $weightE <= 24.0){
			return $rate*21800;
		}elseif($weightE > 24.0 && $weightE <= 25.0){
			return $rate*22600;
		}elseif($weightE > 25.0 && $weightE <= 26.0){
			return $rate*23400;
		}elseif($weightE > 26.0 && $weightE <= 27.0){
			return $rate*24200;
		}elseif($weightE > 27.0 && $weightE <= 28.0){
			return $rate*25000;
		}elseif($weightE > 28.0 && $weightE <= 29.0){
			return $rate*25800;
		}elseif($weightE > 29.0 && $weightE <= 30.0){
			return $rate*26600;
		}else{
			return $rate*30000;
		}
	}


	public function test(){
		//綠界
		try {
		    $factory = new Factory([
		        'hashKey' => '5294y06JbISpM5x9',
		        'hashIv' => 'v77hoKGq4kWxNNIS',
		    ]);
		    $autoSubmitFormService = $factory->create('AutoSubmitFormWithCmvService');

		    $input = [
		        'MerchantID' => '2000132',
		        'MerchantTradeNo' => 'Test' . time(),
		        'MerchantTradeDate' => date('Y/m/d H:i:s'),
		        'PaymentType' => 'aio',
		        'TotalAmount' => 100,
		        'TradeDesc' => UrlService::ecpayUrlEncode('交易描述範例'),
		        'ItemName' => '範例商品一批 100 TWD x 1',
		        'ReturnURL' => 'http://localhost:8000/test2',
		        'ChoosePayment' => 'Credit',
		        'EncryptType' => 1,
		        'OrderResultURL' => 'http://localhost:8000/test2',
		    ];
		    $action = 'https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5';
		    
		    echo $autoSubmitFormService->generate($input, $action);
		} catch (RtnException $e) {
		    echo '(' . $e->getCode() . ')' . $e->getMessage() . PHP_EOL;
		}
	}

	public function test2(request $request){
		$result = $request->input();
		echo $result['RtnCode'];
		return redirect('/');
	}

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
		$db_member = new didipick_member;//ok
		$category = didipick_category::where('status', '1')->get();
		//$db_master = new didipick_master;
		//$db_cart = new didipick_cart;//ok
		$member = $db_member->all()->where('mobile', '=', '0988567927');
		$identity = $member[0]->identity;
		$cart = didipick_cart::where('identity', $identity)->where('status', '1')->count();
		//$master = $db_master->all();
		$data = array($member, $cart, $category);
		return $data;
	}

	private function Testfunction(){
		$subquery = didipick_product::whereIn('brand', didipick_brand::select('sno')->where('name', '明治SAVAS')->get())->get();
		return $subquery;
	}

	public function index(request $request){
		$data = $this->headerfunction();
		$didipick_login = $request->session()->get('didipick_login');
		$master = didipick_master::where('type', '1')->where('status', '1')->orderBy('views', 'desc')->limit(3)->get();
		$feedback = didipick_master::where('type', '2')->where('status', '1')->orderBy('views', 'desc')->limit(3)->get();
		//print_r($feedback);
		$banner = didipick_banner::where('status', '1')->inRandomOrder()->limit(1)->get();
		$adver = didipick_adver::where('status', '1')->get();
		$product = didipick_product::orderBy('views', 'desc')->limit(4)->get();
		$brand = didipick_brand::where('status', '1')->get();
		$hotbrand = didipick_brand::where('status', '1')->orderBy('view', 'desc')->limit(8)->get();
		$result = rate::orderBy('insert_date', 'desc')->get();
		$rate = $result[0]->rate;
		$qa = didipick_qa::where('status', '1')->limit(5)->get();
		if($request->session()->get('didipick_login') == 1){
			$identity = $request->session()->get('identity');
			$favory_article = didipick_favory_article::where('identity', $identity)->get();
			$f_arsize = count($favory_article);
			$favory_product = didipick_favory_product::where('identity', $identity)->get();
			$f_pdsize = count($favory_product);
			if($f_arsize>=1){
				foreach($favory_article as $k=>$v){
					$f_article[$k] = $v->ar_id;
				}
			}else{
				$f_article = array('nodata');
			}
			if($f_pdsize>=1){
				foreach($favory_product as $k=>$v){
					$f_product[$k] = $v->pno;
				}
			}else{
				$f_product = array('nodata');
			}
		}else{
			$f_article = array('nodata');
			$f_product = array('nodata');
		}
		return view('index', ['data'=>$data, 'master'=>$master, 'adver'=>$adver, 'product'=>$product, 'brand'=>$brand, 'rate'=>$rate, 'banner'=>$banner, 'hotbrand'=>$hotbrand, 'qa'=>$qa, 'feedback'=>$feedback, 'f_article'=>$f_article, 'f_product'=>$f_product]);
	}

	public function login(request $request){
		$request->session()->put('redirect', URL::previous());
		return view('login');
	}

	public function check_login(request $request){
		$pw = $this->encryptdecode($request->password, 'encrypt');
		$db_count = didipick_member::where('publish', 'Y')
		->where('mobile', $request->phone)
		->where('password', $pw)
		->count();
		if($db_count == 1){
			$url = $request->session()->get('redirect');
			$request->session()->forget('redirect');
			$userdata = didipick_member::where('mobile', $request->phone)
			->where('password', $pw)->first();
			$request->session()->put('didipick_login', '1');
			$request->session()->put('identity', $userdata->identity);
			return redirect($url);
		}else{
			return view('login', ['errmsg'=>'手機號碼或密碼錯誤']);
		}
	}

	public function logout(request $request){
		$request->session()->flush();
		return redirect()->back();
	}

	private $product_limit = 2;

	public function product(request $request){
		$data = $this->headerfunction();
		date_default_timezone_set("Asia/Taipei");
        $today = date("Y-m-d H:i:s");
		$category = didipick_category::where('status', '1')->get();
		$brand = didipick_brand::where('status', '1')->get();
		$product = didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->skip(0)->take($this->product_limit)->get();
		$totalpage = ceil(didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->count()/$this->product_limit);
		$result = rate::orderBy('insert_date', 'desc')->get();
		$rate = $result[0]->rate;
		if($request->session()->get('didipick_login') == 1){
			$identity = $request->session()->get('identity');
			$favory_product = didipick_favory_product::where('identity', $identity)->get();
			$f_pdsize = count($favory_product);
			if($f_pdsize>=1){
				foreach($favory_product as $k=>$v){
					$f_product[$k] = $v->pno;
				}
			}else{
				$f_product = array('nodata');
			}
		}else{
			$f_product = array('nodata');
		}
		return view('product', ['data'=>$data, 'category'=>$category, 'brand'=>$brand, 'product'=>$product, 'rate'=>$rate, 'totalpage'=>$totalpage, 'f_product'=>$f_product]);
	}

	public function brand_search(request $request, $brandsno, $categorysno){
		$snoary = explode(',', $brandsno);
		date_default_timezone_set("Asia/Taipei");
        $today = date("Y-m-d H:i:s");
        if($categorysno == 'all'){
			$product = didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->whereIn('brand', $snoary)->skip(0)->take($this->product_limit)->get();
			$totalpage = ceil(didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->whereIn('brand', $snoary)->count()/$this->product_limit);
        }else{
        	$product = didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->whereIn('brand', $snoary)->where('category', $categorysno)->skip(0)->take($this->product_limit)->get();
        	$totalpage = ceil(didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->whereIn('brand', $snoary)->where('category', $categorysno)->count()/$this->product_limit);
        }
		$data = $this->headerfunction();
		$category = didipick_category::where('status', '1')->get();
		$brand = didipick_brand::where('status', '1')->get();
		$result = rate::orderBy('insert_date', 'desc')->get();
		$rate = $result[0]->rate;
		if($request->session()->get('didipick_login') == 1){
			$identity = $request->session()->get('identity');
			$favory_product = didipick_favory_product::where('identity', $identity)->get();
			$f_pdsize = count($favory_product);
			if($f_pdsize>=1){
				foreach($favory_product as $k=>$v){
					$f_product[$k] = $v->pno;
				}
			}else{
				$f_product = array('nodata');
			}
		}else{
			$f_product = array('nodata');
		}
		return view('product', ['data'=>$data, 'category'=>$category, 'brand'=>$brand, 'product'=>$product, 'rate'=>$rate, 'brandsno'=>$snoary, 'categorysno'=>$categorysno, 'totalpage'=>$totalpage, 'f_product'=>$f_product]);
	}

	public function category_search(request $request, $categorysno){
		//$snoary = explode(',', $sno);
		date_default_timezone_set("Asia/Taipei");
        $today = date("Y-m-d H:i:s");
        if($categorysno != 'all'){
			$product = didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->where('category', $categorysno)->skip(0)->take($this->product_limit)->get();
			$totalpage = ceil(didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->where('category', $categorysno)->count()/$this->product_limit);
        }else{
        	$product = didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->skip(0)->take($this->product_limit)->get();
        }
		$data = $this->headerfunction();
		$category = didipick_category::where('status', '1')->get();
		$brand = didipick_brand::where('status', '1')->get();
		$result = rate::orderBy('insert_date', 'desc')->get();
		$rate = $result[0]->rate;
		if($request->session()->get('didipick_login') == 1){
			$identity = $request->session()->get('identity');
			$favory_product = didipick_favory_product::where('identity', $identity)->get();
			$f_pdsize = count($favory_product);
			if($f_pdsize>=1){
				foreach($favory_product as $k=>$v){
					$f_product[$k] = $v->pno;
				}
			}else{
				$f_product = array('nodata');
			}
		}else{
			$f_product = array('nodata');
		}
		if($categorysno == 'all'){
			return redirect('/didipick_product');
		}else{
			return view('product', ['data'=>$data, 'category'=>$category, 'brand'=>$brand, 'product'=>$product, 'rate'=>$rate, 'categorysno'=>$categorysno, 'totalpage'=>$totalpage, 'f_product'=>$f_product]);
		}
	}

	public function product_page(request $request, $page, $brandsno, $categorysno){
		if($page == 1 && $brandsno == 'none' && $categorysno == 'all'){
			return redirect('/didipick_product');
		}
		date_default_timezone_set("Asia/Taipei");
        $today = date("Y-m-d H:i:s");
		if($page == 1){
			$skip = 0;
		}else{
			$skip = ($page-1)*$this->product_limit;
		}
		if($brandsno != 'none'){
			$snoary = explode(',', $brandsno);
		}

		if($brandsno != "none" && $categorysno != 'all'){
			$product = didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->whereIn('brand', $snoary)->where('category', $categorysno)->skip($skip)->take($this->product_limit)->get();

			$totalpage = ceil(didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->whereIn('brand', $snoary)->where('category', $categorysno)->count()/$this->product_limit);

		}else if($brandsno != "none" && $categorysno == 'all'){
			$product = didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->whereIn('brand', $snoary)->skip($skip)->take($this->product_limit)->get();

			$totalpage = ceil(didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->whereIn('brand', $snoary)->count()/$this->product_limit);

		}else if($brandsno == "none" && $categorysno != 'all'){
			$product = didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->where('category', $categorysno)->skip($skip)->take($this->product_limit)->get();

			$totalpage = ceil(didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->where('category', $categorysno)->count()/$this->product_limit);

		}else{
			$product = didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->skip($skip)->take($this->product_limit)->get();

			$totalpage = ceil(didipick_product::where('shelf_on', '<', $today)->where('shelf_off', '>', $today)->count()/$this->product_limit);

		}
		$data = $this->headerfunction();
		$category = didipick_category::where('status', '1')->get();
		$brand = didipick_brand::where('status', '1')->get();
		$result = rate::orderBy('insert_date', 'desc')->get();
		$rate = $result[0]->rate;
		if($request->session()->get('didipick_login') == 1){
			$identity = $request->session()->get('identity');
			$favory_product = didipick_favory_product::where('identity', $identity)->get();
			$f_pdsize = count($favory_product);
			if($f_pdsize>=1){
				foreach($favory_product as $k=>$v){
					$f_product[$k] = $v->pno;
				}
			}else{
				$f_product = array('nodata');
			}
		}else{
			$f_product = array('nodata');
		}
		if($brandsno != 'none'){
			return view('product', ['data'=>$data, 'category'=>$category, 'brand'=>$brand, 'product'=>$product, 'rate'=>$rate, 'brandsno'=>$snoary, 'categorysno'=>$categorysno, 'totalpage'=>$totalpage, 'nowpage'=>$page, 'f_product'=>$f_product]);
		}else{
			return view('product', ['data'=>$data, 'category'=>$category, 'brand'=>$brand, 'product'=>$product, 'rate'=>$rate, 'categorysno'=>$categorysno, 'totalpage'=>$totalpage, 'nowpage'=>$page, 'f_product'=>$f_product]);
		}
	}

	public function master(request $request){
		$data = $this->headerfunction();
		$master = didipick_master::where('type', '1')->where('status', '1')->get();
		if($request->session()->get('didipick_login') == 1){
			$identity = $request->session()->get('identity');
			$favory_article = didipick_favory_article::where('identity', $identity)->get();
			$f_arsize = count($favory_article);
			if($f_arsize>=1){
				foreach($favory_article as $k=>$v){
					$f_article[$k] = $v->ar_id;
				}
			}else{
				$f_article = array('nodata');
			}
		}else{
			$f_article = array('nodata');
		}
		return view('master', ['data'=>$data, 'master'=>$master, 'f_article'=>$f_article]);
	}

	public function master_info(request $request, $sno){
		$data = $this->headerfunction();
		$master = didipick_master::where('id', $sno)->first();
		$hotmaster = didipick_master::orderBy('views', 'desc')->limit(3)->get();
		$ritem = explode(',', $master->recommend_item);
		foreach($ritem as $k=>$ritemv){
			$pdata = didipick_product::where('No', $ritemv)->first();
			$Ritem[$k] = $pdata;
		}
		$result = rate::orderBy('insert_date', 'desc')->get();
		$rate = $result[0]->rate;
		$hotlabel = didipick_label::orderBy('views', 'desc')->limit(3)->get();
		$other = didipick_master::where('id', '!=', $sno)->inRandomOrder()->limit(3)->get();
		if($request->session()->get('didipick_login') == 1){
			$identity = $request->session()->get('identity');
			$favory_article = didipick_favory_article::where('identity', $identity)->get();
			$f_arsize = count($favory_article);
			if($f_arsize>=1){
				foreach($favory_article as $k=>$v){
					$f_article[$k] = $v->ar_id;
				}
			}else{
				$f_article = array('nodata');
			}
		}else{
			$f_article = array('nodata');
		}
		return view('master_info', ['data'=>$data, 'master'=>$master, 'hotmaster'=>$hotmaster, 'Ritem'=>$Ritem, 'rate'=>$rate, 'hotlabel'=>$hotlabel, 'other'=>$other, 'f_article'=>$f_article]);
	}

	public function feedback(request $request){
		$data = $this->headerfunction();
		$master = didipick_master::where('type', '2')->where('status', '1')->get();
		if($request->session()->get('didipick_login') == 1){
			$identity = $request->session()->get('identity');
			$favory_article = didipick_favory_article::where('identity', $identity)->get();
			$f_arsize = count($favory_article);
			if($f_arsize>=1){
				foreach($favory_article as $k=>$v){
					$f_article[$k] = $v->ar_id;
				}
			}else{
				$f_article = array('nodata');
			}
		}else{
			$f_article = array('nodata');
		}
		return view('feedback', ['data'=>$data, 'master'=>$master, 'f_article'=>$f_article]);
	}

	public function product_top20(request $request){
		$data = $this->headerfunction();
		$product = didipick_product::orderBy('views', 'desc')->limit(20)->get();
		$brand = didipick_brand::where('status', '1')->get();
		$category = didipick_category::where('status', '1')->get();
		$result = rate::orderBy('insert_date', 'desc')->get();
		$rate = $result[0]->rate;
		if($request->session()->get('didipick_login') == 1){
			$identity = $request->session()->get('identity');
			$favory_product = didipick_favory_product::where('identity', $identity)->get();
			$f_pdsize = count($favory_product);
			if($f_pdsize>=1){
				foreach($favory_product as $k=>$v){
					$f_product[$k] = $v->pno;
				}
			}else{
				$f_product = array('nodata');
			}
		}else{
			$f_product = array('nodata');
		}
		return view('product_top20', ['data'=>$data, 'product'=>$product, 'brand'=>$brand, 'category'=>$category, 'rate'=>$rate, 'f_product'=>$f_product]);
	}

	public function product_info(request $request, $sno){
		$identity = $request->session()->get('identity');
		$data = $this->headerfunction();
		$product = didipick_product::where('sno', $sno)->first();
		$result = rate::orderBy('insert_date', 'desc')->get();
		$rate = $result[0]->rate;
		return view('product_info', ['data'=>$data, 'product'=>$product, 'rate'=>$rate]);
	}

	public function qa(){
		$data = $this->headerfunction();
		$qa = didipick_qa::where('type', '1')->where('status', '1')->get();
		$qa_type = "常見問題";
		return view('qa', ['data'=>$data, 'qa'=>$qa, 'qa_type'=>$qa_type]);
	}

	public function shoppingprocess(){
		$data = $this->headerfunction();
		$qa = didipick_qa::where('type', '2')->where('status', '1')->get();
		$qa_type = "購物流程";
		return view('shoppingprocess', ['data'=>$data, 'qa'=>$qa, 'qa_type'=>$qa_type]);
	}

	public function about(){
		$data = $this->headerfunction();
		$qa = didipick_qa::where('type', '3')->where('status', '1')->get();
		$qa_type = "關於直直買";
		return view('about', ['data'=>$data, 'qa'=>$qa, 'qa_type'=>$qa_type]);
	}

	public function articles($sno){
		$data = $this->headerfunction();
		$qa = didipick_qa::where('id', $sno)->first();
		$other_qa = didipick_qa::where('id', '!=', $sno)->where('type', $qa->type)->get();
		switch($qa->type){
			case '1':
				$qa_type = "常見問題";
			break;
			case '2':
				$qa_type = "購物流程";
			break;
			case '3':
				$qa_type = "關於直直買";
			break;
		}
		
		return view('articles', ['data'=>$data, 'qa'=>$qa, 'qa_type'=>$qa_type, 'other_qa'=>$other_qa]);
	}

	public function favorite(){
		echo '<button><a href="/">return</a></button>';
		return '最愛文章';
	}

	public function cart(request $request){
		$data = $this->headerfunction();
		$identity = $request->session()->get('identity');
		$cartitem = didipick_product::whereIn('No', didipick_cart::select('product_No')->where('status', '1')->where('identity', $identity)->get())->get();
		$result = rate::orderBy('insert_date', 'desc')->get();
		$rate = $result[0]->rate;
		$cartdata = didipick_cart::where('status', '1')->where('identity', $identity)->get();
		$favory = didipick_product::whereIn('No', didipick_favory_product::select('pno')->get())->get();
		if(count($cartdata) != 0){
			foreach($cartdata as $k=>$v){
				$incart[$k] = $v->product_No;
			}
		}else{
			$incart[0] = '';
		}
		return view('cart', ['data'=>$data, 'cartitem'=>$cartitem, 'rate'=>$rate, 'favory'=>$favory, 'incart'=>$incart, 'cartdata'=>$cartdata]);
	}

	public function removecartitem($id){
		didipick_cart::where('id', $id)->delete();
		return redirect('/didipick_cart');
	}

	public function checkout(request $request){
		$checkdata = $request->session()->get('checkoutdata');
		$identity = $request->session()->get('identity');
		if($checkdata == ''){
			return redirect('/didipick_cart');
		}
		$total =  $checkdata['total'];
		$weight =  $checkdata['weight'];
		$data = explode(',', $checkdata['data']);
		$pdata = didipick_product::whereIn('name', $data)->get();
		foreach($pdata as $k=>$v){
			$ncn[$k] = $v->No;
		}
		$cdata = didipick_cart::whereIn('product_No', $ncn)->where('identity', $identity)->get();
		$result = rate::orderBy('insert_date', 'desc')->get();
		$rate = $result[0]->rate;
		$emsprice = ceil($this->emscount($weight, $rate));
		$balance = didipick_member_account::select('balance')->where('identity', $identity)->first();
		$address = didipick_member_common_address::where('identity', $identity)->get();
		foreach($address as $k=>$v){
			$addressname[$k] =$this->encryptdecode($v->name, 'decryption');
			$addressid[$k] = $v->id;
		}
		$streetname = streetname::get();
		$stary = array();
		$a = '';
		foreach($streetname as $k=>$v){
			if(in_array($v->city, $stary)){
            }else{
				$stary[$k] = $v->city;
				$a = $a.'<option>'.$v->city.'</option>';
			}
		}
		return view('checkout', ['total'=>$total, 'weight'=>$weight, 'pdata'=>$pdata, 'cdata'=>$cdata, 'rate'=>$rate, 'emsprice'=>$emsprice, 'balance'=>$balance, 'addressname'=>$addressname, 'addressid'=>$addressid, 'a'=>$a]);

	}

	public function checkok(request $request, $ono){
		$data = $this->headerfunction();
		return view('checkok', ['ono'=>$ono, 'data'=>$data]);
	}

	public function creditconfirm(request $request){
		//echo $request->commonaddress;
		print_r($request->input());
	}

}
