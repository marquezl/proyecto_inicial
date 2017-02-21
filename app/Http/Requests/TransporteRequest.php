<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TransporteRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_transporte' => 'min:2|max:120|required:transportes',
            'direccion' => 'min:10:max:120:transportes',
            'rif' => 'min:4|max:20|required:transportes',
            'telefono_movil' => 'max:20:transportes',
            'telefono_oficina'=> 'max:20|required:transportes'
        ];
    }
}
