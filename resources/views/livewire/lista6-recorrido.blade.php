    <div class="row">
    	<div class="col-12">
    		<label>{{ 'Operacion' }}</label>
             @if(isset($id_operacion) && !is_null($id_operacion))
             <select wire:model="selectedOperacion" class="form-select" required>
               <option value="{{ $operacions->operacion }}">{{ $operacions->tipo_entidad }}</option>
                @php $tipo_operacion = ''; @endphp
                @foreach($operaciones as $operacion)
                    @if($operacion->tipo_entidad != $tipo_operacion)
                        <option value="{{ $operacion->tipo_entidad }}">{{ $operacion->tipo_entidad }}</option>
                    @php $tipo_operacion = $operacion->tipo_entidad; @endphp
                    @endif
                @endforeach
            </select>
             @else
    		<select wire:model="selectedOperacion" class="form-select" required>
    			<option value="">== Elegir ==</option>
    			@php $tipo_operacion = ''; @endphp
    			@foreach($operaciones as $operacion)
    				@if($operacion->tipo_entidad != $tipo_operacion)
    					<option value="{{ $operacion->tipo_entidad }}">{{ $operacion->tipo_entidad }}</option>
    				@php $tipo_operacion = $operacion->tipo_entidad; @endphp
    				@endif
    			@endforeach
    		</select>
            @endif
    	</div>

         @if(isset($id_operacion) && !is_null($id_operacion) && is_null($subtipos))
         <div class="col-12 mt-4">
            <label>Subtipo operacion</label>
                @php
                    $subtipos = \App\Models\Lista6::where('tipo_entidad', $operacions->tipo_entidad)->get();
                @endphp
            <select wire:model="selectedSubtipo" class="form-select" name="id_operacion" required>
                <option value="{{ $operacions->id }}">({{ $operacions->cod }}) {{ $operacions->operacion }}</option>
                @foreach($subtipos as $subtipo)
                        <option value="{{ $subtipo->id }}">({{ $subtipo->cod }}) {{ $subtipo->operacion }}</option>
                @endforeach
            </select>
        </div>


         @else
    	@if(!is_null($subtipos))
    	<div class="col-12 mt-4">
    		<label>Subtipo operacion</label>
    		<select wire:model="selectedSubtipo" class="form-select" name="id_operacion" required>
    			@foreach($subtipos as $subtipo)
    					<option value="{{ $subtipo->id }}">({{ $subtipo->cod }}) {{ $subtipo->operacion }}</option>
    			@endforeach
    		</select>
    	</div>
    	@endif
        @endif
    </div>
