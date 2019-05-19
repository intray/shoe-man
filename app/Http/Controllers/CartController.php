<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\product;

class CartController extends Controller
{
    public function getAddCart($id){
    	$product = product::find($id);
    	Cart::add(['id' => $id, 'name' => $product->name , 'qty' => 1, 'price' => $product->unit_price, 'options' => ['img' => $product->image]]);
    	return redirect('cart/show');
    }

    public function getShowCart(){
    	return view('page.cart');
    }
}
