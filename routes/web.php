<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.index');
});
Route::get('/proyectos', function () {
    return view('plantilla.dashProyectos');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('layout.index');
});

Route::get('/dashDetalles', function () {
    return view('plantilla.dashDetalles');
});
Route::get('/usuario/admin', function () {
    return view('plantilla.usuarioAdmin');
});
Route::get('/usuario/admin', [UserController::class, 'index'])->name('plantilla.usuarioAdmin');

Route::get('/usuario/jefatura', function () {
    return view('plantilla.usuarioJefa');
});
Route::get('usuario/jefatura', [UserController::class, 'jefatura'])->name('plantilla.usuarioJefa');

Route::get('/usuario/especialista', function () {
    return view('plantilla.usuarioEspe');
});
Route::get('usuario/especialista', [UserController::class, 'especialista'])->name('plantilla.usuarioEspe');

Route::get('/agendar', function () {
    return view('plantilla.agendar');
});
Route::get('/consultas/atencion', function () {
    return view('plantilla.consulAtencion');
});
Route::get('/consultas/luminaria', function () {
    return view('plantilla.consulLuminaria');
});
Route::get('/detalles/realizados', function () {
    return view('plantilla.detallesRealizados');
});
Route::get('/detalles/espera', function () {
    return view('plantilla.detallesEspera');
});
Route::get('/proyectos/almacen', function () {
    return view('plantilla.proyectosAlmacen');
});


Route::get('/proyectos/luminariasRetiradas', function () {
    return view('plantilla.proyectosLumRetiradas');
});
Route::get('/proyectos/proveedores', function () {
    return view('plantilla.proyectosProveedores');
});
Route::get('/proyectos/ObrasEjecutadas', function () {
    return view('plantilla.proyectosObrasEjecutadas');
});
Route::get('/inspecciones/realizadas', function () {
    return view('plantilla.inspeccionesRealizadas');
});
Route::get('/inspecciones/espera', function () {
    return view('plantilla.inspeccionesEspera');
});
Route::get('/equipos/equipamiento', function () {
    return view('plantilla.equiposEquipamiento');
});
Route::get('/equipos/accesorios', function () {
    return view('plantilla.equiposAccesorios');
});
Route::get('/censoLuminarias', function () {
    return view('plantilla.equiposEquipamiento');
});
Route::get('/detallesDistrito', function () {
    return view('plantilla.equiposAccesorios');
});
Route::get('/login', function () {
    return view('plantilla.login');
});
//ruta para agergar nuevo usuario
Route::post('/usuario/registrar', [UserController::class, 'create'])->name('usuario.registrar');
