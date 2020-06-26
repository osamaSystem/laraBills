<?php

namespace App\Http\Controllers;

use App\Http\Requests\AllBillRequest;
use App\Models\AllBill;
use App\Models\Product;
use Illuminate\Http\Request;


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

   public function search(Request $request){

//'product','amount','total_price','date','migrator',
       $allBill = AllBill::where('product','like','%'.$request -> get('searchRequest').'%')
           ->orWhere('amount','like','%'.$request -> get('searchRequest').'%')
           ->orWhere('id','like','%'.$request -> get('searchRequest').'%')
           ->orWhere('total_price','like','%'.$request -> get('searchRequest').'%')
           ->orWhere('date','like','%'.$request -> get('searchRequest').'%')
           ->orWhere('migrator','like','%'.$request -> get('searchRequest').'%')
           ->orderBy('id','desc')
           ->get();
       return json_encode($allBill);
//       return 'ok';
   }

    public function print($id){
        $allBill = AllBill::find($id);
        if (!$allBill){
            return redirect()->back();
        }
        $details = '' ;//here i should write details
        $allBill = AllBill::select('id','product','amount','total_price','date','migrator','customer')->find($id);
        return view('bills.print',compact('allBill'));//->with('details',$details);
    }


}
