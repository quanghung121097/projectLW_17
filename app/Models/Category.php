<?php

namespace App\Models;
use App\models\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){
        return $this->hasMany(Product::class);
    }
}
