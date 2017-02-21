<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{

	protected $table = 'Tarifas';

	protected $fillable = ['origen','destino','fecha_desde','fecha_hasta','monto','	transporte_id'];

}
