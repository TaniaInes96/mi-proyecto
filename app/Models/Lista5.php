<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista5 extends Model
{
    use HasFactory;

    protected $fillable = [
    	'cod',
		'proceso',
		'subproceso',
	];
}
