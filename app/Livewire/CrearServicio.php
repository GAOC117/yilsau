<?php

namespace App\Livewire;

use App\Models\Servicios;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CrearServicio extends Component
{

    use WithFileUploads;
    
    public $nombre_servicio;
    public $descripcion_breve;
    public $descripcion_completa;
    public $costo;
    public $imagen;
   
  
    // esta es la descripcion breve del servicio para solo mostrar en la card/ tarjet en la pag de nosotros

    // esta es ahora la descripcion completa que se muestra cuando le das click en el boton de ver mas, para que asi ya no se muestre el texto de arriba, se mostraria el nombre del servicio, la imagen en grande, el precio 

    protected $rules = [
        'nombre_servicio' => 'required|string',
        'descripcion_breve'=>'required|max:100',
        'descripcion_completa' => 'required',
        'costo' => 'required|numeric',
        'imagen' => 'required|image'
    ];

 


    public function crearServicio(){
        $datos = $this->validate();

        $imagen = $this->imagen->store('public/servicios');
        
        $datos['imagen'] = str_replace('public/servicios/','',$imagen);
       
     
        Servicios::create([
            'nombre_servicio' => $datos['nombre_servicio'],
            'descripcion_breve' => $datos['descripcion_breve'],
            'descripcion_completa' => $datos['descripcion_completa'],
            'costo' => $datos['costo'],
            'imagen' => $datos['imagen']
        ]);
          //crear un mensaje
          session()->flash('mensaje','Se agrego el nuevo servicio de forma exitosa');
        
          //redireccionar al usuario hacia las vacantes
          return redirect()->route('servicios');

    }


    public function render()
    {
        return view('livewire.crear-servicio');
    }
}
