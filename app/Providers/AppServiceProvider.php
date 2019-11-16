<?php

namespace App\Providers;
use App\Models\Category;
use View;
use App\Models\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $cate=Category::get();
        Cache::put('cate',$cate,60*60);
        $categories = Cache::remember('cate',60, function() {
            return $categories=Category::get();
        });
        
        $product_random=Product::get();
        Cache::put('product_random',$product_random,60*60);
        $product_randoms = Cache::remember('product_random',60, function() {
            return $product_randoms=Category::get();
        });
   
        View::share('categories', $categories);
        View::share('product_randoms', $product_randoms);
    }
}
