<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seudonimo extends Model
{
    protected $fillable = ['autor_id', 'nombre_pluma', 'fecha_registro'];

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }
}
