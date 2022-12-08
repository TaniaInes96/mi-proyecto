<?php

namespace App\Http\Controllers;

use App\Models\Canale;
use App\Http\Requests\StoreCanaleRequest;
use App\Http\Requests\UpdateCanaleRequest;
use App\Models\Lista4;
use Barryvdh\DomPDF\Facade as PDF;

class CanaleController extends Controller
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
        $canales = Canale::all();
        return view('canales.index', compact('canales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $canales = Lista4::all();
        return view('canales.create', compact('canales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCanaleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCanaleRequest $request)
    {
        //
        Canale::create($request->all());
        return back()->with('info', 'Canal registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Canale  $canale
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $canales = Canale::find($id)->first();
        $canal = Lista4::where('id', $canales->id_canal)->first();
        return view('canales.show', compact('canales', 'canal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Canale  $canale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $canales = Lista4::all();
        $canale = Canale::find($id)->first();
        $canal = Lista4::where('id', $canale->id_canal)->first();

        return view('canales.edit', compact('canale','canal','canales' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCanaleRequest  $request
     * @param  \App\Models\Canale  $canale
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCanaleRequest $request, $id)
    {
        //
        Canale::find($id)->update($request->except('_token', '_method'));
        return back()->with('info', 'Canal actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Canale  $canale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Canale::find($id)->delete();
        return back();
    }

    public function createPDF($id)
    {
        //Recuperar todos los productos de la db
        $canales = Canale::where('id', $id)->first();
        $canal = Lista4::where('id', $canales->id_canal)->first();
        $year = $canales->created_at->format('Y');
        $mes = $canales->created_at->format('m');
        $dia = $canales->created_at->format('d');
        $fecha = $year.$mes.$dia;
        $pdf = PDF::loadView('canales.pdf', compact('canales','canal'));
        return $pdf->download('RO'.$fecha.'E.ICCAS.pdf');
    }
}
