<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    public function cate_product(){
    	return $this->belongsto('App\Models\ProductCategory','product_id');
    }
}
