<?php

use App\Http\Controllers\distritoController;
use App\Http\Controllers\equipamientoController;
use App\Http\Controllers\inspeccionController;
use App\Http\Controllers\inspeccioneController;
use App\Http\Controllers\lista_accesorioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\equipamiento;
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
Route::get('/usuario/administrador', function () {
    return view('plantilla.Usuarios.Administrador');
});
Route::get('/usuario/administrador', [UserController::class, 'administrador'])->name('usuario.administrador');


Route::get('/usuario/jefatura', function () {
    return view('plantilla.Usuarios.Jefatura');
});
Route::get('/usuario/jefatura', [UserController::class, 'jefatura'])->name('usuario.jefatura');


Route::get('/usuario/especialista', function () {
    return view('plantilla.Usuarios.Especialista');
});
Route::get('/usuario/especialista', [UserController::class, 'especialista'])->name('usuario.especialista');

//ruta para agregar un nuevo usuario
Route::post('/registro/usuario', [UserController::class, 'create'])->name('registro.usuario');
//ruta para editar usuario
Route::post('/editar/usuario', [UserController::class, 'edit'])->name('editar.usuario');

//ruta para ver detalles distritos
Route::get('/detallesDistritos', [distritoController::class, 'index'])->name('detalles.Distritos');
Route::post('/registro/distrito', [distritoController::class, 'create'])->name('registro.distrito');
Route::post('/editar/distrito', [distritoController::class, 'edit'])->name('editar.distrito');

//ruta para inspecciones
Route::get('/inspecciones/espera', [inspeccionController::class, 'index'])->name('inspecciones.espera');
Route::post('/registro/inspecciones', [inspeccionController::class, 'create'])->name('registro.inspecciones');
Route::post('/editar/inspeccionespera', [inspeccionController::class, 'edit'])->name('editar.inspeccionespera');
Route::post('/empezar/inspeccionespera', [inspeccionController::class, 'ready'])->name('empezar.inspeccionespera');


//rutas para equipamiento y accesorios
//ruta para ver detalles equipamientos
Route::get('equipos/equipamiento', [equipamientoController::class, 'index'])->name('equipos.equipamientos');
//ruta para lista de accesorios
Route::get('/equipos/accesorios', [lista_accesorioController::class, 'index'])->name('equipos.accesorios');
//ruta para registrar ala lista de accesorios
Route::post('/registro/accesorios', [lista_accesorioController::class, 'create'])->name('registro.accesorios');
Route::post('/editar/accesorios', [lista_accesorioController::class, 'edit'])->name('editar.accesorios');
Route::get('/eliminar/accesorios-{id}', [lista_accesorioController::class, 'destroy'])->name('eliminar.accesorios');

//rutar para la parte de equipos equipamientos
Route::post('/registro/equipamiento', [equipamientoController::class, 'create'])->name('registro.equipamiento');
Route::post('/editar/equipamiento', [equipamientoController::class, 'edit'])->name('editar.equipamiento');






























    

/* Route::get('/proyectos', function () {
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
  */