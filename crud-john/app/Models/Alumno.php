<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','apellido_materno','apellido_paterno','edad','nombre_id'];
    // protected $guarded = [];

    //creamos la funcion con el nombre de la tabla que vamos a relacionar
    public function materias()
    {
        return $this->belongsTo(Materia::class,'nombre_id');
    }
}
