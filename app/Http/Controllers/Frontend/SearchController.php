<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class SearchController extends Controller
{
    public function search(Request $request)
    {
    	$product_seachs=Product::where('name','like','%'.$request->get('search_key').'%')->get();
    	dd($product_seachs);
    	
    }
}
