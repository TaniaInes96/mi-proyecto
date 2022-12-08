<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    use HasFactory;

    protected $fillable = [
    	'codigo_de_envio',
		'fecha_de_corte',
		'codigo_de_evento',
		'id_operacion',
		'tipo_envio',
    ];
}
