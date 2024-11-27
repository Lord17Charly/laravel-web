<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;

class MascotaController extends Controller
{
    public function index(Request $request)
    {
        // Obtiene todas las mascotas o realiza búsqueda
        $mascotas = Mascota::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $mascotas->where('id', $search);
        }

        $mascotas = $mascotas->get();

        return view('mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        return view('mascotas.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'especie' => 'required',
            'raza' => 'required',
            'edad' => 'required|integer',
            'peso' => 'required|numeric',
            'dueño' => 'required',
            'imagen' => 'image|max:2048'
        ]);

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('imagenes', 'public');
            $validated['imagen'] = $path;
        }

        Mascota::create($validated);

        return redirect()->route('mascotas.index')->with('success', '¡Mascota guardada con éxito!');
    }

    public function edit($id)
    {
        $mascota = Mascota::findOrFail($id);
        return view('mascotas.form', compact('mascota'));
    }

    public function update(Request $request, $id)
    {
        $mascota = Mascota::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'required',
            'especie' => 'required',
            'raza' => 'required',
            'edad' => 'required|integer',
            'peso' => 'required|numeric',
            'dueño' => 'required',
            'imagen' => 'image|max:2048'
        ]);

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('imagenes', 'public');
            $validated['imagen'] = $path;
        }

        $mascota->update($validated);

        return redirect()->route('mascotas.index')->with('success', '¡Mascota actualizada con éxito!');
    }

    public function destroy($id)
    {
        $mascota = Mascota::findOrFail($id);
        $mascota->delete();

        return redirect()->route('mascotas.index')->with('success', '¡Mascota eliminada con éxito!');
    }
}
