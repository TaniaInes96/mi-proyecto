<div class="row">
    	<div class="col-12">
    		<label>Tipo de Evento</label>
            <select wire:model="selectedEvento" class="form-select" required>
            @if(isset($tipo_de_entrada) && !is_null($tipo_de_entrada->tipo_evento) && $click == 1)
                <option value="{{ $tipo_de_entrada->tipo_evento }}">{{ $tipo_de_entrada->tipo_evento }}</option>
                @php $tipo_eventos = ''; @endphp
                @foreach($eventos as $evento)
                    @if($evento->tipo_evento != $tipo_eventos)
                    @if($evento->tipo_evento != $tipo_de_entrada->tipo_evento)
                        <option value="{{ $evento->tipo_evento }}">{{ $evento->tipo_evento }}</option>
                    @endif
                    @php $tipo_eventos = $evento->tipo_evento; @endphp
                    @endif
                @endforeach
            @else
                @if($click2 == 2 && isset($tipo_de_entrada))
                    <option value="{{ $eventoo }}">{{ $eventoo }}</option>
                @else
                <option value="">== Elegir ==</option>
                @endif
                @php $tipo_evento = ''; @endphp
                @foreach($eventos as $evento)
                    @if($evento->tipo_evento != $tipo_evento)

                        <option value="{{ $evento->tipo_evento }}">{{ $evento->tipo_evento }}</option>

                    @php $tipo_evento = $evento->tipo_evento; @endphp
                    @endif
                @endforeach
          @endif
            </select>
    	</div>
        @if(isset($tipo_de_entrada) && !is_null($tipo_de_entrada->subtipo_evento) && $click == 1)
            <div class="col-12 mt-4">
            <label>Subtipo de Evento</label>
            <select wire:model="selectedSubtipo" class="form-select" required>
                <option value="{{ $tipo_de_entrada->subtipo_evento }}">{{ $tipo_de_entrada->subtipo_evento }}</option>
                @php
                $subtipoEventos = '';
                $subtipos = \App\Models\Lista2::where('tipo_evento', $tipo_de_entrada->tipo_evento)->get();
                @endphp
                @foreach($subtipos as $subtipo)
                    @if($subtipo->subtipo_evento != $subtipoEventos)
                        @if($subtipo->subtipo_evento != $tipo_de_entrada->subtipo_evento)
                        <option value="{{ $subtipo->subtipo_evento }}">{{ $subtipo->subtipo_evento }}</option>
                        @endif
                    @php $subtipoEventos = $subtipo->subtipo_evento; @endphp
                    @endif
                @endforeach
            </select>
            </div>
        @else
    	@if(!is_null($subtipos))
    	<div class="col-12 mt-4">
    		<label>Subtipo de Evento</label>
    		<select wire:model="selectedSubtipo" class="form-select" required>
    			<option value="">== Elegir ==</option>
    			@php $subtipoEventos = ''; @endphp
    			@foreach($subtipos as $subtipo)
    				@if($subtipo->subtipo_evento != $subtipoEventos)
    					<option value="{{ $subtipo->subtipo_evento }}">{{ $subtipo->subtipo_evento }}</option>
    				@php $subtipoEventos = $subtipo->subtipo_evento; @endphp
    				@endif
    			@endforeach
    		</select>
    	</div>
    	@endif
        @endif
        @if(isset($tipo_de_entrada) && !is_null($tipo_de_entrada->clase_evento) && $click == 1)
            <div class="col-12 mt-4">
            <label>Clase de Evento</label>
            @php
            $clases = \App\Models\Lista2::where('subtipo_evento', $tipo_de_entrada->subtipo_evento)
                                ->where('tipo_evento', $tipo_de_entrada->tipo_evento)
                                ->get();
            @endphp
            <select wire:model="selectedClase" class="form-select" name="id_tipo_evento" required>
                <option value="{{ $tipo_de_entrada->id }}">{{ $tipo_de_entrada->clase_evento }}</option>
                @foreach($clases as $clase)
                        <option value="{{ $clase->id }}">{{ $clase->clase_evento }}</option>
                @endforeach
            </select>
        </div>
        @else
    	@if(!is_null($clases))
    	<div class="col-12 mt-4">
    		<label>Clase de Evento</label>
    		<select wire:model="selectedClase" class="form-select" name="id_tipo_evento" required>
    			<option value="">== Elegir ==</option>
    			@foreach($clases as $clase)
    					<option value="{{ $clase->id }}">{{ $clase->clase_evento }}</option>
    			@endforeach
    		</select>
    	</div>
    	@endif
        @endif
    </div>

