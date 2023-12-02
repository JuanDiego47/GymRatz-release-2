<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table='member';
    protected $primaryKey='id_Miembro';
    public $timestamps = false;
    
    protected $fillable=[
        'nombre_Miembro',
        'apellido_Miembro',
        'correo_Miembro',
        'telefono_Miembro',
        'estadoMembresia_Miembro'
    ];
    use HasFactory;
}
