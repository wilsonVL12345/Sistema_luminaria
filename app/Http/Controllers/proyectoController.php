<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyecto;
use App\Models\distrito;
use App\Models\accesorio;
use App\Models\luminarias_reutilizada;
use App\Models\luminaria;

class proyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyecto = proyecto::all();
        $listadistrito = distrito::whereBetween('id', [1000, 1013])->get();
        $listazonaurb = distrito::select('Zona_Urbanizacion')->distinct()->get();
        return view('plantilla.Proyectos.proyectosAlmacen', ['proyecto' => $proyecto, 'listadistrito' => $listadistrito, 'listazonaurb' => $listazonaurb]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        /* if se encarga de  verificar si los campos estan llenos y si no  notifica y se sale  */
        if (!empty($request->campocod) || !empty($request->camponombre) || !empty($request->campocomponentes)) {

            $sinDetalle = 1;
            $espera = 'En espera';

            $proy = new proyecto();
            $proy->Cuce_Cod = $request->txtcods;
            $proy->Distritos_id = $request->txtdistrito;
            $proy->Zona = $request->txtzona;
            $proy->Tipo_Contratacion = $request->txttipo;
            $proy->Estado = $espera;
            $proy->Fecha_Programada = $request->dtfecha;
            $proy->Modalidad = $request->txtmodalidad;
            $proy->Objeto_Contratacion = $request->txtobjeto;
            $proy->Subasta = $request->txtsubasta;
            $proy->Tipo_Componentes = $request->selectedStates;
            $proy->Users_id = session('id');
            $proy->save();

            $cuceProyecto = proyecto::where('Cuce_Cod', $request->txtcods)->first();
            $idProyecto = $cuceProyecto->id;
            /* variables de accesorios */
            $acceComponentes = $request->campocomponentes;
            $acceCantidad = $request->campocantidad;
            $acceObservaciones = $request->campoobservaciones;
            $acceproveedor = $request->campoproveedo;

            if (!empty($acceComponentes)) {
                foreach ($acceComponentes as $key => $value) {
                    $nuevoAccesorio = new accesorio();
                    $nuevoAccesorio->Id_Lista_accesorios = $acceComponentes[$key]['txtcomponentes'];
                    $nuevoAccesorio->Cantidad = $acceCantidad[$key]['txtcantidad'];
                    $nuevoAccesorio->Disponibles = $acceCantidad[$key]['txtcantidad'];
                    $nuevoAccesorio->Proveedores_id = $acceproveedor[$key]['txtproveedo'];
                    $nuevoAccesorio->Proyectos_id = $idProyecto;
                    $nuevoAccesorio->Detalles_id = $sinDetalle;

                    $nuevoAccesorio->Observaciones = $acceObservaciones[$key]['txtobservaciones'];
                    $nuevoAccesorio->save();
                }
            }

            /* variables de Luminarias Reutilizada */
            $reuNombre = $request->camponombre;
            $reuCant = $request->campocant;
            $reuObser = $request->campoobser;
            if (!empty($reuNombre)) {
                foreach ($reuNombre as $key => $value) {

                    $nuevoReutilizado = new luminarias_reutilizada();
                    $nuevoReutilizado->Nombre_Item = $reuNombre[$key]['txtnombre'];
                    $nuevoReutilizado->Cantidad = $reuCant[$key]['txtcant'];
                    $nuevoReutilizado->Observaciones = $reuObser[$key]['txtobser'];
                    $nuevoReutilizado->Proyectos_id = $idProyecto;
                    $nuevoReutilizado->save();
                }
            }

            /* variables para luminaria tipo LED */
            $ledcod = $request->campocod;
            $ledpotencia = $request->campopotencia;
            $ledmarca = $request->campomarca;
            $ledmodelo = $request->campomodelo;
            $ledproveedor = $request->campoproveedor;
            if (!empty($ledcod)) {
                foreach ($ledcod as $key => $value) {
                    # code...
                    $nuevoLed = new luminaria();
                    $nuevoLed->Cod_Luminaria = $ledcod[$key]['txtcod'];
                    $nuevoLed->Potencia = $ledpotencia[$key]['txtpotencia'];
                    $nuevoLed->Marca = $ledmarca[$key]['txtmarca'];
                    $nuevoLed->Modelo = $ledmodelo[$key]['txtmodelo'];
                    $nuevoLed->Proveedores_id = $ledproveedor[$key]['txtproveedor'];
                    $nuevoLed->Proyectos_id = $idProyecto;
                    $nuevoLed->Detalles_id = $sinDetalle;

                    $nuevoLed->save();
                }
            }
        } else {
            return back()->with("incorrecto", "Error al registrar no agregaste componentes");
        }
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
