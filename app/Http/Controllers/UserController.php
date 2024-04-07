<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('cargo', 'administrador')->get();
        return view('plantilla.usuarioAdmin', ['user' => $users]);
    }

    public function jefatura()
    {
        $users = User::where('cargo', 'jefatura')->get();
        return view('plantilla.usuarioJefa', ['user' => $users]);
    }
    public function especialista()
    {
        $users = User::where('cargo', 'especialista')->get();
        return view('plantilla.usuarioEspe', ['use' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return $request->txtnombre;
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
    public function edit(string $id)
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
