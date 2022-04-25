<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataList;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Hash;

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
            'product_id' => 'required',
        ]);


            $data = new DataList();
            $data->name=$request->name;
            $data->manufacture_by=$request->manufacture_by;
            $data->manufacture_date=$request->manufacture_date;
            $data->expiry_date=$request->expiry_date;
            $data->price=$request->price;
            $data->weight=$request->weight;
            $data->product_id=$request->product_id;
            $res=$data->save();

            if ($res) {
                return back()->with('sucess', 'Item Added sucessfully');
            } else {
                return back()->with('fail', 'something went wrong');
            }


    }
}
