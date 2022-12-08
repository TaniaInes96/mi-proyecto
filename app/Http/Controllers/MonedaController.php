<?php

namespace App\Http\Controllers;

use App\Models\Moneda;
use App\Http\Requests\StoreMonedaRequest;
use App\Http\Requests\UpdateMonedaRequest;

class MonedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMonedaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMonedaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moneda  $moneda
     * @return \Illuminate\Http\Response
     */
    public function show(Moneda $moneda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Moneda  $moneda
     * @return \Illuminate\Http\Response
     */
    public function edit(Moneda $moneda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMonedaRequest  $request
     * @param  \App\Models\Moneda  $moneda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMonedaRequest $request, Moneda $moneda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moneda  $moneda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moneda $moneda)
    {
        //
    }
}
