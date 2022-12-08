    <div class="row">
    	<div class="col-12">
    		<label>{{ 'Proceso' }}</label>
             @if(isset($id_proceso) && !is_null($id_proceso))
                <select wire:model="selectedProceso" class="form-select" required>
                <option value="{{ $proceso->proceso }}">{{ $proceso->proceso }}</option>
                @php $tipo_proceso = ''; @endphp
                @foreach($procesoss as $procesos)
                    @if($procesos->proceso != $tipo_proceso)
                        <option value="{{ $procesos->proceso }}">{{ $procesos->proceso }}</option>
                    @php $tipo_proceso = $procesos->proceso; @endphp
                    @endif
                @endforeach
            </select>
             @else
    		<select wire:model="selectedProceso" class="form-select" required>
    			<option value="">== Elegir ==</option>
    			@php $tipo_proceso = ''; @endphp
    			@foreach($procesoss as $proceso)
    				@if($proceso->proceso != $tipo_proceso)
    					<option value="{{ $proceso->proceso }}">{{ $proceso->proceso }}</option>
    				@php $tipo_proceso = $proceso->proceso; @endphp
    				@endif
    			@endforeach
    		</select>
            @endif
    	</div>

        @if(isset($id_proceso) && !is_null($id_proceso) && is_null($subprocesos))
            <div class="col-12  mt-4">
            <label>Subproceso</label>
            <select wire:model="selectedSubproceso" class="form-select" name="id_proceso" required>
                @php
                    $subprocesos = \App\Models\Lista5::where('proceso', $proceso->proceso)->get();
                @endphp
                <option value="{{ $proceso->id }}">{{ $proceso->subproceso }}</option>
                @foreach($subprocesos as $subproceso)
                        <option value="{{ $subproceso->id }}">{{ $subproceso->subproceso }}</option>
                @endforeach
            </select>
        </div>
        @else
    	@if(!is_null($subprocesos))
    	<div class="col-12  mt-4">
    		<label>Subproceso</label>
    		<select wire:model="selectedSubproceso" class="form-select" name="id_proceso" required>
    			@foreach($subprocesos as $subproceso)
    					<option value="{{ $subproceso->id }}">{{ $subproceso->subproceso }}</option>
    			@endforeach
    		</select>
    	</div>
    	@endif
        @endif

        @if(isset($proceso_critico) && !is_null($proceso_critico))
            <div class="col-12 mt-4">
            <label  class="form-label">{{ 'Proceso Critico' }}</label>
            <select class="form-select" wire:model="selectedProcesoCritico" name="proceso_critico">
                @if($proceso_critico == 1)
                <option value="{{ 1 }}">Si es crítico</option>
                <option value="{{ 2 }}">No es crítico</option>
                @else
                <option value="{{ 2 }}">No es crítico</option>
                <option value="{{ 1 }}">Si es crítico</option>
                @endif
            </select>
        </div>
        @else
    	<div class="col-12 mt-4">
	    	<label  class="form-label">{{ 'Proceso Critico' }}</label>
	      	<select class="form-select" wire:model="selectedProcesoCritico" name="proceso_critico">
	      		<option value="{{ 1 }}">Si es crítico</option>
	      		<option value="{{ 2 }}">No es crítico</option>
	      	</select>
	    </div>
        @endif
        @if(isset($detalle) && !is_null($detalle))
            <div class="col-12 mt-4">
            <label  class="form-label">{{ 'Detalle proceso crítico' }}</label>
          <textarea class="form-control" name="detalle">{{ $detalle }}</textarea>
        </div>
        @else
	    @if($evento == 1)
	     <div class="col-12 mt-4">
	    	<label  class="form-label">{{ 'Detalle proceso crítico' }}</label>
	      <textarea class="form-control" name="detalle"></textarea>
	    </div>
	    @endif
        @endif
    </div>




