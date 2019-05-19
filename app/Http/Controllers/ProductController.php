<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\productType;

class ProductController extends Controller
{
    public function getListProduct(){
    	$type_products = productType::all();
    	$product = product::orderBy('id','desc')->get();

    	return view('admin.Product.List',compact('product'));
    }

    public function getAddProduct(){
    	$product = product::all();
    	$type_products = productType::all();
    	return view('admin.Product.Add',['type_products'=>$type_products,'product'=>$product]);
    }

    public function postAddProduct(Request $request)
    {
    	
    	// $this->validate($request,[
	    // 		'name'=>'required|max:25|unique:product,name',
	    // 		'type_products'=>'required',
	    // 		'description'=>'required|min:10',
	    // 		'unit_price'=>'required',
	    // 		'file'=>'required',
    	// 	],[
    	// 		'name.required'=>'Tên không được để trống',
    	// 		'name.max'=>'Tên không được quá 10 ký tự',
    	// 		'name.unique'=>'Tên sản phẩm đã bị trùng',
    	// 		'type_products.required'=>'Loại sản phẩm chưa được chọn',
    	// 		'description.required'=>'Giới thiệu không được để trống',
    	// 		'description.min'=>'Giới thiệu không được đưới 10 ký tự',
    	// 		'unit_price.required'=>'Giá không được để trống',
    	// 		'file.required'=>'Hình ảnh không được để trống',
    	// 	]);

        if ($request -> hasFile('file')) 
        {
            $filename = $request -> file->getClientOriginalName();
            $request ->file->storeAs('source/img/product', $filename);
            $product = new product;
            $product -> id_type = $request -> type_products;
            $product-> name = $request -> name;
            $product-> description = $request -> description;
            $product-> unit_price = $request -> unit_price;
            $product-> promotion_price = $request -> promotion_price;
            $product-> image = $filename;
            $product -> save();
        }
    	return redirect ('admin/product/list');
    }

    public function getEditProduct($id){
    	$product = product::find($id);
    	$type_products = productType::all();
    	return view('admin.Product.Edit',['product'=>$product,'type_products'=>$type_products]);
    }

    public function postEditProduct(Request $request,$id){
    	$product = product::find($id);
    	if ($request -> hasFile('file')) 
        {
            $filename = $request -> file->getClientOriginalName();
            $request ->file->storeAs('source/img/product', $filename);
            $product -> id_type = $request -> type_products;
            $product-> name = $request -> name;
            $product-> description = $request -> description;
            $product-> unit_price = $request -> unit_price;
            $product-> promotion_price = $request -> promotion_price;
            $product-> image = $filename;
            $product -> save();
        }
    	return redirect ('admin/product/list');
    }

    public function postDeleteProduct($id) {
    	$product = product::find($id);
    	$product->delete();
    	return redirect('admin/product/list')->with('thongbao','Xóa rồi nhá');
    }
}
