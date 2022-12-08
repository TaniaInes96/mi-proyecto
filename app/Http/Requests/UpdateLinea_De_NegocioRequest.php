<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLinea_De_NegocioRequest extends FormRequest
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
            'codigo_de_envio' => 'required',
            'fecha_de_corte' => 'required',
            'codigo_de_evento' => 'required|unique:linea__de__negocios,codigo_de_evento,'.$this->route('linea_de_negocio'),
            'id_linea_negocio' => 'required',
            'linea_nivel3' => 'required',
            'tipo_envio' => 'nullable',
        ];
    }
}
