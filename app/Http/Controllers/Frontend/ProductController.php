<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    public function product($id){
    	$user=Auth::User();

    	$product=Product::with(['images','category'])->find($id);
    	$product->view_count=$product->view_count+1;
    	$product->save();
    	return view('frontend.home.product')->with(['product'=>$product,'user' => $user]);
    }
}
