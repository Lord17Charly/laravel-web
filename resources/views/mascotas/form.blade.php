@extends('layouts.navbar')

@section('content')
<h2>{{ isset($mascota) ? 'Editar Mascota' : 'Registrar Nueva Mascota' }}</h2>

<form action="{{ isset($mascota) ? route('mascotas.update', $mascota->id) : route('mascotas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($mascota))
        @method('PUT')
    @endif

    <div>
        <label for="id">ID</label>
        <input type="text" name="id" id="id" placeholder="ID" value="{{ $mascota->id ?? '' }}" {{ isset($mascota) ? 'readonly' : '' }}>
    </div>
    
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{ $mascota->nombre ?? '' }}" required>
    </div>
    
    <div>
        <label for="especie">Especie</label>
        <input type="text" name="especie" id="especie" placeholder="Especie" value="{{ $mascota->especie ?? '' }}" required>
    </div>
    
    <div>
        <label for="raza">Raza</label>
        <input type="text" name="raza" id="raza" placeholder="Raza" value="{{ $mascota->raza ?? '' }}" required>
    </div>
    
    <div>
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad" placeholder="Edad" value="{{ $mascota->edad ?? '' }}" required>
    </div>
    
    <div>
        <label for="peso">Peso</label>
        <input type="number" step="0.01" name="peso" id="peso" placeholder="Peso" value="{{ $mascota->peso ?? '' }}" required>
    </div>
    
    <div>
        <label for="dueño">Dueño</label>
        <input type="text" name="dueño" id="dueño" placeholder="Dueño" value="{{ $mascota->dueño ?? '' }}" required>
    </div>
    
    <div>
        <label for="imagen">Imagen</label>
        <input type="file" name="imagen" id="imagen">
        @if(isset($mascota) && $mascota->imagen)
            <p>Imagen actual:</p>
            <img src="{{ asset('storage/' . $mascota->imagen) }}" alt="Imagen de la mascota" width="150">
        @endif
    </div>
    
    <button type="submit"><span class="icon">🐾</span> {{ isset($mascota) ? 'Actualizar Mascota' : 'Guardar Mascota' }}</button>
    <a href="{{ route('mascotas.index') }}" class="btn btn-secondary">Regresar</a>
</form>
@endsection
