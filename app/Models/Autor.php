<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Seudonimo;
use App\Models\Libro;

class Autor extends Model
{
    protected $table = 'autors';

    protected $fillable = [
        'nombre_real',
        'email',
    ];

    public function seudonimo()
    {
        return $this->hasOne(Seudonimo::class, 'autor_id');
    }

    public function libros()
    {
        return $this->belongsToMany(
            Libro::class,
            'autor_libro',
            'autor_id',
            'libro_id'
        );
    }
}
