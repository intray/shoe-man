<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\productType;
use App\cart;
use App\customer;
use App\bill;
use App\billdetail;
use Session;

class IndexController extends Controller
{
    public function getIndex(){
    	$new_product = product::all();
    	return view('page.index',compact('new_product'));
    }
    public function getProduct(){
    	$type_product = productType::all();
    	return view('page.list-product',compact('type_product'));
    }
    public function getContact(){
    	return view('page.contact');
    }

    public function getGioithieu(){
        return view('page.gioithieu');
    }
    public function getSingleProduct($id){
    	$single_product = product::where('id',$id)->get();
    	// dd($single_product);
    	return view('page.single-product',compact('single_product'));
    }
    public function getLoaiProduct($id){
        $product = product::where('id_type',$id)->get();
        $type_product = productType::all();
        return view('page.type-product',compact(['product','type_product'])); 
    }

    public function getCart(){
        // dd(Session::forget('cart'));
        return view('page.cart');
    }

    public function getAddCart(Request $req,$id){
        $product = product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->Session()->put('cart',$cart);
        return redirect('cart');
    }

    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        // if (count($cart->items)>0) {
        //     Session::put('cart',$cart);
        // }
        // else{
        //     Session::forget('cart');
        // }
        Session::put('cart',$cart);
        return redirect()->back();
    }
    public function getDelAllCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        // if (count($cart->items)>0) {
        //     Session::put('cart',$cart);
        // }
        // else{
        //     Session::forget('cart');
        // }
        Session::put('cart',$cart);
        return redirect()->back();
    }

    public function getCheckout(){
        return view('cart');
    }

    public function postCheckout(Request $req){
        $cart = Session::get('cart');
        $customer = new customer;
        $customer->name = $req->name;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone_number;
        $customer->save();

        $bill = new bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->toltalPrice;
        $bill->payment = $req->payment;
        $bill->save();

        // foreach ($cart['items'] as $key => $value) {
        //     $bill_detail = new billdetail;
        //     $bill_detail->id_bill = $bill->id;
        //     $bill_detail->id_products = $key
        //     $bill_detail->quantity = $value['qty'];
        //     $bill_detail->unit_price = ($value['price']/$value['qty']);
        //     $bill_detail->save();
        // }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');
        
    }
}
