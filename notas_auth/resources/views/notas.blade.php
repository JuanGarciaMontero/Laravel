

<h1>Notas desde base de datos</h1>

<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>
    </thead>

    @foreach ($notas as $nota)
        <tr>
            <td>{{$nota -> nombre}}</td>
            <td>{{$nota -> descripcion}}</td>
        </tr>
    @endforeach
</table>
<br>
<!--<p>@yield('apartado1')</p>-->
<!--<p>@yield('apartado2')</p>-->
<hr>
<h1>Detalle de la nota</h1>

    <h3>ID: {{ $nota -> id }}</h3>
    <h3>Nombre: {{ $nota -> nombre }}</h3>
    <h3>Descripción: {{ $nota -> descripcion }}</h3>
<hr>
    <h1>Crear nueva nota</h1>
    <form action="{{ route('notas.crear') }}" method="POST">
        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}

        <input
            type="text"
            name="nombre"
            value="{{ old('nombre') }}"
            class="form-control mb-2"
            placeholder="Nombre de la nota"
            autofocus
        >
        <input type="text" name="descripcion" placeholder="Descripción de la nota" class="form-control mb-2">
        <button class="btn btn-primary btn-block" type="submit">
          Crear nueva nota
        </button>
    </form>
    <br><br>
    <a href="{{ route('notas.editar', $nota) }}" class="btn btn-warning btn-sm">
        Editar
    </a>
    <br><br>
    <form action="{{ route('notas.eliminar', $nota) }}" method="POST" class="d-inline">
        @method('DELETE')
        @csrf

        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
    </form>


