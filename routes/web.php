<?php

use App\Http\Controllers\API\apiDetalleController;
use App\Http\Controllers\detalleController;
use App\Http\Controllers\distritoController;
use App\Http\Controllers\equipamientoController;
use App\Http\Controllers\inspeccionController;

use App\Http\Controllers\lista_accesorioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\equipamiento;
use Illuminate\Routing\Router;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\luminaria_retiradasController;
use App\Http\Controllers\proveedorController;
use App\Http\Controllers\proyectoController;
use App\Models\proveedor;
use Illuminate\Routing\RouteRegistrar;
use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;

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

/* Route::view('/usuario/administrador', "plantilla.Usuarios.Administrador")->name('usuario.administrador');
Route::view('/usuario/jefatura', "plantilla.Usuarios.Especialista")->name('usuario.jefatura');
Route::view('/usuario/especialista', "plantilla.Usuarios.Jefatura")->name('usuario.especialista'); */

Route::view('/login', "plantilla.login")->name('login');

Route::post('/inicia-sesion', [logincontroller::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [logincontroller::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('layout.index');
});
Route::view('/index', 'layout.index')->name('index');
/* Route::get('/usuario/administrador', function () {
    return view('plantilla.Usuarios.Administrador');
}); */


//rutas para la parte de usuarios ----------------------------------------------------------------------------------------------------
Route::get('/usuario/usuarios', [UserController::class, 'users'])->name('usuario.usuarios');
Route::get('/usuario/bloquear/{id}', [UserController::class, 'bloquear'])->name('usuario.bloquear');
Route::get('/usuario/desbloquear/{id}', [UserController::class, 'desbloquear'])->name('usuario.bloquear');

/* Route::get('/usuario/jefatura', function () {
     return view('plantilla.Usuarios.Jefatura');}); */

/* Route::get('/usuario/jefatura', [UserController::class, 'jefatura'])->name('usuario.jefatura'); */

/* Route::get('/usuario/especialista', function () {
    return view('plantilla.Usuarios.Especialista');
}); */
/* Route::get('/usuario/especialista', [UserController::class, 'especialista'])->name('usuario.especialista'); */

//ruta para agregar un nuevo usuario
Route::post('/registro/usuario', [UserController::class, 'create'])->name('registro.usuario');
//ruta para editar usuario
Route::post('/editar/usuario', [UserController::class, 'edit'])->name('editar.usuario');

//rutas para consultas----------------------------------------------------------------------------------------------------
Route::get('/consultas/atencion', [detalleController::class, 'datosatencion'])->name('consultas.atencion');


//ruta para ver detalles distritos----------------------------------------------------------------------
Route::get('/detallesDistritos', [distritoController::class, 'index'])->name('detalles.Distritos');
Route::post('/registro/distrito', [distritoController::class, 'create'])->name('registro.distrito');
Route::post('/editar/distrito', [distritoController::class, 'edit'])->name('editar.distrito');

//ruta para inspecciones----------------------------------------------------------------------------------------------------
Route::get('/inspecciones/espera', [inspeccionController::class, 'index'])->name('inspecciones.espera');
Route::post('/registro/inspecciones', [inspeccionController::class, 'create'])->name('registro.inspecciones');
Route::post('/editar/inspeccionespera', [inspeccionController::class, 'edit'])->name('editar.inspeccionespera');
Route::post('/empezar/inspeccionespera', [inspeccionController::class, 'ready'])->name('empezar.inspeccionespera');
Route::get('/inspecciones/realizadas', [inspeccionController::class, 'realizadas'])->name('inspecciones.espera');



//rutas para equipamiento y accesorios--------------------------------------------------------------------------------
//ruta para ver detalles equipamientos
Route::get('equipos/equipamiento', [equipamientoController::class, 'index'])->name('equipos.equipamientos');
//ruta para lista de accesorios
Route::get('/equipos/accesorios', [lista_accesorioController::class, 'index'])->name('equipos.accesorios');
//ruta para registrar ala lista de accesorios
Route::post('/registro/accesorios', [lista_accesorioController::class, 'create'])->name('registro.accesorios');
Route::post('/editar/accesorios', [lista_accesorioController::class, 'edit'])->name('editar.accesorios');
Route::get('/eliminar/accesorios/{id}', [lista_accesorioController::class, 'destroy'])->name('eliminar.accesorios');


//rutar para la parte de equipos equipamientos
Route::post('/registro/equipamiento', [equipamientoController::class, 'create'])->name('registro.equipamiento');
Route::post('/editar/equipamiento', [equipamientoController::class, 'edit'])->name('editar.equipamiento');


//rutas para luminarias retiradas
Route::get('/proyectos/luminariasRetiradas', [luminaria_retiradasController::class, 'index'])->name('proyectos.luminariasretiradas');
Route::post('/registro/retirados', [luminaria_retiradasController::class, 'create'])->name('registro.retirados');

//rutas proyectos  ---------------------------------------------------------------------------------------------------------
// para lo que es almacen
Route::get('/proyectos/almacen', [proyectoController::class, 'index'])->name('proyectos.almacen');
Route::post('/registro/almacen', [proyectoController::class, 'create'])->name('registro.almacen');
Route::get('/detallesAccesorios/almacen/{id}', [proyectoController::class, 'reu'])->name('detallesAccesorios.almacen');
Route::get('/detallesAccesorios/almacen', [proyectoController::class, 'reu'])->name('detallesAccesorios.almacendatos');
Route::get('/datos/ejecutar/{id}', [proyectoController::class, 'ejecutarProyectodatos'])->name('datos.ejecutar');
Route::post('/registrar/trabajoEjecutado/{id}', [proyectoController::class, 'registrarTrabajo'])->name('registrar.trabajoejecutado');

Route::get('/proyectos/ObrasEjecutadas', [proyectoController::class, 'datosObras'])->name('proyectos.ObrasEjecutadas');
//proyecto luminarias retiradas
Route::get('/detalles/luminarias/retiradas/{id}', [luminaria_retiradasController::class, 'retiradaDetalle'])->name('detalles.luminarias.retiradas');



//para lo que es proveedores---------------------------------------------------------------------------------------------------------
Route::get('/proyectos/proveedores', [proveedorController::class, 'index'])->name('proyectos.proveedores');
Route::post('/registro/proveedor', [proveedorController::class, 'create'])->name('registro.proveedor');
Route::post('/editar/proveedor', [proveedorController::class, 'edit'])->name('editar.proveedor');

//rutar para agendar trabajos---------------------------------------------------------------------------------------------------------
Route::get('/agendar', [detalleController::class, 'agendar'])->name('agendar');
Route::post('/agendar/trabajo', [detalleController::class, 'create'])->name('agendar.trabajo');

//ruta para ver los detalles generales de los trabajos------------------------------------------------------------------------------------------
Route::get('/detalles/espera', [detalleController::class, 'index'])->name('detalles.espera');
Route::get('/detalles/realizados', [detalleController::class, 'realizados'])->name('detalles.realizados');


//rutas  para  detalles en espera,realizar trabajo------------------------------------------------------------------------------------------
Route::get('/ejecutar/trabajo/{id}', [detalleController::class, 'ejecutar'])->name('ejecutar.trabajo');
Route::get('/pendiente/trabajo', [detalleController::class, 'pendiente'])->name('pendiente.trabajo');
Route::post('/store/trabajo/{id}', [detalleController::class, 'storeTrabajo'])->name('store.trabajo');
Route::post('/edit/espera', [detalleController::class, 'edit'])->name('edit.espera');
