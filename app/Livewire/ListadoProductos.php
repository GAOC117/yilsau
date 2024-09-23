<?php

namespace App\Livewire;

use App\Models\Productos;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class ListadoProductos extends Component
{
    protected $listeners = ['eliminarProducto'];

    use WithPagination;
    use WithoutUrlPagination;

    public function render()
    {

        $productos = Productos::paginate(10);
        return view('livewire.listado-productos',[
            'productos' => $productos
        ]);
    }


    public function eliminarProducto(Productos $producto)
    {
        $producto->delete();
    }
}
