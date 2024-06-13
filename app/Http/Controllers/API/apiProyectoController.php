<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\luminaria;
use App\Models\accesorio;
use App\Models\luminarias_reutilizada;

class apiProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function lum()
    {
        $luminaria = luminaria::all();
        return response()->json($luminaria);
    }
    public function acces()
    {
        $accesorio = accesorio::all();
        return response()->json($accesorio);
    }
    public function reuu($id)
    {

        $reutilizada = luminarias_reutilizada::where('Proyectos_id', $id)->get();
        return response()->json($reutilizada);
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
