<div>
	<label class="form-label">{{ 'Evento crítico' }}</label>
	      <select wire:model="selectedEvento" class="form-select" name="evento_critico" required>
	      	@if(isset($evento_critico) && !is_null($evento_critico))
	      	@if( $evento_critico== 1)
	      	<option value="{{ $evento_critico }}">{{ 'Si es crítico' }}</option>
	      	<option value="{{ 2 }}">{{ 'No es crítico' }}</option>
		    @elseif( $evento_critico == 2)
		    <option value="{{ $evento_critico }}">{{ 'No es crítico' }}</option>
		    <option value="{{ 1 }}">{{ 'Si es crítico' }}</option>
			@endif
	      	@else
	      	<option value="{{ 1 }}">{{ 'Si es crítico' }}</option>
	      	<option value="{{ 2 }}">{{ 'No es crítico' }}</option>
	      	@endif
	      </select>
	@if(isset($detalle_evento_critico) && !is_null($detalle_evento_critico))
		@if($evento_critico == 1)
			<label class="form-label mt-4">{{ 'Detalle evento crítico' }}</label>
			@if(isset($detalle_evento_critico) && !is_null($detalle_evento_critico))
			<textarea type="text" class="form-control" name="detalle_evento_critico" value="">{{ $detalle_evento_critico }}</textarea>
			@else
			<textarea type="text" class="form-control" name="detalle_evento_critico"></textarea>
			@endif
			@else
			<textarea type="text" class="collapse" name="detalle_evento_critico"></textarea>
		@endif
	@else
	@if($evento == 1)
	   	<label class="form-label mt-4">{{ 'Detalle evento crítico' }}</label>
		<textarea type="text" class="form-control" name="detalle_evento_critico"></textarea>
	@endif
	@endif
</div>
