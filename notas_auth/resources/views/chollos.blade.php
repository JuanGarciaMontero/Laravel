@foreach ($chollos as $chollo)
    <p>ID:  {{ $chollo -> id }}</p> // Columna ID
    <p>Nombre:  {{ $chollo -> nombre }}</p>  // Columna NOMBRE
    <p>Descripción:  {{ $chollo -> descripcion }}</p>  // Columna DESCRIPCION

    // [...]
    <hr>
@endforeach
