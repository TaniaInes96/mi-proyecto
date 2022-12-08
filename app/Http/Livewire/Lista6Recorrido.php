<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lista6;

class Lista6Recorrido extends Component
{

	public $selectedOperacion = null, $selectedSubtipo = null;
	public $subtipos = null;
    public $id_operacion;

    public function render()
    {

        if(!is_null($this->id_operacion)){
            $operacions = Lista6::where('id', $this->id_operacion)->first();

        }else{
            $operacions = null;
        }
    	$operaciones = Lista6::all();
        return view('livewire.lista6-recorrido', compact('operaciones','operacions'));
    }

    public function updatedselectedOperacion($operacion_tipo_entidad)
    {
    	if($operacion_tipo_entidad == null){
    		$this->subtipos = null;
    	}else{
    		$this->subtipos = Lista6::where('tipo_entidad', $operacion_tipo_entidad)->get();
    	}

    }
}
