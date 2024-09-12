<?php

namespace App\Livewire;

use App\Models\Servicios;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditarServicio extends Component
{

    use WithFileUploads;
    
    public $nombre_servicio;
    public $descripcion_breve;
    public $descripcion_completa;
    public $costo;
    public $imagen;
    public $imagen_nueva;
    public $servicio_id;


    protected $rules = [
        'nombre_servicio' => 'required|string',
        'descripcion_breve'=>'required|max:100',
        'descripcion_completa' => 'required',
        'costo' => 'required|numeric',
        'imagen_nueva' => 'nullable|image'
    ];


    public function mount(Servicios $servicio){
        
        $this->nombre_servicio = $servicio->nombre_servicio;
        $this->descripcion_breve = $servicio->descripcion_breve;
        $this->descripcion_completa = $servicio->descripcion_completa;
        $this->costo = $servicio->costo;
        $this->imagen = $servicio->imagen;
        $this->servicio_id = $servicio->id;
    }

    public function editarServicio(){
      
        $datos = $this->validate();
        
        //si hay imagen nueva
        if($this->imagen_nueva){
            $imagen = $this->imagen_nueva->store('public/servicios');
            $datos['imagen'] =  str_replace('public/servicios/','',$imagen);
        }
        
        //buscar el servicio a editar
        $servicio = Servicios::find($this->servicio_id);

        //asignar valores
        $servicio->nombre_servicio = $datos['nombre_servicio'];
        $servicio->descripcion_breve = $datos['descripcion_breve'];
        $servicio->descripcion_completa = $datos['descripcion_completa'];
        $servicio->costo = $datos['costo'];
        $servicio->imagen = $datos['imagen']??$servicio->imagen;

        $servicio->save();

        session()->flash('mensaje','El servicio se actualizó correctamente');

        return redirect()->route('servicios');


    }

    public function render()
    {
        return view('livewire.editar-servicio');
    }
}
