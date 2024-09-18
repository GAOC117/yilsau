<?php

namespace App\Livewire;

use App\Models\Productos;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CrearProducto extends Component
{
    use WithFileUploads;

    public $nombre_producto;
    public $descripcion;
    public $costo;
    public $imagen;
   
  
    // esta es la descripcion breve del servicio para solo mostrar en la card/ tarjet en la pag de nosotros

    // esta es ahora la descripcion completa que se muestra cuando le das click en el boton de ver mas, para que asi ya no se muestre el texto de arriba, se mostraria el nombre del servicio, la imagen en grande, el precio 

    protected $rules = [
        'nombre_producto' => 'required|string',
        'descripcion'=>'required|max:50',
        'costo' => 'required|numeric',
        'imagen' => 'required|image'
    ];

 


    public function crearProducto(){
        $datos = $this->validate();

        // $imagen = $this->imagen->store('public/productos');
        
        // $datos['imagen'] = str_replace('public/productos/','',$imagen);
       
     
        // Productos::create([
        //     'nombre_producto' => $datos['nombre_producto'],
        //     'descripcion' => $datos['descripcion_breve'],
          
        //     'costo' => $datos['costo'],
        //     'imagen' => $datos['imagen']
        // ]);
        //   //crear un mensaje
        //   session()->flash('mensaje','Se agrego el nuevo producto de forma exitosa');
        
        //   //redireccionar al usuario hacia las vacantes
        //   return redirect()->route('producto');

    }


    public function render()
    {
        return view('livewire.crear-producto');
    }
}
