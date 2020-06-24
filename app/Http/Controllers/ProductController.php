<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function getAllProducts(){

        $products = Product::get();
        return view('products.allProducts',compact('products'));
    }


    public function getProductPrice(){

        $products = Product::get();
        return $products;
    }


    public function store(ProductRequest $request){


        Product::create([
            'product_name'=> $request -> product_name,
            'product_price'=> $request -> product_price
        ]);
        return redirect()->back()->with(['success'=> 'تم ادخال صنف جديد بنجاح']);
    }

    public function create(){
        return view('products.create');
    }


    public function edit($id){
        $product = Product::find($id);
        if (!$product){
        return redirect()->back();
    }
        $product = Product::get()->find($id);
        return view('products.edit',compact('product'));
   }


   public function delete($id){
       $product = Product::find($id);
       if (!$product){
           return redirect()->back();
       }
       $product ->delete();
       return redirect('products/getAll')->with(['deleteSuccess'=> 'تم الحذف بنجاح']);
   }

    public function update(ProductRequest $request,$id){
        $product = Product::select('id','product_name','product_price')->find($id);
        if (!$product){
            return redirect()->back();
        }


        $product->update($request -> all());
        if ($product){
            return redirect('products/getAll')->with(['successful' => 'تم التحديث بنجاح']);
        }
    }

}
