<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billdetail extends Model
{
    protected $table = "bill_detail";

    public function product_type(){
    	return $this->belongTo('app\product','id_products','id');
    }

    public function bill(){
    	return $this->belongTo('app\bill','id_bill','id');
    }
}
