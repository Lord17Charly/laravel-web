@extends('layouts.navbar')

@section('content')
<div>
    <h1>Bienvenidos a la Clínica Veterinaria</h1>
    <p>Cuida a tus mascotas con los mejores servicios.</p>
    <img src="/path-to-icons/dog-icon.png" alt="Icono de Perrito">
</div>
@if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif

@endsection
