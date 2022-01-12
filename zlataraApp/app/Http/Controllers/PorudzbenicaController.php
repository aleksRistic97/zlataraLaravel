<?php

namespace App\Http\Controllers;

use App\Http\Resources\PorudzbenicaResource;
use App\Models\Porudzbenica;
use Illuminate\Http\Request;

class PorudzbenicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porudzbine=Porudzbenica::all();
       return PorudzbenicaResource::collection($porudzbine);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Porudzbenica  $porudzbenica
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new PorudzbenicaResource(  Porudzbenica::find($id)) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Porudzbenica  $porudzbenica
     * @return \Illuminate\Http\Response
     */
    public function edit(Porudzbenica $porudzbenica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Porudzbenica  $porudzbenica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Porudzbenica $porudzbenica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Porudzbenica  $porudzbenica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Porudzbenica $porudzbenica)
    {
        //
    }
}
