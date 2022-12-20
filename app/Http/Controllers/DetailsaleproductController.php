<?php

namespace App\Http\Controllers;

use App\Models\detailsaleproduct;
use App\Models\product;
use App\Models\sale;
use Illuminate\Http\Request;

class DetailsaleproductController extends Controller
{
    public function index()
    {
        $detailsaleproducts = detailsaleproduct::all();
        return view('detalles.index', compact('detailsaleproducts'));
    }
    public function create()
    {
        $sales = sale::all('id','client_id');
        $products = product::all('id','name');
        return view('detalles.add',compact('products','sales'));
    }
    public function store(Request $request)
    {
        $input=$request->all();
        //return $input;
        detailsaleproduct::create($input);
        return redirect('detalles')->with('message','Dato guardado');
    }
}
