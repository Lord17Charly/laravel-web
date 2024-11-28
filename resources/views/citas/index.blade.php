@extends('layouts.navbar')

@section('content')
<h1>Listado de Citas</h1>

<!-- Botón para agregar nueva cita -->
<a href="{{ route('citas.create') }}" class="btn btn-success">Agregar Nueva Cita</a>

<!-- Tabla de citas -->
<table border="1" cellspacing="0" cellpadding="10">
    <thead>
        <tr>
            <th>ID</th>
            <th>Mascota</th>
            <th>Servicio</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Notas</th>
        </tr>
    </thead>
    <tbody>
        @foreach($citas as $cita)
        <tr>
            <td>{{ $cita->id }}</td>
            <td>{{ $cita->mascota }}</td>
            <td>{{ $cita->servicio }}</td>
            <td>{{ $cita->fecha }}</td>
            <td>{{ $cita->hora }}</td>
            <td>{{ $cita->notas }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
