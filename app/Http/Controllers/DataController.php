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
            'manufacture' => 'required',
            'price' => 'required',
            'id' => 'required',
        ]);
        // return view('done');
    }
}
