<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrixkeputusan extends Model
{
	use HasFactory;
	protected $table = 'matrixkeputusan';

	protected $fillable = [
		'idmatrix',
		'idalternatif',
		'idbobot',
		'idskala',
	];
}
