@extends('layouts.navbar')

@section('content')
<form action="{{ route('servicios.store') }}" method="POST">
    @csrf
    <input type="text" name="id" placeholder="ID del Servicio">
    <input type="text" name="nombre" placeholder="Nombre del Servicio">
    <textarea name="descripcion" placeholder="Descripción del Servicio"></textarea>
    <input type="number" step="0.01" name="precio" placeholder="Precio">
    <button type="submit">Guardar Servicio</button>
</form>
@endsection
