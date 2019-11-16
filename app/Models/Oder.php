<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Oder_detail;

class Oder extends Model
{
    protected $table = 'oders';
    public function oder_details(){
        return $this->hasMany(Oder_detail::class);
    }
}
