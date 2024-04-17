<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function administrador()
    {
        $users = User::where('cargo', 'administrador')->get();
        return view('plantilla.Usuarios.Administrador', ['user' => $users]);
    }

    public function jefatura()
    {
        $users = User::where('cargo', 'jefatura')->get();
        return view('plantilla.Usuarios.Jefatura', ['user' => $users]);
    }
    public function especialista()
    {
        $users = User::where('cargo', 'especialista')->get();
        return view('plantilla.Usuarios.Especialista', ['user' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $user = new User();
            $primera = strtolower(substr($request->txtnombre, 0, 1));
            $apellido = strtolower($request->txtpaterno);
            $usuario = $primera . $apellido;
            $contraseña = $apellido . $request->txtci;

            $user->Nombres = $request->txtnombre;
            $user->Paterno = $request->txtpaterno;
            $user->Materno = $request->txtmaterno;
            $user->Ci = $request->txtci;
            $user->Expedido = $request->txtexpedido;
            $user->Celular = $request->txtcelular;
            $user->Genero = $request->txtgenero;
            $user->Cargo = $request->txtcargo;
            $user->Lugar_Designado = $request->txtlugarDesignado;
            $user->Estado = $request->txtestado;
            $user->Usuario = $usuario;
            $user->Contraseña = $contraseña;
            $user->save();
            $sql = true;
        } catch (\Throwable $th) {
            $sql = false;
        }
        if ($sql == true) {
            return back()->with("correcto", "Usuario Registrado Correctamente");
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
            $user = User::find($request->txtid);

            $user->Nombres = $request->txtnombre;
            $user->Paterno = $request->txtpaterno;
            $user->Materno = $request->txtmaterno;
            $user->Ci = $request->txtci;
            $user->Expedido = $request->txtexpedido;
            $user->Celular = $request->txtcelular;
            $user->Genero = $request->txtgenero;
            $user->Cargo = $request->txtcargo;
            $user->Lugar_Designado = $request->txtlugarDesignado;
            $user->Estado = $request->txtestado;
            $user->save();
            $sql = true;
        } catch (\Throwable $th) {
            $sql = false;
        }
        if ($sql == true) {
            return back()->with("correcto", "Usuario Modificado Correctamente");
        } else {
            return back()->with("incorrecto", "Error al Modificar");
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
