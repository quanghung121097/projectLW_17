<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
    	return view('frontend.home.index');
    	
    }
    function shop(){
    	return view('frontend.home.shop');
    }
    function product(){
    	return view('frontend.home.product');
    }
    function cart(){
        return view('frontend.home.cart');
    }
    function contact(){
        return view('frontend.home.contact');
    }
}
