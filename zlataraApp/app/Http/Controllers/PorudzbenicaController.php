<?php

namespace App\Http\Controllers;

use App\Http\Resources\PorudzbenicaResource;
use App\Models\Porudzbenica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
       
        
        $validator = Validator::make($request->all(), [
            'adresaDostave' => 'required|string|max:50',
            'vreme' => 'required',
            'nakit_id' => 'required', 
            'user_id' => 'required'
             
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $p = Porudzbenica::create([
            'adresaDostave' => $request->adresaDostave, 
            'vreme' => $request->vreme, 
            'nakit_id' => $request->nakit_id,
            'user_id' => $request->user_id
        ]);
        $p->save();
        return response()->json(['Porudzbenica kreirana!', new PorudzbenicaResource($p)]);




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
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'adresaDostave' => 'required|string|max:50',
            'vreme' => 'required',
            'nakit_id' => 'required', 
            'user_id' => 'required'
             
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $p = Porudzbenica::find($id);
        if($p){
            $p->adresaDostave = $request->adresaDostave;
            $p->vreme = $request->vreme;
            $p->nakit_id = $request->nakit_id;
            $p->user_id = $request->user_id;

            $p->save();
            return response()->json(['Porudzbenica azurirana!', new PorudzbenicaResource($p)]);
        }else{
            return response()->json('neuspesno azuriranje!');
        }
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Porudzbenica  $porudzbenica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Porudzbenica::find($id);

        if($p){
            $p->delete();
            return response()->json(['Uspesno obrisano',new PorudzbenicaResource($p)]);
        }else{
            return response()->json('Trazeni objekat ne postoji u bazi');
        }

    }
}
