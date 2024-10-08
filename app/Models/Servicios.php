<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_servicio',
        'descripcion_breve',
        'descripcion_completa',
        'costo',
        'imagen'
    ];
}
