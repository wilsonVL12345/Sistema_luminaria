<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function login(Request $request)
    {

        dd($request->all());
        /* $estado = 'Activo';
        $credenciales = [
            "Usuario" => $request->txtusuario,
            "Contraseña" => $request->txtcontraseña
             /*  "Estado" => $estado  */
        /* ];
        $remember = ($request->has('remember') ? true : false);
        if (Auth::attempt($credenciales, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('index'));
        } else {
            return redirect('login');
        }  */
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
