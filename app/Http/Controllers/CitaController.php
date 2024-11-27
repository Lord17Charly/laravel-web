<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitaController extends Controller
{
    public function create()
    {
        return view('citas.form');
    }

    public function store(Request $request)
    {
        // Validar y guardar los datos de la cita
        $validated = $request->validate([
            'mascota_id' => 'required|exists:mascotas,id',
            'servicio_id' => 'required|exists:servicios,id',
            'fecha' => 'required|date',
            'hora' => 'required',
            'estado' => 'required'
        ]);

        Cita::create($validated);

        return redirect()->route('home')->with('success', 'Cita agregada con éxito');
    }
}
