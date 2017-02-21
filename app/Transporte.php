<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
	protected $table = 'transportes';

	protected $fillable = ['nombre_transporte','direccion','rif','telefono_movil','telefono_oficina'];

	public function vehiculo()
	{
		return $this->hasOne('App\Vehiculo');
	}
	public function persona()
	{
		return $this->hasOne('App\Persona');
	}

}
