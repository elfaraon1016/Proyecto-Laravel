<?php

namespace App\Http\Controllers;

use App\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index(){
        $productos = Producto::all();
        return view("producto.show",["productos"=>$productos]);
    }

    public function store(Request $request){
        $NuevoProducto = new Producto;
        $NuevoProducto->Nombre=$request->Nombre;
        $NuevoProducto->ValorUnitario=$request->ValorUnitario;
        $NuevoProducto->Codigo=$request->Codigo;
        $NuevoProducto->save();
        return redirect ('productos');

    }    

    public function create(){
        $productos = Producto::all();
        return view("producto.show",["productos"=>$productos]);

    }

    public function show(){
        $productos = Producto::all();
        return view("producto.show",["productos"=>$productos]);

    }

    public function update(){
        $productos = Producto::all();
        return view("producto.show",["productos"=>$productos]);

    }

    public function destroy(){
        $productos = Producto::all(); 
        return view("producto.show",["productos"=>$productos]);

    }

    public function edit(){
        $productos = Producto::all();
        return view("producto.show",["productos"=>$productos]);

    }

    }

