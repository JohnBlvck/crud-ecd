<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    //creamos una funcion con el nombre de la tabla que vamos a relacionar
    public function estudiantes()
    {
        return $this->hasMany(Alumno::class, 'id'); //hasmany (tiene muchos)
    }

}
