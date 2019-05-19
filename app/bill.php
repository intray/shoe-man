<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table = "bills";

    public function bill_deteil(){
    	return $this->hasMany('app\billdetail','id_bills','id');
    }

    public function customer(){
    	return $this->belongTo('app\customer','id_customer','id');
    }
}
