<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Oder;
use App\Models\Oder_detail;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePayRequest;
use Mail;
use App\User;


class PayController extends Controller
{

	public function pay(StorePayRequest $request)
	{
		$faker = \Faker\Factory::create();
		$oder= new Oder();
		$oder->code='ĐH_'.\Carbon\Carbon::now().'_'.\Illuminate\Support\Str::slug($request->get('customer_name'));
		$oder->total=$request->get('total');
		$oder->customer_phone=$request->get('customer_phone');
		$oder->customer_name=$request->get('customer_name');
		$oder->customer_email=$request->get('customer_email');
		$oder->customer_address=$request->get('customer_address');
		$oder->save();
		$odid=$oder->id;
		$carts=Cart::content();

		foreach ($carts as $cart) {
			$oder_detail = new Oder_detail();
			$oder_detail->oder_id=$odid;
			$oder_detail->product_id=$cart->id;
			$oder_detail->quantity=$cart->qty;
			$oder_detail->subtotal=$cart->price;
			$oder_detail->save();
		}
		$name=$oder->customer_name;
		$email=$oder->customer_email;
		Mail::send('email.sendmail',['carts'=>$carts,'name'=>$name], function ($mail) use ($email,$name){
			$mail->to($email)->subject('Đặt hàng');
		} );
		Cart::destroy();
		return redirect()->route('frontend.dashboard');
	}
}
