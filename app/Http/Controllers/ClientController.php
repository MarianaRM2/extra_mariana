<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = client::all();
        return view('clientes.index', compact('clients'));
    }
    public function create()
    {
        return view('clientes.add');
    }
    public function store(Request $request)
    {
        $input=$request->all();
        //return $input;
        client::create($input);
        return redirect('clientes')->with('message','Dato guardado');
    }
}
