<?php

namespace App\Http\Controllers;

use App\Models\Operacion;
use App\Http\Requests\StoreOperacionRequest;
use App\Http\Requests\UpdateOperacionRequest;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Lista6;

class OperacionController extends Controller
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
        $operacions = Operacion::all();
        return view('operacion.index', compact('operacions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('operacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOperacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOperacionRequest $request)
    {
        //
        Operacion::create($request->all());
        return back()->with('info', 'Operacion registrada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Operacion  $operacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $operacion = Operacion::find($id)->first();
        $operaci = Lista6::where('id', $operacion->id_operacion)->first();
        return view('operacion.show', compact('operacion', 'operaci'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operacion  $operacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $operacion = Operacion::find($id)->first();
        $operaci = Lista6::where('id', $operacion->id_operacion)->first();
        return view('operacion.edit', compact('operacion','operaci' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOperacionRequest  $request
     * @param  \App\Models\Operacion  $operacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOperacionRequest $request, $id)
    {
        //
        Operacion::find($id)->update($request->except('_token', '_method'));
        return back()->with('info', 'Operacion actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operacion  $operacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Operacion::find($id)->delete();
        return back();
    }

    public function createPDF($id)
    {
        //Recuperar todos los productos de la db
        $operacion = Operacion::where('id', $id)->first();
        $operaci = Lista6::where('id', $operacion->id_operacion)->first();
        $year = $operacion->created_at->format('Y');
        $mes = $operacion->created_at->format('m');
        $dia = $operacion->created_at->format('d');
        $fecha = $year.$mes.$dia;
        $pdf = PDF::loadView('operacion.pdf', compact('operacion', 'operaci'));
        return $pdf->download('RO'.$fecha.'G.ICCAS.pdf');
    }
}
