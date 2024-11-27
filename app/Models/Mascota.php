<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    // Aquí puedes definir los atributos que son asignables
    protected $fillable = [
        'id', 'nombre', 'especie', 'raza', 'edad', 'peso', 'dueño', 'imagen'
    ];
}
