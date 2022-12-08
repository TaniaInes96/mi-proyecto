@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Ver Canales' }}</h1>
    </div>
	<div class="container">
	  <div class="row g-4">
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código de Envío' }}</label>
	      	<input type="text" class="form-control" value="{{ $canales->codigo_de_envio }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Fecha de corte' }}</label>
	        <input type="text" class="form-control" value="{{ $canales->fecha_de_corte }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código del evento' }}</label>
	      	<input type="text" class="form-control" value="{{ $canales->codigo_de_evento }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Canal' }}</label>
	      	<input type="text" class="form-control" value="{{ $canal->canal }}" readonly="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Tipo de Envio' }}</label>
	      	<input type="text" class="form-control" value="{{ $canales->tipo_envio }}" readonly="">
	    </div>
	  <div class="mt-4">
	  	<a class="btn btn-primary" href="{{ route('canales.index') }}">{{ 'Volver' }}</a>
	  </div>
	</div>
</div>
@endsection