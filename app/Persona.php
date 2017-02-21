<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
	protected $table = "personas";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	protected $fillable = ['tipo_transportista','identificacion','primer_nombre','segundo_nombre', 
                           'primer_apellido','segundo_apellido','lugar_nacimiento','fecha_nacimiento',
                            'direccion','sexo','transporte_id'];

    public function transporte()
    {
        return $this->hasOne('App\Transporte',  'id', 'transporte_id');
    }


}
