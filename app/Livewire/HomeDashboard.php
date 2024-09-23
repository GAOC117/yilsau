<?php

namespace App\Livewire;

use App\Models\Productos;
use App\Models\Servicios;
use Livewire\Component;

class HomeDashboard extends Component
{
    public function render()
    {
        $servicios = Servicios::orderBy('id','desc')->limit(5)->get();
        $productos = Productos::orderBy('id','desc')->limit(5)->get();

        
        return view('livewire.home-dashboard',[
            'productos' => $productos,
            'servicios' => $servicios
        ]);
    }
}
