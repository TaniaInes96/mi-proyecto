<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DetalleEventoCritico extends Component
{
	public $selectedEvento = null;
	public $evento = 1;
    public $evento_critico, $detalle_evento_critico;

    public function render()
    {
        $evento_critico = $this->evento_critico;
        $detalle_evento_critico = $this->detalle_evento_critico;
        return view('livewire.detalle-evento-critico', compact('evento_critico','detalle_evento_critico'));
    }

    public function updatedselectedEvento($n)
    {

    	if($n == 2){
    		$this->evento = 2;
            $this->evento_critico = 2;
    	}else if($n == 1){
             $this->evento_critico = 1;
    		$this->evento = 1;
    	}
    }
}
