@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Ver Operacion' }}</h1>
    </div>
	<div class="container">
	  <div class="row g-4">
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código de Envío' }}</label>
	      	<input type="text" class="form-control" value="{{ $operacion->codigo_de_envio }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Fecha de corte' }}</label>
	        <input type="text" class="form-control" value="{{ $operacion->fecha_de_corte }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código del evento' }}</label>
	      	<input type="text" class="form-control" value="{{ $operacion->codigo_de_evento }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Operacion' }}</label>
	      	<input type="text" class="form-control" value="{{ $operaci->operacion }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Tipo de Envio' }}</label>
	      	<input type="text" class="form-control" value="{{ $operacion->tipo_envio }}" readonly="">
	    </div>
	  <div class="mt-4">
	  	<a class="btn btn-primary" href="{{ route('operacion.index') }}">{{ 'Volver' }}</a>
	  </div>
	</div>
</div>
@endsection