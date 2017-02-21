<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
	protected $table = 'vehiculos';

	protected $fillable = ['placa','transporte_id','persona_id','color_id',
							'marca_id','modelo_id'];

	public function transporte()
	{
		return $this->belongsTo('App\Transporte');
 	}

	public function persona()
	{
		return $this->belongsTo('App\Persona');
 	}

	public function marca()
	{
		return $this->belongsTo('App\Marca');
 	}

	public function modelo()
	{
		return $this->belongsTo('App\Modelo');
 	}

}
