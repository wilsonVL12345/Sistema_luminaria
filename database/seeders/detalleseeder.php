<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\detalle;

class detalleseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detall = new detalle();
        $detall->Nro_Sisco = "";
        $detall->Zona = "";
        $detall->Tipo_Trabajo = "";
        $detall->Foto_Carta = "";
        $detall->Puntos = "";
        $detall->Fecha_Programado = "";
        $detall->Fecha_Inicio = "";
        $detall->Estado = "";
        $detall->Observaciones = "";
        $detall->Detalles = "";
        $detall->EjecutadoPor = "";
        $detall->Users_id = "";
        $detall->Distritos_id = "";
        $detall->save();
    }
}
