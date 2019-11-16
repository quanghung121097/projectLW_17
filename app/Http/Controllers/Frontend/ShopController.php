<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class ShopController extends Controller
{
   public function shop($id){
        $user=Auth::User();
    	$categories=Category::get();
        $category=Category::find($id);
        $cate=Category::where('parent_id','=',$id)->get('id');
        $brands=Category::where('parent_id','=',$id)->get();
        $products=Product::with('images')->whereIn('category_id',$cate)->orWhere('category_id','=',$id)->orderBy('created_at', 'desc')->paginate(10);
    	return view('frontend.home.shop')->with([
    		'category'=>$category,
    		'products'=>$products,
    		'categories' => $categories,
    		'brands' => $brands,
            'user' => $user
    	]);
    }

}
