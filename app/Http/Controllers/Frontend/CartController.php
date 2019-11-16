<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\User;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function index()
    {
        $user=Auth::User();
    	// $item=Cart::add('1','Product 1', 1,1000); 
        	$items=Cart::content();
    	return view('frontend.home.cart')->with([
            'items'=>$items,
            'user' => $user,
    ]);
    }
    public function add($id)
    {
    	$Product=Product::with('images')->find($id);
    	Cart::add(['id'=> $Product->id,'weight'  => 0 ,'name'=> $Product->name,'qty'=> 1,'price' => $Product->sale_price ,'options' => ['image' => $Product->images[0]->path]]);
    	return redirect()->route('frontend.cart');


    }
    public function add_view_product($id,Request $request)
    {
        $qty=$request->get('qty');
        $Product=Product::with('images')->find($id);
        Cart::add(['id'=> $Product->id,'weight'  => 0 ,'name'=> $Product->name,'qty'=> $qty,'price' => $Product->sale_price ,'options' => ['image' => $Product->images[0]->path]]);
        return redirect()->route('frontend.cart');


    }
}
