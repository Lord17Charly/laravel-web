<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::all(); // Obtener todas las citas
        return view('citas.index', compact('citas'));
    }

    public function create()
    {
        return view('citas.form'); // Mostrar el formulario de creación
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'mascota' => 'required',
            'servicio' => 'required',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'notas' => 'nullable',
        ]);

        Cita::create($validated); // Guardar los datos en la tabla

        return redirect()->route('citas.index')->with('success', '¡Cita creada con éxito!');
    }
}
