<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table = 'editoriales';

    protected $fillable = [
        'nombre',
        'pais'
    ];

    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}
