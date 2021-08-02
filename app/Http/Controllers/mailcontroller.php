<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificacionMallable;
use App\Models\Contrato;


class mailcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send()
    {
         $contratos= Contrato::all();
        // $contratos = new \stdClass();
        // $contratos = Contrato::all();
        // $contratos->demo_one = 'Demo One Value';
        // $contratos->demo_two = 'Demo Two Value';
        // $contratos->sender = 'SenderUserName';
        // $contratos->receiver = 'ReceiverUserName';
        // Mail::to('mauhedezpar@gmail.com')->send(new NotificacionMallable($contratos));
        // $details =
        // [
        //     'title' => 'el email de prueba ',
        //     'body' => 'el cuerpo es este ',
        // ];
        Mail::to('mauhedezpar@gmail.com')->send(new NotificacionMallable( $contratos));
        return ' email mensage enviado';
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
   
    }
}
