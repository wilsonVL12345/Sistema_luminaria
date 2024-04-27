<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
/* use Illuminate\Support\Facades\Hash; */
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;

class logincontroller extends Controller
{
    public function login(Request $request)
    {

        session_start();
        if (!empty($request->txtusuario) && !empty($request->txtcontrase)) {
            $usuario = $request->txtusuario;
            $contraseña = $request->txtcontrase;
            $user = User::where('Usuario', $usuario)
                ->where('Password', $contraseña)
                ->first();
            if ($user) {
                $_SESSION["id"] = $user->id;
                $_SESSION["nombre"] = $user->Nombres;
                $_SESSION["paterno"] = $user->Paterno;
                $_SESSION["lugarDesignado"] = $user->Lugar_Designado;
                $_SESSION["cargo"] = $user->Cargo;


                return redirect(route('index'));
            } else {
                return back()->with("incorrecto", "Acceso denegado");
            }
        } else {
            return back()->with("incorrecto", "Campos vacios Ingrese sus Credenciales");
        }
    }
    public function logout(Request $request)
    {
        session_start();
        session_destroy();

        return redirect(route('login'));
    }
}
