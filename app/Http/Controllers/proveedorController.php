<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedor;

class proveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedor = proveedor::all();

        return view('plantilla.Proyectos.proyectosProveedores', ['proveedor' => $proveedor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $valor = 0;
        try {
            $provedor = new proveedor();
            $provedor->Nombre_de_Empresa = $request->txtproveedor;
            $provedor->Descripcion = $request->txtdescripcion;
            $provedor->Cantidad = $valor;
            $provedor->save();
            $sql = true;
        } catch (\Throwable $th) {
            $sql = false;
        }
        if ($sql == true) {
            return back()->with("correcto", "Proveedor Registrado Correctamente");
        } else {
            return back()->with("incorrecto", "Error al Registrar Proveedor");
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
        try {
            $proveedor = proveedor::find($request->txtid);
            $proveedor->Nombre_de_Empresa = $request->txtproveedor;
            $proveedor->Descripcion = $request->txtdescripcion;
            $proveedor->save();
            $sql = true;
        } catch (\Throwable $th) {
            $sql = false;
        }
        if ($sql == true) {
            return back()->with("correcto", "Proveedor Modificado Correctamente");
        } else {
            return back()->with("incorrecto", "Error al Modificar Proveedor");
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
}
