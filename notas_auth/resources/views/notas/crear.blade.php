
@extends('../notas')

@section('apartado2')
    <form action="{{ route('notas.crear') }}" method="POST">
        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}

        <input type="text" name="nombre" placeholder="Nombre de la nota" class="form-control mb-2" autofocus>
        <input type="text" name="descripcion" placeholder="Descripción de la nota" class="form-control mb-2">

        <button class="btn btn-primary btn-block" type="submit">
        Crear nueva nota
        </button>
    </form>
@endsection
@error('nombre')
        <div class="alert alert-danger">
        No olvides rellenar el nombre
        </div>
@enderror
