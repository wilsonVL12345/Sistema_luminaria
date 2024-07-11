<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\detalle;
use App\Models\urbanizacion;
use PhpParser\Node\Expr\FuncCall;

class apiDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function infoatencion(Request $request)
    {
        $infoDetalle = detalle::all();

        /*  $infoDetalle = detalle::where('Nro_Sisco', $request->txtbuscar)->get(); */
        return response()->json($infoDetalle);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function listUbanizacion()
    {
        $listaUrb = urbanizacion::select('Nrodistrito', 'nombre_urbanizacion')->get();
        return response()->json($listaUrb);
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
