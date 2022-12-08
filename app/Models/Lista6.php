<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista6 extends Model
{
    use HasFactory;

    protected $fillable = [
    	'cod',
    	'tipo_entidad',
    	'operacion',
    ];
}
