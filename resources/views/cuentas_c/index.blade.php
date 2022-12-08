@extends('layouts.app')

@section('content')


<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Cuentas Contables' }}</h1>
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
            	@foreach($cuentas_contables as $cuentas_contable)
                <tr>
                    <td>{{ $cuentas_contable->codigo_de_envio }}</td>
                    <td>{{ $cuentas_contable->fecha_de_corte }}</td>
                    <td>{{ $cuentas_contable->codigo_de_evento }}</td>
                    <td>
                    	<a class="btn btn-sm btn-primary" href="{{ route('cuenta-contable.pdf', $cuentas_contable->id) }}" target="_blanck">PDF</a>
                    	<a class="btn btn-sm btn-info" href="{{ route('cuenta-contable.show', $cuentas_contable->id) }}">Ver</a>
                    	<a class="btn btn-sm btn-warning" href="{{ route('cuenta-contable.edit', $cuentas_contable->id) }}">Editar</a>
                    	<form action="{{ route('cuenta-contable.destroy', $cuentas_contable->id) }}" method="POST" class="d-inline">
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