<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'desc','price','image', 'discount','published','type'
    ];
    public function rates(){
        return $this->hasMany(Rate::class,'product_id');
    }
}
