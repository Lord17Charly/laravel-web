@extends('layouts.navbar')

@section('content')
<h1>Listado de Mascotas</h1>

<!-- Formulario de búsqueda -->
<form action="{{ route('mascotas.index') }}" method="GET">
    <input type="text" name="search" placeholder="Buscar por ID" value="{{ request('search') }}">
    <button type="submit">Buscar</button>
</form>

<!-- Tabla de mascotas -->
<table border="1" cellspacing="0" cellpadding="10">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Edad</th>
            <th>Peso</th>
            <th>Dueño</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($mascotas as $mascota)
        <tr>
            <td>{{ $mascota->id }}</td>
            <td>{{ $mascota->nombre }}</td>
            <td>{{ $mascota->especie }}</td>
            <td>{{ $mascota->raza }}</td>
            <td>{{ $mascota->edad }}</td>
            <td>{{ $mascota->peso }}</td>
            <td>{{ $mascota->dueño }}</td>
            <td>
                <!-- Botón de Editar -->
                <a href="{{ route('mascotas.edit', $mascota->id) }}" class="btn btn-primary">Editar</a>

                <!-- Botón de Eliminar -->
                <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta mascota?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="8">No se encontraron mascotas</td>
        </tr>
        @endforelse
    </tbody>
</table>

<!-- Botón para agregar nueva mascota -->
<a href="{{ route('mascotas.create') }}" class="btn btn-success">Agregar Nueva Mascota</a>
@endsection
