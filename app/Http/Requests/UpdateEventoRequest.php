<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventoRequest extends FormRequest
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
        'codigo_de_envio' => 'required',
        'fecha_de_corte' => 'required',
        'codigo_de_evento' => 'required|unique:eventos,codigo_de_evento,'.$this->route('evento')->id,
        'id_tipo_de_entrada' => 'required',
        'descripcion' => 'required',
        'id_factor_de_riesgo' => 'required',
        'cargos' => 'nullable',
        'areas' => 'nullable',
        'id_categoria' => 'nullable',
        'perdida_valor_contable' => 'nullable',
        'perdida_valor_mercado' => 'nullable',
        'gastos' => 'nullable',
        'monto_total' => 'nullable',
        'monto_recuperado' => 'nullable',
        'recuperacion_activo' => 'nullable',
        'relacion_riesgo' => 'nullable',
        'evento_critico' => 'required',
        'detalle_evento_critico' => 'nullable',
        'monto_evento' => 'nullable',
        'moneda' => 'nullable',
        'fecha_descubrimiento' => 'required',
        'hora_descubrimiento' => 'required',
        'fecha_inicio' => 'nullable',
        'hora_inicio' => 'nullable',
        'fecha_final' => 'nullable',
        'hora_final' => 'nullable',
        'elaborador' => 'required',
        'revisor' => 'nullable',
        'aprobador' => 'required',
        'id_estado_evento' => 'nullable',
        'detalle_estado_evento' => 'nullable',
        'codigo_de_evento_relacionado' => 'nullable',
        'tipo_envio' => 'nullable',
        ];
    }
}
