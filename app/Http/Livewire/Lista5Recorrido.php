<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lista5;

class Lista5Recorrido extends Component
{

	public $selectedProceso = null, $selectedSubproceso = null, $selectedProcesoCritico = null;
	public $evento = 1, $subprocesos = null;
    public $id_proceso, $proceso_critico, $detalle;

    public function render()
    {
        if(!is_null($this->id_proceso)){
            $proceso = Lista5::where('id', $this->id_proceso)->first();

        }else{
            $proceso = null;
        }
    	$procesoss = Lista5::all();
        return view('livewire.lista5-recorrido', compact('procesoss', 'proceso'));
    }

    public function updatedselectedProceso($proceso_proceso)
    {

    	if($proceso_proceso == null){
    		$this->subprocesos = null;
    	}else{
    		$this->subprocesos = Lista5::where('proceso', $proceso_proceso)->get();
    	}

    }

    public function updatedselectedProcesoCritico($n)
    {
    	if($n == 2){
    		$this->evento = 2;
    	}else{
    		$this->evento = 1;
    	}

    }
}
