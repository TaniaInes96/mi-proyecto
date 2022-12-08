<?php

namespace App\Http\Controllers;

use App\Models\Cuenta_Contable;
use App\Http\Requests\StoreCuenta_ContableRequest;
use App\Http\Requests\UpdateCuenta_ContableRequest;
use Barryvdh\DomPDF\Facade as PDF;

class CuentaContableController extends Controller
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
        $cuentas_contables = Cuenta_Contable::all();
        return view('cuentas_c.index', compact('cuentas_contables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cuentas_c.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCuenta_ContableRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCuenta_ContableRequest $request)
    {
        //
        Cuenta_Contable::create($request->all());
        return back()->with('info', 'Cuenta Contable registrada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuenta_Contable  $cuenta_Contable
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cuentas_contables = Cuenta_Contable::find($id)->first();
        return view('cuentas_c.show', compact('cuentas_contables'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuenta_Contable  $cuenta_Contable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cuentas_contables = Cuenta_Contable::find($id)->first();
        return view('cuentas_c.edit', compact('cuentas_contables' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCuenta_ContableRequest  $request
     * @param  \App\Models\Cuenta_Contable  $cuenta_Contable
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCuenta_ContableRequest $request, $id)
    {
        //
        Cuenta_Contable::find($id)->update($request->except('_token', '_method'));
        return back()->with('info', 'Cuenta Contable actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuenta_Contable  $cuenta_Contable
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Cuenta_Contable::find($id)->delete();
        return back();
    }

    public function createPDF($id)
    {
        //Recuperar todos los productos de la db
        $cuentas_contables = Cuenta_Contable::where('id', $id)->first();
        $year = $cuentas_contables->created_at->format('Y');
        $mes = $cuentas_contables->created_at->format('m');
        $dia = $cuentas_contables->created_at->format('d');
        $fecha = $year.$mes.$dia;
        $pdf = PDF::loadView('cuentas_c.pdf', compact('cuentas_contables'));
        return $pdf->download('RO'.$fecha.'B.ICCAS.pdf');
    }
}
