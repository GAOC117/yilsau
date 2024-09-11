<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuestrosServiciosController extends Controller
{
   public function index(){
    
    return view('servicios.index');
   }
   public function create(){
    
    return view('servicios.create');
   }
}
