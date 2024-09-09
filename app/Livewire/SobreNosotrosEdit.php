<?php

namespace App\Livewire;

use App\Models\Nosotros;
use Livewire\Component;

class SobreNosotrosEdit extends Component
{
    public $sobre_nosotros;
    public $mision;
    public $vision;

public function mount(){
    $nosotros = Nosotros::first();
    dd($nosotros);
    $this->sobre_nosotros = $nosotros->sobre_nosotros;

}

    public function render()
    {

        return view('livewire.sobre-nosotros-create');
    }
}
