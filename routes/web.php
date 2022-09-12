<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\autosController;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\reservasController;
use App\Http\Controllers\editarController;

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
//obtención datos de las vistas
Route::get('/autos', [AutosController::class, 'index']);
Route::get('/clientes', [ClientesController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);

//inserción datos a BD
Route::post('/autos', [AutosController::class, 'insert'])->name('autos');
Route::post('/clientes', [ClientesController::class, 'insert'])->name('clientes');

//visualizacion datos al cliente
Route::get('/reserva', function () {
    return view('reserva');
});
Route::get('/reserva', [reservasController::class, 'index']);

//generar reserva
Route::post('/reserva', [reservasController::class, 'insert'])->name('reserva');



// Route::get('/editarcar', function () {
//     return view('editarcar');
// });
// Route::get('/edit', [editarController::class, 'index'])->name('edit');
//Route::get('/edit', [editarController::class, 'editar'])->name('edit');
//Route::get('/edit', [editarController::class, 'index'])->name('edit');
Route::resource('/editar', editarController::class);

Route::get('/editcar', function () {
    return view('editcar');
});

//Route::put('/editarcar/{id_ref}', [editarController::class,'edit']);
//Route::post('/editarcar', [editarController::class, 'insert'])->name('editarcar');