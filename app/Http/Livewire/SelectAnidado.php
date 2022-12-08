<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lista1;

class SelectAnidado extends Component
{

	public $selectedEntrada = null, $selectedSubtipo = null;
	public $subtipos = null;
    public $id_tipo_de_entrada;

    public function render()
    {
        if(!is_null($this->id_tipo_de_entrada)){
            $tipo_de_entrada = Lista1::where('id', $this->id_tipo_de_entrada)->first();
        }else{
            $tipo_de_entrada = null;
        }
        $entradas = Lista1::all();
        return view('livewire.select-anidado',compact('entradas','tipo_de_entrada'));
    }

    public function updatedselectedEntrada($entrada_tipo_entidad)
    {
    	if($entrada_tipo_entidad == null){
    		$this->subtipos = null;
    	}else{
    		$this->subtipos = Lista1::where('tipo_entidad', $entrada_tipo_entidad)->get();
    	}

    }
}
