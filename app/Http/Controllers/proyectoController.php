<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyecto;
use App\Models\distrito;
use App\Models\accesorio;
use App\Models\luminarias_reutilizada;
use App\Models\luminaria;
use App\Models\urbanizacion;
use Illuminate\Foundation\Console\ViewMakeCommand;

class proyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = now()->toDateString();
        $proyecto = proyecto::where('Estado', 'En espera')
            ->orderBy('id', 'desc')->get();
        $reutilizadas = luminarias_reutilizada::all();
        $accesorio = accesorio::all();
        $luminaria = luminaria::all();
        $listadistrito = distrito::all();
        $listazonaurb = urbanizacion::all();
        return view('plantilla.Proyectos.proyectosAlmacen', [
            'proyecto' => $proyecto,
            'listadistrito' => $listadistrito, 'listazonaurb' => $listazonaurb,
            'reutilizada' => $reutilizadas, 'accesorio' => $accesorio, 'luminaria' => $luminaria, 'today' => $today

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        /* dd($request->all()); */

        $listaTipo = '';
        foreach ($request->selectedStates as $key => $value) {
            $listaTipo .= $value . ' ';
        }
        $sinDetalle = 1;
        $cero = 0;
        $espera = 'En espera';
        dd($request->all());
        /* if se encarga de  verificar si los campos estan llenos y si no  notifica y se sale  */
        if (!empty($request->campocod) || !empty($request->camponombre) || !empty($request->campocomponentes)) {
            try {


                $proy = new proyecto();
                $proy->Cuce_Cod = $request->txtcod;
                $proy->Distritos_id = $request->txtdistrito;
                $proy->Zona = $request->txtzona;
                $proy->Tipo_Contratacion = $request->txttipo;
                $proy->Estado = $espera;
                $proy->Fecha_Programada = $request->dtfecha;
                $proy->Modalidad = $request->txtmodalidad;
                $proy->Objeto_Contratacion = $request->txtobjeto;
                $proy->Subasta = $request->txtsubasta;
                $proy->Tipo_Componentes = $listaTipo;
                $proy->Proveedor = $request->txtproveedor;
                $proy->Users_id = session('id');

                $proy->save();
                $cuceProyecto = proyecto::where('Cuce_Cod', $request->txtcod)->first();
                $idProyecto = $cuceProyecto->id;
                /* variables de accesorios */
                $acceComponentes = $request->campocomponentes;
                $acceCantidad = $request->campocantidad;
                /* $acceObservaciones = $request->campoobservaciones; */
                /* $acceproveedor = $request->campoproveedo; */

                if (!empty($acceComponentes)) {
                    foreach ($acceComponentes as $key => $value) {
                        $nuevoAccesorio = new accesorio();
                        $nuevoAccesorio->Id_Lista_accesorios = $acceComponentes[$key]['txtcomponentes'];
                        $nuevoAccesorio->Cantidad = $acceCantidad[$key]['txtcantidad'];
                        $nuevoAccesorio->Disponibles = $acceCantidad[$key]['txtcantidad'];
                        /* $nuevoAccesorio->Proveedores_id = $acceproveedor[$key]['txtproveedo']; */
                        $nuevoAccesorio->Proyectos_id = $idProyecto;
                        $nuevoAccesorio->Utilizados = $cero;
                        $nuevoAccesorio->Detalles_id = $sinDetalle;

                        /* $nuevoAccesorio->Observaciones = $acceObservaciones[$key]['txtobservaciones']; */
                        $nuevoAccesorio->save();
                    }
                }

                /* variables de Luminarias Reutilizada */
                $reuNombre = $request->camponom;
                $reuCant = $request->campocant;
                /*  $reuObser = $request->campoobs; */
                if (!empty($reuNombre)) {
                    foreach ($reuNombre as $key => $value) {

                        $nuevoReutilizado = new luminarias_reutilizada();
                        $nuevoReutilizado->Nombre_Item = $reuNombre[$key]['txtnom'];
                        $nuevoReutilizado->Cantidad = $reuCant[$key]['txtcant'];
                        $nuevoReutilizado->Disponibles = $reuCant[$key]['txtcant'];
                        /*  $nuevoReutilizado->Observaciones = $reuObser[$key]['txtobs']; */
                        $nuevoReutilizado->Utilizados = $cero;
                        $nuevoReutilizado->Proyectos_id = $idProyecto;
                        $nuevoReutilizado->save();
                    }
                }

                /* variables para luminaria tipo LED */
                $ledcod = $request->campocod;
                $ledpotencia = $request->campopotencia;
                $ledmarca = $request->campomarca;
                $ledmodelo = $request->campomodelo;
                /* $ledproveedor = $request->campoproveedor; */
                if (!empty($ledcod)) {
                    foreach ($ledcod as $key => $value) {
                        # code...
                        $nuevoLed = new luminaria();
                        $nuevoLed->Cod_Luminaria = $ledcod[$key]['txtcod'];
                        $nuevoLed->Potencia = $ledpotencia[$key]['txtpotencia'];
                        $nuevoLed->Marca = $ledmarca[$key]['txtmarca'];
                        $nuevoLed->Modelo = $ledmodelo[$key]['txtmodelo'];
                        // $nuevoLed->Proveedores_id = $ledproveedor[$key]['txtproveedor'];
                        $nuevoLed->Proyectos_id = $idProyecto;
                        $nuevoLed->Detalles_id = $sinDetalle;

                        $nuevoLed->save();
                    }
                }
                $sql = true;
            } catch (\Throwable $th) {
                $sql = false;
            }
            if ($sql == true) {
                return back()->with("correcto", "Datos registrados Correctamente");
            } else {
                return back()->with("incorrecto", "Error al registrar Datos invalidos");
            }
        } else {
            return back()->with("incorrecto", "Error al registrar no agregaste componentes");
        }
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detItem = proyecto::find($id);

        $detReutilizada = luminarias_reutilizada::where('Proyectos_id', $id)->get();
        $detAccesorio = accesorio::where('Proyectos_id', $id)->get();
        $detLuminarias = luminaria::where('Proyectos_id', $id)->get();

        return view('plantilla.Proyectos.proyectosAlmacen', compact('detItem', 'detReutilizada', 'detAccesorio', 'detLuminarias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    //emvia todos los datos necesarios para luminarias reutilizadas con su fk
    public function reu($id)
    {
        $proyec = proyecto::find($id);
        $reutilizada = luminarias_reutilizada::where('Proyectos_id', $id)->get();
        $accesorios = accesorio::where('Proyectos_id', $id)->get();
        $luminaria = luminaria::where('Proyectos_id', $id)->get();

        return view('plantilla.Proyectos.proyectoDetalles', compact('luminaria', 'accesorios', 'reutilizada', 'proyec'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    //esta parte se encarga de emviar todos los datos necesarios para dar con la ejecucion de los proyectos de almacen
    public function ejecutarProyectodatos($id)
    {
        $ejecProyecto = proyecto::find($id);
        $ejecAccesorios = accesorio::where('Proyectos_id', $id)->get();
        $ejecReutilizados = luminarias_reutilizada::where('Proyectos_id', $id)->get();
        $ejecLuminarias = luminaria::where('Proyectos_id', $id)->get();

        $zonaUrbSelecionada = $ejecProyecto->Zona;
        $calleAv = distrito::where('Zona_Urbanizacion', $zonaUrbSelecionada)->get();

        return view('plantilla.Proyectos.almacenEjecutarProyecto', compact('ejecProyecto', 'ejecAccesorios', 'ejecReutilizados', 'ejecLuminarias', 'calleAv'));
    }
    //en esta parte registra todo el trabajo hecho   en proyecto almacen
    public function registrarTrabajo(Request $request, $idp)
    {
        $fin = 'Finalizado';

        $regisProyectoEjec = proyecto::find($idp);
        $regisProyectoEjec->Ejecutado_Por = $request->txtejec . ' ' . session('paterno') . ' ' . session('nombres');
        $regisProyectoEjec->Fecha_Ejecutada = $request->txtfecha;
        $regisProyectoEjec->Estado = $fin;
        $regisProyectoEjec->save();
        try {
            if ($request->utilizadosreu) {
                # code...
                foreach ($request->input('utilizadosreu') as $id => $utilizadosreu) {
                    $regisrea = luminarias_reutilizada::find($id);
                    if ($regisrea) {
                        if ($utilizadosreu <= $regisrea->Disponibles && $utilizadosreu > 0) {
                            $regisrea->Utilizados = $regisrea->Utilizados + $utilizadosreu;
                            $regisrea->Disponibles = $regisrea->Cantidad - $regisrea->Utilizados;
                            $regisrea->save();
                        }
                    }
                }
            }
            if ($request->utilizadoacc) {
                foreach ($request->input('utilizadoacc') as $id => $utilizadoacc) {
                    $regisaccesorio = accesorio::find($id);
                    if ($regisaccesorio) {
                        if ($utilizadoacc <= $regisaccesorio->Disponibles && $utilizadoacc > 0) {

                            $regisaccesorio->Utilizados = $regisaccesorio->Utilizados + $utilizadoacc;
                            $regisaccesorio->Disponibles = $regisaccesorio->Cantidad - $regisaccesorio->Utilizados;
                            $regisaccesorio->save();
                        }
                    }
                }
            }
            if ($request->lugarlum) {
                foreach ($request->input('lugarlum') as $id => $lugarlum) {
                    $regisled = luminaria::find($id);
                    if ($regisled) {
                        if ($lugarlum) {
                            $regisled->Lugar_Instalado = $lugarlum;
                            $regisled->save();
                        }
                    }
                }
            }
            $sql = true;
        } catch (\Throwable $th) {
            $sql = false;
        }
        if ($sql == true) {
            return redirect(route('proyectos.ObrasEjecutadas'))->with("correcto", "Datos registrados Correctamente");
        } else {
            return back()->with("incorrecto", "Error al registrar Datos invalidos");
        }
    }
    //proyecto obras ejecutadas  funciones---------------------------------------------------------------------------------------------------------
    public function datosObras()
    {
        $proyectoObras = proyecto::where('Estado', 'Finalizado')
            ->orderBy('id', 'desc')
            ->get();
        $reutilizadas = luminarias_reutilizada::all();
        $accesorio = accesorio::all();
        $luminaria = luminaria::all();
        $listadistrito = distrito::whereBetween('id', [1000, 1013])->get();
        $listazonaurb = distrito::select('Zona_Urbanizacion')->distinct()->get();
        return view('plantilla.Proyectos.proyectosObrasEjecutadas', [
            'proyectoObras' => $proyectoObras,
            'listadistrito' => $listadistrito, 'listazonaurb' => $listazonaurb,
            'reutilizada' => $reutilizadas, 'accesorio' => $accesorio, 'luminaria' => $luminaria

        ]);
    }

    public function destroy(string $id)
    {
        //
    }
}
