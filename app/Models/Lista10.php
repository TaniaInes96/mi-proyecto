<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista10 extends Model
{
    use HasFactory;

    protected $fillable = [
    	'cod',
    	'tipo_entidad',
    	'linea_negocio',
    	'nivel',
    ];
}
