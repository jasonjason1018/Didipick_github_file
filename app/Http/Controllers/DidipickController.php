<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\didipick_member;

class DidipickController extends Controller
{
    public function checklogin(){
    	$db = new didipick_member;
    	$data = $db->all();
    	foreach($data as $k=>$v){
    		echo $v->name;
    	}
    }
}
