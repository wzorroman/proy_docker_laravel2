<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

/* Ejemplo cuando son rutas individuales */
// Route::get('/empleados', 'App\Http\Controllers\EmpleadoController@index');
// Route::get('/empleados/create', 'App\Http\Controllers\EmpleadoController@create');

/* Cuando queremos llamar a todas las rutas: index, store, create, show, update, destroy, edit*/
Route::resource('empleados', EmpleadoController::class);
