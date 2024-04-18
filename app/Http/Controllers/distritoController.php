<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\distrito;

use function PHPUnit\Framework\returnSelf;

class distritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $distritos = distrito::all();
        $listadistrito = distrito::distinct()->get(['Zona_Urbanizacion']);
        return view('plantilla.DetallesDistritos.Distritos', ['distrito' => $distritos], ['listadistrito' => $listadistrito]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->txtagregar === "txtzonaUr") {
            /* dd($request->txtdistrit, $request->txtzonaUrbx, $request->txtzonaUr); */

            try {
                $distrito = new distrito();
                $distrito->Distrito = $request->txtdistrit;
                $distrito->Zona_Urbanizacion = $request->txtzonaUrbanizacio . $request->txtzonaUr;

                $distrito->save();
                $sql = true;
            } catch (\Throwable $th) {
                $sql = false;
            }
            if ($sql == true) {
                return back()->with("correcto", "Datos Registrado Correctamente");
            } else {
                return back()->with("incorrecto", "Error al Registrar");
            }
        } else {


            try {
                $distrito = new distrito();
                $distrito->Distrito = $request->txtdistrito;
                $distrito->Zona_Urbanizacion = $request->txtzonaUrbanizacion . $request->txtzonaUrb;
                $distrito->Calle_Avenida = $request->txtavenidacalle . $request->txtavc;
                $distrito->save();
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
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $distrito = distrito::find($request->txtid);
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
