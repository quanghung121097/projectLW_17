<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Oder;
use App\Models\Product;

class DashboardController extends Controller
{
	public function index()
	{
		$orders = Oder::get();
		$products = Product::get();
		return view('backend.Dashboard_full')->with([
			'orders' => $orders,
			'products' => $products,
		]);
	}
}
