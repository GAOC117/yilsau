<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Nosotros;

class SobreNosotros extends Component
{
    public function render()
    {
        $nosotros = Nosotros::first(); 

        return view('livewire.sobre-nosotros',[
                'nosotros' => $nosotros
            ]);
    }
}
