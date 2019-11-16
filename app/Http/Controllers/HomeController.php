<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $put=Cache::put('name','hung',60*2);
       // $cate=Category::get();
       // Cache::put('cate',$cate,60*2);
       // Cache::put('view_count',1,60*60);


       return view('home');

   }
  //  public function getcache()
  //  {
  //   $categories = Cache::remember('cate',1, function() {
  //     return $categorie=Category::get();
  //   });
  //   dd($categories);
  //   $name=Cache::get('name');
  //   $age=Cache::get('age',23);
  //   $cate=Cache::get('cate');
  //   if (Cache::has('abc')) {
  //     echo 'có<br>';
  //   } else {
  //     echo 'không có<br>';
  //   }
  //   $abc=Cache::get('abc');
  //   $view_count=Cache::get('view_count');
  //   echo $view_count;
  //   Cache::increment('view_count');
  //   $view_count=Cache::get('view_count');

  //   echo $view_count;
  //   dd($name);
  // }
}
