<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table= "paciente";
    protected $fillable = [
        'nombre',
        'apellido',
    ];
    //
    public function odontologo(){
        return $this->belongsToMany(Odontologo::class, 'paciente_odontologo');
    }
}
