<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\urbanizacion;

class urbanizacionseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $urb = new urbanizacion();
        $urb->Nrodistrito = "8";
        $urb->nombre_urbanizacion = "senkata";
        $urb->save();
        $urb = new urbanizacion();
        $urb->Nrodistrito = "1";
        $urb->nombre_urbanizacion = "ventila";
        $urb->save();
        $urb = new urbanizacion();
        $urb->Nrodistrito = "8";
        $urb->nombre_urbanizacion = "senk";
        $urb->save();
    }
}
