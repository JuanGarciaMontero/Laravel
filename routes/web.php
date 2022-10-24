<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* http://localhost:8000/datos/ */
//Route::view('datos', 'usuarios', ['id' => 5446]);

/* http://localhost:8000/cliente/..... */

/*Route::get('cliente/{id?}', function($id=1) {
    return('Cliente con el id: ' . $id);
}) -> where('id', '[0-9]+');

/* http://localhost:8000/datos/ Error en la vista solicita $id

Route::view('datos', 'usuarios');

/* http://localhost:8000/users .. Error vista no encontrada

/*Route::get('/users', function () {
    return view('users');
}) -> name('usuarios');*/


/* http://localhost:8000/  */

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('blog', 'blog') -> name('noticias');
Route::view('fotos', 'fotos') -> name('galeria');
// Uso de @compact
//$equipo = ['María', 'Alfredo', 'William', 'Verónica'];

//Route::view('equipo', ['equipo' => 'equipo']);
//Route::view('equipo', @compact('equipo'));
//Route::view('equipo', 'equipo') -> name('equipo');


// Usando en el nuevo controller cargado con: php artisan make:controller PagesController
use App\Http\Controllers\PagesController;

Route::get('/', [ PagesController::class, 'inicio' ]);
Route::get('datos', [ PagesController::class, 'datos' ]);
Route::get('cliente/{id?}', [ PagesController::class, 'cliente' ]) -> where('id', '[0-9]+');
Route::get('equipo/{equipo?}', [ PagesController::class, 'equipo']) -> name('equipo');
Route::get('notas', [ PagesController::class, 'notas' ]);
Route::get('notas/{id?}', [ PagesController::class, 'detalle' ]) -> name('notas.detalle');
Route::post('notas', [ PagesController::class, 'crear' ]) -> name('notas.crear');
Route::get('editar/{id}', [ PagesController::class, 'editar' ]) -> name('notas.editar');
Route::put('editar/{id}', [ PagesController::class, 'actualizar' ]) -> name('notas.actualizar');
Route::delete('eliminar/{id}', [ PagesController::class, 'eliminar' ]) -> name('notas.eliminar');
