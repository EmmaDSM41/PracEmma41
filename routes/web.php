<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;

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
Route::get('mirutaget',[ProveedoresController::class, 'index'])->name('proveedores');
Route::post('mirutapost',[ProveedoresController::class, 'post'])->name('proveedores');
Route::put('mirutaput',[ProveedoresController::class, 'put'])->name('proveedores');
Route::delete('mirutadelete',[ProveedoresController::class, 'delete'])->name('proveedores');
Route::delete('mirutadedit',[ProveedoresController::class, 'edit'])->name('proveedores');

Route::resource('proveedores',ProveedoresController::class);
Route::resource('productos',ProductosController::class);
Route::resource('clientes',ClientesController::class);
 
