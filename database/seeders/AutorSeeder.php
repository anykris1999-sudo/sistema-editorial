<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Autor;

class AutorSeeder extends Seeder
{
    public function run(): void
    {
        Autor::create([
            'nombre_real' => 'Gabriel García Márquez',
            'email' => 'gabriel@gmail.com'
        ]);

        Autor::create([
            'nombre_real' => 'Isabel Allende',
            'email' => 'isabel@gmail.com'
        ]);
    }
}
