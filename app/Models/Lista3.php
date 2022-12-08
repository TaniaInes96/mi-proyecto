<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista3 extends Model
{
    use HasFactory;

    protected $fillable = [
	    'cod',
		'descripcion',
	];
}
