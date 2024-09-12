<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;

class NuestrosServiciosController extends Controller
{
   public function index(){
    
    return view('servicios.index');
   }
   public function create(){
    
    return view('servicios.create');
   }


   public function edit(Servicios $servicio){
    
      return view('servicios.edit',[
         'servicio' => $servicio
      ]);
   }


   public function show(Servicios $servicio){
      
      return view('servicios.show',[
         'servicio' => $servicio
      ]);
   }
}
