<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productType extends Model
{
    protected $table = "type_products";

    public function product(){
    	return $this->hasMany('app\product','id_type','id');
    }		
}
