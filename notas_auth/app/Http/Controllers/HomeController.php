<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }

    //public function inicio() { return view('welcome2'); }

    public function datos() {
        //return auth()->user();
        return view('usuarios', ['id' => 56]);
    }

    public function cliente($id = 1) {
        //return auth()->user();
        return ('Cliente con el id: ' . $id);
    }

    public function equipo($nombre = null) {
        //return auth()->user();
        $equipo = [
            'Paco',
            'Enrique',
            'Maria',
            'Veronica'
        ];

        return view('equipo', @compact('equipo', 'nombre'));
    }
   /* public function notas() {

        $notas = Nota::all();
        // return auth()->user();

        return view('notas', @compact('notas'));
    }*/

    public function detalle($id) {
        //return auth()->user();
        $nota = Nota::findOrFail($id);

        return view('notas.detalle', @compact('nota'));
    }

    public function crear(Request $request) {
        //return auth()->user();
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
        //return auth()->user();
        $nota = Nota::findOrFail($id);

        return view('notas.editar', compact('nota'));
    }

    public function actualizar(Request $request, $id) {
        //return auth()->user();
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
        //return auth()->user();
        $notaEliminar = Nota::findOrFail($id);
        $notaEliminar -> delete();

        return back() -> with('mensaje', 'Nota Eliminada');
    }

    public function notas() {
        // return auth()->user();
        //$notas = Nota::all();
        $notas = Nota::paginate(5);

        return view('notas', compact('notas'));
    }
}
