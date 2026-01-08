<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seudonimo;

class SeudonimoSeeder extends Seeder
{
    public function run(): void
    {
        Seudonimo::create([
            'autor_id' => 1,
            'nombre_pluma' => 'Gabo',
            'fecha_registro' => now()
        ]);

        Seudonimo::create([
            'autor_id' => 2,
            'nombre_pluma' => 'Isa',
            'fecha_registro' => now()
        ]);
    }
}

