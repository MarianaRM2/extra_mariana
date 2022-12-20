<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $products = product::all();
        return view('productos.index', compact('products'));
    }
    public function deleted()
    {
        $products = Product::onlyTrashed()->get();
        return view('productos.deleted', [
            'products' => $products
        ]);
    }

    
    public function create()
    {
        return view('productos.add');
    }
    public function store(Request $request)
    {
        $input=$request->all();
        //return $input;
        product::create($input);
        return redirect('productos')->with('message','Dato guardado');
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nombre' => 'required',
                'precio' => 'required|integer',
                'stock' => 'required|integer',
            ],
            [
                'nombre.required' => 'El nombre es requerido',
                'precio.required' => 'El precio es requerido',
                'precio.integer' => 'El precio debe ser numero',
                'stock.required' => 'El stock es requerido',
                'stock.integer' => 'El stock debe ser numero',
                
            ]
        );
    }}