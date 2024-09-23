<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        return view('productos.index');
    }


    public function create(){
        return view('productos.create');
    }


    public function edit(Productos $producto){
    
        return view('productos.edit',[
           'producto' => $producto
        ]);
     }
  
  
     public function show(Productos $producto){
        
        return view('productos.show',[
           'producto' => $producto
        ]);
     }
}
