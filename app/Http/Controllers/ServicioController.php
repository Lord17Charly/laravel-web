<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServicioController extends Controller
{
    public function create()
    {
        return view('servicios.form');
    }

    public function store(Request $request)
    {
        // Validar y guardar los datos del servicio
        $validated = $request->validate([
            'id' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric'
        ]);

        Servicio::create($validated);

        return redirect()->route('home')->with('success', 'Servicio agregado con éxito');
    }
}
