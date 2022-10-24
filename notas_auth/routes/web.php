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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::view('blog', 'blog') -> name('noticias');
Route::view('fotos', 'fotos') -> name('galeria');

use App\Http\Controllers\HomeController;

//Route::get('/', [ HomeController::class, 'inicio' ]);
Route::get('datos', [ HomeController::class, 'datos' ]);
Route::get('cliente/{id?}', [ HomeController::class, 'cliente' ]) -> where('id', '[0-9]+');
Route::get('equipo/{equipo?}', [ HomeController::class, 'equipo']) -> name('equipo');
Route::get('notas', [ HomeController::class, 'notas' ]);
Route::get('notas/{id?}', [ PagesController::class, 'detalle' ]) -> name('notas.detalle');
Route::post('notas', [ HomeController::class, 'crear' ]) -> name('notas.crear');
Route::get('editar/{id}', [ HomeController::class, 'editar' ]) -> name('notas.editar');
Route::put('editar/{id}', [ HomeController::class, 'actualizar' ]) -> name('notas.actualizar');
Route::delete('eliminar/{id}', [ HomeController::class, 'eliminar' ]) -> name('notas.eliminar');

require __DIR__.'/auth.php';
