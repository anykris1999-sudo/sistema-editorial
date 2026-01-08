<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Editorial;

class EditorialSeeder extends Seeder
{
    public function run(): void
    {
        Editorial::create([
            'nombre' => 'Editorial Sudamericana',
            'pais' => 'Argentina'
        ]);

        Editorial::create([
            'nombre' => 'Planeta',
            'pais' => 'España'
        ]);
    }
}

