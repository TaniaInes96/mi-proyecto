<?php

namespace App\Http\Livewire;
use App\Models\Lista2;

use Livewire\Component;

class Lista2Recorrido extends Component
{


    public $selectedEvento = null, $selectedSubtipo = null, $selectedClase = null;
	public $eventoo = null, $subtipos = null, $clases = null;
    public $tipo_evento;
    public $click = 1;
    public $click2 = 1;

    public function render()
    {
        if(!is_null($this->tipo_evento)){
            $tipo_de_entrada = Lista2::where('id', $this->tipo_evento)->first();

        }else{
            $tipo_de_entrada = null;
        }
    	$eventos = Lista2::all();


        return view('livewire.lista2-recorrido', compact('eventos', 'tipo_de_entrada'));
    }

    public function updatedselectedEvento($evento_tipo_evento)
    {
        $this->click2 = 2;
        $this->click = 2;
    	$this->subtipos = null;
    	$this->clases = null;
    	if($evento_tipo_evento == null){
    		$this->subtipos = null;
    		$this->clases = null;
    	}else{
    		$this->subtipos = Lista2::where('tipo_evento', $evento_tipo_evento)->get();
    		$this->eventoo = $evento_tipo_evento;

    	}


    }

    public function updatedselectedSubtipo($subtipo_subtipo_evento)
    {
        $this->click = 2;
        $this->click2 = 2;
    	if($subtipo_subtipo_evento == null){
    		$this->subtipos = null;
    		$this->clases = null;
    	}
        if(!is_null($this->eventoo)){
    		$this->clases = Lista2::where('subtipo_evento', $subtipo_subtipo_evento)
    							->where('tipo_evento', $this->eventoo)
    							->get();
    	}else{
            $class = Lista2::where('id', $this->tipo_evento)->first();
            $this->clases = Lista2::where('subtipo_evento', $subtipo_subtipo_evento)
                                ->where('tipo_evento', $class->tipo_evento)
                                ->get();
            $this->subtipos = Lista2::where('tipo_evento', $class->tipo_evento)->get();
            $this->eventoo = $class->tipo_evento;

        }


    }
}
