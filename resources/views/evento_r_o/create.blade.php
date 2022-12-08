@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Registro Evento Riesgo Operativo' }}</h1>
    </div>
    @if(session()->has('info'))
    <div>
    	<h3>{{ session('info') }}</h3>
    </div>
    @endif
<form action="{{ route('evento.store') }}" method="POST">
	@csrf
	<div class="container">
	  <div class="row g-4">
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código de Envío' }}</label>
	      	<input type="text" class="form-control" name="codigo_de_envio" required="" value="{{ 'ICCAS' }}">
	      	{{ $errors->first('codigo_de_envio') }}
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
	             <input type="text" class="form-control datetime" readonly="" style="background-color: white !important" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}" name="fecha_de_corte" required="" >
	          </div>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código del evento' }}</label>
	      	<input type="text" class="form-control" name="codigo_de_evento" required="" value="{{ old('codigo_de_evento') }}">
	      	{!! $errors->first('codigo_de_evento', '<span class=error>:message</span>') !!}
	    </div>
	    <div class="col-12">
	    	@livewire('select-anidado', ['id_tipo_de_entrada' => null])
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Descripción resumida del evento' }}</label>
	      <textarea class="form-control" name="descripcion" required="" value="{{ old('descripcion') }}"></textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Factor de riesgo' }}</label>
	      <select class="form-select" name="id_factor_de_riesgo" required=""  value="{{ old('id_factor_de_riesgo') }}">
	      	@foreach($factores_riesgos as $factor_riesgo)
	      		<option value="{{ $factor_riesgo->id }}">{{ $factor_riesgo->descripcion }}</option>
	      	@endforeach
	      </select>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Cargo(s) involucrado(s)' }}</label>
	      	<input type="text" class="form-control" name="cargos" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Área(s) involucrada(s)' }}</label>
	      <input type="text" class="form-control" name="areas" >
	    </div>
	    @if(auth()->user()->hasRoles(['admin','super']))
	    <div class="col-12">
	    	<label class="form-label">{{ 'Categoría' }}</label>
	      <select class="form-select" name="id_categoria" required="" value="{{ old('id_categoria') }}">
	      	@foreach($categorias as $categoria)
	      		<option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
	      	@endforeach
	      </select>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Pérdida por riesgo (Valor contable)' }}</label>
	      	<input type="text" class="form-control" name="perdida_valor_contable" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Pérdida por riesgo (Valor de mercado)' }}</label>
	      	<input type="text" class="form-control" name="perdida_valor_mercado" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Gastos asociados a la pérdida' }}</label>
	      	<input type="text" class="form-control" name="gastos" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Monto total recuperado' }}</label>
	      <input type="text" class="form-control" name="monto_total" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Monto recuperado por cobertura de seguros' }}</label>
	      <input type="text" class="form-control" name="monto_recuperado" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Recuperación activo' }}</label>
	      <select class="form-select" name="recuperacion_activo">
	      	<option value="{{ null }}">== Elegir ==</option>
	      	<option value="{{ 1 }}">{{ 'Se sustituyó o reparó el activo afectado' }}</option>
	      	<option value="{{ 2 }}">{{ 'No se sustituyó o reparó el activo afectado' }}</option>
	      	<option value="{{ 3 }}">{{ 'No aplica' }}</option>
	      </select>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Relación riesgo de crédito' }}</label>
	      <select class="form-select" name="relacion_riesgo" required="" value="{{ old('relacion_riesgo') }}">
	      	<option value="{{ 1 }}">{{ 'Si tiene relación con riesgo de crédito' }}</option>
	      	<option value="{{ 2 }}">{{ 'No tiene relación con riesgo de crédito' }}</option>
	      </select>
	    </div>
	    @endif
	    <div class="col-12">
	    	@livewire('detalle-evento-critico')
	    </div>
	    @if(auth()->user()->hasRoles(['admin','super']))
	    <div class="">
	    	<label class="form-label">{{ 'Moneda y montos evento' }}</label>
	    	<div class="col-12 d-flex p-0">
		   		<input type="text" name="monto_evento" class="form-control">
			    <select class="form-select" name="moneda">
			    	@foreach($monedas as $moneda)
			      		<option value="{{ $moneda->id }}">{{ $moneda->moneda }}</option>
			     	@endforeach
			    </select>
			</div>
	    </div>
	    @endif
	    <div class="col-6">
	    	<label class="form-label">{{ 'Fecha Descubrimiento' }}</label>
	      <div class="input-group">
	            <div class="input-group-prepend">
	              <span class="input-group-text" id="inputGroupPrepend2" >
	                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
	          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
	        </svg></span>
	            </div>
	             <input type="text" class="form-control datetime"  readonly="" style="background-color: white !important" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}" name="fecha_descubrimiento" required="">
	          </div>
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Hora Descubrimiento' }}</label>
	      	<input type="time" class="form-control" id="reloj_hora_descubrimiento" required="" >
	      	<input class="collapse" name="hora_descubrimiento" id="hora_descubrimiento">
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
	             <input type="text" class="form-control datetime" readonly="" style="background-color: white !important" name="fecha_inicio">
	          </div>
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Hora Inicio' }}</label>
	      <input type="time" class="form-control" name="hora_inicio" >
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
	             <input type="text" class="form-control datetime"  readonly="" style="background-color: white !important" name="fecha_final">
	          </div>
	    </div>
	    <div class="col-6">
	    	<label class="form-label">{{ 'Hora Finalización' }}</label>
	      <input type="time" class="form-control" name="hora_final" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Elaborador' }}</label>
	      	<div class="input-group mb-3">
			  <span class="input-group-text">{{ 'Nombre' }}</span>
			  <input type="text" class="form-control" name="nombre_elaborador" id="nombre_elaborador" required="" value="{{ old('nombre_elaborador') }}">
			</div>
			<div class="input-group mb-3">
			  <span class="input-group-text">{{ 'Cargo' }}</span>
			  <input type="text" class="form-control" name="cargo_elaborador" id="cargo_elaborador" required="" value="{{ old('cargo_elaborador') }}">
			</div>
			<div class="input-group">
			  <span class="input-group-text">{{ 'Descripcion' }}</span>
			  <textarea class="form-control" name="descripcion_elaborador" id="descripcion_elaborador" required="" value="{{ old('descripcion_elaborador') }}"></textarea>
			</div>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Revisor' }}</label>
		      <div class="input-group mb-3">
				  <span class="input-group-text">{{ 'Nombre' }}</span>
				  <input type="text" class="form-control" name="nombre_revisor" id="nombre_revisor" value="{{ old('nombre_revisor') }}">
				</div>
				<div class="input-group mb-3">
				  <span class="input-group-text">{{ 'Cargo' }}</span>
				  <input type="text" class="form-control" name="cargo_revisor" id="cargo_revisor" value="{{ old('cargo_revisor') }}">
				</div>
				<div class="input-group">
				  <span class="input-group-text">{{ 'Descripcion' }}</span>
				  <textarea class="form-control" name="descripcion_revisor" id="descripcion_revisor" value="{{ old('descripcion_revisor') }}"></textarea>
				</div>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Aprobador' }}</label>
		      <div class="input-group mb-3">
				  <span class="input-group-text">{{ 'Nombre' }}</span>
				  <input type="text" class="form-control" name="nombre_aprobador" required="" value="{{ old('nombre_aprobador') }}" id="nombre_aprobador">
				</div>
				<div class="input-group mb-3">
				  <span class="input-group-text">{{ 'Cargo' }}</span>
				  <input type="text" class="form-control" name="cargo_aprobador" required="" value="{{ old('cargo_aprobador') }}" id="cargo_aprobador">
				</div>
				<div class="input-group">
				  <span class="input-group-text">{{ 'Descripcion' }}</span>
				  <textarea class="form-control" name="descripcion_aprobador" required="" value="{{ old('descripcion_aprobador') }}" id="descripcion_aprobador"></textarea>
				</div>
	    </div>
	    @if(auth()->user()->hasRoles(['admin','super']))
	    <div class="col-12">
	    	<label class="form-label">{{ 'Estado evento' }}</label>
	      <select class="form-select" name="id_estado_evento" required="" value="{{ old('id_estado_evento') }}">
	      	@foreach($estado_eventos as $estado_evento)
			    <option value="{{ $estado_evento->id }}">{{ $estado_evento->nivel }}</option>
			@endforeach
	      </select>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Detalle estado del evento' }}</label>
	      <textarea class="form-control" name="detalle_estado_evento" required="" value="{{ old('detalle_estado_evento') }}"></textarea>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código de Evento Relacionado' }}</label>
	      <input type="text" class="form-control" name="codigo_de_evento_relacionado" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Tipo Envío' }}</label>
	      <input type="text" class="form-control" name="tipo_envio" >
	    </div>
	    @endif
	  </div>
	  <div class="mt-4">
	  	<input name="elaborador" id="elaborador" class="collapse">
	  	<input name="revisor" id="revisor" class="collapse">
	  	<input name="aprobador" id="aprobador" class="collapse">
	  	<button class="btn btn-primary" type="submit" id="enviar">{{ 'Enviar' }}</button>
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

        function enviar(){
        	$elaborador = 'Nombre: ' + $('#nombre_elaborador').val() +' \nCargo: '+ $('#cargo_elaborador').val() +' \nDescripcion: '+ $('#descripcion_elaborador').val();
        	$revisor = 'Nombre: ' + $('#nombre_revisor').val() +' \nCargo: '+ $('#cargo_revisor').val() +' \nDescripcion: '+ $('#descripcion_revisor').val();
        	$aprobador = 'Nombre: ' + $('#nombre_aprobador').val() +' \nCargo: '+ $('#cargo_aprobador').val() +' \nDescripcion: '+ $('#descripcion_aprobador').val();
        	$('#elaborador').val($elaborador);
        	$('#revisor').val($revisor);
        	$('#aprobador').val($aprobador);
        }

        $('#enviar').on("click", enviar);
    });

</script>
@endsection