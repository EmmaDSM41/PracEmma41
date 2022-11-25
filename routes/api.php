<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 

//Definimos una ruta Apiresource
Route::Apiresource('proveedores',ProveedoresController::class); 
Route::Apiresource('productos',ProductosController::class); 
Route::Apiresource('clientes',ClientesController::class); 

//Definimos una ruta pero solo especifico ciertos resource a utilizar
/*Route::Apiresource('rapi',Practica6::class)->only(['index','show']);*/

/*Definimos una api resource y hacemos la ecepcion de que no ocuparemos edit y destroy */
//Route::Apiresource('rapi',Practica6::class)->except(['edit','destroy']);
