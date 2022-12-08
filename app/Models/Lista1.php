<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista1 extends Model
{
    use HasFactory;

    protected $fillable = [
	    'cod',
		'tipo_entidad',
		'subtipo_entidad',
	];
}
