<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lista10;

class Lista10Recorrido extends Component
{

	public $selectedEntidad = null, $selectedLineaNegocio = null, $selectedNivel = null;
	public $linea_negocios = null, $niveles = null, $evento = null, $click = null;
    public $id_linea_negocio;

    public function render()
    {
        if(!is_null($this->id_linea_negocio)){
            $linea = Lista10::where('id', $this->id_linea_negocio)->first();

        }else{
            $linea = null;
        }
    	$entidades = Lista10::all();
        return view('livewire.lista10-recorrido', compact('entidades', 'linea'));
    }

    public function updatedselectedEntidad($entidad_tipo_entidad)
    {
    	$this->linea_negocios = null;
    	$this->niveles = null;
    	if($entidad_tipo_entidad == null){
    		$this->linea_negocios = null;
    		$this->niveles = null;
    	}else{
    		$this->linea_negocios = Lista10::where('tipo_entidad', $entidad_tipo_entidad)->get();
    		$this->evento = $entidad_tipo_entidad;
            $this->click = 1;

    	}
    }

    public function updatedselectedLineaNegocio($linea_negocio_linea_negocio)
    {

    	if($linea_negocio_linea_negocio == null || $linea_negocio_linea_negocio == 'No existe pérdida monetaria o línea de negocio asociada al evento'){
    		$this->niveles = null;
    	}else{
            if($this->evento == null){
                $linea = Lista10::where('id', $this->id_linea_negocio)->first();
                 $this->niveles = Lista10::where('linea_negocio', $linea_negocio_linea_negocio)
                                ->where('tipo_entidad', $linea->tipo_entidad)
                                ->get();
                                $this->click = 1;
            }else{
                $this->niveles = Lista10::where('linea_negocio', $linea_negocio_linea_negocio)
                                ->where('tipo_entidad', $this->evento)
                                ->get();
            }
    	}

    }
}
