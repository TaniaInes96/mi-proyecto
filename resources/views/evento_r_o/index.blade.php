@extends('layouts.app')

@section('content')


<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Eventos de Riesgo Operativo' }}</h1>
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
            	@foreach($eventos as $evento)
                <tr>
                    <td>{{ $evento->codigo_de_envio }}</td>
                    <td>{{ $evento->fecha_de_corte }}</td>
                    <td>{{ $evento->codigo_de_evento }}</td>
                    <td>
                    	<a class="btn btn-sm btn-primary" href="{{ route('eventos.pdf', $evento->id) }}" target="_blanck">PDF</a>
                    	<a class="btn btn-sm btn-info" href="{{ route('evento.show', $evento->id) }}">Ver</a>
                        @if(auth()->user()->hasRoles(['admin','super']))
                    	<a class="btn btn-sm btn-warning" href="{{ route('evento.edit', $evento->id) }}">Editar</a>
                    	<form action="{{ route('evento.destroy', $evento->id) }}" method="POST" class="d-inline">
                    		@method('DELETE')
                    		@csrf
                    		<button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                    	</form>
                        @endif
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