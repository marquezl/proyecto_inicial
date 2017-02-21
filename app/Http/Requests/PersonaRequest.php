<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaRequest extends FormRequest
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
            'tipo_transportista' => 'min:4|max:120|required|:personas',
            'identificacion' => 'min:4|max:120|required|unique:personas',
            'primer_nombre' => 'min:2|max:120|required:personas',
            'segundo_nombre' => 'max:120:personas',
            'primer_apellido' => 'min:4|max:120|required:personas',
            'segundo_apellido' => 'max:120:personas',
            'lugar_nacimiento'=> 'max:120|required:personas',
            'fecha_nacimiento'=> 'max:120|required:personas',
            'direccion'=> 'max:120|required:personas',
            'sexo'=> 'max:1|required:personas',
            'transporte_id'=> 'max:100|required:personas'
        ];

    }
}
