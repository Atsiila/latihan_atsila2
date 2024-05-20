<?php

namespace App\Http\Controllers;

use App\Models\Tu;
use App\Http\Requests\StoreTuRequest;
use App\Http\Requests\UpdateTuRequest;

class TuController extends Controller
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
     * @param  \App\Http\Requests\StoreTuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tu  $tu
     * @return \Illuminate\Http\Response
     */
    public function show(Tu $tu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tu  $tu
     * @return \Illuminate\Http\Response
     */
    public function edit(Tu $tu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTuRequest  $request
     * @param  \App\Models\Tu  $tu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTuRequest $request, Tu $tu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tu  $tu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tu $tu)
    {
        //
    }
}
