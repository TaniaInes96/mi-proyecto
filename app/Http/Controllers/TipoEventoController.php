<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Evento;
use App\Http\Requests\StoreTipo_EventoRequest;
use App\Http\Requests\UpdateTipo_EventoRequest;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Lista2;

class TipoEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth', 'roles:admin,super']);
    }

    public function index()
    {
        //
        $tipo_eventos = Tipo_Evento::all();
        return view('tipo_e.index', compact('tipo_eventos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipo_e.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTipo_EventoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipo_EventoRequest $request)
    {
        //
        Tipo_Evento::create($request->all());
        return back()->with('info', 'Tipo Evento registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_Evento  $tipo_Evento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tipo_eventos = Tipo_Evento::find($id)->first();
        $clase_evento = Lista2::where('id', $tipo_eventos->id)->first();
        return view('tipo_e.show', compact('tipo_eventos', 'clase_evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo_Evento  $tipo_Evento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tipo_eventos = Tipo_Evento::find($id)->first();
        return view('tipo_e.edit', compact('tipo_eventos' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipo_EventoRequest  $request
     * @param  \App\Models\Tipo_Evento  $tipo_Evento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipo_EventoRequest $request,  $id)
    {
        //
        Tipo_Evento::find($id)->update($request->except('_token', '_method'));
        return back()->with('info', 'Tipo Evento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_Evento  $tipo_Evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Tipo_Evento::find($id)->delete();
        return back();
    }

    public function createPDF($id)
    {
        //Recuperar todos los productos de la db
        $tipo_eventos = Tipo_Evento::where('id', $id)->first();
        $clase_evento = Lista2::where('id', $tipo_eventos->id)->first();
        $year = $tipo_eventos->created_at->format('Y');
        $mes = $tipo_eventos->created_at->format('m');
        $dia = $tipo_eventos->created_at->format('d');
        $fecha = $year.$mes.$dia;
        $pdf = PDF::loadView('tipo_e.pdf', compact('tipo_eventos', 'clase_evento'));
        return $pdf->download('RO'.$fecha.'C.ICCAS.pdf');
    }
}
