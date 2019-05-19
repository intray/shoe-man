<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "products";

    public function product_type(){
    	return $this->belongTo('app\productType','id_type','id');
    }

    public function bill_deteil(){
    	return $this->hasMany('app\billdetail','id_products','id');
    }
}
