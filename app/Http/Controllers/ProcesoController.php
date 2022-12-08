<?php

namespace App\Http\Controllers;

use App\Models\Proceso;
use App\Http\Requests\StoreProcesoRequest;
use App\Http\Requests\UpdateProcesoRequest;
use App\Models\Lista5;
use Barryvdh\DomPDF\Facade as PDF;

class ProcesoController extends Controller
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
        $procesos = Proceso::all();
        return view('proceso.index', compact('procesos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proceso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProcesoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProcesoRequest $request)
    {
        //
        Proceso::create($request->all());
        return back()->with('info', 'Proceso registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $procesos = Proceso::find($id)->first();
        $proceso = Lista5::where('id', $procesos->id_proceso)->first();
        return view('proceso.show', compact('procesos', 'proceso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $procesos = Proceso::find($id)->first();
        $proceso = Lista5::where('id', $procesos->id_proceso)->first();
        return view('proceso.edit', compact('procesos','proceso' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProcesoRequest  $request
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProcesoRequest $request, $id)
    {
        //
        Proceso::find($id)->update($request->except('_token', '_method'));
        return back()->with('info', 'Proceso actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Proceso::find($id)->delete();
        return back();
    }

    public function createPDF($id)
    {
        //Recuperar todos los productos de la db
        $procesos = Proceso::where('id', $id)->first();
        $proceso = Lista5::where('id', $procesos->id_proceso)->first();
        $year = $procesos->created_at->format('Y');
        $mes = $procesos->created_at->format('m');
        $dia = $procesos->created_at->format('d');
        $fecha = $year.$mes.$dia;
        $pdf = PDF::loadView('proceso.pdf', compact('procesos', 'proceso'));
        return $pdf->download('RO'.$fecha.'F.ICCAS.pdf');
    }
}
