<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\distrito;

class apiDistritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $distritos = Distrito::select('Distrito', 'Zona_Urbanizacion')
            ->where('Zona_Urbanizacion', '<>', '')
            ->distinct('Zona_Urbanizacion')
            ->orderBy('distrito', 'desc')
            ->get();
        /* $distritos = distrito::whereBetween('id', [1000, 1013])->get(); */
        return response()->json($distritos);
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
