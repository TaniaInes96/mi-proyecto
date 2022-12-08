<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCanaleRequest extends FormRequest
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
        'codigo_de_envio'=> 'required',
        'fecha_de_corte'=> 'required',
        'codigo_de_evento'=> 'required|unique:canales,codigo_de_evento,'.$this->route('canale'),
        'id_canal'=> 'required',
        'tipo_envio'=> 'nullable',
        ];
    }
}
