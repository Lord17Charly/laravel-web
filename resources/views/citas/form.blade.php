@extends('layouts.navbar')

@section('content')
<form action="{{ route('citas.store') }}" method="POST">
    @csrf
    <input type="text" name="mascota_id" placeholder="ID de Mascota">
    <input type="text" name="servicio_id" placeholder="ID de Servicio">
    <input type="date" name="fecha">
    <input type="time" name="hora">
    <input type="text" name="estado" placeholder="Estado">
    <button type="submit">Guardar Cita</button>
</form>
@endsection
