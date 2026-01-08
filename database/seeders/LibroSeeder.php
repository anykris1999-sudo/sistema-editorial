<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    public function run(): void
    {
        $libro1 = Libro::create([
            'editorial_id' => 1,
            'titulo' => 'Cien años de soledad',
            'isbn' => 'ISBN-001',
            'paginas' => 417
        ]);

        $libro2 = Libro::create([
            'editorial_id' => 2,
            'titulo' => 'La casa de los espíritus',
            'isbn' => 'ISBN-002',
            'paginas' => 368
        ]);

        // Relación muchos a muchos
        $libro1->autores()->attach([1]);
        $libro2->autores()->attach([2]);
    }
}

