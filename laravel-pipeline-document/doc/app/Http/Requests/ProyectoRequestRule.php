<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequestRule extends FormRequest
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
            'nombre' => 'required|unique:posts|max:100',
            'descripcion' => 'required|unique:posts|max:400',
            'fechaInicio' => 'required|max:10',
            'fechaVencimiento' => 'required|max:10'
        ];
    }
}
