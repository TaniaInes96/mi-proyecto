@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Editar Evento Riesgo Operativo' }}</h1>
    </div>
     @if(session()->has('info'))
    <div>
    	<h3>{{ session('info') }}</h3>
    </div>
    @endif
<form action="{{ route('evento.update', $eventos->id) }}" method="POST">
	@method('PUT')
	@csrf
	<div class="container">
	  <div class="row g-4">
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código de Envío' }}</label>
	      	<input type="text" class="form-control" value="{{ $eventos->codigo_de_envio }}" name="codigo_de_envio" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Fecha de corte' }}</label>
	        <div class="input-group">
	            <div class="input-group-prepend">
	              <span class="input-group-text" id="inputGroupPrepend2" >
	                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
	          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
	        </svg></span>
	            </div>
	             <input type="text" class="form-control datetime" readonly="" style="background-color: white !important" value="{{$eventos->fecha_de_corte}}" name="fecha_de_corte" required="" >
	          </div>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código del evento' }}</label>
	      	<input type="text" class="form-control" value="{{ $eventos->codigo_de_evento }}" name="codigo_de_evento" >
	    </div>
	    <div class="col-12">
	    	@livewire('select-anidado', ['id_tipo_de_entrada' => $eventos->id_tipo_de_entrada])
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Descripción resumida del evento' }}</label>
	      	<textarea class="form-control" name="descripcion" >{{ $eventos->descripcion }}</textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Factor de riesgo' }}</label>
	    	<select class="form-select" name="id_factor_de_riesgo" required="" >
	    		<option value="{{ $factor_riesgo->id }}">{{ $factor_riesgo->descripcion }}</option>
	      	@foreach($factores_riesgos as $factor_riesg)
	      		<option value="{{ $factor_riesg->id }}">{{ $factor_riesg->descripcion }}</option>
	      	@endforeach
	      </select>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Cargo(s) involucrado(s)' }}</label>
	      	<textarea type="text" class="form-control" name="cargos" >{{ $eventos->cargos }}</textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Área(s) involucrada(s)' }}</label>
	      <textarea type="text" class="form-control" name="areas" >{{ $eventos->areas }}</textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Categoría' }}</label>
	    	<select class="form-select" name="id_categoria" required="">
	    		<option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
	      	@foreach($categorias as $categori)
	      		<option value="{{ $categori->id }}">{{ $categori->categoria }}</option>
	      	@endforeach
	      </select>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Pérdida por riesgo (Valor contable)' }}</label>
	      	<input type="text" class="form-control" value="{{ $eventos->perdida_valor_contable }}" name="perdida_valor_contable" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Pérdida por riesgo (Valor de mercado)' }}</label>
	      	<input type="text" class="form-control" value="{{ $eventos->perdida_valor_mercado }}" name="perdida_valor_mercado" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Gastos asociados a la pérdida' }}</label>
	      	<input type="text" class="form-control" value="{{ $eventos->gastos }}" name="gastos" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Monto total recuperado' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->monto_total }}" name="monto_total" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Monto recuperado por cobertura de seguros' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->monto_recuperado }}" name="monto_recuperado" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Recuperación activo' }}</label>
			<select class="form-select" name="recuperacion_activo">
				@if($eventos->recuperacion_activo)
		      	<option value="{{ $eventos->recuperacion_activo }}">
		      		@if($eventos->recuperacion_activo == 1){{ 'Se sustituyó o reparó el activo afectado' }}
		      		@elseif($eventos->recuperacion_activo == 2){{ 'No se sustituyó o reparó el activo afectado' }}
		      		@elseif($eventos->recuperacion_activo == 3){{ 'No aplica' }}
		      		@endif
		      	</option>
		      	@else
		      	<option value="{{ null }}">== Elegir ==</option>
		      	<option value="{{ 1 }}">{{ 'Se sustituyó o reparó el activo afectado' }}</option>
		      	<option value="{{ 2 }}">{{ 'No se sustituyó o reparó el activo afectado' }}</option>
		      	<option value="{{ 3 }}">{{ 'No aplica' }}</option>
		      	@endif
		      </select>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Relación riesgo de crédito' }}</label>
			<select class="form-select" name="relacion_riesgo" required="">
				<option value="{{ $eventos->relacion_riesgo }}">
				@if( $eventos->relacion_riesgo == 1){{ 'Si tiene relación con riesgo de crédito' }}
		      	@elseif( $eventos->relacion_riesgo == 2){{ 'No tiene relación con riesgo de crédito' }}
		      	@endif
		      	</option>
		      	<option value="{{ 1 }}">{{ 'Si tiene relación con riesgo de crédito' }}</option>
	      		<option value="{{ 2 }}">{{ 'No tiene relación con riesgo de crédito' }}</option>
	      	</select>
	    </div>
	    <div class="col-12">
	 		@livewire('detalle-evento-critico', ['evento_critico' => $eventos->evento_critico, 'detalle_evento_critico' => $eventos->detalle_evento_critico])
	    </div>
	    <div class="">
	    	<label class="form-label">{{ 'Moneda y montos evento' }}</label>
	    	<div class="col-12 d-flex p-0">
		   		<input type="text" name="monto_evento" class="form-control" value="{{ $eventos->monto_evento }}">
			    <select class="form-select" name="moneda">
			    	@if(!is_null($eventos->moneda))
			    	<option value="{{ \App\Models\Moneda::find($eventos->moneda)->first()->id; }}">{{ \App\Models\Moneda::find($eventos->moneda)->first()->moneda; }}</option>
				    	@foreach($monedas as $moneda)
				      		<option value="{{ $moneda->id }}">{{ $moneda->moneda }}</option>
				     	@endforeach
			    	@else
			    	@foreach($monedas as $moneda)
			      		<option value="{{ $moneda->id }}">{{ $moneda->moneda }}</option>
			     	@endforeach
			     	@endif
			    </select>
			</div>
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Fecha Descubrimiento' }}</label>
	    	<div class="input-group">
	            <div class="input-group-prepend">
	              <span class="input-group-text" id="inputGroupPrepend2" >
	                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
	          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
	        </svg></span>
	            </div>
	             <input type="text" class="form-control datetime"  readonly="" style="background-color: white !important" value="{{$eventos->fecha_descubrimiento}}" name="fecha_descubrimiento" required="">
	          </div>
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Hora Descubrimiento' }}</label>
	    	<input type="time" class="form-control" id="reloj_hora_descubrimiento" required="" value="{{ $eventos->hora_descubrimiento }}" name="hora_descubrimiento">
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Fecha Inicio' }}</label>
	    	<div class="input-group">
	            <div class="input-group-prepend">
	              <span class="input-group-text" id="inputGroupPrepend2" >
	                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
	          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
	        </svg></span>
	            </div>
	             <input type="text" class="form-control datetime" readonly="" style="background-color: white !important" value="{{$eventos->fecha_inicio}}" name="fecha_inicio">
	          </div>
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Hora Inicio' }}</label>
	    	 <input type="time" class="form-control" name="hora_inicio" value="{{ $eventos->hora_inicio }}">
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Fecha Finalización' }}</label>
	    	<div class="input-group">
	            <div class="input-group-prepend">
	              <span class="input-group-text" id="inputGroupPrepend2" >
	                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
	          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
	        </svg></span>
	            </div>
	             <input type="text" class="form-control datetime"  readonly="" style="background-color: white !important" value="{{$eventos->fecha_final}}" name="fecha_final">
	          </div>
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Hora Finalización' }}</label>
	    	<input type="time" class="form-control" name="hora_final" value="{{ $eventos->hora_final }}">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Elaborador' }}</label>
	      	<textarea type="text" class="form-control" value=""  name="elaborador" >{{ $eventos->elaborador }}</textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Revisor' }}</label>
		      <textarea type="text" class="form-control" value=""  name="revisor">{{ $eventos->revisor }}</textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Aprobador' }}</label>
		      <textarea type="text" class="form-control" value="" name="aprobador">{{ $eventos->aprobador }}</textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Estado evento' }}</label>
	    	<select class="form-select" name="id_estado_evento" required="" >
	    		 <option value="{{ $estado_evento->id }}">{{ $estado_evento->nivel }}</option>
	      	@foreach($estado_eventos as $estado_event)
			    <option value="{{ $estado_event->id }}">{{ $estado_event->nivel }}</option>
			@endforeach
	      </select>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Detalle estado del evento' }}</label>
	      <textarea type="text" class="form-control" name="detalle_estado_evento" >{{ $eventos->detalle_estado_evento }}</textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código de Evento Relacionado' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->codigo_de_evento_relacionado }}" name="codigo_de_evento_relacionado" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Tipo Envío' }}</label>
	      <input type="text" class="form-control" value="{{ $eventos->tipo_envio }}" name="tipo_envio" >
	    </div>
	  </div>
	  <div class="mt-4">
	  	<button class="btn btn-primary" type="submit">{{ 'Actualizar' }}</button>
	  </div>
	</div>
</form>
</div>

<script>
	$(document).ready(function(){
        $(".datetime").datepicker({
            dateFormat: 'yy-mm-dd'
        });

        function hora(){
        	$hora = $('#reloj_hora_descubrimiento').val();
        	$('#hora_descubrimiento').val($hora);
        }

        $('#reloj_hora_descubrimiento').on("change", hora);

    });

</script>
@endsection