@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Cuentas Contables' }}</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    @if(session()->has('info'))
    <div>
    	<h3>{{ session('info') }}</h3>
    </div>
    @endif
<form action="{{ route('cuenta-contable.update', $cuentas_contables->id) }}" method="POST">
	@method('PUT')
	@csrf
	<div class="container">
	  <div class="row g-4">
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código de Envío' }}</label>
	      <input type="text" class="form-control" value="{{ $cuentas_contables->codigo_de_envio }}" name="codigo_de_envio" >
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
	             <input type="text" class="form-control datetime" readonly="" style="background-color: white !important" value="{{$cuentas_contables->fecha_de_corte}}" name="fecha_de_corte" required="" >
	          </div>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Código del evento' }}</label>
	      <input type="text" class="form-control" value="{{ $cuentas_contables->codigo_de_evento }}" name="codigo_de_evento" >
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Cuentas Contables' }}</label>
	      <input type="text" class="form-control" name="cuenta_contable" value="{{ $cuentas_contables->cuenta_contable }}" required="">
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Fecha de registro de la cuenta contable' }}</label>
	        <div class="input-group">
	            <div class="input-group-prepend">
	              <span class="input-group-text" id="inputGroupPrepend2" >
	                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
	          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
	        </svg></span>
	            </div>
	             <input type="text" class="form-control datetime" readonly="" style="background-color: white !important" value="{{ $cuentas_contables->fecha_registro }}" name="fecha_registro">
	          </div>
	    </div>
	    <div class="col-12">
	    	<label class="form-label">{{ 'Tipo Envío' }}</label>
	      <input type="text" class="form-control" name="tipo_envio" value="{{ $cuentas_contables->tipo_envio }}">
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
    });


</script>
@endsection