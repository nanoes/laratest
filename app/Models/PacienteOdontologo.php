<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacienteOdontologo extends Model
{
    use HasFactory;
//esta va a ser la tabla pivot entre many to many at this PacientesOdontologos
    protected $table = "paciente_odontologo";


}
