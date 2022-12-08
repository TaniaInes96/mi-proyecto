<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePafRequest extends FormRequest
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
            //
            'codigo_de_envio'=> 'required',
        'fecha_de_corte'=> 'required',
        'codigo_de_evento'=> 'required|unique:pafs,codigo_de_evento,'.$this->route('paf'),
        'codigo_paf'=> 'required',
        'tipo_envio'=> 'nullable',
        ];
    }
}
