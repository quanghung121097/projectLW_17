<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Oder_detail extends Model
{
    protected $table = 'oder_details';
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function oder(){
        return $this->belongsTo(Oder::class);
    }

}
