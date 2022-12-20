<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales=sale::Select('sales.id','sales.fecha','clients.name')->join('clients','clients.id','=','sales.client_id')->get();
        $sales = sale::all();
        return view('ventas.index', compact('sales'));
    }
    
    public function create()
    {
        $clients = client::all('id','name');
        return view('ventas.add',compact('clients'));
    }
    public function store(Request $request)
    {
        $input=$request->all();
        //return $input;
        sale::create($input);
        return redirect('ventas')->with('message','Dato guardado');
    }
}
