<?php

namespace App\Livewire;

use App\Models\Productos;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditarProducto extends Component
{
    use WithFileUploads;
    
    public $nombre_producto;
    public $descripcion;
    public $costo;
    public $imagen;
    public $imagen_nueva;
    public $producto_id;


    protected $rules = [
        'nombre_producto' => 'required|string',
        'descripcion'=>'required|max:50',
        'costo' => 'required|numeric',
        'imagen_nueva' => 'nullable|image'
    ];


    public function mount(Productos $producto){
        
        $this->nombre_producto = $producto->nombre_producto;
        $this->descripcion= $producto->descripcion;
        $this->costo = $producto->costo;
        $this->imagen = $producto->imagen;
        $this->producto_id = $producto->id;
    }

    public function editarProducto(){
        
        $datos = $this->validate();
        
        //si hay imagen nueva
        if($this->imagen_nueva){
            $imagen = $this->imagen_nueva->store('public/productos');
            $datos['imagen'] =  str_replace('public/productos/','',$imagen);
        }
        
        //buscar el servicio a editar
        $producto = Productos::find($this->producto_id);

        //asignar valores
        $producto->nombre_producto = $datos['nombre_producto'];
        $producto->descripcion = $datos['descripcion'];
        $producto->costo = $datos['costo'];
        $producto->imagen = $datos['imagen'] ?? $producto->imagen;

        $producto->save();

        session()->flash('mensaje','El producto se actualizó correctamente');

        return redirect()->route('productos');


    }

    public function render()
    {
        return view('livewire.editar-producto');
    }
}
