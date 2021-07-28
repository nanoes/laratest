<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontologo extends Model
{
    use HasFactory;
    
    protected $table= "odontologo";

    protected $fillable = [
        'nombre',
        'apellido',
    ];
    
    public function paciente(){
        return $this->belongsToMany(Paciente::class, 'paciente_odontologo');
    }
}
