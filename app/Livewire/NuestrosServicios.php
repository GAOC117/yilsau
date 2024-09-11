<?php

namespace App\Livewire;

use App\Models\Servicios;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class NuestrosServicios extends Component
{

    protected $listeners = ['eliminarServicio'];

    use WithPagination;
    use WithoutUrlPagination;
    // protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $servicios = Servicios::paginate(10);

        return view('livewire.nuestros-servicios', [
            'servicios' => $servicios
        ]);
    }

    public function eliminarServicio(Servicios $servicio)
    {
        $servicio->delete();
    }
}
