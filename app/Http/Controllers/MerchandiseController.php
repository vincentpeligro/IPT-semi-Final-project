<?php

namespace App\Http\Controllers;

use App\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{

    public function index(){

        return view('pages.index');
    }
    public function investorList(){

        return view('pages.merchandise_list');
    }


    public function create()
    {
        //
        return view('pages.create_merchandise');
    }

    // Merchandise [id, name, description, quantity, price]
    public function store(Request $request)
    {
        Merchandise::create([
            'name'=>$request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);

        return redirect('create-merchandise')->with(['success' => 'New Merchandise created successfully']);
    }


    public function show()
    {
        $merchandises= Merchandise::all();

        return view('pages.merchandise_list',['merchandises'=>$merchandises]);

    }
}
