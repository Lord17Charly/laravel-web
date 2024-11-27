<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Veterinaria</title>
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <nav class="navbar">
        <ul>
            <li><span class="icon">🐶</span> <a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('mascotas.create') }}"><span class="icon">🐾</span> Mascotas</a></li>
            <li><a href="{{ route('citas.create') }}"><span class="icon">📅</span> Citas</a></li>
            <li><a href="{{ route('servicios.create') }}"><span class="icon">🩺</span> Servicios</a></li>
        </ul>
    </nav>
    
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
