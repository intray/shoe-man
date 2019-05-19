<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\billdetail;

class BillController extends Controller
{
    public function getListBill()
    {
    	$bill = billdetail::all();
    	return view('admin.Bill.List',['bill'=>$bill]);
    }
}
