<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [ PagesController::class, 'inicio' ]);
//Route::get('datos', [ PagesController::class, 'datos' ]);
//Route::get('cliente/{id?}', [ PagesController::class, 'cliente' ]) -> where('id', '[0-9]+');
//Route::get('equipo/{equipo?}', [ PagesController::class, 'equipo']) -> name('equipo');


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
