<?php

namespace App\Http\Controllers;

use App\Models\Paf;
use App\Http\Requests\StorePafRequest;
use App\Http\Requests\UpdatePafRequest;
use Barryvdh\DomPDF\Facade as PDF;

class PafController extends Controller
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
        $pafs = Paf::all();
        return view('paf.index', compact('pafs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('paf.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePafRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePafRequest $request)
    {
        //
        Paf::create($request->all());
        return back()->with('info', 'Paf registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paf  $paf
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $paf = Paf::find($id)->first();
        return view('paf.show', compact('paf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paf  $paf
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paf = Paf::find($id)->first();
        return view('paf.edit', compact('paf' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePafRequest  $request
     * @param  \App\Models\Paf  $paf
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePafRequest $request, $id)
    {
        //
         Paf::find($id)->update($request->except('_token', '_method'));
        return back()->with('info', 'PAF actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paf  $paf
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Paf::find($id)->delete();
        return back();
    }

    public function createPDF($id)
    {
        //Recuperar todos los productos de la db
        $paf = Paf::where('id', $id)->first();
        $year = $paf->created_at->format('Y');
        $mes = $paf->created_at->format('m');
        $dia = $paf->created_at->format('d');
        $fecha = $year.$mes.$dia;
        $pdf = PDF::loadView('paf.pdf', compact('paf'));
        return $pdf->download('RO'.$fecha.'D.ICCAS.pdf');
    }
}
