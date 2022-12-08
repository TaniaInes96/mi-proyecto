<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use App\Http\Requests\StoreLugarRequest;
use App\Http\Requests\UpdateLugarRequest;
use App\Models\Lista7;
use Barryvdh\DomPDF\Facade as PDF;

class LugarController extends Controller
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
        $lugars = Lugar::all();
         return view('lugar.index', compact('lugars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $lugares = Lista7::all();
        return view('lugar.create', compact('lugares'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLugarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLugarRequest $request)
    {
        //
        Lugar::create($request->all());
        return back()->with('info', 'Lugar registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $lugar = Lugar::find($id)->first();
        $luga = Lista7::where('id', $lugar->id_lugar)->first();
        return view('lugar.show', compact('lugar', 'luga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $lugar = Lugar::find($id)->first();
        $luga = Lista7::where('id', $lugar->id_lugar)->first();
        $lugares = Lista7::all();
        return view('lugar.edit', compact('lugar', 'luga', 'lugares' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLugarRequest  $request
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLugarRequest $request, $id)
    {
        //
        Lugar::find($id)->update($request->except('_token', '_method'));
        return back()->with('info', 'Lugar actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Lugar::find($id)->delete();
        return back();
    }

    public function createPDF($id)
    {
        //Recuperar todos los productos de la db
        $lugar = Lugar::where('id', $id)->first();
        $luga = Lista7::where('id', $lugar->id_lugar)->first();
        $year = $lugar->created_at->format('Y');
        $mes = $lugar->created_at->format('m');
        $dia = $lugar->created_at->format('d');
        $fecha = $year.$mes.$dia;
        $pdf = PDF::loadView('lugar.pdf', compact('lugar', 'luga'));
        return $pdf->download('RO'.$fecha.'H.ICCAS.pdf');
    }
}
