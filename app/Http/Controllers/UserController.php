<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function users()
    {
        $users = User::all();
        return view('plantilla.Usuarios.usuarios', ['user' => $users]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->txtestado) {
            $estado = 'Activo';
        } else {
            $estado = 'Bloqueado';
        }


        try {
            $user = new User();
            $primera = strtolower(substr($request->txtnombre, 0, 1));
            $apellido = strtolower($request->txtpaterno);
            $usuario = $primera . $apellido;
            $contrase = $apellido . $request->txtci;


            $user->Nombres = $request->txtnombre;
            $user->Paterno = $request->txtpaterno;
            $user->Materno = $request->txtmaterno;
            $user->Ci = $request->txtci;
            $user->Expedido = $request->txtexpedido;
            $user->Celular = $request->txtcelular;
            $user->Genero = $request->txtgenero;
            $user->Cargo = $request->txtcargo;
            $user->Lugar_Designado = $request->txtlugarDesignado;
            $user->Estado = $estado;
            $user->Usuario = $usuario;
            $user->Password = $contrase;
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


    public function bloquear($id)
    {
        $bloq = 'Bloqueado';
        $userbloquear = User::find($id);
        $userbloquear->Estado = $bloq;
        $userbloquear->save();
        return back()->with("incorrecto", "Usuario Bloqueado Correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function desbloquear($id)
    {
        $desbloq = 'Activo';
        $userdesbloquear = User::find($id);
        $userdesbloquear->Estado = $desbloq;
        $userdesbloquear->save();
        return back()->with("correcto", "Usuario Desbloqueado Correctamente");
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
