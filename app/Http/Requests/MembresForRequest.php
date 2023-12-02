<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembresForRequest extends FormRequest
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
            'nombre_Miembro'=>'required|max:50',
            'apellido_Miembro'=>'required|max:50',
            'correo_Miembro'=>'required|max:50',
            'telefono_Miembro'=>'required|max:10',
            'estadoMembresia_Miembro'=>'required',
        ];
    }
}
