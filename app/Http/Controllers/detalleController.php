<?php

namespace App\Http\Controllers;

use App\Models\accesorio;
use Illuminate\Http\Request;
use App\Models\detalle;
use App\Models\distrito;
use App\Models\proyecto;
use Illuminate\Foundation\Console\ViewMakeCommand;
use Illuminate\Support\Facades\Storage;

class detalleController extends Controller
{

    public function index()
    {

        $detalles = detalle::where('Estado', 'En Espera')->get();
        $listadistrito = distrito::whereBetween('id', [1000, 1013])->get();
        $listazonaurb = distrito::select('Zona_Urbanizacion')->distinct()->get();
        return view('plantilla.DetallesGenerales.Espera', compact('detalles', 'listadistrito', 'listazonaurb'));
    }
    public function realizados()
    {
        $detallesrealizados = detalle::where('Estado', 'Finalizado')->get();
        return view('plantilla.DetallesGenerales.Realizados', compact('detallesrealizados'));
    }
    public function ejecutar($id)
    {
        $listadistrito = distrito::whereBetween('id', [1000, 1013])->get();
        $trabajo = detalle::find($id);
        return view('plantilla.DetallesGenerales.EjecutarTrabajo', compact('listadistrito', 'trabajo'));
    }
    public function agendar()
    {
        $listadistrito = distrito::whereBetween('id', [1000, 1013])->get();
        $listazonaurb = distrito::select('Zona_Urbanizacion')->distinct()->get();
        return view('plantilla.Agendar.agendar', compact('listadistrito', 'listazonaurb'));
    }
    public function pendiente()
    {
        $detall = detalle::where('Estado', 'En Espera')->get();
        return view('plantilla.RealizarTrabajo.trabajos', compact('detall'));
    }
    // para agregar  mantenimiento en espera
    public function create(Request $request)
    {
        //se a creado un acceso directo para que pueda acceder a esa carpeta
        $espera = 'En Espera';
        $notificar = '';
        $dir = $request->file('imgcarta')->store('public/fileagendar');
        $url = Storage::url($dir);
        if ($request->rnotificar == 'on') {
            $notificar = 'NOTIFICADO!!!';
        }
        try {
            $request->validate([
                'imgcarta' => 'required|image|max:8048'
            ]);

            $detalles = new detalle();
            $detalles->Distritos_id = $request->txtdistirto;
            $detalles->Zona = $request->txtzonaurb;
            $detalles->Nro_Sisco = $request->txtnrosisco;
            $detalles->Fecha_Hora_Inicio_Programado = $request->txtfechainiciop;
            $detalles->Fecha_Hora_Fin_Programado = $request->txtfechafinp;
            $detalles->Tipo_Trabajo = $request->selectedStates;
            $detalles->Foto_Carta = $url;
            $detalles->Observaciones = $notificar;
            $detalles->Observaciones = $notificar . ' ' . $request->txtobservacion;
            $detalles->Estado = $espera;
            $detalles->Users_id = session('id');
            $detalles->save();
            $sql = true;
        } catch (\Throwable $th) {
            $sql = false;
        }
        if ($sql == true) {
            return back()->with("correcto", "Datos Registrado Correctamente");
        } else {
            return back()->with("incorrecto", "Error al Agendar");
        }
    }

    public function storeTrabajo(Request $request, $id)
    {
        $tipoLuminaria = 'Tipo: ';
        $fin = 'Finalizado';
        $prov = 1;
        $proy = 1;
        try {
            $storetrabajo = detalle::find($id);
            $storetrabajo->Puntos = $request->txtcantidadlum;
            $storetrabajo->Fecha_Hora_Inicio = $request->txtfechainicioej;
            $storetrabajo->Fecha_Hora_Fin = $request->txttechafinej;
            $storetrabajo->Detalles = $tipoLuminaria . $request->selectedStates . '. ' . $request->txtdetalles;
            $storetrabajo->Estado = $fin;
            $storetrabajo->Users_id = session('id');
            $storetrabajo->save();

            $acccampoitem = $request->campoitem;
            $Cantidad = $request->camponoreutilizables;
            $acccampoobser = $request->campoobservaciones;

            if (!empty($acccampoitem)) {
                foreach ($acccampoitem as $key => $value) {
                    $accesoriosmal = new accesorio();
                    $accesoriosmal->Id_Lista_accesorios = $acccampoitem[$key]['txtitem'];
                    $accesoriosmal->Cantidad = $Cantidad[$key]['txtnoreutilizables'];
                    $accesoriosmal->Observaciones = $acccampoobser[$key]['txtobservaciones'];

                    $accesoriosmal->Proyectos_id = $proy;
                    $accesoriosmal->Proveedores_id = $prov;
                    $accesoriosmal->Detalles_id = $id;
                    $accesoriosmal->save();
                }
            }
            $sql = true;
        } catch (\Throwable $th) {
            $sql = false;
        }
        if ($sql == true) {
            return redirect()->route('pendiente.trabajo')->with("correcto", "Trabajo Ejecutado Correctamente");
        } else {
            return redirect()->route('pendiente.trabajo')->with("incorrecto", "Error nose guardaron los datos");
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
    public function edit(Request $request)
    {
        $mnotificar = '';

        if ($request->mrnotificar == 'on') {
            $mnotificar = 'NOTIFICADO!!!';
        }
        try {
            $editdetall = detalle::find($request->txtid);

            $editdetall->Distritos_id = $request->mtxtdistirto;
            $editdetall->Zona = $request->mtxtzonaurb;
            $editdetall->Nro_Sisco = $request->mtxtnrosisco;
            $editdetall->Fecha_Hora_Inicio_Programado = $request->mtxtfechainiciop;
            $editdetall->Fecha_Hora_Fin_Programado = $request->mtxtfechafinp;
            if ($request->mselectedStates) {
                $editdetall->Tipo_Trabajo = $request->mselectedStates;
            }
            if ($request->mimgcarta) {
                $dirr = $request->file('mimgcarta')->store('public/fileagendar');
                $murl = Storage::url($dirr);
                $editdetall->Foto_Carta = $request->$murl;
            }
            if ($request->mrnotificar || $request->mtxtobservacion) {
                $editdetall->Observaciones = $request->mrnotificar . ' ' . $request->mtxtobservacion;
            }
            $editdetall->save();
            $sql = true;
        } catch (\Throwable $th) {
            $sql = false;
        }
        if ($sql == true) {
            return back()->with("correcto", "Dato Modificado Correctamente");
        } else {
            return back()->with("incorrecto", "Error al Modificar los datos");
        }
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
    //funciona para la parte de consultas luminarias -------------------------------------------------------------------------------------v
    public function datosatencion()
    {
        $datosatencion = detalle::all();
        return view('plantilla.Consultas.Atencion', [$datosatencion]);
    }
}
