<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\CorreoMailable;
use Illuminate\Support\Facades\Mail;

class Contacto extends Component
{
    public $nombre;
    public $correo;
    public $telefono;
    public $mensaje;

    // Validaciones
    protected $rules = [
        'nombre' => 'required|min:3',
        'correo' => 'required|email',
        'telefono'=>'required|numeric|min:10',
        'mensaje' => 'required|min:10'
    ];


    public function enviar(){
        $datos = $this->validate();
 
        $correo = new CorreoMailable($datos['nombre'], $datos['mensaje'], $datos['telefono']);

        // Envía el correo a la dirección proporcionada
        Mail::to($datos['correo'])->send($correo);

        // Mensaje de éxito
        session()->flash('message', '¡Correo enviado exitosamente!');
        $this->nombre="";
        $this->telefono="";
        $this->correo="";
        $this->mensaje="";
    }
    public function render()
    {
        return view('livewire.contacto');
    }
}
