<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
	protected $table = 'modelos';

	protected $fillable = ['descripcion','marca_id'];

	public function vehiculos()
	{
		return $this->hasMany('App\Vehiculo');
	}

	public function marca()
	{
		return $this->belongsTo('App\Marca');
	}

}