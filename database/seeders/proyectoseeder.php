<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\detalle;

class proyectoseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detall = new detalle();
        $detall->Cuce_Cod = "0000000";
        $detall->Zona = "proyecFake";
        $detall->Tipo_Contratacion = "proyecFake";
        $detall->Estado = "proyecFake";
        $detall->Subasta = "proyecFake";
        $detall->Modalidad = "proyecFake";
        $detall->Objeto_Contratacion = "proyecFake";
        $detall->Tipo_Componentes = "proyecFake";
        $detall->Ejecutado_Por = "proyecFake";
        $detall->Fecha_Programada = "2024-07-04";
        $detall->Fecha_Ejecutada = "2024-07-04";
        $detall->Observaciones = "proyecFake";
        $detall->Proveedor = "proyecFake";
        $detall->Users_id = "1";
        $detall->Distritos_id = "1";
        $detall->save();
    }
}
