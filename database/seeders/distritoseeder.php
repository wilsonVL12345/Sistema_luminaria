<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\distrito;

class distritoseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $distr = new distrito();
        $distr->Distrito = "ninguno";
        $distr->save();
    }
}
