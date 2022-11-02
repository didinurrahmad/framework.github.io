<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
        return view('customer.index',[
            'customers' => Customer::all(),
            'title' => 'Customer'
        ]
        );
    }
    public function create(){
        return view('customer.create',[
            'customers' => Customer::all(),
            'title' => 'Customer'
        ]
        );
    }
    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'noHP' => 'required|unique:customers|string',
            'face_id' => 'required'
        ]);

        Customer::create($validateDate);

        return redirect()->route('customer.index')->with('success', 'Customer berhasil di tambahkan');
    }
}
