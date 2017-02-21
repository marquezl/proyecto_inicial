<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
	protected $table = 'marcas';

	protected $fillable = ['descripcion'];

	public function vehiculos()
	{
		return $this->hasMany('App\Vehiculo');
	}

	public function modelos()
	{
		return $this->hasMany('App\Modelo');
	}

}