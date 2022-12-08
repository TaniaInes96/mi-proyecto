@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Ver Evento Riesgo Operativo' }}</h1>
    </div>
	<div class="container">
	  <div class="row g-4">
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código de Envío' }}</label>
	      	<input type="text" class="form-control" value="{{ $eventos->codigo_de_envio }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Fecha de corte' }}</label>
	        <input type="text" class="form-control" value="{{ $eventos->fecha_de_corte }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código del evento' }}</label>
	      	<input type="text" class="form-control" value="{{ $eventos->codigo_de_evento }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Tipo de entrada' }}</label>
	      	<input type="text" class="form-control" value="{{ $tipo_de_entrada->subtipo_entidad }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Descripción resumida del evento' }}</label>
	      	<textarea class="form-control" readonly="">{{ $eventos->descripcion }}</textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Factor de riesgo' }}</label>
	      	<input type="text" class="form-control" value="{{ $factor_riesgo->descripcion }}" readonly="">
	      </select>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Cargo(s) involucrado(s)' }}</label>
	      	<textarea type="text" class="form-control" readonly="">{{ $eventos->cargos }}</textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Área(s) involucrada(s)' }}</label>
	      <textarea type="text" class="form-control" readonly="">{{ $eventos->areas }}</textarea>
	    </div>
	    @if(auth()->user()->hasRoles(['admin','super']))
	    <div class="col-12">
	    	<label class="form-label">{{ 'Categoría' }}</label>
	      <input type="text" class="form-control" value="{{ $categoria->categoria }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Pérdida por riesgo (Valor contable)' }}</label>
	      	<input type="text" class="form-control" value="{{ $eventos->perdida_valor_contable }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Pérdida por riesgo (Valor de mercado)' }}</label>
	      	<input type="text" class="form-control" value="{{ $eventos->perdida_valor_mercado }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Gastos asociados a la pérdida' }}</label>
	      	<input type="text" class="form-control" value="{{ $eventos->gastos }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Monto total recuperado' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->monto_total }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Monto recuperado por cobertura de seguros' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->monto_recuperado }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Recuperación activo' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->recuperacion_activo }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Relación riesgo de crédito' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->relacion_riesgo }}" readonly="">
	    </div>
	    @endif
	    <div class="col-12">
	    	<label class="form-label">{{ 'Evento critico' }}</label>
	    	<input type="text" class="form-control" value="{{ $eventos->evento_critico }}" readonly="">
	    </div>
	    @if(auth()->user()->hasRoles(['admin','super']))
	    <div class="col-12">
	    	<label class="form-label">{{ 'Detalles Evento critico' }}</label>
	    	<textarea type="text" class="form-control" readonly="">{{ $eventos->detalle_evento_critico }}</textarea>
	    </div>
	    <div class="">
	    	<label class="form-label">{{ 'Moneda y montos evento' }}</label>
	    	<input type="text" class="form-control" value="{{ $eventos->monto_evento }}" readonly="">
	    </div>
	    @endif
	    <div class="col-6">
	    	<label class="form-label">{{ 'Fecha Descubrimiento' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->fecha_descubrimiento }}" readonly="">
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Hora Descubrimiento' }}</label>
	      	<input type="text" class="form-control" value="{{ $eventos->hora_descubrimiento }}" readonly="">
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Fecha Inicio' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->fecha_inicio }}" readonly="">
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Hora Inicio' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->hora_inicio }}" readonly="">
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Fecha Finalización' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->fecha_final }}" readonly="">
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Hora Finalización' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->hora_final }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Elaborador' }}</label>
	      	<textarea type="text" class="form-control" readonly="">{{ $eventos->elaborador }}</textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Revisor' }}</label>
		      <textarea type="text" class="form-control" readonly="">{{ $eventos->revisor }}</textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Aprobador' }}</label>
		      <textarea type="text" class="form-control" readonly="">{{ $eventos->aprobador }}</textarea>
	    </div>
	    @if(auth()->user()->hasRoles(['admin','super']))
	    <div class="col-12">
	    	<label class="form-label">{{ 'Estado evento' }}</label>
	      <input type="text" class="form-control" value="{{ $estado_evento->estado_evento }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Detalle estado del evento' }}</label>
	      <textarea type="text" class="form-control" readonly="">{{ $eventos->detalle_estado_evento }}</textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código de Evento Relacionado' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->codigo_de_evento_relacionado }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Tipo Envío' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->tipo_envio }}" readonly="">
	    </div>
	    @endif
	  </div>
	  <div class="mt-4">
	  	<a class="btn btn-primary" href="{{ route('evento.index') }}">{{ 'Volver' }}</a>
	  </div>
	</div>
</div>
@endsection