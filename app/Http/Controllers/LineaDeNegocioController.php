<?php

namespace App\Http\Controllers;

use App\Models\Linea_De_Negocio;
use App\Http\Requests\StoreLinea_De_NegocioRequest;
use App\Http\Requests\UpdateLinea_De_NegocioRequest;
use App\Models\Lista10;
use Barryvdh\DomPDF\Facade as PDF;

class LineaDeNegocioController extends Controller
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
        $linea_negocioss = Linea_De_Negocio::all();
         return view('lineas_d_n.index', compact('linea_negocioss'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('lineas_d_n.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLinea_De_NegocioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLinea_De_NegocioRequest $request)
    {
        //
        Linea_De_Negocio::create($request->all());
        return back()->with('info', 'Linea de Negocio registrada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Linea_De_Negocio  $linea_De_Negocio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $linea_negocios = Linea_De_Negocio::find($id)->first();
        $linea_negocio = Lista10::where('id', $linea_negocios->id_linea_negocio)->first();
        return view('lineas_d_n.show', compact('linea_negocios', 'linea_negocio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Linea_De_Negocio  $linea_De_Negocio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $linea_negocios = Linea_De_Negocio::find($id)->first();
        return view('lineas_d_n.edit', compact('linea_negocios' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLinea_De_NegocioRequest  $request
     * @param  \App\Models\Linea_De_Negocio  $linea_De_Negocio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLinea_De_NegocioRequest $request, $id)
    {
        //
        Linea_De_Negocio::find($id)->update($request->except('_token', '_method'));
        return back()->with('info', 'Linea de Negocio actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Linea_De_Negocio  $linea_De_Negocio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Linea_De_Negocio::find($id)->delete();
        return back();
    }

    public function createPDF($id)
    {
        //Recuperar todos los productos de la db
        $linea_negocios = Linea_De_Negocio::where('id', $id)->first();
        $linea_negocio = Lista10::where('id', $linea_negocios->id_linea_negocio)->first();
        $year = $linea_negocios->created_at->format('Y');
        $mes = $linea_negocios->created_at->format('m');
        $dia = $linea_negocios->created_at->format('d');
        $fecha = $year.$mes.$dia;
        $pdf = PDF::loadView('lineas_d_n.pdf', compact('linea_negocios', 'linea_negocio'));
        return $pdf->download('RO'.$fecha.'I.ICCAS.pdf');
    }
}
