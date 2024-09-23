<?php

namespace App\Livewire;

use App\Models\Nosotros;
use Livewire\Component;

class SobreNosotrosEdit extends Component
{
    public $sobre_nosotros;
    public $mision;
    public $vision;


    protected $rules = [
        'sobre_nosotros' => 'required|max:200',
        'mision' => 'required|max:200',
        'vision' => 'required|max:200',
     
    ];


public function mount(){
    $nosotros = Nosotros::first();
 
    $this->sobre_nosotros = $nosotros->sobre_nosotros;
    $this->mision = $nosotros->mision;
    $this->vision = $nosotros->vision;

}

public function editarNosotros(){
        
    $datos = $this->validate();
    
    
    
    //buscar el servicio a editar
    $nosotros = Nosotros::first();

    //asignar valores
    $nosotros->sobre_nosotros = $datos['sobre_nosotros'];
    $nosotros->mision = $datos['mision'];
    $nosotros->vision = $datos['vision'];
  

    $nosotros->save();

    session()->flash('mensaje','La información se actualizó correctamente');

    return redirect()->route('nosotros');


}

    public function render()
    {

        return view('livewire.sobre-nosotros-edit');
    }
}
