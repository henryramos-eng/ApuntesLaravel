<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';
    protected $fillable = ['nombre', 'apellido', 'edad'];
    protected $hidden = ['id'];

    public function obtenerEstudiantes()
    {
        return Estudiante::all();
    }
    public function obternerEstudiantePorId($id)
    {
        return Estudiante::find($id);
    }
}
