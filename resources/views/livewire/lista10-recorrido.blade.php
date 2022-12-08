 <div class="row">
    	<div class="col-12">
    		<label>{{ 'Linea de Negocio - Tipo de Entidad' }}</label>
            @if(isset($id_linea_negocio) && !is_null($id_linea_negocio))
            <select wire:model="selectedEntidad" class="form-select" required>
                <option value="{{ $linea->tipo_entidad }}">{{ $linea->tipo_entidad }}</option>
                @php $tipo_entidad = ''; @endphp
                @foreach($entidades as $entidad)
                    @if($entidad->tipo_entidad != $tipo_entidad)
                        <option value="{{ $entidad->tipo_entidad }}">{{ $entidad->tipo_entidad }}</option>
                    @php $tipo_entidad = $entidad->tipo_entidad; @endphp
                    @endif
                @endforeach
            </select>
            @else
    		<select wire:model="selectedEntidad" class="form-select" required>
    			<option value="">== Elegir ==</option>
    			@php $tipo_entidad = ''; @endphp
    			@foreach($entidades as $entidad)
    				@if($entidad->tipo_entidad != $tipo_entidad)
    					<option value="{{ $entidad->tipo_entidad }}">{{ $entidad->tipo_entidad }}</option>
    				@php $tipo_entidad = $entidad->tipo_entidad; @endphp
    				@endif
    			@endforeach
    		</select>
            @endif
    	</div>

        @if(isset($id_linea_negocio) && !is_null($id_linea_negocio) && is_null($linea_negocios))
        <div class="col-12 mt-4">
            <label>{{ 'Linea de Negocio' }}</label>
            <select wire:model="selectedLineaNegocio" class="form-select" required>
                <option value="{{ $linea->linea_negocio }}">{{ $linea->linea_negocio }}</option>
                @php
                $lineaNegocio = '';
                $linea_negocios = \App\Models\Lista10::where('tipo_entidad', $linea->tipo_entidad)->get();
                 @endphp
                @foreach($linea_negocios as $linea_negocio)
                    @if($linea_negocio->linea_negocio != $lineaNegocio)
                        <option value="{{ $linea_negocio->linea_negocio }}">{{ $linea_negocio->linea_negocio }}</option>
                    @php $lineaNegocio = $linea_negocio->linea_negocio; @endphp
                    @endif
                @endforeach
            </select>
        </div>
        @else
    	@if(!is_null($linea_negocios))
    	<div class="col-12 mt-4">
    		<label>{{ 'Linea de Negocio' }}</label>
    		<select wire:model="selectedLineaNegocio" class="form-select" required>
    			<option value="">== Elegir ==</option>
    			@php $lineaNegocio = ''; @endphp
    			@foreach($linea_negocios as $linea_negocio)
    				@if($linea_negocio->linea_negocio != $lineaNegocio)
    					<option value="{{ $linea_negocio->linea_negocio }}">{{ $linea_negocio->linea_negocio }}</option>
    				@php $lineaNegocio = $linea_negocio->linea_negocio; @endphp
    				@endif
    			@endforeach
    		</select>
    	</div>
        @endif
    	@endif

        @if(isset($id_linea_negocio) && !is_null($id_linea_negocio) && is_null($click))
        <div class="col-12 mt-4">
            <label>{{ 'Nivel 2' }}</label>
            <select wire:model="selectedNivel" class="form-select" name="id_linea_negocio" required>
                <option value="{{ $linea->id }}">{{ $linea->nivel }}</option>
                @php
                $niveles = \App\Models\Lista10::where('linea_negocio', $linea->linea_negocio)
                                ->where('tipo_entidad', $linea->tipo_entidad)
                                ->get();
                @endphp
                @foreach($niveles as $nivel)
                        <option value="{{ $nivel->id }}">{{ $nivel->nivel }}</option>
                @endforeach
            </select>
        </div>
        @else
            <input type="text" name="id_linea_negocio" class="collapse" value="{{ 99 }}">

    	@if(!is_null($niveles))
    	<div class="col-12 mt-4">
    		<label>{{ 'Nivel 2' }}</label>
    		<select wire:model="selectedNivel" class="form-select" name="id_linea_negocio" required>
    			<option value="">== Elegir ==</option>
    			@foreach($niveles as $nivel)
    					<option value="{{ $nivel->id }}">{{ $nivel->nivel }}</option>
    			@endforeach
    		</select>
    	</div>
    	@else
    		<input type="text" name="id_linea_negocio" class="collapse" value="{{ 99 }}">
    	@endif
        @endif

    </div>


