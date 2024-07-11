<?php

namespace App\Http\Controllers;

use App\Models\accesorio;
use Illuminate\Http\Request;
use App\Models\detalle;
use App\Models\distrito;
use App\Models\lista_accesorio;
use App\Models\proyecto;
use App\Models\urbanizacion;
use Illuminate\Foundation\Console\ViewMakeCommand;
use Illuminate\Support\Facades\Storage;

class detalleController extends Controller
{

    public function index()
    {

        $detalles = detalle::where('Estado', 'En Espera')->get();
        $listadistrito = distrito::all();
        $listazonaurb = urbanizacion::all();

        return view('plantilla.DetallesGenerales.Espera', compact('detalles', 'listadistrito', 'listazonaurb'));
    }
    public function realizados()
    {
        $detallesrealizados = detalle::where('Estado', 'Finalizado')->get();
        return view('plantilla.DetallesGenerales.Realizados', compact('detallesrealizados'));
    }
    public function ejecutar($id)
    {
        $listadistrito = distrito::all();
        $trabajo = detalle::find($id);
        $listacom = lista_accesorio::all();
        return view('plantilla.DetallesGenerales.EjecutarTrabajo', compact('listadistrito', 'trabajo', 'listacom'));
    }
    public function agendar()
    {
        $listadistrito = distrito::all();
        $listazonaurb = urbanizacion::all();
        return view('plantilla.Agendar.agendar', compact('listadistrito', 'listazonaurb'));
    }
    // en esta parte muestra la vista Realizar trabajos donde esta detallados todos los trabajos a realizar pendiente
    public function pendiente()
    {
        $detall = detalle::where('Estado', 'En Espera')->get();
        return view('plantilla.RealizarTrabajo.trabajos', compact('detall'));
    }

    public function detallesEspera()
    {
        $detall = detalle::where('Estado', 'En Espera')->get();
        return view('plantilla.RealizarTrabajo.trabajos', compact('detall'));
    }




    // para agregar  mantenimiento en espera
    public function create(Request $request)
    {
        /* dd($request->all()); */
        //se a creado un acceso directo para que pueda acceder a esa carpeta
        $espera = 'En Espera';
        $tipTrabajo = '';
        $apoyo = '';
        $url = '';
        $notificar = '';
        if ($request->imgcarta) {
            $dir = $request->file('imgcarta')->store('public/fileagendar');
            $url = Storage::url($dir);
        }

        if ($request->rnotificar == 1) {
            $notificar = 'NOTIFICADO!!!';
        }
        foreach ($request->selectedStates as $tip) {
            $tipTrabajo = $tipTrabajo . ' ' . $tip;
        }
        if ($request->txtapoyo) {
            $apoyo = ' ' . 'Asistencia' . ' ' . $request->txtapoyo;
        }
        $request->validate([
            'imgcarta' => 'image|max:8048'   // estas son las reglas que tiene que cumplir para poder subir la imagen required| lo quitamos
        ]);
        try {

            $detalles = new detalle();
            $detalles->Distritos_id = $request->txtdistirto;
            $detalles->Zona = $request->txtzonaurb;
            $detalles->Nro_Sisco = $request->txtnrosisco;
            $detalles->Fecha_Programado = $request->txtfechaprogramada;
            $detalles->Tipo_Trabajo = $tipTrabajo . ' ' . $apoyo;
            if ($url) {
                $detalles->Foto_Carta = $url;
            }
            /* dd($request->all()); */
            $detalles->Observaciones = $notificar;
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
