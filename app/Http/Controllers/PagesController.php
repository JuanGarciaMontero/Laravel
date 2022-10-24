<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio() { return view('welcome'); }

    public function datos() {
        return view('usuarios', ['id' => 56]);
    }

    public function cliente($id = 1) {
        return ('Cliente con el id: ' . $id);
    }

    public function equipo($nombre = null) {
        $equipo = [
            'Paco',
            'Enrique',
            'Maria',
            'Veronica'
        ];

        return view('equipo', @compact('equipo', 'nombre'));
    }
    /*public function notas() {
        $notas = Nota::all();

        return view('notas', @compact('notas'));
    }*/

    public function detalle($id) {
        $nota = Nota::findOrFail($id);

        return view('notas.detalle', @compact('nota'));
    }

    public function crear(Request $request) {
        $notaNueva = new Nota;

        $notaNueva -> nombre = $request -> nombre;
        $notaNueva -> descripcion = $request -> descripcion;

        $notaNueva -> save();

        $request -> validate([
            'nombre' => 'required',
            'descripcion' => 'required'
          ]);

        return back() -> with('mensaje', 'Nota agregada exitósamente');
    }

    public function editar($id) {
        $nota = Nota::findOrFail($id);

        return view('notas.editar', compact('nota'));
    }

    public function actualizar(Request $request, $id) {
        $request -> validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $notaActualizar = Nota::findOrFail($id);

        $notaActualizar -> nombre = $request -> nombre;
        $notaActualizar -> descripcion = $request -> descripcion;

        $notaActualizar -> save();

        return back() -> with('mensaje', 'Nota actualizada');
    }
    public function eliminar($id) {
        $notaEliminar = Nota::findOrFail($id);
        $notaEliminar -> delete();

        return back() -> with('mensaje', 'Nota Eliminada');
    }

    public function notas() {
        // $notas = Nota::all();
        $notas = Nota::paginate(5);

        return view('notas', compact('notas'));
    }

}
