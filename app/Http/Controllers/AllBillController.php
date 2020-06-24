<?php

namespace App\Http\Controllers;

use App\Http\Requests\AllBillRequest;
use App\Models\AllBill;
use App\Models\Product;


class AllBillController extends Controller
{
   public function getAllBills(){
       $allBills = AllBill::orderBy('id','desc')->paginate(10);

       return view('bills.allBills',compact('allBills'));
   }


    public function store(AllBillRequest $request){

        AllBill::create([
            'product' =>  $request -> product ,
            'amount' => $request -> amount,
            'total_price' => $request -> total_price,
            'date' => $request -> date,
            'customer' => $request -> customer,
            'migrator' => $request -> migrator
        ]);

        return redirect()->back()->with(['success'=> 'تم اضافة الفاتورة بنجاح']);
    }

    public function create(){

       $products =  Product::get();
        return view('bills.create')->with('products',$products);
    }


    public function edit($id){
        $allBill = AllBill::find($id);
        if (!$allBill){
        return redirect()->back();
    }
        $products =  Product::get();
       $allBill = AllBill::select('id','product','amount','total_price','date','migrator','customer')->find($id);
        return view('bills.edit',compact('allBill'))->with('products',$products);
   }




    public function delete($id){
        $allBill = AllBill::find($id);
        if (!$allBill){
            return redirect()->back();
        }
        $allBill ->delete();
        return redirect('bills/getAll')->with(['deleteSuccess'=> 'تم الحذف بنجاح']);

    }


    public function update(AllBillRequest $request,$id){
//       $allBill = AllBill::select('id','product','amount','total_price','date','migrator','customer')->find($id);
       $allBill = AllBill::get()->find($id);
       if (!$allBill){
           return redirect()->back();
       }

       $allBill->update($request -> all());

       if ($allBill){
          return redirect('bills/getAll')->with(['successful' => 'تم التحديث بنجاح']);
       }
   }

}
