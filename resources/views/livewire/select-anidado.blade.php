    <div class="row">
    	<div class="col-12">
    		<label>Tipo Entrada</label>
            @if(isset($tipo_de_entrada) && !is_null($tipo_de_entrada->subtipo_entidad))
                <select wire:model="selectedEntrada" class="form-select" required>
                <option value="{{ $tipo_de_entrada->id }}">{{ $tipo_de_entrada->tipo_entidad }}</option>
                @php $tipo_entidad = ''; @endphp
                @foreach($entradas as $entrada)
                    @if($entrada->tipo_entidad != $tipo_entidad)
                        <option value="{{ $entrada->tipo_entidad }}">{{ $entrada->tipo_entidad }}</option>
                    @php $tipo_entidad = $entrada->tipo_entidad; @endphp
                    @endif
                @endforeach
                </select>
            @else
    		<select wire:model="selectedEntrada" class="form-select" required>
    			<option value="">== Elegir ==</option>
    			@php $tipo_entidad = ''; @endphp
    			@foreach($entradas as $entrada)
    				@if($entrada->tipo_entidad != $tipo_entidad)
    					<option value="{{ $entrada->tipo_entidad }}">{{ $entrada->tipo_entidad }}</option>
    				@php $tipo_entidad = $entrada->tipo_entidad; @endphp
    				@endif
    			@endforeach
    		</select>
            @endif
    	</div>
        @if(isset($tipo_de_entrada) && !is_null($tipo_de_entrada->subtipo_entidad))
        @php $subtipos = \App\Models\Lista1::where('tipo_entidad', $tipo_de_entrada->tipo_entidad)->get(); @endphp
            <div class="col-12 mt-4">
                <label>Subtipo Entrada</label>
                <select wire:model="selectedSubtipo" class="form-select" name="id_tipo_de_entrada" required>
                    <option value="{{ $tipo_de_entrada->id }}">{{ $tipo_de_entrada->subtipo_entidad }}</option>
                    @foreach($subtipos as $subtipo)
                        @if($subtipo->subtipo_entidad != $tipo_de_entrada->subtipo_entidad)
                            <option value="{{ $subtipo->id }}">{{ $subtipo->subtipo_entidad }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
         @else
    	@if(!is_null($subtipos))
    	<div class="col-12 mt-4">
    		<label>Subtipo Entrada</label>
    		<select wire:model="selectedSubtipo" class="form-select" name="id_tipo_de_entrada" required>
    			@foreach($subtipos as $subtipo)
    					<option value="{{ $subtipo->id }}">{{ $subtipo->subtipo_entidad }}</option>
    			@endforeach
    		</select>
    	</div>
    	@endif
        @endif
    </div>

