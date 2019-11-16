<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
class CookieController extends Controller
{
    public function set()
    {
    	Cookie::queue('name', 'hung');
    	return response('hello')->cookie('giohang','1',10);
    	
    }
    public function get(Request $request)
    {
    	$value=$request->cookie('giohang');
    	$name=Cookie::get('name');
    	echo $value;
    	echo '<br>'.$name;
    }
}
