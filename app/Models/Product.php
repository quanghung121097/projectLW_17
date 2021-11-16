<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\User;
use App\Models\Oder_detail;
// use App\Models\Image;

class Product extends Model
{
    protected $table = 'products';

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function images(){
        return $this->hasMany('App\Models\Image', 'product_id');
    }
    public function oder_details(){
        return $this->hasMany(Oder_detail::class);
    }

}
