<?php


use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
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

//                           Controlador                  metodo
Route::get('/estudiantes', [EstudianteController::class, 'index']);

Route::get('/estudiantes/crear', [EstudianteController::class, 'create']);

// Funcion guardar de crear
Route::post('/estudiantes/crear', [EstudianteController::class, 'store']);

// Funcion Ver
Route::get('/estudiantes/ver/{id}', [EstudianteController::class, 'show']);

Route::get('/estudiantes/editar/{id}', [EstudianteController::class, 'edit']);

Route::put('/estudiantes/editar/{id}', [EstudianteController::class, 'update']);


Route::get('/estudiantes/eliminar/{id}', [EstudianteController::class, 'destroy']);
