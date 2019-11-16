<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Oder;
use App\Models\Oder_detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\User;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
   public function index()
    {
             $user=Auth::User();
        $product_sale=Product::get();
        Cache::put('product_sale',$product_sale,60*60);
        $product_sales = Cache::remember('product_sale',60, function() {
            return $product_sales=Product::get();
        });
        $productss=Product::with('images')->orderBy('view_count','desc')->take(8)->get();
        Cache::put('productss',$product_sale,60*60);
        $products = Cache::remember('productss',60, function() {
            return $products=Product::with('images')->orderBy('view_count','desc')->take(8)->get();
        });
        $orders=Oder_detail::groupBy('product_id')->select('product_id', DB::raw('count(*) as total'))->orderBy('total','desc')->take(12)->get();
        // $cate=[];
        // foreach ($orders as $order) {
        //     $cate_con=$order->product->category->id;
        //     $cate[]=['cate_con'=>$cate_con];
        // }
        // $ct=Category::where
        // $products_sellers_dt=Product::with('images')->whereIn('category_id',$cate)->orWhere('category_id','=','2')->orderBy('created_at', 'desc')->get();
        // dd($products_sellers_dt);
        
        $product_news=Product::orderBy('created_at','desc')->take(10)->get();
        $cate_dt=Category::where('parent_id','=','2')->get('id');
        $cate_mt=Category::where('parent_id','=','1')->get('id');
        $product_phones=Product::with('images')->whereIn('category_id',$cate_dt)->orWhere('category_id','=','2')->orderBy('created_at', 'desc')->orderBy('created_at','desc')->take(10)->get();
        $product_computers=Product::with('images')->whereIn('category_id',$cate_mt)->orWhere('category_id','=','1')->orderBy('created_at', 'desc')->orderBy('created_at','desc')->take(10)->get();
        
        return view('frontend.home.index')->with([
            'products' => $products,
            'product_sales' => $product_sales,
            'orders' => $orders,
            'product_news' => $product_news,
            'product_phones' => $product_phones,
            'product_computers' => $product_computers,
            'user' => $user
            
        ]);

    }

    
    
    // function cart(){
    //     return view('frontend.home.cart');
    // }
    public function contact(){
        return view('frontend.home.contact');
    }
}
