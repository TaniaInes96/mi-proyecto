@extends('layouts.app')

@section('content')


<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Linea de Negocios' }}</h1>
    </div>
 <div class="card shadow mb-4">
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Código de Envío</th>
                    <th>Fecha de corte</th>
                    <th>Código del evento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($linea_negocioss as $linea_negocios)
                <tr>
                    <td>{{ $linea_negocios->codigo_de_envio }}</td>
                    <td>{{ $linea_negocios->fecha_de_corte }}</td>
                    <td>{{ $linea_negocios->codigo_de_evento }}</td>
                    <td>
                    	<a class="btn btn-sm btn-primary" href="{{ route('linea-de-negocio.pdf', $linea_negocios->id) }}" target="_blanck">PDF</a>
                    	<a class="btn btn-sm btn-info" href="{{ route('linea-de-negocio.show', $linea_negocios->id) }}">Ver</a>
                    	<a class="btn btn-sm btn-warning" href="{{ route('linea-de-negocio.edit', $linea_negocios->id) }}">Editar</a>
                    	<form action="{{ route('linea-de-negocio.destroy', $linea_negocios->id) }}" method="POST" class="d-inline">
                    		@method('DELETE')
                    		@csrf
                    		<button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                    	</form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

@endsection