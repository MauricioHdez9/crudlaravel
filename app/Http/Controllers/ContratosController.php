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
        return view ('pig/contratos/indexc')->with('contratos',$contratos);
         
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
        $contratos ->razon     = request->get('razon');
        $contratos ->alias     = request->get('alias');
        $contratos ->gp        = request->get('gs');
        $contratos ->ncliente  = request->get('ncliente');
        $contratos ->escliente = request->get('escliente');
        $contratos ->mtc = request->get('mtc');
        $contratos ->ncon = request->get('ncon');
        $contratos ->ffc = request->get('ffc');
        $contratos ->fic = request->get('fic');
        $contratos ->tp = request->get('tp');
        $contratos ->sai = request->get('sai');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');
        $contratos ->sr = request->get('sr');



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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
