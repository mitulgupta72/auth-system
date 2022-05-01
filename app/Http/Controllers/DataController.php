<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Symfony\Component\HttpFoundation\Session\Session;

// use Illuminate\Support\Facades\Hash;

class DataController extends Controller
{
    public function AddToList()
    {
        return view('addItem');
    }

    public function addingitem(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'manufacture_by' => 'required',
            'price' => 'required',
            'product_id' => 'required'
        ]);


            $data = new Item();
            $data->name=$request->name;
            $data->manufacture_by=$request->manufacture_by;
            $data->manufacture_date=$request->manufacture_date;
            $data->expiry_date=$request->expiry_date;
            $data->price=$request->price;
            $data->weight=$request->weight;
            $data->product_id=$request->product_id;
            $res=$data->save();

            if ($res) {
                echo 'done';
                // return back()->with('sucess', 'you have registered sucessfully');
            } else {
                echo 'failed';
                // return back()->with('fail', 'something went wrong');
            }

    }
    public function list()
    {   $dataa=array();
        if(Session()->has('loginId')){
        $dataa = User::where('id', '=', Session()->get('loginId'))->first();

        $data = Item::all();
    }
        // return $data;
        // $data = array();
        // if (Session()->has('loginId')) {
        //     $data = Item::all();
        // }
        return view('list', ['data'=>$data],compact('dataa'));
    }

    public function print($order_id){

        if (Item::where('id',$order_id)->exists()){
            $orders=Item::find($order_id);
            // return view('print',compact('orders'));
            $data = [
                'orders' => $orders,
            ];
            $pdf = app('dompdf.wrapper');
            $pdf ->loadView('print', $data);
    
            return $pdf->download('fundaofwebit.pdf');
        }
        else{
            return redirect()->back()->with('status','Item not found');
        }
    }
}
