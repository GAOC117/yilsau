<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosotrosController extends Controller
{
    public function index(){
        return view('nosotros.index');
    }


    public function edit(){
        return view('nosotros.edit');
    }
}
