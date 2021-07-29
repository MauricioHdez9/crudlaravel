<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contrato;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratos = Contrato::all();
        return view ('pig/contratos/index')->with('contratos',$contratos);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return  view ('pig.contratos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $contratos = new Contrato();
        $contratos-> razon     = $request->get('razon');
        $contratos-> alias     = $request->get('alias');
        $contratos-> gp        = $request->get('gp');
        $contratos-> ncliente  = $request->get('ncliente');
        $contratos-> sr        = $request->get('sr');
        $contratos-> escliente = $request->get('escliente');
        $contratos-> mtc       = $request->get('mtc');
        $contratos-> ncon      = $request->get('ncon');
        $contratos-> ffc       = $request->get('ffc');
        $contratos-> fic       = $request->get('fic');
        $contratos-> tp        = $request->get('tp');
        $contratos-> mc        = $request->get('mc');
        $contratos-> sai       = $request->get('sai');
        $contratos-> ff        = $request->get('ff');
        $contratos-> pp        = $request->get('pp');
        $contratos-> linkc     = $request->get('linkc');
        $contratos-> linkca    = $request->get('linkca');
        $contratos-> ra        = $request->get('ra');
        $contratos-> cofe      = $request->get('cofe');
        $contratos-> ca        = $request->get('ca');
        $contratos-> prog      = $request->get('prog');
        $contratos-> antiso    = $request->get('antiso');
        $contratos-> codicon   = $request->get('codicon');
        $contratos-> otro      = $request->get('otro');
        $contratos-> duco      = $request->get('duco');
        $contratos-> feterco   = $request->get('feterco');
        $contratos-> ajprein   = $request->get('ajprein');
        $contratos-> feajuin   = $request->get('feajuin');
        $contratos-> perajin   = $request->get('perajin');
        $contratos-> ajpreprod = $request->get('ajpreprod');
        $contratos-> fepajprod = $request->get('fepajprod');
        $contratos-> peajprod  = $request->get('peajprod');
        $contratos-> ajpreco   = $request->get('ajpreco');
        $contratos-> fepajpre  = $request->get('fepajpre');
        $contratos-> perajpre  = $request->get('perajpre');
        $contratos-> kam       = $request->get('kam');
        $contratos-> kad       = $request->get('kad');
        $contratos-> cg        = $request->get('cg');
        $contratos->save();
        
        return redirect('/contratos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contrato= Contrato::find($id);
        return view('pig.contratos.edit')->with('contrato',$contrato);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contrato= Contrato::find($id);
        $contrato-> razon     = $request->get('razon');
        $contrato-> alias     = $request->get('alias');
        $contrato-> gp        = $request->get('gp');
        $contrato-> ncliente  = $request->get('ncliente');
        $contrato-> sr        = $request->get('sr');
        $contrato-> escliente = $request->get('escliente');
        $contrato-> mtc       = $request->get('mtc');
        $contrato-> ncon      = $request->get('ncon');
        $contrato-> ffc       = $request->get('ffc');
        $contrato-> fic       = $request->get('fic');
        $contrato-> tp        = $request->get('tp');
        $contrato-> mc        = $request->get('mc');
        $contrato-> sai       = $request->get('sai');
        $contrato-> ff        = $request->get('ff');
        $contrato-> pp        = $request->get('pp');
        $contrato-> linkc     = $request->get('linkc');
        $contrato-> linkca    = $request->get('linkca');
        $contrato-> ra        = $request->get('ra');
        $contrato-> cofe      = $request->get('cofe');
        $contrato-> ca        = $request->get('ca');
        $contrato-> prog      = $request->get('prog');
        $contrato-> antiso    = $request->get('antiso');
        $contrato-> codicon   = $request->get('codicon');
        $contrato-> otro      = $request->get('otro');
        $contrato-> duco      = $request->get('duco');
        $contrato-> feterco   = $request->get('feterco');
        $contrato-> ajprein   = $request->get('ajprein');
        $contrato-> feajuin   = $request->get('feajuin');
        $contrato-> perajin   = $request->get('perajin');
        $contrato-> ajpreprod = $request->get('ajpreprod');
        $contrato-> fepajprod = $request->get('fepajprod');
        $contrato-> peajprod  = $request->get('peajprod');
        $contrato-> ajpreco   = $request->get('ajpreco');
        $contrato-> fepajpre  = $request->get('fepajpre');
        $contrato-> perajpre  = $request->get('perajpre');
        $contrato-> kam       = $request->get('kam');
        $contrato-> kad       = $request->get('kad');
        $contrato-> cg        = $request->get('cg');
        $contrato->save();

        return redirect('/contractos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contrato = Contrato::find($id);
        $contrato->delete();
        return redirect('/contratos');
    }
}
