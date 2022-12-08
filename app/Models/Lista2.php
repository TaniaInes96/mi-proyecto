<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista2 extends Model
{
    use HasFactory;

    protected $fillable = [
    	'cod',
		'tipo_evento',
		'subtipo_evento',
		'clase_evento',
    ];
}
