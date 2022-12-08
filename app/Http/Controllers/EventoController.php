<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Moneda;
use App\Http\Requests\StoreEventoRequest;
use App\Http\Requests\UpdateEventoRequest;
use App\Models\Lista1;
use App\Models\Lista3;
use App\Models\Lista8;
use App\Models\Lista11;
use Barryvdh\DomPDF\Facade as PDF;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin,super', ['only' => ['edit','update','destroy']]);
    }

    public function index()
    {
        //
        $eventos = Evento::all();
        return view('evento_r_o.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $monedas = Moneda::all();
        $factores_riesgos = Lista3::all();
        $categorias = Lista8::all();
        $estado_eventos = Lista11::all();
        return view('evento_r_o.create', compact('factores_riesgos','categorias','monedas','estado_eventos' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventoRequest $request)
    {
        //

        Evento::create($request->all());
        return back()->with('info', 'Evento registrado correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
        $eventos = Evento::find($evento)->first();
        $tipo_de_entrada = Lista1::find($eventos->id_tipo_de_entrada)->first();
        $factor_riesgo = Lista3::find($eventos->id_factor_de_riesgo)->first();
        if(!is_null($eventos->id_categoria) && !is_null($eventos->id_estado_evento))
        {
            $categoria = Lista8::find($eventos->id_categoria)->first();
            $estado_evento = Lista11::find($eventos->id_estado_evento)->first();
        }
        if(!isset($categoria) && !isset($estado_evento))
        {
            $categoria = null;
            $estado_evento = null;
        }
        return view('evento_r_o.show', compact('eventos','tipo_de_entrada','factor_riesgo','categoria','estado_evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
        $eventos = Evento::find($evento)->first();
        $tipo_de_entrada = Lista1::find($eventos->id_tipo_de_entrada)->first();
        $factor_riesgo = Lista3::find($eventos->id_factor_de_riesgo)->first();
        $categoria = Lista8::find($eventos->id_categoria)->first();
        $estado_evento = Lista11::find($eventos->id_estado_evento)->first();
        $monedas = Moneda::all();
        $factores_riesgos = Lista3::all();
        $estado_eventos = Lista11::all();
        $categorias = Lista8::all();
        return view('evento_r_o.edit', compact('eventos','tipo_de_entrada','factor_riesgo','categoria','estado_evento','monedas','factores_riesgos','estado_eventos','categorias' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventoRequest  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventoRequest $request, Evento $evento)
    {
        //
        Evento::find($evento->id)->update($request->except('_token', '_method'));
        return back()->with('info', 'Evento actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
        Evento::find($evento->id)->delete();
        return back();
    }

    public function createPDF($id)
    {
        //Recuperar todos los productos de la db


        $eventos = Evento::where('id', $id)->first();
        $tipo_de_entrada = Lista1::find($eventos->id_tipo_de_entrada)->first();
        $factor_riesgo = Lista3::find($eventos->id_factor_de_riesgo)->first();
        if(!is_null($eventos->id_categoria) && !is_null($eventos->id_estado_evento))
        {
            $categoria = Lista8::find($eventos->id_categoria)->first();
            $estado_evento = Lista11::find($eventos->id_estado_evento)->first();
        }
        $year = $eventos->created_at->format('Y');
        $mes = $eventos->created_at->format('m');
        $dia = $eventos->created_at->format('d');
        $fecha = $year.$mes.$dia;
        if(!isset($categoria) && !isset($estado_evento))
        {
            $categoria = null;
            $estado_evento = null;
        }
        $pdf = PDF::loadView('evento_r_o.pdf', compact('eventos','tipo_de_entrada','factor_riesgo','categoria','estado_evento'));
        return $pdf->download('RO'.$fecha.'A.ICCAS.pdf');
    }
}