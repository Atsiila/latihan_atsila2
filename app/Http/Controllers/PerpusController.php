<?php

namespace App\Http\Controllers;

use App\Models\Perpus;
use App\Http\Requests\StorePerpusRequest;
use App\Http\Requests\UpdatePerpusRequest;

class PerpusController extends Controller
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
     * @param  \App\Http\Requests\StorePerpusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerpusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function show(Perpus $perpus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function edit(Perpus $perpus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerpusRequest  $request
     * @param  \App\Models\Perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerpusRequest $request, Perpus $perpus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perpus $perpus)
    {
        //
    }
}
