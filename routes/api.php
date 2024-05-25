<?php

use App\Http\Controllers\API\apiDistritoController;
use App\Http\Controllers\API\apiEquipamientoController;
use App\Http\Controllers\API\apiinspeccionController;
use App\Http\Controllers\API\apilistaAccesoriosController;
use App\Http\Controllers\API\apiProveedorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\apiUserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//rutas para mostrar los datos 
Route::get('/users', [apiUserController::class, 'index']);
Route::get('/distritos', [apiDistritoController::class, 'index']);
Route::get('/equipos/equipamientos', [apiEquipamientoController::class, 'index']);
Route::get('/inspeccion/realizado', [apiinspeccionController::class, 'realizado']);
Route::get('/lista/accesorios', [apilistaAccesoriosController::class, 'index']);
Route::get('/lista/proveedor', [apiProveedorController::class, 'index']);
