@extends('layouts.app')

@section('content')


<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'PAF' }}</h1>
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
            	@foreach($pafs as $paf)
                <tr>
                    <td>{{ $paf->codigo_de_envio }}</td>
                    <td>{{ $paf->fecha_de_corte }}</td>
                    <td>{{ $paf->codigo_de_evento }}</td>
                    <td>
                    	<a class="btn btn-sm btn-primary" href="{{ route('paf.pdf', $paf->id) }}" target="_blanck">PDF</a>
                    	<a class="btn btn-sm btn-info" href="{{ route('paf.show', $paf->id) }}">Ver</a>
                    	<a class="btn btn-sm btn-warning" href="{{ route('paf.edit', $paf->id) }}">Editar</a>
                    	<form action="{{ route('paf.destroy', $paf->id) }}" method="POST" class="d-inline">
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