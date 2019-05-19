<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productType;

class TypeProductController extends Controller
{
    public function getListTypeProduct(){
    	$type_product = productType::all();
    	return view('admin.TypeProduct.List',['type_product'=>$type_product]);
    }

    public function getAddTypeProduct(){
    	return view('admin.TypeProduct.Add');
    }

    public function postAddTypeProduct(Request $request){
            $type_product = new productType;
            $type_product -> name = $request -> name;
            $type_product-> depcription = $request -> depcription;
            $type_product -> save();
    	return redirect ('admin/type-product/list');
    }

    public function getEditTypeProduct($id){
        $type_product = productType::find($id);
        return view('admin.TypeProduct.Edit',['type_product'=>$type_product]);
    }

    public function postEditTypeProduct(Request $request,$id){
        $type_product = productType::find($id);
            $type_product -> name = $request -> name;
            $type_product-> depcription = $request -> depcription;
            $type_product -> save();
        return redirect ('admin/type-product/list');
    }

    public function postDeleteTyepeProduct($id) {
        $type_product = productType::find($id);
        $type_product->delete();
        return redirect('admin/type-product/list')->with('thongbao','Xóa rồi nhá');
    }
}
