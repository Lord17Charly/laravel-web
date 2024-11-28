@extends('layouts.navbar')

@section('content')
<h1>Registrar Nueva Cita</h1>

<form action="{{ route('citas.store') }}" method="POST">
    @csrf

    <div>
        <label for="mascota">Nombre de la Mascota</label>
        <input type="text" name="mascota" id="mascota" required>
    </div>

    <div>
        <label for="servicio">Servicio</label>
        <input type="text" name="servicio" id="servicio" required>
    </div>

    <div>
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha" required>
    </div>

    <div>
        <label for="hora">Hora</label>
        <input type="time" name="hora" id="hora" required>
    </div>

    <div>
        <label for="notas">Notas</label>
        <textarea name="notas" id="notas"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('citas.index') }}" class="btn btn-secondary">Regresar</a>
</form>
@endsection
