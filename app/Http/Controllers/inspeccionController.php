<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inspeccion;
use App\Models\distrito;

use Illuminate\Support\Facades\Storage;



class inspeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* $inspeccion = inspeccion::all(); */
        $inspeccion = inspeccion::where('Inspeccion', 'En espera')->get();
        $listadistrito = distrito::whereBetween('id', [1000, 1013])->get();
        $listazonaurb = distrito::select('Zona_Urbanizacion')->distinct()->get();

        return view('plantilla.Inspecciones.Espera', ['inspeccion' => $inspeccion, 'listadistrito' => $listadistrito, 'listazonaurb' => $listazonaurb]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $request->validate([
                'imgcarta' => 'required|image|max:8048'
            ]);

            //aqui poner el id del que va a agregar el trabajo
            $fk = session('id');
            $espera = 'En espera';
            //se a creado un acceso directo para que pueda acceder a esa carpeta
            $dir = $request->file('imgcarta')->store('public/fileinspecciones');
            $url = Storage::url($dir);

            $inspeccion = new inspeccion();

            $inspeccion->Distritos_id = $request->txtdistirto;
            $inspeccion->ZonaUrbanizacion = $request->txtzonaurb;
            $inspeccion->Nro_Sisco = $request->txtnrosisco;
            $inspeccion->Fecha_Inspeccion = $request->txtfecha;
            $inspeccion->Foto_Carta = $url;
            $inspeccion->Inspeccion = $espera;
            $inspeccion->users_id = $fk;
            $inspeccion->save();
            $sql = true;
        } catch (\Throwable $th) {
            $sql = false;
        }
        if ($sql == true) {
            return back()->with("correcto", "Datos Registrado Correctamente");
        } else {
            return back()->with("incorrecto", "Error al Registrar");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function ready(Request $request)
    {
        try {
            $inspe = 'Realizado';
            $emp = inspeccion::find($request->txtid);

            $emp->Tipo_Inspeccion = $request->txttipo;
            $emp->Detalles = $request->txtdescripcion;
            $emp->Estado = $request->txtestado;
            $emp->Fecha_Inspeccion = now()->format('Y-m-d');
            $emp->Inspeccion = $inspe;
            $emp->users_id = session("id");
            $emp->save();
            $sql = true;
        } catch (\Throwable $th) {
            $sql = false;
        }
        if ($sql == true) {
            return back()->with("correcto", "Inspeccion realizada con exito");
        } else {
            return back()->with("incorrecto", "Error al Inspeccionar");
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        try {
            $inspe = inspeccion::find($request->txtid);

            $inspe->Distritos_id = $request->txtdistrito;
            $inspe->ZonaUrbanizacion = $request->txtzurb;
            $inspe->Nro_Sisco = $request->txtsisco;
            $inspe->Fecha_Inspeccion = $request->txtfecha;
            $inspe->save();
            $sql = true;
        } catch (\Throwable $th) {
            $sql = false;
        }
        if ($sql == true) {
            return back()->with("correcto", "Datos Modificado Correctamente");
        } else {
            return back()->with("incorrecto", "Error al Modificar");
        }
    }

    public function realizadas(Request $request)
    {
        $inspeccion = inspeccion::where('Inspeccion', 'Realizado')->get();
        return view('plantilla.Inspecciones.Realizadas', ['inspeccion' => $inspeccion]);
    }

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
